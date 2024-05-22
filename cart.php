<?php

session_start();

include_once ("back/component.php");
include_once("back/connection.php");
include_once("back/functions.php");


$user_data = check_login($con);  
$user_id = $_SESSION['user_id'];

//$db = new CreateDb("Productdb", "Producttb");
//$cartdb = new CreateDb(dbname: "login_sample_db", tablename: "panier");

if(isset($_POST['delete'])){

    $id_to_delete = mysqli_real_escape_string($con, $_POST['id_to_delete']);

    $sql = "DELETE FROM panier WHERE idCart = $id_to_delete";

    if(mysqli_query($con, $sql)){
        header('Location: cart.php');
    } else {
        echo 'query error: '. mysqli_error($con);
    }

}
if(isset($_POST['qte'])){
    $qte='qte.value';
	//$total = ($productprice * $qte);
}
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
                <img src="images/logo_caser.png" width="125px">
            </div>
            <div class="bjr">

<?php
    if (isset($user_data['user_name']))
    {
      echo "Bonjour " . $user_data['user_name'] . " !";     
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
    </div>
</div>







<!--     Table Panier   -->
<div class="small-container cart-page">
    <table>
        <tr>
            <th>Produit</th>
            <th>Quantité</th>
            <th>Prix</th>
        </tr>

        <?php

    $total = 0;

       if (isset($user_data['user_name']))
                {
                   
                  // $dbuser = "user_id";  
                    $dbhost = "localhost";
                    $dbuser = "root";
                     $dbpass = "";
                     $dbname = "login_sample_db";
                if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
                {
                    die("failed to connect!");
                }
                $_SESSION['user_id'] = $user_data['user_id'];
       $query = "select 
       p.id as idProd,
       p.product_name ,
       p.product_image,
       c.idCart,
    c.quantité,
    c.idForm,
    20 as product_price
    from panier c, producttb p
    where  c.idProd = p.id 
    and c.idUsr=$user_id";
       $result = mysqli_query($con, $query);


        while ($row = mysqli_fetch_assoc($result)){

            cartElement($row['idProd'], $row['product_name'], 20, $row['product_image'], $row['idForm'], $row['idCart']);          
            
            $total = $total + (int)$row['product_price'];
           //$total;
        }
    }else{
        echo "<h5>Vous devez vous connecter</h5>";
    }

?>
         <tr>
            <td>
                <div class="cart-info">
                    <div>
                        <p>total</p>
                    </div>
                </div>

            </td>
            <td></td>
            <td>      <?= $total ; ?>€         
               
        </td>
        </tr>


</table>
<!----- API Paypal   -------->
<br><div class="ppl">
<script src="https://www.paypal.com/sdk/js?client-id=test&currency=EUR"></script>
<script>paypal.Buttons().render('body');</script></div>
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


</script>
</body>
</html>
