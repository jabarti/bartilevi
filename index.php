<?php
/* * **************************************************
 * Project:     BartiLevi_WEB
 * Filename:    index.php
 * Encoding:    UTF-8
 * Created:     
 *
 * Author       Bartosz M. Lewiński <jabarti@wp.pl>
 * ************************************************* */
require_once "common.inc.php";
include 'DB_Connection.php';
$title = 'BartiLevi | '.t('Strona Główna');
include 'header.php';
include 'Menu/Menu.php';
include 'Log_panel.php';
include 'buttons.php';
include TRANSLATION_PATH.'flag.php';
include EXT_SOUR_PATH.'GeoVisitors.php'
?>
<body>
    <div id="glowny_index" >
         <!--<h4 STYLE="margin-left: auto; margin-right: auto; text-align: center;"><?php echo t("STRONA W BUDOWIE")?> v (<?php echo t("NA BUDOWIE")?>??? :)</h4>-->
        <!--<div id="glowny_wew" style="column-count: 2; -moz-column-count: 2; -webkit-column-count: 2">-->
        <div id="glowny_wew" style="">
            <!--<div><table style="background-image:url('img/Barti_dyplomII.JPG');width: 265px; height:350px"><tr><td></td></tr></table></div>-->
            <!--<img src="img/Barti_dyplomII.JPG" alt="No Picture available" style="position: relative; height: 200px;"/>-->
            <div id="imgContener" onmouseover="onHover('img/Barti_dyplomII.jpg')" onmouseout="outHover()" style="width:auto; height: auto;"><img id="imgResized" src="img/Barti_dyplomII thumb.jpg" alt="No Picture available" style="float:left; margin:6px"/></div>
            <div>
                <p><?php echo t("Ego sum"); ?> :)</p>
                <p><?php include 'Texts/Prezentacja.php'; ?></p>
                <!--<p><?php include 'Texts/Lorem ipsum.php'; ?> :)</p>-->
            </div>
        </div>
<!--        <div id="glowny_wew">
                <p><?php //echo t("Cogito ergo sum");?></p>
        </div>-->
        <div id="glowny_wew">
            <?php include 'email/mail.php'; ?>
        </div>
<!--        <div id="glowny_wew">
            <img src="img/no_euro.png" alt="No Picture available" style="height: 200px;"/>
            <div id="imgContener" onmouseover="onHover('img/no_euro.png')" onmouseout="outHover()" style="width:auto; height: auto;"><img id="imgResized" src="img/Barti_dyplomII thumb.jpg" alt="No Picture available" style="float:left; margin:6px"/></div>
            <p id="brows"></p>
            <p><?php 
                echo 'PLATFORM: '.$_SESSION['platform'].", BROWSER: ".$_SESSION['browser'];        
                echo '<br>SCREEN: '.$_SESSION['screenWidth']." / ".$_SESSION['screenHeight'];
               ?></p>
       </div>-->
<?php if (isset($_SESSION['admin']) && $_SESSION['admin'] != 'OK') {?>
        <div id="glowny_wew">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d20165.047067669795!2d19.11268153587792!3d50.81947722574718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spl!2spl!4v1397826572017" width=96% height=95%  frameborder="1" style="border:1; padding: 8px;"></iframe>
        </div>
<?php } else { ?>
        <div id="glowny_wew">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20162.412840894533!2d19.113196520008785!3d50.82557712812036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTDCsDQ5JzU4LjYiTiAxOcKwMDYnNDkuMSJF!5e0!3m2!1spl!2spl!4v1397826223886" width=96% height=95%  frameborder="1" style="border:1; padding: 8px;"></iframe>
        </div>
<?php } ?>               
<!--        <div id="glowny_wew"><img src="img/NSZ I.jpg" alt="No Picture available" style="position: relative;height: 200px;"/>
            <p><?php //echo t("I stała się światłość");?> :) </p>
        </div>-->
<!--        <div id="glowny_wew"><img src="img/NSZ II.jpeg" alt="No Picture available" style="position: relative;height: 200px;"/>
            <p><?php //echo "Cogito ergo sum :"?> :)</p>
        </div>-->
<!--        <div id="glowny_wew"><img src="img/jedenpierdol.jpg" alt="No Picture available" style="position: relative;height: 200px;"/>
            <p><?php //echo t("Cogito ergo sum");?> :)</p>
        </div>-->
<!--        <div id="glowny_wew">
            <form oninput="x.value=parseInt(a.value)+parseInt(b.value)">0
                <input type="range" id="a" value="50">100
                +<input type="number" id="b" value="50">
                =<output name="x" for="a b"></output>
            </form>
        </div>-->
<?php include 'footer.php'; ?>
    </div>
            <?php //include 'footer.php'; ?>
</body>
</html>
<?php
//include 'footer.php';
//include 'buttons.php';
//include 'Translations/flag.php';
//include 'Menu.php';

