<?php
    include ('php/contact.php' );
?>	
    <div class="formulaire">
        <form method="POST" action="<?php envoimail();?>">

            <h4>CONTACT</h4>
            <hr>
            <div class="name-field">
                <div>
                    <label>Nom</label>
                    <input type="text" name="NOM_EXPEDITEUR" required>
                </div>
                <div>
                    <label>Adresse Mail</label>
                    <input type="email" name="MAIL" required>
                </div>
                <label>Objet</label>
                <input type="text" name="OBJET_MAIL" required>
                <label>Corps du mail</label>
                <input type="text" name ="MSG_MAIL" required>
                <input type="checkbox" required> Je ne suis pas un robot </input>
                
                <input type="submit" value="Envoyer">
                <!--<p>Vous avez déja un compte ?  <a href="#">Se Connecter</a></p>-->
            </div>
        </form>
    </div>