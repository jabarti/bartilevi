<?php

/* * **************************************************
 * Project:     BartiLevi
 * Filename:    next2.php
 * Encoding:    UTF-8
 * Created:     2014-04-15
 *
 * Author       Bartosz M. Lewiński <jabarti@wp.pl>
 * ************************************************* */
require_once "common.inc.php";
include 'DB_Connection.php';
$title = 'BartiLevi | '.t('next2');
include 'header.php';
//include 'Menu.php';
//include 'Log_panel.php';
include 'buttons.php';

echo '<br>SERVER PHP SELF: '.$_SERVER['PHP_SELF'].'<br>';
echo '<br>SERVER HTTP_HOST: '.$_SERVER['HTTP_HOST'].'<br>';
echo '<br>SERVER HTTP_USER_AGENT: '.$_SERVER['HTTP_USER_AGENT'].'<br>';
echo '<br>SERVER REMOTE_ADDR: '.$_SERVER['REMOTE_ADDR'].'<br>';
echo '<br>SERVER SCRIPT_FILENAME: '.$_SERVER['SCRIPT_FILENAME'].'<br>';
echo '<br>SERVER SCRIPT_NAME: '.$_SERVER['SCRIPT_NAME'].'<br>';

echo 'linia: '.__LINE__.' ================ HDD DIR  =============================<br>';
echo '<br><br>linia: '.__LINE__.' ROOT: '.          ROOT.'<br>';
echo 'linia: '.__LINE__.' BASE_PATH: '.             BASE_PATH.'<br>';
echo 'linia: '.__LINE__.' CLASSES_PATH: '.          CLASSES_PATH.'<br>';
echo 'linia: '.__LINE__.' TRANSLATION_PATH: '.      TRANSLATION_PATH.'<br>';
echo 'linia: '.__LINE__.' IMG_PATH: '.              IMG_PATH.'<br>';
echo 'linia: '.__LINE__.' CSS_PATH: '.              CSS_PATH.'<br>';
echo 'linia: '.__LINE__.' DOC_PATH: '.              DOC_PATH.'<br>';
echo 'linia: '.__LINE__.' CV_PATH: '.               CV_PATH.'<br>';
echo 'linia: '.__LINE__.' SCRIPT_PATH: '.           SCRIPT_PATH.'<br>';
echo 'linia: '.__LINE__.' ================ HTTP DIR  =============================<br>';
//echo 'linia: '.__LINE__.' HTTP_BASE_PATH: '.        HTTP_BASE_PATH.'<br>';
//echo 'linia: '.__LINE__.' HTTP_ROOT: '.             HTTP_ROOT.'<br>';
//echo 'linia: '.__LINE__.' HTTP_PRO_NAME: '.         HTTP_PRO_NAME.'<br>';
////echo 'linia: '.__LINE__.' HTTP_HTDOCS: '.           HTTP_HTDOCS.'<br>';
//echo 'linia: '.__LINE__.' HTTP_CLASSES_PATH: '.     HTTP_CLASSES_PATH.'<br>';
//echo 'linia: '.__LINE__.' HTTP_TRANSLATION_PATH: '. HTTP_TRANSLATION_PATH.'<br>';
//echo 'linia: '.__LINE__.' HTTP_IMG_PATH: '.         HTTP_IMG_PATH.'<br>';
//echo 'linia: '.__LINE__.' HTTP_CSS_PATH: '.         HTTP_CSS_PATH.'<br>';
//echo 'linia: '.__LINE__.' HTTP_DOC_PATH: '.         HTTP_DOC_PATH.'<br>';
//echo 'linia: '.__LINE__.' HTTP_CV_PATH: '.          HTTP_CV_PATH.'<br>';
//echo 'linia: '.__LINE__.' HTTP_SCRIPT_PATH: '.      HTTP_SCRIPT_PATH.'<br>';
echo 'linia: '.__LINE__.' =============================================<br>';
echo 'linia: '.__LINE__.' $_SERVER[HTTP_REFERER]:'. $_SERVER['HTTP_REFERER'].'<br>';
echo 'linia: '.__LINE__.' $_SERVER[PHP_SELF]:'.     $_SERVER['PHP_SELF'].'<br>';
echo 'linia: '.__LINE__.' <br>=============================================<br>';

echo '<br><br>DIRECTORY_SEPARATOR: '.DIR_SEP."<br>";

$arr = explode(DIR_SEP, $_SERVER['PHP_SELF']);

var_dump($arr);

/**/
?>
