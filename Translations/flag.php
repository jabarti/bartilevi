<?php

/* * **************************************************
 * Project:     BartiLevi_WEB
 * Filename:    flag.php
 * Encoding:    UTF-8
 * Created:     2014-03-29
 *
 * Author       Bartosz M. Lewiński <jabarti@wp.pl>
 * ************************************************* */
//echo session_id(); 
if($chang == 1){
?>
    <div class=transbutton><button onclick="window.history.back()"><?php t("Powrót")?></button></div> 
<?php
$chang = 0;
}else{
?>
    <div class=transbutton><button onclick="location.href='translation_interface.php'"><?php t("Translacje")?></button></div> 
<?php
}
if(isset($_SESSION['lang'])){
    echo $_SESSION['lang'];
    switch ($_SESSION['lang']){
        case 'pl':
            
            ?>
            <div class="flag">
                <a title="language_en" href="index.php?lang=en"><img alt="Lang=EN" src="Translations/flags/flag_en_inactive.gif"></a>
                <a title="language_se" href="index.php?lang=se"><img alt="Lang=SE" src="Translations/flags/flag_se_inactive.gif"></a>
                <a title="language_pl" href="index.php?lang=pl"><img alt="Lang=PL" src="Translations/flags/flag_pl.jpg"></a>
            </div>
            <?php
            break;
        case 'se':
            ?>
            <div class="flag">
                <a title="language_en" href="index.php?lang=en"><img alt="Lang=EN" src="Translations/flags/flag_en_inactive.gif"></a>
                <a title="language_se" href="index.php?lang=se"><img alt="Lang=SE" src="Translations/flags/flag_se.gif"></a>
                <a title="language_pl" href="index.php?lang=pl"><img alt="Lang=PL" src="Translations/flags/flag_pl_inactive2.jpg"></a>
            </div>
            <?php
            break;
        case 'en':
            ?>
            <div class="flag">
                <a title="language_en" href="index.php?lang=en"><img alt="Lang=EN" src="Translations/flags/flag_en.gif"></a> 
                <a title="language_se" href="index.php?lang=se"><img alt="Lang=SE" src="Translations/flags/flag_se_inactive.gif"></a>
                <a title="language_pl" href="index.php?lang=pl"><img alt="Lang=PL" src="Translations/flags/flag_pl_inactive2.jpg"></a>
            </div>
            <?php
            break;
        default:
            ?>
            <div class="flag">
                <a title="language_en" href="index.php?lang=en"><img alt="Lang=EN" src="Translations/flags/flag_en.gif"></a>
                <a title="language_se" href="index.php?lang=se"><img alt="Lang=SE" src="Translations/flags/flag_se.gif"></a>
                <a title="language_pl" href="index.php?lang=pl"><img alt="Lang=PL" src="Translations/flags/flag_pl.jpg"></a>
            </div>
            <?php
            break;
    }
} else {
            ?>
            <div class="flag">
                <a title="language_en" href="index.php?lang=en"><img alt="Lang=EN" src="Translations/flags/flag_en.gif"></a>
                <a title="language_se" href="index.php?lang=se"><img alt="Lang=SE" src="Translations/flags/flag_se.gif"></a>
                <a title="language_pl" href="index.php?lang=pl"><img alt="Lang=PL" src="Translations/flags/flag_pl.jpg"></a>
            </div>
            <?php
}
