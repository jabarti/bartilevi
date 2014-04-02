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
/* it takes info about mail sent or not from email_mod.php */
if (isset($_GET['send'])){
    if($_GET['send'] == 'ok')
        $send = 1;
    else if ($_GET['send'] == 'ok')
        $send = 0;
    else
        $send = -1;
}
/* it stores info about user mail */
if (isset($_SESSION['user_mail'])){
    $user_mail = $_SESSION['user_mail'];
}else{
    $user_mail = '';
}
?>
<p id="textTitle" style="color: black;">NAPISZ DO MNIE</p>
<form name="formatka" action="email_mod.php" method="post">
    <table>
        <tr id="selfmail">
            <td><label for="text">Podaj swój mail:</label></td>
            <td><input id="mail" type="text" name="mail" value="<?php echo $user_mail; ?>"></td>
        </tr>
        <tr>
            <td><label for="subject">Temat:</label></td>
            <td><input id="subject" type="text" name="subject"></td>
        </tr>
        <tr>
            <td><label for="text">Podaj treść:</label></td>
            <td><textarea id="message"  rows="4" cols="30" name="message"></textarea></td>
        </tr>
        <tr>
            <td><label for="chac">Czy chcesz kopię?:</label></td>
            <td><input id="chac" type="checkbox" name="chac" </td>
        </tr>
        <tr>
            <td></td>
            <td><input name=mailform type="submit" value="Wyślij"></td>
        </tr>
    </table>
</form>
<?php if($send == 1){ 
     echo '<p id="potw">Mail wysłany!</p>';
}else if($send == -1){
    echo '<p id="potw">Mail nie wysłany - brak tematu lub/i treści</p>';
} else {
    echo '<p id="potw">:)</p>';
}

?>
</div>
<script>
$("#selfmail").hide();
$(document).ready(function(){
  $("#chac").click(function(){
    $("#selfmail").toggle();
  });
});
</script>
<?php

