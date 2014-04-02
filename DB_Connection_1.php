<?php
//echo ROOT;
$arr = explode(DIRECTORY_SEPARATOR, ROOT);
//var_dump($arr);
//echo '<br>'.$arr[1];
switch ($arr[1]){
    case 'xampp':
        try{
            $dbhost     = "localhost";
            $dbuser	= "root";
            $dbpass	= "";
            $dbname	= "";
            echo '<div id=DBConn>';
            if (PHP_VERSION_ID<50500){
                echo '========================<br>DB_Conn, line: '.__LINE__.'<BR>';
                echo "<br>Wersja PHP: ".PHP_VERSION. " < 5.50";
                $DBConn = mysql_connect($dbhost,$dbuser,$dbpass);// or die('Connection failed!');
                if ($DBConn){echo '<br>Connection OK';} else {echo '<br>Connection failed';}
                mysql_select_db($dbname) or die('<br>Selection failed!');
                echo "<br>Connection to \"".$dbname."\" established<br>========================<br>";
            }else{
                echo '========================<br>DB_Conn, line: '.__LINE__.'<BR>';
                echo "<br>Wersja PHP: ".PHP_VERSION. " >= 5.50";
                $DBConn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('<br>Selection failed!');
                echo "<br>Connection to ".$dbname." established<br>========================<br>";
            }
            
            echo "<br>CASE localhost<br>";
            echo "</div>";
        
        } catch (Exception $ex) {
            echo $ex;
        }
        break;
    case 'home':
        try{
            $dbhost     = "";
            $dbuser	= "";
            $dbpass	= "";
            $dbname	= "";
            
            echo '<div id=DBConn>';
            if (PHP_VERSION_ID<50500){
                echo '========================<br>DB_Conn, line: '.__LINE__.'<BR>';
                echo "<br>Wersja PHP: ".PHP_VERSION. " < 5.50";
                $DBConn = mysql_connect($dbhost,$dbuser,$dbpass);// or die('Connection failed!');
                if ($DBConn){echo '<br>Connection OK';} else {echo '<br>Connection failed';}
                mysql_select_db($dbname) or die('<br>Selection failed!');
                echo "<br>Connection to ".$dbname." established<br>========================<br>";
            }else{
                echo '========================<br>DB_Conn, line: '.__LINE__.'<BR>';
                echo "<br>Wersja PHP: ".PHP_VERSION. " >= 5.50";
                $DBConn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('<br>Selection failed!');
                echo "<br>Connection to ".$dbname." established<br>========================<br>";
            }
            
            echo "<br>CASE: bartilevi.pl<br>";
            echo '</div>';
            
        } catch (Exception $ex) {
            echo $ex;
        }
        break;
    default:
        break;
}
