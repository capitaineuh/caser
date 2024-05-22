<?php

include("back/connection.php");
	include("back/functions.php");

	$user_data = check_login($con);
    if (isset($user_data['user_name']))
    {
        unset($_SESSION['user_id']);
    }




?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF_8">
    <meta name="viewport" contetnt="width=device-width, initial-scale=1.0">
  <title>Mon site web</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
              <a href="index.php">  <img src="images/logo_caser.png" width="125px" ></a>
            </div>
            
            <!-- verifie la connexion, si oui { bonjour userName } et btn logout -->  
            <div class="bjr">
            <?php
            $user_data = check_login($con);
                if (isset($user_data['user_name']))
                {
                  echo "Bonjour " . $user_data['user_name'] . " !";     
                }   
               ?></div>
<a href="back/logout.php"> <img src="images/icons/logout.png" class="logout"> </a>

<!-- Pages accessible depuis le header -->  
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="produits.php">Produits</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="contact/index.html">Contact</a></li>
                    <li><a href="compte.php" id="compte">Connexion</a></li>
                </ul>
            </nav>
          <a href="cart.php">  <img src="images/icons/shopping_cart.png" width="30px" height="30px"></a>
            <img src="images/icons/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>

<!------   Compte page   -->
<div class="compte-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="images/product_metro.png" width="100%">
            </div>

            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick=login()>Login</span>
                        <span onclick=register()>Inscription</span>
                        <hr id="Indicator">
                    </div>
                    <form id="LoginForm" action="back/login.php" method="post">
                        <input type="text" placeholder="Username" name="user_name">
                        <input type="password" placeholder="Password" name="password">
                        <button type="submit" class="btn" value="Login">Login</button>
                        <br><a href="">Mot de passe oublié</a>
                    </form>
                    
                    <form id="RegForm" action="back/signup.php" method="post">
                        <input type="text" placeholder="Username" name="user_name">
                        <input type="email" placeholder="Email" name="email">
                        <input type="password" placeholder="Password" name="password">
                        <button type="submit" class="btn" value="Signup">S'inscrire</button>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>




<!------   footer   -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App</h3>
                <p>Download App for Android and IOS mobile phone</p>
           <div class="app-logo">
           <img src="images/icons/app-store.png">
           <img src="images/icons/play-store.png">
            </div></div>
            <div class="footer-col-2">
                <img src="images/logo_black.png" alt="">
                <p>lever les mains en l'air aller aller aller</p>
            </div>
            <div class="footer-col-3">
                <h3>Links</h3>
                <ul>
                    <li>Offres</li>
                    <li>Blog products</li>
                    <li>Politique de retour</li>
                    <li>Joint affiliés</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow us</h3>
                <ul>
                    <li>fb</li>
                    <li>insta</li>
                    <li>Twitter</li>
                    <li>Toktok</li>
                </ul>
            </div>
        </div>
       <hr> <p class="copyright">Copyright 2023 - Alexis Project</p>
    </div>
</div>
<!------- JS for toggle menu   -->
<script>
var MenuItems = document.getElementById("MenuItems");

MenuItems.style.maxHeight = "0px";

function menutoggle(){
    if(MenuItems.style.maxHeight == "0px")
    {
        MenuItems.style.maxHeight = "200px";
    }
    else {
        MenuItems.style.maxHeight = "0px";
    }
}

// js pour la page compte
var LoginForm = document.getElementById("LoginForm");
var RegForm = document.getElementById("RegForm");
var Indicator = document.getElementById("Indicator");

function register(){
    RegForm.style.transform = "translateX(0px)";
    LoginForm.style.transform = "translateX(0px)";
    Indicator.style.transform = "translateX(100px)";
}

function login(){
    RegForm.style.transform = "translateX(300px)";
    LoginForm.style.transform = "translateX(300px)";   
    Indicator.style.transform = "translateX(0px)";
}


</script>
</body>
</html>
