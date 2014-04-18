<?php

/* * **************************************************
 * Project:     BartiLevi
 * Filename:    next3.php
 * Encoding:    UTF-8
 * Created:     2014-04-17
 *
 * Author       Bartosz M. Lewiński <jabarti@wp.pl>
 * ************************************************* */
require_once "common.inc.php";
include 'DB_Connection.php';
$title = '';
include 'header.php';
include 'flag.php';
include 'buttons.php';
?>
<html>
<head>
 <script type="text/javascript">
 <!--
   function popup(url) 
   {
     window.open(url,'','width=400,height=400');
   }
 //-->
 </script>
</head>
<body>
 <a href="javascript:popup('next2.php')">strona.html</a><br />
 <a href="javascript:popup('img/no_euro.png')">zdjecie.jpg</a><br />
</body>
</html>