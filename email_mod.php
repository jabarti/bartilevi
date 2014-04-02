<?php
/* * **************************************************
 * Project:     BartiLevi_WEB
 * Filename:    cleaner.php
 * Encoding:    UTF-8
 * Created:     2014-04-02
 *
 * Author       Bartosz M. Lewiński <jabarti@wp.pl>
 * ************************************************* */
require_once "common.inc.php";

//include 'buttons.php';
//echo session_id();
//echo "<br>LANG = ".$_SESSION['lang'];
//echo "<br>MAIL = ".$_SESSION['user_mail'].'<br>';
//var_dump($_POST);

/* It's my (czest) IP */ 
if ($_SERVER["REMOTE_ADDR"] == '85.202.150.195')
    $MyServ = "MyServer!";
else
    $MyServ = $_SERVER["REMOTE_ADDR"];

if (isset($_POST['mailform'])){
        if(isset($_POST['mail'])){
            echo "<br> POST[mail]=".$_POST['mail']."<br>";
//            $to = 'jabarti@wp.pl, ';        // note the comma
            $to = $_POST['mail'];           //'bartosz.lewinski@bartilevi.pl';$_POST['mail']
            $_SESSION['user_mail'] = $_POST['mail'];          //'bartosz.lewinski@bartilevi.pl';$_POST['mail']
//            echo "<br>MAIL = ".$_SESSION['user_mail'].'<br>';
        } else {
            $to = '';//jabarti@wp.pl';          //'bartosz.lewinski@bartilevi.pl';
        }

        $subject = isset($_POST['subject']) ? $_POST['subject'] : 'Empty';
        
        $message = isset($_POST['message']) 
                ? "Your message:"."\r\n".$_POST['message']."\r\n"."================".
                    "\r\n".'Hello from '.$_SERVER["HTTP_HOST"]."\r\n".'Your IP: '.$MyServ
                : 'Hello from '.$_SERVER["HTTP_HOST"]."\r\n"."Your IP: ".$MyServ;

//        $headers .= 'To: ' . "\r\n";
        $headers = 'From: bartosz.lewinski@bartilevi.pl' . "\r\n";
//        $headers = 'Cc: bartus.lewinski@gmail.com' . "\r\n";
        $headers .= 'Bcc: jabarti@wp.pl' . "\r\n";    //'bartosz.lewinski@bartilevi.pl';
        $headers .= 'Reply-To: bartosz.lewinski@bartilevi.pl' . "\r\n";
        $headers .= 'X-Mailer: PHP/' . phpversion();

        try{
//            echo '<br>$to: '.$to;
//            echo '<br>$subject: '.$subject;
//            echo '<br>$message: '.$message;
//            echo '<br>$headers: '.$headers;
            
            if(($_POST['subject'])!='' || $_POST['message'] != ''){
//                echo "<br>WYSYŁANY MAIL!!!";
                mail($to, $subject, $message, $headers) or die("<br>Nie wysłano maila");
                
                unset($_POST);
                unset($_GET);
                  
                header("Location: index.php?send=ok");
//                echo '<br>'.__line__.' | No.01 header("Location: index.php?send=ok")';
            } else {
                  unset($_POST);
                  unset($_GET);
                  header("Location: index.php?send=no");
//                  echo '<br>'.__line__.' | No.02 header("Location: index.php?send=no")';
            }   
        } catch (Exception $ex) { 
            echo "ERROR: ".$ex;
        }
} else {
    ?><script>
    alert ("Nie weszło!")
    </script><?php
}
