<?php

/* * **************************************************
 * Project:     BartiLevi_WEB
 * Filename:    flag.php
 * Encoding:    UTF-8
 * Created:     2014-03-29
 *
 * Author       Bartosz M. Lewiński <jabarti@wp.pl>
 * ************************************************* */
?>
<div id=translacje>
    <?php
    if (isset($_SESSION['admin'])){
        
        ?><script>//alert("W isset Admin")</script><?php
        
        if($_SESSION['admin']== 'OK'){
            
           ?><script>//alert("Admin == 'OK'")</script><?php
            
           if($_SESSION['chang'] == 1){
               
                ?><script>//alert("chang == 1")</script><?php
                ?>
                <div class=logbutton>
                    <button onclick="window.history.back()"><?php echo t("Cofnij")?></button><br> 
                    <button onclick="window.location.href='index.php'"><?php echo t("Powrót do")?> index</button>
                </div> 
                <?php
                $_SESSION['chang'] = 0;
                
           } else {
               
                ?><script>//alert("chang != 1")</script><?php
                ?>
                <div class=transbutton>
                    <button onclick="location.href='translation_interface.php'"><?php echo t("Translacje")?></button>
                </div> 
                <div class="logbutton">
                    <form action="" method="post">
                        <input type="hidden" name="admin" value="logout"/><br>
                        <input type="submit" value="<?php echo t("Wyloguj");?>_01"/>
                    </form>    
                </div>
                <?php
           }
        } else {
            ?><script>//alert("Admin != 'OK'")</script><?php
            ?>
            <div class="cleaner"></div>
            <div class="logbutton2">
                <form action="index.php" method="post">
                    <input type="password" size=10 name="admin"/><br>
                    <input type="submit" value="<?php echo t("Zaloguj");?>_02"/>
                </form>    
            </div>
            <?php
        }
       if ($_SESSION['admin'] != 'logout'){
        ?>

<!--            <div class="logbutton">
                <form action="" method="post">
                    <input type="hidden" name="admin" value="logout"/><br>
                    <input type="submit" value="<?php echo t("Wyloguj");?>_01"/>
                </form>    
            </div>-->
            <?php

        }else{
//        echo "<br>".__LINE__;
        ?>
<!--            <div class="cleaner"></div>
        <div class="logbutton2">
            <form action="index.php" method="post">
                <input type="password" size=10 name="admin"/><br>
                <input type="submit" value="<?php echo t("Zaloguj");?>_02"/>
            </form>    
        </div>-->
    <?php
        }
    } else {
        ?>
        <div class="logbutton2">
            <form action="index.php" method="post">
                <input type="password" name="admin"/><br>
                <input type="submit" value="<?php echo t("Zaloguj");?>_03"/>
            </form>    
        </div>
    <?php
    }
    
// IF LENGUAGE !!!!!!   
if(isset($_SESSION['lang'])){
    switch ($_SESSION['lang']){
        case 'pl':
            
            ?>
            <div class="flag">
                <a title="language_en" href="?lang=en"><img alt="Lang=EN" src="Translations/flags/flag_en_inactive.gif"></a>
                <a title="language_se" href="?lang=se"><img alt="Lang=SE" src="Translations/flags/flag_se_inactive.gif"></a>
                <a title="language_pl" href="?lang=pl"><img alt="Lang=PL" src="Translations/flags/flag_pl.jpg"></a>
            </div>
            <?php
            break;
        case 'se':
            ?>
            <div class="flag">
                <a title="language_en" href="?lang=en"><img alt="Lang=EN" src="Translations/flags/flag_en_inactive.gif"></a>
                <a title="language_se" href="?lang=se"><img alt="Lang=SE" src="Translations/flags/flag_se.gif"></a>
                <a title="language_pl" href="?lang=pl"><img alt="Lang=PL" src="Translations/flags/flag_pl_inactive2.jpg"></a>
            </div>
            <?php
            break;
        case 'en':
            ?>
            <div class="flag">
                <a title="language_en" href="?lang=en"><img alt="Lang=EN" src="Translations/flags/flag_en.gif"></a> 
                <a title="language_se" href="?lang=se"><img alt="Lang=SE" src="Translations/flags/flag_se_inactive.gif"></a>
                <a title="language_pl" href="?lang=pl"><img alt="Lang=PL" src="Translations/flags/flag_pl_inactive2.jpg"></a>
            </div>
            <?php
            break;
        default:
            ?>
            <div class="flag">
                <a title="language_en" href="?lang=en"><img alt="Lang=EN" src="Translations/flags/flag_en.gif"></a>
                <a title="language_se" href="?lang=se"><img alt="Lang=SE" src="Translations/flags/flag_se.gif"></a>
                <a title="language_pl" href="?lang=pl"><img alt="Lang=PL" src="Translations/flags/flag_pl.jpg"></a>
            </div>
            <?php
            break;
    }
} else {
            ?>
            <div class="flag">
                <a title="language_en" href="?lang=en"><img alt="Lang=EN" src="Translations/flags/flag_en.gif"></a>
                <a title="language_se" href="?lang=se"><img alt="Lang=SE" src="Translations/flags/flag_se.gif"></a>
                <a title="language_pl" href="?lang=pl"><img alt="Lang=PL" src="Translations/flags/flag_pl.jpg"></a> 
            </div>
            <?php
}
?>
</div>
