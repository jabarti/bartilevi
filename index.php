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
include 'Translations/flag.php';
?>
<body>
    <div id="glowny_index" >
         <!--<h4 STYLE="margin-left: auto; margin-right: auto; text-align: center;"><?php echo t("STRONA W BUDOWIE")?> v (<?php echo t("NA BUDOWIE")?>??? :)</h4>-->
        <!--<div id="glowny_wew" style="column-count: 2; -moz-column-count: 2; -webkit-column-count: 2">-->
        <div id="glowny_wew" style="">
            <!--<div><table style="background-image:url('img/Barti_dyplomII.JPG');width: 265px; height:350px"><tr><td></td></tr></table></div>-->
            <!--<img src="img/Barti_dyplomII.JPG" alt="No Picture available" style="position: relative; height: 200px;"/>-->
            <div id="imgContener" onmouseover="onHover()" onmouseout="outHover()" style="width:auto; height: auto;"><img id="imgResized" src="img/Barti_dyplomII thumb.jpg" alt="No Picture available" style="float:left; margin:6px"/></div>
            <div>
                <p><?php echo t("Ego sum"); ?> :)</p>
                <p><?php include 'text1.php'; ?> :)</p>
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
            <p id="brows"></p>
            <p><?php 
                echo 'PLATFORM: '.$_SESSION['platform'].", BROWSER: ".$_SESSION['browser'];        
                echo '<br>SCREEN: '.$_SESSION['screenWidth']." / ".$_SESSION['screenHeight'];
               ?></p>
       </div>-->
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

