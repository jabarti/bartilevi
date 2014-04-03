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
//    echo "SQL: ".$sql_sel;

    $temp = mysql_fetch_row(mysql_query($sql_sel));
//    echo "temp:".$temp;
    
    if (mysql_affected_rows()){             // if it's some result = 1, else 0;
//        echo "<br> tu 01a <br>";
        if ($temp[2] == ''){
//            echo "<br> tu 02a <br>";
            echo $text;
        }else{
//            echo "<br> tu 02b <br>";
            echo $temp[2];
        }
    } else {
//        echo "<br> tu 01b <br>";
        echo $text;
        $sql_ins = "INSERT INTO `localization`(`lang`, `key`) VALUES ('$lang','$text')";
//        echo "SQL: ".$sql_ins;
        
        if(!mysql_query($sql_ins)){
//            echo "<br> tu 03 <br>";
            echo "<br>ERROR in sql".__LINE__;
        }
    }
//    echo $temp_czy[0];
}

