<?php
<<<<<<< Updated upstream
	include '../../Controller/Siwar/LivresC.php';
   //include '../soft-ui-dashboard-main/Livres/image';

=======


	include '../../Controller/Siwar/LivresC.php';
   //include '../soft-ui-dashboard-main/Livres/image';
   session_start();
>>>>>>> Stashed changes

    $LivreC = new LivreC();



    if (isset($_GET['search'])) {
      $listeLivres = $LivreC->Recherche($_GET['search']);
  } elseif (isset($_GET['tr'])) {
      $listeLivres = $LivreC->TriNom();
  }
  else {
    $listeLivres=$LivreC->AfficherLivres(); 
  }


<<<<<<< Updated upstream
	 
=======
>>>>>>> Stashed changes
   
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- books siwar -->

<!-- l3onwen  -->


<style>



    @import url('https://fonts.googleapis.com/css2?family=Laurel+Comics|Comic+Sans+MS&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Daniel&display=swap');

    


    
.red-bordeaux-text {
            color: #800020; /* Code couleur pour le rouge bordeaux */
            font-size: 18px; /* Taille de la police */
            font-family: 'Votre Police', sans-serif; /* Remplacez 'Votre Police' par le nom de votre police */
        }

        
      

.black-daniel-text {
    color: black; /* Couleur noire */
    font-size: 24px; /* Taille de la police */
    font-family: 'Daniel', sans-serif; /* Police Daniel */
}
        
.black-laurel-text {
    color: black; /* Couleur noire */
    font-size: 24px; /* Taille de la police */
    font-family: 'Laurel Comics', 'Comic Sans MS', sans-serif; /* Police Laurel Comics avec secours Comic Sans MS */
}
   .Books {
      overflow: hidden;
   }

   .book-container {
      display: flex;
      overflow-x: scroll;
      scroll-snap-type: x mandatory;
      white-space: nowrap;
   }

   .book-box {
      flex:0 0  300px ;
      scroll-snap-align: start;
      margin-right: 50px; /* Espace entre les livres */
   }

   .arrow-right {
      cursor: pointer;
   }
</style>




      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>nous books</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout Books-bg">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo"> <a href="index.html"><img src="images/logo.png" alt="#"></a> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <ul class="menu-area-main">
                                 <li > <a href="index.html">Home</a> </li>
                                 <li> <a href="about.html">About us</a> </li>
                                 <li class="active"><a href="books.html">Our Books</a></li>
                                 <li><a href="library.html">library</a></li>
                                 <li><a href="contact.html">Contact us</a></li>
                                 <li class="mean-last"> <a href="#"><img src="images/search_icon.png" alt="#" /></a> </li>
                                 <li class="mean-last"> <a href="#"><img src="images/top-icon.png" alt="#" /></a> </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
      <div class="about-bg">
         <div class="container">
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <div class="abouttitle">
                     <h2>Our Books</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
     
     
     
     
     
      <!--Books -->
      <div class="Books">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage">
                     <span>نحن لمعرفة جديدة</span>
                             
                  </div>
               </div>
            </div>
            <a class="btn btn-secondary" href="books.php?tr=y" role="button">Tri Nom</a>
            <a  class="btn btn-secondary" href="javascript:window.print()">Imprimer</a>

            <p>.</p>

            <form method="get"> 
					<input type="text" name="search" id="search" class="form-control" placeholder="Chercher un livre">
				</form>

            <table class="table align-items-center justify-content-center mb-0">
                <thead>
			<tr>
           <!--<h1><th>Couverture</th></h1>
				<th>Nom</th>	
				<th>Auteur</th>
            <th>Prix</th>
            <th>Promotion</th>
            <th>Prix avec remise</th>
				<!--<th>Stock</th>-->
				<!--<th>Description</th>
<<<<<<< Updated upstream
            <th>Voir Détails</th>-->
			</tr>
			</thead>
