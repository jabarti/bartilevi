<?php

/* * **************************************************
 * Project:     BartiLevi_WEB
 * Filename:    tranlation_panel.php
 * Encoding:    UTF-8
 * Created:     2014-04-03
 *
 * Author       Bartosz M. Lewiński <jabarti@wp.pl>
 * ************************************************* */
//include 'translation.css';

//if (isset($_GET['jezyk'])) echo $_GET['jezyk'];

//var_dump($_SESSION);

$Temp_em = false;
if(isset($_GET['empty'])){
    if($_GET['val']=='puste'){
        $_SESSION['empty'] = "AND `translation` = ''";
        $Temp_em = true;
    }else{
        $_SESSION['empty'] = '';
        $Temp_em = false;
    }
} else {
    if(isset($_SESSION['empty']) && $_SESSION['empty'] != ''){
        $Temp_em = true;
    }
}
$empty = isset($_SESSION['empty']) ? $_SESSION['empty'] : '';

if(isset($_SESSION['fragm'])){
    $fragm = "AND `key` LIKE '%".$_SESSION['fragm']."%'";
}else{
    $fragm=''; 
}

if(isset($_SESSION['transl_plik'])){
    $plik = "AND `File` LIKE '%".$_SESSION['transl_plik']."%'";
}else{
    $plik=''; 
}

$curr_lang = isset($_GET['jezyk']) ? $_GET['jezyk'] : $_SESSION['lang']; 
//$sql = "SELECT * FROM `localization` WHERE `lang` = 'pl';";
$sql = "SELECT * FROM `bartilev_APIPO`.`localization` WHERE (`lang` = '".$curr_lang."' ".$empty." ".$fragm." ".$plik.") ORDER BY `localization`.`key` ASC;";
//echo '<br>SQL: '.$sql;
$res = mysql_query($sql);

?>
<div>
<form id="langchoser" action="" method="get">
    <select name=jezyk >
        <option value="pl"><?php echo t("Polski")?></option> 
        <option value="en"><?php echo t("Angielski")?></option>
        <option value="se"><?php echo t("Szwedzki")?></option>
        <!--<option value="sp"><?php echo t("Hiszpański")?></option>-->
    </select>
    <input type="submit" value="<?php t("Zmień język"); ?> =>">
</form>

    <form id="zawart" action="" method="get">
        <?php if($Temp_em == false){ ?>
                    <input type="hidden" name="val" value="puste">
                    <input type="submit" name="empty" value="<?php echo t("Wyświetl tylko puste"); ?>"/>
        <?php } else { ?>
                    <input type="hidden" name="val" value="pelne">
                    <input type="submit" name="empty" value="<?php echo t("Wyświetl wszystkie"); ?>"/>
        <?php }?>
                    
    </form>
    
<?php 
    // Tworzenie zawartości selecta z nazwami plików
    $SQL = "SELECT `File` as file FROM `localization` group by `File`";
    $arr = array();
    $mq = mysql_query($SQL);
    if(mysql_affected_rows()){
        while($row = mysql_fetch_assoc($mq)){
            // Tu tniemy str i wycinamy nazwę projektu lub pliku
            $str = $row['file'];
            $len = strlen($str);
            $p1 = strpos($str, "/")+1;
            if(strpos($str, "/", 5) == 0){
                $p3 = strpos($str, ".php");
                $p2 = $p3-strlen($str);
            }else{
                $p2 = strpos($str, "/", 5)-1;
            }
            $str2 = substr($str,$p1,$p2);
            if(!in_array($str2, $arr)){
                 array_push($arr, $str2);
            }
        }
    }
    
?>
    
    <form id="plik" action="Translations/translation_panel_mod.php" method="get">
        <select name="plik">
            <?php
            if(isset($_SESSION['transl_plik'])){
                echo "<option >".$_SESSION['transl_plik']."</option>";
            }
            
            foreach($arr as $k ){
                echo "<option value='".$k."'>$k</option>";
            }
            ?>
            
        </select>
        <input type="submit" value="<?php echo t("Jaki plik")."?"; ?>">               
    </form>

    <form id="szukacz" action="Translations/translation_panel_mod.php" method="get">
         <input type="text" name="fragm" >
         <input type="submit" value="<?php echo t("Znajdź"); ?>"/>          
    </form>
