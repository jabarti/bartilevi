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
define('BASE_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR); 
//define('INCLUDE_PATH', substr(BASE_PATH, 0, strrpos(BASE_PATH, DIRECTORY_SEPARATOR)) . DIRECTORY_SEPARATOR . 'Includes');
define('CLASSES_PATH', BASE_PATH .'Classes'.DIRECTORY_SEPARATOR);
define('TRANSLATION_PATH', BASE_PATH .'Translations'.DIRECTORY_SEPARATOR);
//define('LOCALE_PATH', INCLUDE_PATH . DIRECTORY_SEPARATOR . 'locale'.DIRECTORY_SEPARATOR);
//define('FILES_PATH', substr(BASE_PATH, 0, strrpos(BASE_PATH, DIRECTORY_SEPARATOR)) . DIRECTORY_SEPARATOR . 'files'.DIRECTORY_SEPARATOR);
define('IMG_PATH', BASE_PATH .'img'.DIRECTORY_SEPARATOR);
define('CSS_PATH', BASE_PATH .'css'.DIRECTORY_SEPARATOR);
define('DOC_PATH', BASE_PATH .'Documents'.DIRECTORY_SEPARATOR);
define('CV_PATH', DOC_PATH .'CV interactive'.DIRECTORY_SEPARATOR);
define('SCRIPT_PATH', BASE_PATH .'scripts'.DIRECTORY_SEPARATOR);

mysql_query('SET NAMES utf8');

mb_internal_encoding('UTF-8');

if (isset($_GET['lang'])||isset($_SESSION['lang'])){
    if(isset($_GET['lang']))
        $_SESSION['lang'] = $_GET['lang'];
} else {
    $_SESSION['lang'] = "pl";
}

    include TRANSLATION_PATH.'translacjon.php';

//            echo $_SERVER['HTTP_USER_AGENT'];
            if (strpos($_SERVER['HTTP_USER_AGENT'],'iPad'))
                    $_SESSION['platform'] = 'iPad';
            if (strpos($_SERVER['HTTP_USER_AGENT'],'Windows'))
                    $_SESSION['platform'] = 'Windows';
            if (strpos($_SERVER['HTTP_USER_AGENT'],'Linux'))
                    $_SESSION['platform'] = 'Linux';
            if (strpos($_SERVER['HTTP_USER_AGENT'],'Android'))
                    $_SESSION['platform'] = 'Android';
            
            if (strpos($_SERVER['HTTP_USER_AGENT'],'Firefox'))
                    $_SESSION['browser'] = 'Firefox';
            if (strpos($_SERVER['HTTP_USER_AGENT'],'Chrome'))
                    $_SESSION['browser'] = 'Chrome';
            if (strpos($_SERVER['HTTP_USER_AGENT'],'Safari'))
                    $_SESSION['browser'] = 'Safari';
            if (strpos($_SERVER['HTTP_USER_AGENT'],'Mozilla'))
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

include "login.php";

// TEST AREA!!!!
//echo "<div id=komunikatte>";
//
//if (isset($_SESSION['admin']) && $_SESSION['admin'] == 'OK'){
//    echo "SESS admin OK<br>";
//}else{
//    echo "SESS admin NO<br>";
//}
//
//
//foreach ($_SESSION as $k => $v){
//    echo "SESS[".$k."] => ".$v."<br>";
//}
//foreach ($_POST as $k => $v){
//    echo "POST[".$k."] => ".$v."<br>";
//}
//echo "</div>";