=======
            <th>Voir Détails</th>-->*

			</tr>
			</thead>
  
      <form id="cart" style="display: none;" action="panier.php" method="get">
  <h2>Shopping Cart</h2>
  <ul id="cart-items">
    <!-- Cart items will be added here -->
  </ul>
  <p id="totalPrice">Total Price: </p>
  <button type="submit">Proceed to Checkout</button>
</form>


      
      

>>>>>>> Stashed changes
      <?php
		
				foreach($listeLivres as $livre){
			?>
                  <tr>
            <h1><td><img style="max-width: 50%;max-height=50%" src="../soft-ui-dashboard-main/Livres/image/<?php echo $livre['couverture']; ?>"></td></h1>
<<<<<<< Updated upstream
            <td class="black-laurel-text"><?php echo $livre['nom']; ?></td>
=======
            <td class="black-laurel-text" id="nomliv"><?php echo $livre['nom']; ?></td>
>>>>>>> Stashed changes
            <!--<td><?php echo $livre['nom']; ?></td>-->
				<td class="banana-yellow-text"><?php echo $livre['auteur']; ?></td>
            <td><del><?php echo $livre['prix']; ?></del></td>
            <td><?php
          $promotion = $LivreC->Recupererpromotion($livre['idP']);
          $taux = $promotion['tauxRemise'];
          echo "$taux";
        ?>%</td>
        <td>
          <?php
          $promotion = $LivreC->Recupererpromotion($livre['idP']);
          $taux = $promotion['tauxRemise'];
          $prixWithDiscount = $livre['prix'] * (1 - $taux / 100);
          $hasDiscount = $taux > 0;
          echo "<td" . ($hasDiscount ? "class='discounted-price'" :"") . ">$prixWithDiscount tnd</td>";
          ?>
<<<<<<< Updated upstream
=======
          
>>>>>>> Stashed changes
        </td>
        
				<!--<td><?php echo $livre['stock']; ?></td>--->
				<!--<td><?php echo $livre['description']; ?></td>--->
            <td>
					<form method="GET" action="library.php">
						<input type="submit"  class="btn btn-success btn-sm" name="voirdetails" value="Détails">
						<input type="hidden"  value=<?php echo $livre['idL']; ?>  name="idL">  
					</form>
				</td>
<<<<<<< Updated upstream
=======

             <td>
              <div>
                       <input type="number" id="quantity" value="1" min="1" >
               </div>

      
             </td>

            <td>
            <input type="button" id="cart-items" value="Add To Cart" onclick="addToCart(this)">        
             </td>
             <td>
              <input type="hidden" value="<?php echo $livre['idL']; ?> " id="idl">
              <input type="hidden" value="<?php echo $prixWithDiscount; ?> " id="prixliv">

              </td>
            
         
 

>>>>>>> Stashed changes
			</tr>
			<?php
				}
			?>
<<<<<<< Updated upstream
                </table>
         </div>
      </div>
      <!-- end Books -->
      <!-- footer -->
      <!--
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row pdn-top-30">
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                     <div class="Follow">
                        <h3>Follow Us</h3>
                     </div>
                     <ul class="location_icon">
                        <li> <a href="#"><img src="icon/facebook.png"></a></li>
                        <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                        <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                        <li> <a href="#"><img src="icon/instagram.png"></a></li>
                     </ul>
                  </div>
                  <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                     <div class="Follow">
                        <h3>Newsletter</h3>
                     </div>
                     <input class="Newsletter" placeholder="Enter your email" type="Enter your email">
                     <button class="Subscribe">Subscribe</button>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free html Templates</a></p>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
=======
  
                </table>

   








<script>

