<?php

/* * **************************************************
 * Project:     BartiLevi_WEB
 * Filename:    cleaner.php
 * Encoding:    UTF-8
 * Created:     2014-04-02
 *
 * Author       Bartosz M. Lewiński <jabarti@wp.pl>
 * ************************************************* */
//require_once "../common.inc.php";
include 'DB_Connection.php';
include 'common.inc.php';
$title = 'BartiLevi | Main Page';
include 'header.php';
include 'flag.php';
include 'buttons.php';

if ($_SERVER["REMOTE_ADDR"] == '85.202.150.195')
    $MyServ = "MyServer!";
else
    $MyServ = $_SERVER["REMOTE_ADDR"];

if (isset($_POST['mailform']) || isset($_GET['mailform'])){
    echo '<br>'.__LINE__.' '.$_POST['mailform'];
//if (isset($_POST['mailform'])){

        if(isset($_POST['mail'])){
//            $to = 'jabarti@wp.pl, ';        // note the comma
//            $to .= $_POST['mail'];          //'bartosz.lewinski@bartilevi.pl';$_POST['mail']
            $to = $_POST['mail'];          //'bartosz.lewinski@bartilevi.pl';$_POST['mail']
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
            echo '<br>$to: '.$to;
            echo '<br>$subject: '.$subject;
            echo '<br>$message: '.$message;
            echo '<br>$headers: '.$headers;
            if(($_POST['subject'])!='' || $_POST['message'] != ''){
                mail($to, $subject, $message, $headers) or die("<br>Nie wysłano maila");
                unset($_POST);
                unset($_GET);
                ?><script>
//                    $("#potw").hide();
                    alert("Wysłany mail");
                  </script><?php
                  
                header("Location: index.php?send=ok");
            } else {
                ?><script>
//                    $("#potw").hide();
//                    var temp = document.getElementById('potw');
//                    alert(temp);
                    
                    alert ("Nie wysłany meil1!")
                 </script>
                <?php
                  unset($_POST);
                  unset($_GET);
                  header("Location: index.php?send=no");
            }
            
        } catch (Exception $ex) {
            echo "ERROR: ".$ex;
        }
        
        try{
            echo "<br>Przed czyszczeniem: ".$_POST['subject'];
            unset($_POST);
            unset($_GET);

            echo "<br>Po czyszczeniu: ".$_POST['subject'];
            header("Location: index.php?send=ok");
//            echo '
//                <script type="text/javascript">
//                    location.reload(true);
//                </script>';

        } catch (Exception $ex) {
            echo "ERROR".$ex;
        }
        
        echo $_POST['mailform'];
} else {
    ?><script>
    $("#potw").show();
    alert ("Nie meil2!")
    </script><?php
}


//header("Location: index.php");

