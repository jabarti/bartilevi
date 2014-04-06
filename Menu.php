<?php

/* * **************************************************
 * Project:     BartiLevi_WEB
 * Filename:    Menu.php
 * Encoding:    UTF-8
 * Created:     2014-04-06
 *
 * Author       Bartosz M. Lewiński <jabarti@wp.pl>
 * ************************************************* */
?>
  <ol id="menu">
    <li class="dol"><a href="#"><?php echo t("MENU") ?></a>
      <ul>
        <li><a href="Documents/CV Bartka 2013.11.14 - inf_PL.pdf" ><?php echo t("Życiorys") ?> PDF</a></li>
        
        <?php if($_SESSION['lang']=='pl'){ ?>
        <li><a href="Documents/CCF20130926_00000.jpg" ><?php echo t("Dyplomy") ?> PDF</a></li>
        <?php }else{ ?>
        <li><a href="Documents/CCF20130926_00001.jpg" ><?php echo t("Dyplomy") ?> PDF</a></li>
        <?php } ?>
        
        <li><a href="Documents/Praca dyplomowa.pdf" ><?php echo t("Praca dyplomowa") ?> PDF</a></li>

        <li class="prawo"><a href="#"><?php echo t("Projekty") ?></a>
          <ol>
            <li><a href="http://www.dibuco.no/" target="blank"><?php echo t("Projekt") ?> Dprint</a></li>
            <li><a href="http://www.bartilevi.pl/Transport_Proj_Zesp/htdocs/"><?php echo t("Project") ?> "<?php echo t("Transport")?>"</a></li>
            <li><a href="#"><?php echo t("") ?></a></li>
            <li><a href="#"><?php echo t("") ?></a></li>
          </ol>
        </li>

        <li class="prawo"><a href="#"><?php echo t("") ?></a>
          <ol>
            <li><a href="#"><?php echo t("") ?></a></li>
            <li><a href="#"><?php echo t("") ?></a></li>
            <li><a href="#"><?php echo t("") ?></a></li>
            <li><a href="#"><?php echo t("") ?></a></li>
          </ol>
        </li>
        <li class="prawo"><a href="#"><?php echo t("") ?></a>
          <ol>
            <li><a href="#"><?php echo t("") ?></a></li>
            <li><a href="#"><?php echo t("") ?></a></li>
            <li><a href="#"><?php echo t("") ?></a></li>
            <li><a href="#"><?php echo t("") ?></a></li>
          </ol>
        </li>
        <li class="prawo"><a href="#"><?php echo t("") ?></a>
          <ol>
            <li><a href="#"><?php echo t("") ?></a></li>
            <li><a href="#"><?php echo t("") ?></a></li>
            <li><a href="#"><?php echo t("") ?></a></li>
            <li><a href="#"><?php echo t("") ?></a></li>
          </ol>
        </li>

      </ul>
    </li>
<!--     II menubar  
    <li class="dol"><a href="#">dział - 2</a>
      <ul>
        <li><a href="#">link - 1</a></li>

        <li class="prawo"><a href="#">link - 2</a>
          <ol>
            <li><a href="#">dodany - 1</a></li>
            <li><a href="#">dodany - 2</a></li>
            <li><a href="#">dodany - 3</a></li>
            <li><a href="#">dodany - 4</a></li>
            <li><a href="#">dodany - 5</a></li>
          </ol>
        </li>

        <li><a href="#">link - 3</a></li>
      </ul>
    </li>-->
  </ol>
