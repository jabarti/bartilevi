<?php

/* * **************************************************
 * Project:     BartiLevi_WEB
 * Filename:    flag.php
 * Encoding:    UTF-8
 * Created:     2014-03-29
 *
 * Author       Bartosz M. Lewiński <jabarti@wp.pl>
 * ************************************************* */

if(isset($_SESSION['chang']) && $_SESSION['chang'] == 1){
?><script>//alert("chang == 1")</script><?php
?>
    <div id="LogPanel">
        <button onclick="window.history.back()"><?php echo t("Cofnij")?></button><br> 
        <button onclick="window.location.href='index.php'"><?php echo t("Powrót do")?> index</button>
    </div> 
<?php
    $_SESSION['chang'] = 0;
}

// IF LENGUAGE !!!!!!   
?>
</div>
<div id=translacje>
<?php
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
