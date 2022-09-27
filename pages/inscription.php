<?php

require "../ressources/template/_header-login.php";
$title = "inscription";

?>
<!-- username -->
<body>
    <div class="big-contain">
        <div class="left-contain">
            
            <img src="../ressources/img/logo-projet.png" class="logo">
            <h1>Rejoignez la toute derniére bibliothéque d'image!
                et biento grace a vous... la plus grande !
            </h1>
            <h2>
                Explorer et decouvrer l'art,
                devenez un meilleur artiste,
                connectez vous avec d'autre autour de votre passion commune !
                ou acheter et vendez des oeuvres
                - vous pouvez tout faire ici !
            </h2>
        </div>
        <div class="right-contain">
            <form action="" method="POST">
                <p class="seCoo">SE CONNECTER :</p>
                <label for="username" class="nomD">Nom d'utilisateur</label>
                <input type="text" id="username" name="username" class="username" required></input>
                <span class="error"><?php echo $error["username"]??"" ?></span>
                <!-- MDP -->
                <label for="password" class="nomD">Mot de passe</label>
                <input type="password" id="password" name="password" id="password" required></input>
                <span class="error"><?php echo $error["password"]??"" ?></span>
                <p class="textGris">Minimum 6 caractéres/chiffres</p>
                <label class="containerCheck">
                <div class="cont-text-gris">
                    <p class="textBlack">
                        En rejoignant pixeloThéque je confirme avoir lu et accepté les <strong>conditions 
                        d'utilisation</strong> et la <strong>politique de confidentialité</strong> de <strong>Pixelothéque</strong>
                        et de recevoir des email et mises a jour.
                    </p>
                </div>
                    <input type="checkbox" checked="checked" class="check">
                    
                    <input type="submit" value="Inscription" class="submitInput">
                    
                </label>
            </form>
            <img src="../ressources/img/separation-login.png" alt="separation" class="separat">
        <div class="down-container">
            <a class="continue-btn">Continue with</a>
            <a class="continue-btn">Continue with</a>
            <a class="continue-btn">Continue with</a>
        </div>
        <div class="down-text-container">
            <div class="login-container">
                <p class="dejM">deja menbre ?</p>
                <a class="login-link">login</a>
            </div>
           
        </div>
        </div>
    </div>

    <?php
    require "../ressources/template/_footer.php";
?>
