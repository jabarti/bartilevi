<?php

/* * **************************************************
 * Project:     BartiLevi_WEB
 * Filename:    translacjon.php
 * Encoding:    UTF-8
 * Created:     2014-04-03
 *
 * Author       Bartosz M. Lewiński <jabarti@wp.pl>
 * ************************************************* */
/* this funktion gets translation from table "localization" */
function t($text){
    $lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'pl';
    $sql_sel = "SELECT * FROM `localization` WHERE `lang` ='".$lang."' AND `key` = '".$text."';";

    $temp = mysql_fetch_row(mysql_query($sql_sel));
    
    if (mysql_affected_rows()){             // if it's some result = 1, else 0;
        if ($temp[2] == ''){
            echo $text;
        }else{
            echo $temp[2];
        }
    } else {
        echo $text;
        $sql_ins = "INSERT INTO `localization`(`lang`, `key`) VALUES ('$lang','$text')";
        
        if(!mysql_query($sql_ins)){
            echo "<br>ERROR in sql".__LINE__;
        }
    }
}