function addToCart(button) {
var row = button.parentNode.parentNode; // Get the parent row of the button clicked
var idliv = row.querySelector("#idl").value;
var nomliv = row.querySelector("#nomliv").innerText;
var prixliv = row.querySelector("#prixliv").value;
var quantite = row.querySelector("#quantity").value;

// Create a new cart item object
var cartItem = {
id: idliv,
name: nomliv,
price: prixliv,
quantity: quantite 
};

// Get the cart container and add the item details to the cart
var cartContainer = document.getElementById("cart-items");

// Create list items for each variable and add them to the cart list
// Check if the item already exists in the cart

var existingItem = Array.from(cartContainer.children).find(item => {
return item.dataset.id === cartItem.id;
});

if (existingItem) { 

// Update quantity if the item already exists in the cart
var existingQuantityElem = existingItem.querySelector(".cart-quantity");
var cartQuantityText = existingQuantityElem.textContent;
var existingQuantity = parseInt(cartQuantityText.substring(cartQuantityText.indexOf(":") + 1).trim());

var newQuantity = existingQuantity + parseInt(cartItem.quantity);
existingQuantityElem.textContent = "Quantity: " + newQuantity;






parseInt( existingItem.querySelector(".cart-quantity")).textContent = newQuantity;
console.log(newQuantity);


//price now
var existingpriceelem = existingItem.querySelector(".cart-price");
var cartPriceText = existingpriceelem.textContent;
var existingprice = parseInt(cartPriceText.substring(cartPriceText.indexOf(":") + 1).trim());
var newPrice = existingprice + parseInt(cartItem.price);
existingpriceelem.textContent = "Price: " + newPrice;
parseInt( existingItem.querySelector(".cart-price")).textContent = newPrice;



} else {
// Create new list items for the new item and add them to the cart list
var listItem = document.createElement("li");
listItem.dataset.id = cartItem.id;

var idItem = document.createElement("p");
idItem.textContent = "ID: " + cartItem.id;

var nameItem = document.createElement("p");
nameItem.textContent = "Name: " + cartItem.name;

var priceItem = document.createElement("p");
priceItem.textContent = "Price: " + cartItem.price;
priceItem.classList.add("cart-price");

var quantityItem = document.createElement("p");
quantityItem.textContent = "Quantity: " + cartItem.quantity;
quantityItem.classList.add("cart-quantity");
console.log(cart-quantity);


// Append list items to the cart list
listItem.appendChild(idItem);
listItem.appendChild(nameItem);
listItem.appendChild(priceItem);
listItem.appendChild(quantityItem);

// Append the new item to the cart
cartContainer.appendChild(listItem);
}

var cartItems = Array.from(cartContainer.children);
var totalPrice = cartItems.reduce((total, item) => {
var priceText = item.querySelector(".cart-price").textContent;
var price = parseInt(priceText.substring(priceText.indexOf(":") + 1).trim());
return total + price;
}, 0);

// Update total price display
document.getElementById("totalPrice").textContent = "Total Price: " + totalPrice;

/*****************************************/
var form = document.getElementById("cart");

var idInput = document.createElement("input");
idInput.setAttribute("type", "hidden");
idInput.setAttribute("name", "id[]");
idInput.setAttribute("value", cartItem.id);

var nameInput = document.createElement("input");
nameInput.setAttribute("type", "hidden");
nameInput.setAttribute("name", "name[]");
nameInput.setAttribute("value", cartItem.name);

var priceInput = document.createElement("input");
priceInput.setAttribute("type", "hidden");
priceInput.setAttribute("name", "price[]");
priceInput.setAttribute("value", cartItem.price);


var quantityInput = document.createElement("input");
quantityInput.setAttribute("type", "hidden");
quantityInput.setAttribute("name", "quantity[]");
quantityInput.setAttribute("value", cartItem.quantity);


var prixinput = document.createElement("input");
prixinput.setAttribute("type", "hidden");
prixinput.setAttribute("name", "prixtotal");
prixinput.setAttribute("value", totalPrice);

// Append the input fields to the form
form.appendChild(idInput);
form.appendChild(nameInput);
form.appendChild(priceInput);
form.appendChild(quantityInput);
form.appendChild(prixinput);


document.getElementById("cart").style.display = "block";

}
</script>

<?php


echo $_SESSION['email'];
echo $_SESSION['idClient'];




?>

               
      
  <!-- Your HTML/PHP code -->

<!-- Cart display area -->





>>>>>>> Stashed changes
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>
