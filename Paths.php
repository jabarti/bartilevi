<?php

/* * **************************************************
 * Project:     BartiLevi
 * Filename:    Paths.php
 * Encoding:    UTF-8
 * Created:     2014-04-16
 *
 * Author       Bartosz M. Lewiński <jabarti@wp.pl>
 * ************************************************* */

define('DIR_SEP', '/');

$arr1 = explode(DIRECTORY_SEPARATOR, (dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR));
$arr2 = explode(DIR_SEP, $_SERVER['PHP_SELF']);
$arr3 = explode(DIR_SEP, $_SERVER['PHP_SELF']);

//var_dump($arr1);echo "<br>";
//var_dump($arr2);

//echo '<br>'.$arr1[1];

        // DEFINE HDD DIRECTORIES
if (!defined('BASE_PATH'))              define('BASE_PATH',         dirname(__FILE__).DIRECTORY_SEPARATOR);
if (!defined('ROOT'))                   define('ROOT',              dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR); 
if (!defined('CLASSES_PATH'))           define('CLASSES_PATH',      BASE_PATH .'Classes'.DIRECTORY_SEPARATOR);
if (!defined('EXT_SOUR_PATH'))          define('EXT_SOUR_PATH',     BASE_PATH .'ExternSources'.DIRECTORY_SEPARATOR);
if (!defined('TRANSLATION_PATH'))       define('TRANSLATION_PATH',  BASE_PATH .'Translations'.DIRECTORY_SEPARATOR);
if (!defined('IMG_PATH'))               define('IMG_PATH',          BASE_PATH .'img'.DIRECTORY_SEPARATOR);
if (!defined('CSS_PATH'))               define('CSS_PATH',          BASE_PATH .'css'.DIRECTORY_SEPARATOR);
if (!defined('DOC_PATH'))               define('DOC_PATH',          BASE_PATH .'Documents'.DIRECTORY_SEPARATOR);
if (!defined('CV_PATH'))                define('CV_PATH',           DOC_PATH .'CV interactive'.DIRECTORY_SEPARATOR);
if (!defined('SCRIPT_PATH'))            define('SCRIPT_PATH',       BASE_PATH .'scripts'.DIRECTORY_SEPARATOR);
        
        // DEFINE HTTP DIRECTORIES
//if (!defined('HTTP_ROOT'))              define('HTTP_ROOT',                 $_SERVER['HTTP_HOST'].DIR_SEP);  
//if (!defined('HTTP_PRO_NAME'))          define('HTTP_PRO_NAME',             $arr2[1]);
//if (!defined('HTTP_BASE_PATH'))         define('HTTP_BASE_PATH',            HTTP_ROOT.HTTP_PRO_NAME.DIR_SEP);
////if (!defined('HTTP_HTDOCS'))        define('HTTP_HTDOCS',               DIR_SEP.HTTP_PRO_NAME.DIR_SEP.$arr3[2].DIR_SEP);
//        
//if (!defined('HTTP_CLASSES_PATH'))      define('HTTP_CLASSES_PATH',         HTTP_BASE_PATH.'Classes'.DIR_SEP);
//if (!defined('HTTP_TRANSLATION_PATH'))  define('HTTP_TRANSLATION_PATH',     HTTP_BASE_PATH .'Translations'.DIR_SEP);
//if (!defined('HTTP_IMG_PATH'))          define('HTTP_IMG_PATH',             HTTP_BASE_PATH .'img'.DIR_SEP);
//if (!defined('HTTP_CSS_PATH'))          define('HTTP_CSS_PATH',             HTTP_BASE_PATH .'css'.DIR_SEP);
//if (!defined('HTTP_DOC_PATH'))          define('HTTP_DOC_PATH',             HTTP_BASE_PATH .'Documents'.DIR_SEP);
//if (!defined('HTTP_CV_PATH'))           define('HTTP_CV_PATH',              HTTP_DOC_PATH  .'CV interactive'.DIR_SEP);
//if (!defined('HTTP_SCRIPT_PATH'))       define('HTTP_SCRIPT_PATH',          HTTP_BASE_PATH .'scripts'.DIR_SEP);
//        
