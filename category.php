<?php 
session_start();

	include("back/connection.php");
	include("back/functions.php");

	$user_data = check_login($con);
    

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
            <div class="bjr">

            <?php
                if (isset($user_data['user_name']))
                {
                  echo "Bonjour " . $user_data['user_name'] . " !";     
                 // changeLiText();
                }   
               ?>   </div>

<a href="compte.php"> <img src="images/icons/logout.png" class="logout"> </a>



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
      
<!-----------  category ------->

<?php
$category = getAll("categories");
if(mysqli_num_row($category) > 0){
foreach($category as $item) {
    ?>
        <tr>
            <td> <?= $item['id']; ?> </td>
    <?php
}
} else {
    echo "Erreur veuillez réessayer";
}

?>

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

</body>
</html>
