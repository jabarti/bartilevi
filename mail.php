<?php

/* * **************************************************
 * Project:     BartiLevi_WEB
 * Filename:    mail.php
 * Encoding:    UTF-8
 * Created:     2014-04-01
 *
 * Author       Bartosz M. Lewiński <jabarti@wp.pl>
 * ************************************************* */
?>
<div id="maildiv">
<?php
if (isset($_GET['send'])){
    if($_GET['send'] == 'ok')
        $send = true;
    else
        $send = false;
    
    echo $send;
}
?>
<p id="textTitle" style="color: black;">NAPISZ DO MNIE</p>
<form name="formatka" action="email_mod.php" method="post">
    <table>
        <tr id="selfmail">
            <td><label for="text">Podaj swoj mail:</label></td>
            <td><input id="mail" type="text" name="mail" ></td>
        </tr>
        <tr>
            <td><label for="subject">Podaj temat:</label></td>
            <td><input id="subject" type="text" name="subject"></td>
        </tr>
        <tr>
            <td><label for="text">Podaj treść:</label></td>
            <td><textarea id="message"  rows="4" cols="30" name="message"></textarea></td>
        </tr>
        <tr>
            <td><label for="chac">czy chcesz kopie?:</label></td>
            <td><input id="chac" type="checkbox" name="chac" </td>
        </tr>
        <tr>
            <td></td>
            <td><input name=mailform type="submit" value="Wyślij"></td>
        </tr>
    </table>
    <p>AAAA</p>
</form>
     <p id="potw">Mail wysłany</p>
</div>
<script>
//var temp = document.getElementById('potw');
//alert(temp);
//$("#potw").hide();

$("#selfmail").hide();
$(document).ready(function(){
  $("#chac").click(function(){
    $("#selfmail").toggle();
  });
});
</script>