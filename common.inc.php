<?php
/**
 * common.inc.php
 *
 * Includes all necessary files for the project.
 *
 * @author Bartosz Lewiński <jabarti@wp.pl>
 *
 */
if(!isset($_SESSION)){
    ob_start();
    session_start();
//    var_dump($_SESSION);
}else{
//    var_dump($_SESSION);
}
if(!isset($ref)){
    $ref = $_SERVER['HTTP_REFERER'];
}

header('Content-Type: text/html; charset=utf-8'); 

// DEFINE DIRECTORIES
define('BASE_PATH', dirname(__FILE__));
define('ROOT', dirname(dirname(__FILE__))); 
define('UPRODUCE_UPLOAD_PATH', BASE_PATH . DIRECTORY_SEPARATOR . 'uProduceUploads');
define('INCLUDE_PATH', substr(BASE_PATH, 0, strrpos(BASE_PATH, DIRECTORY_SEPARATOR)) . DIRECTORY_SEPARATOR . 'Includes');
define('CLASSES_PATH', BASE_PATH . DIRECTORY_SEPARATOR . 'Classes');
define('TRANSLATION_PATH', BASE_PATH . DIRECTORY_SEPARATOR . 'Translations');
define('LOCALE_PATH', INCLUDE_PATH . DIRECTORY_SEPARATOR . 'locale');
define('FILES_PATH', substr(BASE_PATH, 0, strrpos(BASE_PATH, DIRECTORY_SEPARATOR)) . DIRECTORY_SEPARATOR . 'files');
define('PICTURES_PATH', FILES_PATH . DIRECTORY_SEPARATOR . 'pictures');
define('STYLES_PATH', BASE_PATH . DIRECTORY_SEPARATOR . 'Styles');
define('INFO_IMG_FILE_PATH', BASE_PATH . DIRECTORY_SEPARATOR . 'infoImages');
define('XML_RESOURCES_DIR', substr(BASE_PATH, 0, strrpos(BASE_PATH, DIRECTORY_SEPARATOR)) . DIRECTORY_SEPARATOR . 'xmlResources');
define('PAGE_THUMBS_PATH', FILES_PATH . DIRECTORY_SEPARATOR . 'page_thumbs');
/*
echo '<br><br>linia: '.__LINE__.' ROOT: '.ROOT.'<br>';
echo 'linia: '.__LINE__.' BASE_PATH: '.BASE_PATH.'<br>';
echo 'linia: '.__LINE__.' UPRODUCE_UPLOAD_PATH: '.UPRODUCE_UPLOAD_PATH.'<br>';
echo 'linia: '.__LINE__.' INCLUDE_PATH: '.INCLUDE_PATH.'<br>';
echo 'linia: '.__LINE__.' CLASSES_PATH: '.CLASSES_PATH.'<br>';
echo 'linia: '.__LINE__.' TRANSLATION_PATH: '.TRANSLATION_PATH.'<br>';
echo 'linia: '.__LINE__.' LOCALE_PATH: '.LOCALE_PATH.'<br>';
echo 'linia: '.__LINE__.' FILES_PATH: '.FILES_PATH.'<br>';
echo 'linia: '.__LINE__.' PICTURES_PATH: '.PICTURES_PATH.'<br>';
echo 'linia: '.__LINE__.' STYLES_PATH: '.STYLES_PATH.'<br>';
echo 'linia: '.__LINE__.' INFO_IMG_FILE_PATH: '.INFO_IMG_FILE_PATH.'<br>';
echo 'linia: '.__LINE__.' XML_RESOURCES_DIR: '.XML_RESOURCES_DIR.'<br>';
echo 'linia: '.__LINE__.' PAGE_THUMBS_PATH: '.PAGE_THUMBS_PATH.'<br>';
echo 'linia: '.__LINE__.' =============================================<br>';
/**/

mysql_query('SET NAMES utf8');

mb_internal_encoding('UTF-8');


//define('DATA_DIR', BASE_PATH);


//    include CLASSES_PATH.DIRECTORY_SEPARATOR.'osoba.class.php';
//    include CLASSES_PATH.DIRECTORY_SEPARATOR.'Person.class.php';
//    include 'Classes/translations.inc.php';


if (isset($_GET['lang'])||isset($_SESSION['lang'])){
    if(isset($_GET['lang']))
        $_SESSION['lang'] = $_GET['lang'];
} else {
    $_SESSION['lang'] = "pl";
}

    include 'Translations/translacjon.php';

//if (isset($_SESSION['user_mail']))
//    echo '<br>'.$_SESSION['user_mail'];
//else {
//    echo '<br>No $_SESSION["user_mail"]';
//}

//echo "<br>LANG = ".$_SESSION['lang'];
//echo "<br>MAIL = ".$_SESSION['user_mail'].'<br>';

//            echo $_SERVER['HTTP_USER_AGENT'];
            if (strpos($_SERVER['HTTP_USER_AGENT'],'iPad'))
//                    echo '<br>platform=iPad';
                    $_SESSION['platform'] = 'iPad';
            if (strpos($_SERVER['HTTP_USER_AGENT'],'Windows'))
//                    echo '<br>platform=Windows';
                    $_SESSION['platform'] = 'Windows';
            if (strpos($_SERVER['HTTP_USER_AGENT'],'Linux'))
//                    echo '<br>platform=Linux';
                    $_SESSION['platform'] = 'Linux';
            if (strpos($_SERVER['HTTP_USER_AGENT'],'Android'))
//                    echo '<br>platform=Android';
                    $_SESSION['platform'] = 'Android';
            
            if (strpos($_SERVER['HTTP_USER_AGENT'],'Firefox'))
//                    echo ', browser=Firefox';
                    $_SESSION['browser'] = 'Firefox';
            if (strpos($_SERVER['HTTP_USER_AGENT'],'Chrome'))
//                    echo ', browser=Chrome';
                $_SESSION['browser'] = 'Chrome';
            if (strpos($_SERVER['HTTP_USER_AGENT'],'Safari'))
//                    echo ', browser=Safari';
                $_SESSION['browser'] = 'Safari';
            if (strpos($_SERVER['HTTP_USER_AGENT'],'Mozilla'))
//                    echo ', browser=Mozilla';
                $_SESSION['browser'] = 'Mozilla';
?>
<script type="text/javascript" src="scripts/jQuery v1.8.3.js"></script>
<script language="JavaScript">
var screenWidth = window.screen.width;
var screenHeight = window.screen.height;

$.ajax ({
    'type': 'POST',  
            'url':  'common.inc.php',
            'data':{
                
                            'action':           'try',
                            'screenWidth':      screenWidth,
                            'screenHeight':     screenHeight
                },  
                success: function(data) {
                    if( data == '0' ){
                        alert ('ERROR');
                   }else{
//                        alert ("OK: "+screenWidth+" / "+screenWidth);
                        $('#brows').html('Ala ma kotka');
                   }
                   
                }  
});
</script>
<?php
if (isset($_POST['screenWidth']) && isset($_POST['screenHeight'])){
            $_SESSION['screenWidth'] = $_POST['screenWidth'];
            $_SESSION['screenHeight'] = $_POST['screenHeight'];
}

