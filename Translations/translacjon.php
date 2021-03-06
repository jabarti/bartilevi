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
//    if(isset($_SESSION['lang'])){
//        $lang = $lang ? $lang : $_SESSION['lang'] ;
//    }else{
//        $lang = $lang ? $lang : 'pl';
//    }
//    $lang = $lang ? $lang : $_SESSION['lang'] ;//? $_SESSION['lang'] : 'pl';        // language
    
    $text = addslashes($text);
    
    if (isset($_SESSION['lang'])){
        $lang = $_SESSION['lang'];
    } else {
        $lang = 'pl';
    }
    
    
    $text_long='';                                  // Container for source text
    $text_length = 100;                             // max length of text accepted as key

    if(strlen($text)>=$text_length){
//        echo "<BR>Dł tekstu1: ". strlen($text);
        $text_long = $text;                         // Container fill
        $text = substr($text, 0, $text_length);     // cut string
//        echo "<BR>Dł tekstu2: ". strlen($text);
//        echo'<br>';
    }
    

    $sql_sel = "SELECT * FROM `bartilev_APIPO`.`localization` WHERE `lang` ='".$lang."' AND `key` = '".$text."';";
    $mq=mysql_query($sql_sel);
    
    if (mysql_affected_rows()){             // if it's some result = 1, else 0;
        
        $date = date('Y-m-d H:i:s',time());
//        $date = "KROWA";
        
        $SQL_timestamp = "UPDATE `bartilev_APIPO`.`localization` SET `timestamp`='".$date."' WHERE `lang` ='".$lang."' AND `key` = '".$text."';";
        mysql_query($SQL_timestamp);        // Admin Case: to find out the empty or OLD words!!!!
        if (mysql_affected_rows()){
//            echo "OK: ".$SQL_timestamp;
        }else{
//            echo "err";
        }
        $temp = mysql_fetch_row($mq);
        if ($temp[3] == ''){                // `localization` - attribute 'translation'
//            echo $text;
            if(strlen($text_long) >= $text_length){
                return $text_long;
            }else{
                return $text;
            }
        }else{
//            echo $temp[2];
//            return $temp[3].$language;
            return $temp[3];
        }        
    } else {

//        $file = preg_replace('/\.php$/', '', __FILE__);
        $file = $_SERVER['PHP_SELF'];
//        $file .= __LINE__;        // always 60 ;)
//        echo $file;
//        echo $text; 
//        return $text;
//        $text .= __FILE__;
        if(strlen($text_long)<=$text_length){
            $sql_ins = "INSERT INTO `bartilev_APIPO`.`localization` (`lang`, `key`, `file`) VALUES ('$lang','$text','$file');";
        } else {
            $sql_ins = "INSERT INTO `bartilev_APIPO`.`localization` (`lang`, `key`, `LongText`, `file`) VALUES ('$lang','$text','$text_long','$file');";
        }
        
        
        if(!mysql_query($sql_ins)){
            return "<br>ERROR in sql: ".strlen($sql_ins)." SQL:".$sql_ins;
        }else{
            return $text;
        }
    }
}

function tl($text, $language){
//    if(isset($_SESSION['lang'])){
//        $lang = $lang ? $lang : $_SESSION['lang'] ;
//    }else{
//        $lang = $lang ? $lang : 'pl';
//    }
//    $lang = $lang ? $lang : $_SESSION['lang'] ;//? $_SESSION['lang'] : 'pl';        // language
    
    if(isset($language) && $language != false){
        $lang = $language;
    } elseif (isset($_SESSION['lang'])){
        $lang = $_SESSION['lang'];
    } else {
        $lang = 'pl';
    }
    
    
    $text_long='';                                  // Container for source text
    $text_length = 100;                             // max length of text accepted as key

    if(strlen($text)>=$text_length){
//        echo "<BR>Dł tekstu1: ". strlen($text);
        $text_long = $text;                         // Container fill
        $text = substr($text, 0, $text_length);     // cut string
//        echo "<BR>Dł tekstu2: ". strlen($text);
//        echo'<br>';
    }
    

    $sql_sel = "SELECT * FROM `bartilev_APIPO`.`localization` WHERE `lang` ='".$lang."' AND `key` = '".$text."';";
    $mq = mysql_query($sql_sel);
        
    if (mysql_affected_rows()){             // if it's some result = 1, else 0;
        $temp = mysql_fetch_row($mq);
        if ($temp[3] == ''){                // `localization` - attribute 'translation'
//            echo $text;
            if(strlen($text_long) >= $text_length){
                return $text_long;
            }else{
                return $text;
            }
        }else{
//            echo $temp[2];
//            return $temp[3].$language;
            return $temp[3];
        }
    } else {

//        $file = preg_replace('/\.php$/', '', __FILE__);
        $file = $_SERVER['PHP_SELF'];
//        echo $file;
//        echo $text; 
//        return $text;
//        $text .= __FILE__;
        if(strlen($text_long)<=$text_length){
            $sql_ins = "INSERT INTO `bartilev_APIPO`.`localization` (`lang`, `key`, `file`) VALUES ('$lang','$text','$file');";
        } else {
            $sql_ins = "INSERT INTO `bartilev_APIPO`.`localization` (`lang`, `key`, `LongText`, `file`) VALUES ('$lang','$text','$text_long','$file');";
        }
        
        
        if(!mysql_query($sql_ins)){
            return "<br>ERROR in sql: ".strlen($sql_ins)." SQL:".$sql_ins;
        }else{
            return $text;
        }
    }
}

function g($text){
    return '<span class="green">'.$text.'</span>';
}

