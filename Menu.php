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
          <li class="prawo"><a href="Documents/20140408 CV Bartka PL INF cut.pdf" target="blank"><?php echo t("Życiorys") ?> PDF</a>
            <ol>
                <li><a href="#" class="prawo topopup" ><?php echo t("Przedstawienie") ?></a>
                    <ol>
                        <li class="topopup2"><?php include "Documents/CV interactive/001 Head.php"?></li>
                    </ol>
                </li>
                <li><a href="#" class="prawo topopup" ><?php echo t("Wykształcenie") ?></a>
                    <ol>
                        <li class="topopup2"><?php include "Documents/CV interactive/002 Wyksztalcenie.php"?></li>
                    </ol>
                </li>
                <li><a href="#" class="prawo topopup" ><?php echo t("Przebieg zatrudnienia") ?></a>
                    <ol>
                        <li class="topopup2"><?php include "Documents/CV interactive/003 Przebieg.php"?></li>
                    </ol>
                </li>
                <li><a href="#" class="prawo topopup" ><?php echo t("Znajomość języków") ?></a>
                    <ol>
                        <li class="topopup2"><?php include "Documents/CV interactive/004 Jezyki.php"?></li>
                    </ol>
                </li>
                <li><a href="#" class="prawo topopup" ><?php echo t("Umiejętności IT") ?></a>
                    <ol>
                        <li class="topopup2"><?php include "Documents/CV interactive/005 Komputer.php"?></li>
                    </ol>
                </li>
                <li><a href="#" class="prawo topopup" ><?php echo t("Inne umiejętności") ?></a>
                    <ol>
                        <li class="topopup2"><?php include "Documents/CV interactive/006 Inne.php"?></li>
                    </ol>
                </li>
                <li><a href="#" class="prawo topopup" ><?php echo t("W wolnym czasie") ?></a>
                    <ol>
                        <li class="topopup2"><?php include "Documents/CV interactive/007 Hobby.php"?></li>
                    </ol>
                </li>

          </ol>
        </li>
        
        <?php if($_SESSION['lang']=='pl'){ ?>
        <li><a href="Documents/CCF20130926_00000.jpg" target="blank"><?php echo t("Dyplomy") ?> PDF</a></li>
        <?php }else{ ?>
        <li><a href="Documents/CCF20130926_00001.jpg" target="blank"><?php echo t("Dyplomy") ?> PDF</a></li>
        <?php } ?>
        
        <li><a href="Documents/Praca dyplomowa.pdf" target="blank"><?php echo t("Praca dyplomowa") ?> PDF</a></li>

        <li class="prawo"><a href="#"><?php echo t("Projekty") ?></a>
          <ol>
            <li><a href="http://www.dibuco.co.uk/?page_id=1109" target="blank"><?php echo t("Projekt") ?> Dprint</a></li>
            <li><a href="http://www.bartilevi.pl/Transport_Proj_Zesp/htdocs/"><?php echo t("Projekt") ?> "<?php echo t("Transport")?>"</a></li>
            <li><a href="http://karypno.nstrefa.pl/projekt_zespolowy_test/index.xhtml" target="blank"><?php echo t("Projekt") ?> "<?php echo t("Spedycja")?>"</a></li>
<!--            <li><a href="#"><?php echo t("") ?></a></li>
            <li><a href="#"><?php echo t("") ?></a></li>-->
          </ol>
        </li>

        <li class="prawo"><a href="#"><?php echo t("Referencje") ?></a>
          <ol>
            <li><a href="http://www.wispgroup.com/Contact.aspx" target="blank">WISP Group<br>Sp.z o.o.</a></li>
          </ol>
        </li>
        
<!--        <li class="prawo"><a href="#" target="blank"><?php echo t("") ?></a>
          <ol>
            <li><a href="#" target="blank"><?php echo t("") ?></a></li>
            <li><a href="#" target="blank"><?php echo t("") ?></a></li>
            <li><a href="#" target="blank"><?php echo t("") ?></a></li>
            <li><a href="#" target="blank"><?php echo t("") ?></a></li>
          </ol>
        </li>-->
        
<!--        <li class="prawo"><a href="#"><?php echo t("") ?></a>
          <ol>
            <li><a href="#"><?php echo t("") ?></a></li>
            <li><a href="#"><?php echo t("") ?></a></li>
            <li><a href="#"><?php echo t("") ?></a></li>
            <li><a href="#"><?php echo t("") ?></a></li>
          </ol>
        </li>-->

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
