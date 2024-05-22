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
                <img src="images/logo_caser.png" width="125px">
            </div>
            <nav>
                <ul id="MenuItems">
                <li><a href="index.php">Accueil</a></li>
                    <li><a href="produits.php">Produits</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="compte.php" id="compte">Connexion</a></li>
                </ul>
            </nav>
            <img src="images/icons/shopping_cart.png" width="30px" height="30px">
            <img src="images/icons/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>
</div>
<!--     cart items   -->
<div class="small-container cart-page">
    <table>
        <tr>
            <th>Produit</th>
            <th>Quantité</th>
            <th>Prix</th>
        </tr>
         <tr>
            <td>
                <div class="cart-info">
                    <img src="images/Jkod.png">
                    <div>
                        <p>Nom</p>
                        <small>Prix: 20.00€</small><br>
                        <a href="">Supprimer</a>
                    </div>
                </div>

            </td>
            <td><input type="number" value="1"></td>
            <td>20.00€</td>
        </tr>
        <!--again-->
        <tr>
            <td>
                <div class="cart-info">
                    <img src="images/green.png">
                    <div>
                        <p>Nom</p>
                        <small>Prix: 20.00€</small><br>
                        <a href="">Supprimer</a>
                    </div>
                </div>

            </td>
            <td><input type="number" value="1"></td>
            <td>20.00€</td>
        </tr>
    </table>
    <div class="prix-total">
        <table>
            <tr>
                <td>Prix produit</td>
                <td>20.00€</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>2€</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>32€</td>
            </tr>
        </table>


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
                <img src="images/logo_caser.png" alt="">
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

</script>
</body>
</html>
