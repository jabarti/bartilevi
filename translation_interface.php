<?php

/* * **************************************************
 * Project:     BartiLevi_WEB
 * Filename:    translation_interface.php
 * Encoding:    UTF-8
 * Created:     2014-04-03
 *
 * Author       Bartosz M. Lewiński <jabarti@wp.pl>
 * ************************************************* */
require_once "common.inc.php";
include 'DB_Connection.php';
$title = 'BartiLevi | Panel tłumaczeń';
include 'header.php';
//include 'Translation/translation.css';

//include 'buttons.php';
//include 'mail.php';
?>
<body style="width:100%;">
    <div id="glowny_index_translation" >
        <?php
            $chang = 1;
            include 'Translations/translation_panel.php';
        ?>
    </div>
</body>
<?php
include 'Translations/flag.php';

