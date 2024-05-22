<?php
session_start();
	require_once("back/connection.php");      // require_once  ou  include ?
	require_once("back/functions.php"); 
    require_once("back/component.php");
    $user_data = check_login($con);  
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF_8">
    <meta name="viewport" contetnt="width=device-width, initial-scale=1.0">
  <title>Produits</title>
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
            <a href="index.php">   <img src="images/logo_caser.png" width="125px"></a>
            </div>
            <div class="bjr">
            
            <!-- Code  Bonjour avec le log out-->  
            <?php
            $user_data = check_login($con);
                if (isset($user_data['user_name']))
                {
                  echo "Bonjour " . $user_data['user_name'] . " !";     
                }   
               ?></div>
<a href="back/logout.php"> <img src="images/icons/logout.png" class="logout"> </a>

            <nav>
                <ul id="MenuItems">
                <li><a href="index.php">Accueil</a></li>
                    <li><a href="produits.php">Produits</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="compte.php" id="compte">Connexion</a></li>
                </ul>
            </nav>
           <a href='cart.php'> <img src="images/icons/shopping_cart.png" width="30px" height="30px"></a>
            <img src="images/icons/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>

</div>

<!-----  Tout les Produits    -------->

<div class="small-container">
    <div class="row row-2">
        <h2>Tous les produits</h2>
        <select>
            <option value="">Trier par produits conseillés</option>
            <option value="">Trier par prix</option>
            <option value="">Trier par popularité</option>
        </select>
    </div>
    <div class="row">
        
    
<!----- Affiche tout les Produits présents dans la table producttb   -------->
        <?php
                $sql = "SELECT * FROM producttb";
                $result = mysqli_query($con, $sql);
        
                while ($row = mysqli_fetch_assoc($result)){
                    productList($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
                }


            ?>
        
    </div>

<!----- Autres produits en dure   -------->
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
</div>

    <div class="row">
        <div class="col-4">
        <a href="produit_seul_screen.php"><img src="images/verre.png" ></a>
            <h4>phone case</h4>
            <p>20.00€</p>
        </div>
        <div class="col-4">
        <a href="produit_seul_protect.php"><img src="images/case_protector.jpg" ></a>
            <h4>phone case</h4>
            <p>20.00€</p>
        </div>
        <div class="col-4">
        <a href="produit_seul_screen.php"><img src="images/verre.png" ></a>
            <h4>phone case</h4>
            <p>20.00€</p>
        </div>
        <div class="col-4">
        <a href="produit_seul_screen_obj.php"><img src="images/obj.png" ></a>
            <h4>phone case</h4>
            <p>20.00€</p>
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <a href="produit_seul_cable.php"><img src="images/cableb.png" ></a>
            <h4>phone case</h4>
            <p>20.00€</p>
        </div>
        <div class="col-4">
        <a href="produit_seul_cable.php"><img src="images/cablen.png" ></a>
            <h4>phone case</h4>
            <p>20.00€</p>
        </div>
        <div class="col-4">
        <a href="produit_seul_cable.php"><img src="images/cableb.png" ></a>
            <h4>phone case</h4>
            <p>20.00€</p>
        </div>
        <div class="col-4">
        <a href="produit_seul_cable.php"><img src="images/cablen.png" ></a>
            <h4>phone case</h4>
            <p>20.00€</p>
        </div>
    </div>



<!-- Si besoin on peux rajouter des pages produits ici -->
    <div class="page-btn">
        <span>1</span>
        <span>2</span>
        <span>3</span>
        <span>&#8594;</span>
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
                <img src="images/logo_black.png" >
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


  (function redir() {
     $("#id").on("click",function(e) {
       e.preventDefault(); 
       $.post(this.href,function(value) {
         $(".top").html(value);
       });
     });
   });
</script>
</body>
</html>
