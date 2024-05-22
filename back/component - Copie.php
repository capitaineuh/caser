<?php

include_once("back/CreateDb.php");
include_once("back/functions.php");

$database = new CreateDb(dbname: "Productdb", tablename: "Producttb");
$cartdb = new CreateDb(dbname: "login_sample_db", tablename: "panier");
    function productList($productname, $productprice, $productimg, $productid){
        $element = "
        
        <div class=\"col-4\">
        <form id=\"test\" action=\"produit_seul_template.php\" method=\"post\">
    <input type=\"hidden\" name=\"a_recup\" value=\"$productid\"/>
    </form>
        <a href=\"produit_seul_template.php?id=$productid\"  onclick='document.getElementById(\"test\").submit()'>
        <img src=\"$productimg\"></a>
            <h4>$productname</h4>
            <p>$productprice</p>
        </div>        
        ";
        echo $element;

       // if(isset($_POST['a_recup'])){
         //   $productid = $_POST['productid'];
       //    }
    }
// 

    function Product($productname, $productprice, $productimg, $productid){
        $element = "
        
        <div class=\"small-container produit-seul\">
        <div class=\"row\">
            <div class=\"col-2\">
            <img src=\"$productimg\", width=\"100%\" id=\"productImg\" >

        
        ";
        echo $element;
    }




    function component($productid){
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "productdb";
        
        if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
        {
        
            die("failed to connect!");
        }
        
        $query = "select * FROM producttb WHERE id = $productid";
        $result = mysqli_query($con, $query);
        $row= mysqli_fetch_assoc($result);
        $productimg = $row["product_image"];
        $productname = $row["product_name"];
        $productprice = $row["product_price"];
        $lib = $row["lib"];
       

        $element="
        <div class=\"small-container produit-seul\">
    <div class=\"row\">
        <div class=\"col-2\">
            <img src=\"$productimg\" width=\"100%\" id=\"productImg\" >

            <div class=\"small-container\">
    <div class=\"row row-2\">
        <h2>Autres produits</h2>
        <p>Voir plus</p>
    </div></div></div>
        <div class=\"col-2\">
                <p>Accueil / phone case</p>
                <h1>$productname</h1>
                <h4>$productprice €</h4>
            
                
                <details class=\"custom-select\">

                <form action=\"produit_seul_template.php\" method=\"POST\">
	<summary class=\"radios\">
		<input type=\"radio\" name=\"item\" id=\"default\" title=\"Format\" value=\"Iphone 13\" checked>
        <input type=\"radio\" name=\"item\" id=\"item5\" title=\"Iphone 13\" value=\"Iphone 13\" >
		<input type=\"radio\" name=\"item\" id=\"item1\" title=\"Iphone 8\" value=\"Iphone 8\" >
		<input type=\"radio\" name=\"item\" id=\"item2\" title=\"Iphone 10\" value=\"Iphone 10\" >
		<input type=\"radio\" name=\"item\" id=\"item3\" title=\"Iphone 11\" value=\"Iphone 11\" >
		<input type=\"radio\" name=\"item\" id=\"item4\" title=\"Iphone 12\" value=\"Iphone 12\" >
		
	</summary>
	<ul class=\"list\"> 
		<li class=\"list\">
			<label for=\"item1\">Iphone 8</label>
		</li>
		<li class=\"list\">
			<label for=\"item2\">Iphone 10</label>
		</li>
		<li class=\"list\">
			<label for=\"item3\">Iphone 11</label>
		</li>
		<li class=\"list\">
			<label for=\"item4\">Iphone 12</label>
		</li>
		<li class=\"list\">
			<label for=\"item5\">Iphone 13</label>
		</li>
	</ul>
</details>

<button type=\"submit\" class=\"btn\" name=\"add\"> Ajouter au panier </button>
<input type=\"hidden\" name=\"product_id\" value=\"$productid\">
</form>
<h3>Détail produit</h3><br>
<p>$lib</p>
</div>
</div>
</div>
 ";
 mysqli_close($con);
        echo $element;
        }
    

        function cartElement($productid, $productname, $productprice, $productimg, $idForm){
            $element = "
            <tr>
            <td>
                <div class=\"cart-info\">
                    <img src=\"$productimg\">
                    <div>
                        <p>Nom</p>
                        <small>Prix: 20.00€</small><br>
                        <a>Supprimer</a>
                    </div>
                </div>

            </td>
            <td><input type=\"number\" value=\"1\"></td>
            <td>20.00€</td>
        </tr>


        ";
        echo $element;
    }
?>

