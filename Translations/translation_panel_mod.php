<?php
/* * **************************************************
 * Project:     BartiLevi_WEB
 * Filename:    translation_panel_mod.php
 * Encoding:    UTF-8
 * Created:     2014-04-03
 *
 * Author       Bartosz M. Lewiński <jabarti@wp.pl>
 * ************************************************* */
require_once "../common.inc.php";
include '../DB_Connection.php';
$title = 'BartiLevi | translation_panel_mod';

if(isset($_GET['tlum'])){
    echo '<br>$_GET[lang]:'.$_GET['lang'];
    echo '<br>$_GET[key]:'.$_GET['key'];
    echo '<br>$_GET[translation]:'.$_GET['translation'];
    
//    if($_GET['translation'] == ''){
//        header("Location: ../translation_panel.php");
//    }else{
        $sql = "UPDATE `bartilev_APIPO`.`localization` SET `translation`='".addslashes($_GET['translation'])."'"
              ."WHERE `key`='".addslashes($_GET['key'])."' AND `lang`='".$_GET['lang']."';";
        echo "<br>SQL = ".$sql;
        
        if(mysql_query($sql)){
            header("Location: ../translation_interface.php");
        }else{
            echo "<br>ERROR in sql:".strlen($sql);
        }
//    }
}

if(isset($_GET['del'])){
        
//    if($_GET['translation'] == ''){
//        header("Location: ../translation_panel.php");
//    }else{
        $sql = "DELETE FROM `bartilev_APIPO`.`localization`"
              ."WHERE `key`='".addslashes($_GET['key'])."' AND `lang`='".$_GET['lang']."';";
//        $sql = "DELETE FROM `localization`WHERE `key`='Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor\n incididunt ut labore et dolore magna aliqua.' AND `lang`='en';";
//        $sql = "DELETE FROM `localization`WHERE                                                                 `key` = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor\\n incididunt ut labore et dolore magna aliqua.' AND `lang`='en';";
//        $sql = "DELETE FROM `bartilev_APIPO`.`localization` WHERE `localization`.`lang` = 'en' AND `localization`.`key` = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor\n incididunt ut labore et dolore magna aliqua.'"; 
        echo "<br>SQL = ".$sql;
        
        if(mysql_query($sql)){
            echo '<br>HEADR';
            header("Location: ../translation_interface.php");
        }else{
            echo "<br>ERROR in sql:".strlen($sql).$sql;
        }
//    }
}

if (isset($_GET['plik'])){
//    switch($_GET['plik']){
//        case 'Svenska':
//            $_SESSION['transl_plik'] = $_GET['plik'];
//            break;
//        default:
//            unset($_SESSION['transl_plik']);
//            break;
//    }
    if($_GET['plik'] != ''){
        $_SESSION['transl_plik'] = $_GET['plik'];
    }else{
        unset($_SESSION['transl_plik']);
    }
        header("Location: ../translation_interface.php");
}

if(isset($_GET['fragm'])){
    echo "<br>".__LINE__." / isset get(fragm) i nie jest pusty: ".$_GET['fragm'];
    $_SESSION['fragm'] = $_GET['fragm'];

    if($_GET['fragm']=='')
        unset($_SESSION['fragm']);
}
header("Location: ../translation_interface.php");
