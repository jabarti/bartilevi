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

echo '<br><br>linia: '.__LINE__.' ROOT: '.ROOT.'<br>';
echo 'linia: '.__LINE__.' BASE_PATH: '.BASE_PATH.'<br>';
//echo 'linia: '.__LINE__.' INCLUDE_PATH: '.INCLUDE_PATH.'<br>';
echo 'linia: '.__LINE__.' CLASSES_PATH: '.CLASSES_PATH.'<br>';
echo 'linia: '.__LINE__.' TRANSLATION_PATH: '.TRANSLATION_PATH.'<br>';
//echo 'linia: '.__LINE__.' LOCALE_PATH: '.LOCALE_PATH.'<br>';
//echo 'linia: '.__LINE__.' FILES_PATH: '.FILES_PATH.'<br>';
echo 'linia: '.__LINE__.' IMG_PATH: '.IMG_PATH.'<br>';
echo 'linia: '.__LINE__.' CSS_PATH: '.CSS_PATH.'<br>';
echo 'linia: '.__LINE__.' DOC_PATH: '.DOC_PATH.'<br>';
echo 'linia: '.__LINE__.' CV_PATH: '.CV_PATH.'<br>';
echo 'linia: '.__LINE__.' SCRIPT_PATH: '.SCRIPT_PATH.'<br>';
echo 'linia: '.__LINE__.' =============================================<br>';
echo 'linia: '.__LINE__.' $_SERVER[HTTP_REFERER]:'.$_SERVER['HTTP_REFERER'];

/**/
?>