</div>

<table>
    <tr>
        <th class="th1"><?php echo t("język_tr_pan"); ?></th>
        <th></th>
        <th><?php echo t("tekst klucz"); ?></th>
        <th></th>
        <th><?php echo t("tłumaczenie"); ?></th>
        <th><?php echo t("plik"); ?></th>
        <!--<th><?php echo t("długość"); ?></th>-->
        <th><?php echo t("czas"); ?></th>
    </tr>
    <?php 
    $licz=1;
    while($row = mysql_fetch_array($res)){ 
        
        /* Tu wyliczenie ile dni upłynęło od daty wprowadzenia (update bądź instera) danego słowa!*/
        $baseTime =  strtotime($row[5]);  
        $temp = date_create(date('Y-m-d', $baseTime));
        $curr_tim = date_create(date('Y-m-d', time()));
        $interval = date_diff($temp, $curr_tim);     
//        $temp = $interval->format('%R%a');
        $temp = $interval->d;
        
        $days = 3;
        
        if($temp < $days){
            $temp = "";
        }
        ?>
    <tr>
    <form id='<?php echo "form_".$licz; ?>'action="Translations/translation_panel_mod.php" method="get">
            <td><input type="text" size="3" name="lang" value="<?php echo $row[0]; ?>" readonly="readonly"></td>
            <?php if( $row[2] == '') { ?>           <!-- Jeśli dłuższy text to textarea!-->
                <td><input type="hidden" name="LongText" value="<?php echo $row[2]; ?>" readonly="readonly"></td>
                <td><input id='<?php echo "input_".$licz; ?>'type="text" size=45% name="key" value="<?php echo $row[1]; ?>" readonly="readonly"></td>
                <td><button size=1 class='butt_trans' type=button id='<?php echo "butto_".$licz; ?>'>=></button></td>
                <td><input id='<?php echo "trans_".$licz; ?>'type="text" size=45% name="translation" value="<?php echo $row[3]; ?>" ></td>
                <td><input type="text" size=17 name="file" value="<?php echo $row[4]; ?>" readonly="readonly"></td>
                <!--<td><input  size=5 type="text" value="<?php echo strlen($row[1]).'/'.strlen($row[3]); ?>"></td>--> 
                <td><input  size=1 type="text" value="<?php echo $temp; ?>" readonly="readonly"></td> 
            <?php }else{ ?>
                <td><input type="hidden" name="key" value="<?php echo $row[1]; ?>" readonly="readonly"></td>
                <td><textarea rows="4" cols="33"  name="LongText" readonly="readonly"><?php echo $row[2]; ?></textarea></td>
                <td><button size=1 class='butt_trans' type=button id='<?php echo "butto_".$licz; ?>'>=></button></td>
                <td><textarea rows="4" cols="33"  name="translation" ><?php echo $row[3]; ?></textarea></td>
                <td><input type="text" size=17 name="file" value="<?php echo $row[4]; ?>" readonly="readonly"></td>
                <!--<td><input  size=5 type="text" value="<?php echo strlen($row[2]).'/'.strlen($row[3]); ?>"></td>--> 
                <td><input  size=1 type="text" value="<?php echo $temp; ?>" readonly="readonly"></td>
                
             <?php } ?>
            <td><input name=tlum type="submit" value="<?php echo t("Zapisz"); ?>"></td>       
            <td><input name=del type="submit" value="<?php echo t("Usuń"); ?>"></td>       
  
        </form>
    </tr>
    <?php 
    $licz++;
    } ?>
</table>

<?php
if(isset($_GET['tlum'])){
    echo '<br>$_GET[lang]:'.$_GET['lang'];
    echo '<br>$_GET[key]:'.$_GET['key'];
    echo '<br>$_GET[translation]:'.$_GET['translation'];
}


