<?php 
    session_start();
	include("back/connection.php");
	include("back/functions.php");
    include("back/CreateDb.php");
    include("back/component.php");
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

        <!-- Accueil image et descpription rapide -->  
        <div class="row">
            <div class="col-2">
                <h1>Donnez à votre téléphone <br>une nouvelle apparence!</h1>
            <p>Customiser votre coque de téléphone <br>avec des designs exclusifs</p>
        <a href="produits.php" class="btn">Voir tout les produits &#8594;</a>   
        </div>
            <div class="col-2">
               <a href="produit_seul_template.php?id=2"> <img src="images/presentation.png"></a>
            </div>
        </div>
    </div>
</div>
  
<!---------- A la une ------------>
<div class="small-container">
    <h2 class="title">A la une</h2>
    <div class="categories">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
               <a href="produit_seul_template.php?id=13"> <img src="images/product_metro.png" alt=""></a>
               <h4 style="text-align: center";>Metro Boomin <br> Heroes & Villains</h4>
            <p style="text-align: center";>10€</p>
            </div>
            <div class="col-3">
            <a href="produit_seul_template.php?id=3">    <img src="images/product_kod.png" alt=""></a>
            <h4 style="text-align: center";>J. Cole<br>KOD</h4>
            <p style="text-align: center";>10€</p>
            </div>
            <div class="col-3">
            <a href="produit_seul_template.php?id=10"> <img src="images/product_goodKid.png" alt=""></a>
            <h4 style="text-align: center";>Kendrick Lamar<br>Good Kid, M.A.A.D City</h4>
            <p style="text-align: center";>10€</p>
            </div>
        </div>
    </div>
   
</div>


<!---------- derniers Produits------------>
    <h2 class="title">Derniers Produits</h2>
    <div class="row">
        <div class="col-4">
        <a href="produit_seul_case1.php"><img src="images/case1.png"></a>
            <h4>phone case</h4>
            <p>20.00€</p>
        </div>
        <div class="col-4">
        <a href="produit_seul_case1.php"><img src="images/case1.png"></a>
            <h4>phone case</h4>
            <p>20.00€</p>
        </div>
        <div class="col-4">
            <a href="produit_seul_case1.php"><img src="images/case1.png"></a>
            <h4>phone case</h4>
            <p>20.00€</p>
        </div>
        <div class="col-4">
        <a href="produit_seul_case1.php"><img src="images/case1.png"></a>
            <h4>phone case</h4>
            <p>20.00€</p>
        </div>
</div></div>
<!-----------  produit seul RICK   -->
<div class="offer">
    <div class="small-conatiner">
        <div class="row">
            <div class="col-2">
                <img src="images/rick.png" class="offer-img">
            </div>
            <div class="col-2">
                <p>Disponible exclusivement  sur ce site</p>
                <h1>Rick's ass case</h1>
                <small>Made by chalamalice</small>
            <a href="produit_seul_rick.php" class="btn">Buy Now &#8594;</a>
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
           <img src="images/icons/app-store.png" alt="app-store">
           <img src="images/icons/play-store.png" alt="play-store">
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
<!------- JS pour menu responsive   -->
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

function changeLiText()
{
    var li = document.getElementById('compte');
    li.innerHTML = "compte";
}

</script>
</body>
</html>
