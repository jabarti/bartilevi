<?php

/* * **************************************************
 * Project:     BartiLevi_WEB
 * Filename:    translation_panel.php
 * Encoding:    UTF-8
 * Created:     2014-04-03
 *
 * Author       Bartosz M. Lewiński <jabarti@wp.pl>
 * ************************************************* */
require_once "common.inc.php";
include 'DB_Connection.php';
//include 'common.inc.php';
$title = 'BartiLevi | Panel tłumaczeń';
include 'header.php';
include 'flag.php';
include 'buttons.php';
//include 'mail.php';
?>
<body>
    <div id="glowny_index">
        <?php
            include 'Classes/translation_panel.php';
        ?>
    </div>
</body>

