<div class="guziki">
	<a href="index.php" class="myButton"><?php echo t("Do"); ?> BartiLevi <?php t("Głównej"); ?></a>
	<?php if(isset($_SESSION['admin']) && ($_SESSION['admin']) == 'OK'){ ?>
            <a href="next1.php" class="myButton"><?php echo t("Do"); ?> phpinfo()</a>
            <a href="next2.php" class="myButton"><?php echo t("Do"); ?> Server Info</a>
            <a href="next3.php" class="myButton"><?php echo t("Do"); ?> Popups</a>
            <a href="ZZZProba_WEB" class="myButton"><?php echo t("Do"); ?> ZZZProba_WEB</a>
            <a href="Svenska" class="myButton"><?php echo t("Do"); ?> Svenska </a>
            <a href="http://macius-i-zuzia-lewinscy.bloog.pl/" class="myButton" target="blank"><?php echo t("Do"); ?> <?php echo t("Blog Maciusia i Zuzi"); ?></a>
            <a href="http://bartus-lewinski.bloog.pl/" class="myButton" target="blank"><?php echo t("Do"); ?> <?php echo t("mojego Bloga"); ?></a>
        <?php } ?>
	<a href="Transport_Proj_Zesp" class="myButton"><?php echo t("Do"); ?> Transport_Proj_Zesp</a>
	<!--<a href="try.pl" class="myButton"><?php echo t("Do"); ?> try.php</a>-->
	<!--<a href="A47 each" class="myButton"><?php echo t("Do"); ?> A47 each</a>-->
	<!--<a href="ZZZProba_WEB" class="myButton"><?php echo t("Do"); ?> ZZZProba_WEB</a>-->
</div>