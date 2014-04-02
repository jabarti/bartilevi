<?php
/* * **************************************************
 * Project:     BartiLevi_WEB
 * Filename:    index.php
 * Encoding:    UTF-8
 * Created:     
 *
 * Author       Bartosz M. Lewiński <jabarti@wp.pl>
 * ************************************************* */
include 'common.inc.php';
include 'DB_Connection.php';
//include 'common.inc.php';
$title = 'BartiLevi | Main Page';
include 'header.php';
include 'flag.php';
include 'buttons.php';
//include 'mail.php';
?>
<body>
    <div id="glowny_index">
         <h4 STYLE="margin-left: auto; margin-right: auto; text-align: center;">STRONA W BUDOWIE v (NA BUDOWIE???? :) )</h4>
        <div id="glowny_wew">
            <!--<div><table style="background-image:url('img/Barti_dyplomII.JPG');width: 265px; height:350px"><tr><td></td></tr></table></div>-->
            <img src="img/Barti_dyplomII.JPG" alt="No Picture available" style="position: relative; height: 300px;"/>
            <div><p>Ego sum :)</p></div>
        </div>
        <div id="glowny_wew">
            <?php include 'mail.php'; ?>
        </div>
        <div id="glowny_wew"><img src="img/no_euro.png" alt="No Picture available" style="height: 200px;"/>
            <p>Cogito ergo sum :)</p>
        </div>
        <div id="glowny_wew"><img src="img/NSZ I.jpg" alt="No Picture available" style="position: relative;height: 200px;"/>
            <p>Cogito ergo sum :)</p>
        </div>
        <div id="glowny_wew"><img src="img/NSZ II.jpeg" alt="No Picture available" style="position: relative;height: 200px;"/>
            <p><?php echo "Cogito ergo sum :"?></p>
        </div>
        <div id="glowny_wew"><img src="img/jedenpierdol.jpg" alt="No Picture available" style="position: relative;height: 200px;"/>
            <p>Cogito ergo sum :)</p>
        </div>
        <div id="glowny_wew">
            <form oninput="x.value=parseInt(a.value)+parseInt(b.value)">0
                <input type="range" id="a" value="50">100
                +<input type="number" id="b" value="50">
                =<output name="x" for="a b"></output>
            </form>
        </div>
    </div>
</body>
</html>
