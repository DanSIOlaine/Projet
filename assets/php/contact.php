<?php>
 php_info(); 

 function envoimail(){
    $MONMAIL = "dan.laine.argentan61@gmail.com";
    $NOM_EXPEDITEUR = $_POST['NOM_EXPEDITEUR'];
    $MAIL = $_POST['MAIL'];
    $OBJET_MAIL = $_POST['OBJET_MAIL'];
    $MSG_MAIL = " Une nouvelle demande de contact a été faite par " + $NOM_EXPEDITEUR + " (" + $MAIL +"). " + $_POST['MSG_MAIL'];
    mail($MONMAIL,$OBJET_MAIL,$MSG_MAIL)
 }
 </php>

 #<?php echo var_dump($Array["0"]["img"])?>