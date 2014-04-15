<?php

/* * **************************************************
 * Project:     BartiLevi
 * Filename:    Log_panel.php
 * Encoding:    UTF-8
 * Created:     2014-04-15
 *
 * Author       Bartosz M. Lewiński <jabarti@wp.pl>
 * ************************************************* */
?>
<div id=LogPanel >
    <?php
    if (isset($_SESSION['admin'])){
        
        ?><script>//alert("W isset Admin")</script><?php
        
        if($_SESSION['admin']== 'OK'){
            
           ?><script>//alert("Admin == 'OK'")</script><?php
            
           if(isset($_SESSION['chang']) && $_SESSION['chang'] == 1){
               
                ?><script>//alert("chang == 1")</script><?php
                ?>
                <div class=logbutton>
                    <button onclick="window.history.back()"><?php echo t("Cofnij")?></button><br> 
                    <button onclick="window.location.href='index.php'"><?php echo t("Powrót do")?> index</button>
                </div> 
                <?php
                $_SESSION['chang'] = 0;
                
           } else {
               
                ?><script>//alert("chang != 1")</script><?php
                ?>
                <div class=transbutton>
                    <button onclick="location.href='translation_interface.php'"><?php echo t("Translacje")?></button>
                </div> 
                <div class="logbutton">
                    <form action="" method="post">
                        <input type="hidden" name="admin" value="logout"/><br>
                        <input type="submit" value="<?php echo t("Wyloguj");?>"/>
                    </form>    
                </div>
                <?php
           }
        } else {
            ?><script>//alert("Admin != 'OK'")</script><?php
            ?>
            <div class="cleaner"></div>
            <div class="logbutton2">
                <form action="index.php" method="post">
                    <input type="password" size=10 name="admin"/><br>
                    <input type="submit" value="<?php echo t("Zaloguj");?>"/>
                </form>    
            </div>
            <?php
        }
    } else {
        ?>
        <div class="logbutton2">
            <form action="index.php" method="post">
                <input type="password" name="admin"/><br>
                <input type="submit" value="<?php echo t("Zaloguj");?>"/>
            </form>    
        </div>
    <?php
    }  
?>
</div>
