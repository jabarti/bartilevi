<?php

/* * **************************************************
 * Project:     BartiLevi_WEB
 * Filename:    tranlation_panel.php
 * Encoding:    UTF-8
 * Created:     2014-04-03
 *
 * Author       Bartosz M. Lewiński <jabarti@wp.pl>
 * ************************************************* */
//if (isset($_GET['jezyk'])) echo $_GET['jezyk'];

$curr_lang = isset($_GET['jezyk']) ? $_GET['jezyk'] : $_SESSION['lang'];
//$sql = "SELECT * FROM `localization` WHERE `lang` = 'pl';";
$sql = "SELECT * FROM `localization` WHERE `lang` = '".$curr_lang."' ORDER BY `localization`.`key` ASC;";
echo $sql;
$res = mysql_query($sql);
//$row = mysql_fetch_row($res);

//var_dump($res);
//var_dump($row);

//while($row = mysql_fetch_array($res)){
//    echo '<br>'.$row[0]." / ".$row[1]." / ".$row[3];
//}
//foreach ($row as $k => )
?>
<form action="" method="get">
    <select name=jezyk id="langchoser">
        <option value="pl"><?php t("Polski")?></option>
        <option value="en"><?php t("Angielski")?></option>
        <option value="se"><?php t("Szwedzki")?></option>
    </select>
    <input type="submit" value="<?php t("Zmień język"); ?> =>">
</form>

<table>
    <?php while($row = mysql_fetch_array($res)){ ?>
    <tr>
    <form name=pupa action="Translations/translation_panel_mod.php" method="get">
            <td><input type="text" size=1 name="lang" value="<?php echo $row[0]; ?>" readonly="readonly"></td>
            <td><input type="text" size=50% name="key" value="<?php echo $row[1]; ?>" readonly="readonly"></td>
            <td><input type="text" size=50% name="translation" value="<?php echo $row[2]; ?>" ></td>
            <td><input name=tlum type="submit" value="<?php t("Zapisz"); ?> =>"></td>       
        </form>
    </tr>
    <?php } ?>
</table>

<script>
//alert($( "#langchoser" ).val());
</script>

<?php
if(isset($_GET['tlum'])){
    echo '<br>$_GET[lang]:'.$_GET['lang'];
    echo '<br>$_GET[key]:'.$_GET['key'];
    echo '<br>$_GET[translation]:'.$_GET['translation'];
}


