<?php
session_start();
  // echo $_SESSION['email'];
   // echo $_SESSION['idClient']; 



?>

<?php


	include '../../Controller/Siwar/LivresC.php';
   //include '../soft-ui-dashboard-main/Livres/image';

    $LivreC = new LivreC();



    if (isset($_GET['search'])) {
      $listeLivres = $LivreC->Recherche($_GET['search']);
  } elseif (isset($_GET['tr'])) {
      $listeLivres = $LivreC->TriNom();
  }
  else {
    $listeLivres=$LivreC->AfficherLivres(); 
  }


   
?>
<!DOCTYPE html>
<html lang="en">
   <head>
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
   
   
   
   
   
   
   
   <!--------- FAZET IL BOOKS IL JDIDA 3D ------------------->
   <meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>3D Book Showcase</title>
		<meta name="description" content="3D Book Showcase with CSS 3D Transforms" />
		<meta name="keywords" content="3d transforms, css3 3d, book, jquery, open book, css transitions" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="fazit_il_3d/css/default.css" />
		<link rel="stylesheet" type="text/css" href="fazit_il_3d/css/component.css" />
		<script src="fazit_il_3d/js/modernizr.custom.js"></script>
   
   
      <style>
    /* Style for the shopping cart form */
    #cart {
        display: block;
        max-width: 300px; /* Adjust the width as needed */
        margin: 20px auto; /* Center the cart */
        padding: 20px;
        border: 1px solid #ccc; /* Border styling */
        border-radius: 8px; /* Rounded corners */
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    /* Style for the cart items list */
    #cart-items {
        list-style: none;
        padding: 0;
    }

    /* Style for the 'Proceed to Checkout' button */
    #cart button[type="submit"] {
        background-color: red;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
        margin-top: 10px;
    }

    /* Style for the total price paragraph */
    #totalPrice {
        margin-top: 10px;
        font-size: 16px;
    }

    /* Optional: Style for the heading */
    #cart h2 {
        font-size: 20px;
        margin-bottom: 10px;
    }
         
   
         .about-bg
         {
           
    background-image: linear-gradient(#b32137,#170f10);
    margin-top: 90px;
      }

      .Books {
  background-image: url("siwar2.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  background-color:bisque;
}
         
.form-control:hover
{
   background-color: #DCDCDC;
}

/* Define styles for the book title */
/* Sample CSS styles for the elements */
/* Sample CSS styles for the elements */
.bk-page .bk-content-current h2 center .author {
    font-weight: bold;
    font-style: italic;
    font-family: 'Brush Script MT', cursive; /* Change the font family to your preferred font */
    font-size: 24px;
    color: #b32137; /* Change this color to your desired text color */
    /* Add more styles as needed */
}

#nomliv {
    
    display:flex;
    justify-content: center;
    color:red;
    font-family: Copperplate, Papyrus, fantasy;
}




    </style>
   
   
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
                                 <li > <a href="index.php">Home</a> </li>
                                 <li> <a href="http://127.0.0.1:5000">ChatBot</a> </li>
                                 <li class="active"><a href="books - Copie.php">Our Books</a></li>
                                 <li><a href="reclamationC.php">Reclamer</a></li>
                                 <li><a href="contribution.php">Contribuer</a></li>
                                 <li class="mean-last"> <a href="changerprofil.php"><img src="images/top-icon.png" alt="#" /></a> </li>
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
                             
                  </div>
               </div>
            </div>
            <!--<a  class="btn btn-secondary" href="javascript:window.print()">Imprimer</a>-->

            <p>.</p>

            <form method="get"> 
					<input type="text" name="search" id="search" class="form-control" placeholder="Chercher un livre" style="border-radius:20px;">
				</form>



            <br><br>



<!---------------------------------------------------------------------------------------------------->
        
    
<div class="main">
   <!---------------------------------------------------------------------------------------------------->
   <button id="toggleCart"><img src="shopping.png" style="width:50px;height:50px; border-radius: 50% ; "></button> <br><br>
   <form id="cart" style="display: none; background-color:white;" action="panier.php" method="get" >
     
               <h2 style="color:red;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Shopping Cart</h2>
               <ul id="cart-items">
                  <!-- Cart items will be added here -->
               </ul>
               <hr>
               <p id="totalPrice">Total Price: </p>
               <button type="submit" style="margin:10px; background-color:red; font-family:Verdana, Geneva, Tahoma, sans-serif ; color:white; padding:5px ;margin:10px" >Proceed to Checkout</button>
           
       
            </form>


           
<!----------------------------------------------------------------------------------->

<br><br>

				<ul id="bk-list" class="bk-list clearfix grid">
         <?php
		
				foreach($listeLivres as $livre){
			?>

      
					<li >
						<div class="bk-book book-1 bk-bookdefault">
							<div class="bk-front">
								<div class="bk-cover-back"></div>
								<div class="bk-cover">
                        <img style="width: 100%; height: 100%; object-fit: cover;" src="../soft-ui-dashboard-main/Livres/image/<?php echo $livre['couverture']; ?>">
								</div>
                        
							</div>
							<div class="bk-page">
								<div class="bk-content bk-content-current">
                           <h2>
										<center><span class="author"><?php echo "Auteur : " . $livre['auteur']; ?></span></center>
										<span id="nomliv"><?php echo "<br><br><br>" . $livre['nom']; ?></span>
									</h2>
								
								</div>
								<div class="bk-content">
                        <p><?php echo $livre['description']; ?></p>
								</div>
								
							</div>
							<div class="bk-back">
                            <img src="fazit_il_3d/images/nous.jpg" alt="cat"  style="width: 100%; height: 100%; object-fit: cover;"/>		
      					</div>
							<div class="bk-right"></div>
							<div class="bk-left">
                     <img style="width: 100%; height: 100%; object-fit: cover;" src="../soft-ui-dashboard-main/Livres/image/<?php echo $livre['couverture']; ?>">

							</div>
							<div class="bk-top"></div>
							<div class="bk-bottom"></div>
						</div>
						<div class="bk-info">
							<button class="bk-bookback ">Flip</button>
							<button class="bk-bookview">View inside</button>

                     <form method="GET" action="library.php"   style="display: inline-block;">
                        <input type="submit"  class="btn btn-success btn-sm" name="voirdetails" value="Détails">
                        <input type="hidden"  value=<?php echo $livre['idL']; ?>  name="idL">  
					      </form>
							<h3>
								<span>
                        <del style="color:red;font-size:50px"> <?php echo $livre['prix']; ?>  </del>
                           <?php
                              $promotion = $LivreC->Recupererpromotion($livre['idP']);
                              $taux = $promotion['tauxRemise'];
                              //echo "$taux";
                              
                            ?>
                        <span style="color:#87CEFA	;font-size:50px ; margin-left:20px;"><?php echo "$taux"; ?>%</span>

                     
                     
                       </span>
								<span>
                               <?php
                                 $promotion = $LivreC->Recupererpromotion($livre['idP']);
                                 $taux = $promotion['tauxRemise'];
                                 $prixWithDiscount = $livre['prix'] * (1 - $taux / 100);
                                 $hasDiscount = $taux > 0;
                                 //echo "<td style='color:white;'" . ($hasDiscount ? "class='discounted-price'" :"") . ">$prixWithDiscount tnd</td>";

                               
                               ?>
                            
                              <td>
                              <span style="color:#7FFF00;font-size:50px; <?php echo ($hasDiscount ? 'class="discounted-price"' : ''); ?>">
                                 <?php echo "$prixWithDiscount tnd"; ?>
                              </span>
                              </td>



                               
                              <input type="number" id="quantity" value="1" min="1" >
                              <input type="hidden" value="<?php echo $livre['idL']; ?> " id="idl">
                              <input type="hidden" value="<?php echo $prixWithDiscount; ?> " id="prixliv">

                              <button id="cart-items" onclick="addToCart(this)"   style="margin:10px; background-color:red; font-family:Verdana, Geneva, Tahoma, sans-serif" > <img src="fazit_il_3d/images/1.webp" alt="cat"  style="width:30px;height:30px;margin:5px;"/> Add To Carts</button>
                              

                        </span>
							</h3>
						</div>
					</li>           
        
			<?php
				}
			?>
            
         </ul>
      </div>


<!--------------------------------------------------------------------------------------------------------------->
                
<script>

function addToCart(button) {
    var bookDetails = button.closest("li"); // Find the closest list item

    var idliv = bookDetails.querySelector("#idl").value;
    var nomliv = bookDetails.querySelector("span#nomliv").innerText;
    var prixliv = bookDetails.querySelector("#prixliv").value;
    var quantite = bookDetails.querySelector("#quantity").value;

    console.log(quantite);

    // Create a new cart item object
    var cartItem = {
        id: idliv,
        name: nomliv,
        price: prixliv,
        quantity: parseInt(quantite) // Ensure the quantity is parsed as an integer
    };

    // Get the cart container and add the item details to the cart
    var cartContainer = document.getElementById("cart-items");

    // Check if the item already exists in the cart
    var existingItem = Array.from(cartContainer.children).find(item => {
        return item.dataset.id === cartItem.id;
    });

    if (existingItem) {
        // Update quantity if the item already exists in the cart
        var existingQuantityElem = existingItem.querySelector(".cart-quantity");
        var cartQuantityText = existingQuantityElem.textContent;
        var existingQuantity = parseInt(cartQuantityText.substring(cartQuantityText.indexOf(":") + 1).trim());

        var newQuantity = existingQuantity + cartItem.quantity; // Adding quantity directly
        existingQuantityElem.textContent = "Quantity: " + newQuantity;

        existingItem.dataset.quantity = newQuantity; // Update the dataset property
    } else {
        // Create new list items for the new item and add them to the cart list
        var listItem = document.createElement("li");
        listItem.dataset.id = cartItem.id;
        listItem.dataset.quantity = cartItem.quantity; // Set the dataset property for quantity

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

        // Append list items to the cart list
        listItem.appendChild(idItem);
        listItem.appendChild(nameItem);
        listItem.appendChild(priceItem);
        listItem.appendChild(quantityItem);

        // Append the new item to the cart
        cartContainer.appendChild(listItem);
    }

    // Calculate the total price
    var cartItems = Array.from(cartContainer.children);
    var totalPrice = cartItems.reduce((total, item) => {
        var priceText = item.querySelector(".cart-price").textContent;
        var price = parseFloat(priceText.substring(priceText.indexOf(":") + 1).trim());
        var quantityText = item.querySelector(".cart-quantity").textContent;
        var quantity = parseInt(quantityText.substring(quantityText.indexOf(":") + 1).trim());
        return total + price * quantity; // Multiply price by quantity for each item
    }, 0);

    // Update total price display
    document.getElementById("totalPrice").textContent = "Total Price: " + totalPrice.toFixed(2);

    // Create input fields for the form
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

    var prixInput = document.createElement("input");
    prixInput.setAttribute("type", "hidden");
    prixInput.setAttribute("name", "prixtotal");
    prixInput.setAttribute("value", totalPrice);

    // Append the input fields to the form
    form.appendChild(idInput);
    form.appendChild(nameInput);
    form.appendChild(priceInput);
    form.appendChild(quantityInput);
    form.appendChild(prixInput);

    document.getElementById("cart").style.display = "block";
}

</script>

    
      
  <!-- Your HTML/PHP code -->

<!-- Cart display area -->
<script>
    // Function to toggle the display of the cart form
    function toggleCart() {
        var cart = document.getElementById('cart');
        if (cart.style.display === 'none') {
            cart.style.display = 'block';
        } else {
            cart.style.display = 'none';
        }
    }

    // Add click event listener to the toggle button
    document.getElementById('toggleCart').addEventListener('click', toggleCart);
</script>





      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>


<!---------------------- fazet il 3d ---------------------------------->

<script src="fazit_il_3d/js/jQuery -1.8.3.js"></script>
		<script src="fazit_il_3d/js/books1.js"></script>
		<script>
			$(function() {

				Books.init();

			});
		</script>


   </body>
   <style type="text/css">body { cursor: url('data:image/x-icon;base64,AAACAAEAICAAAAAAAACoEAAAFgAAACgAAAAgAAAAQAAAAAEAIAAAAAAAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/wAAAP8KCgr/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEBAQ/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAPjw9/AAAA/wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAZv//AGb//wBm//8AZv//AGb//wBm//8AZv//FEeU/wAAAP8AAAD/AAAA/wBm//8AZv//AGb//xQUFP8AAAD/AAAA/wAAAP8AZv//AGb//wBm//8AZv//AGb//wBm//8AZv//AAAA/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABm//8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP8AZv//AAAA/wAAAP8AAAD/AGb//xJFkf8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wBm//8AAAD/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGb//wAAAP8AAAD/////////////////////////////////////////////////AAAA////////////////////////////////////////////////////////////AGb//wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAZv//AAAA//////////////////////////////////////////////////////8AAAD/AAAA////////////////////////////////////////////AAAA//////8AZv//AAAA/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABm//8AAAD//////wAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP8AAAD//////wAAAP//////AAAA/wAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP///////////wBm//8AAAD/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGb//wAAAP//////AAAA////////////////////////////////////////////AAAA////////////////////////////////////////////////////////////AGb//wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAZv//AAAA//////8AAAD///////////////////////////////////////////8AAAD///////////////////////////////////////////////////////////8AZv//AAAA/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABm//8AAAD//////wAAAP///////////////////////////////////////////wAAAP///////////////////////////////////////////////////////////wBm//8AAAD/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGb//wAAAP//////AAAA////////////////////////////////////////////AAAA////////////////////////////////////////////////////////////AGb//wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAZv//AAAA//////8AAAD///////////////////////////////////////////8AAAD///////////////////////////////////////////////////////////8AZv//AAAA/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABm//8AAAD//////wAAAP///////////////////////////////////////////wAAAP///////////////////////////////////////////////////////////wBm//8AAAD/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGb//wAAAP//////AAAA////////////////////////////////////////////AAAA////////////////////////////////////////////////////////////AGb//wAAAP8AAAAAAAAAAAAAAAAAAAD/AAAAAAAAAAAAZv//AAAA//////8AAAD///////////////////////////////////////////8AAAD///////////////////////////////////////////////////////////8AZv//AAAA/wAAAAAAAAAAAAAAAAAAAP8AAAAAAAAAAABm//8AAAD//////wAAAP///////////////////////////////////////////wAAAP///////////////////////////////////////////////////////////wBm//8AAAD/AAAAAAAAAAAAAAD/AAAA/wAAAAAAAAAAAGb//wAAAP//////AAAA////////////////////////////////////////////AAAA////////////////////////////////////////////////////////////AGb//wAAAP8AAAAAAAAAAAAAAP8AAAD/AAAA/wAAAAAAZv//AGb///////8AAAD///////////////////////////////////////////8AAAD//////////////////////////////////////////////////////wAAAP8AZv//AAAA/wAAAAAAAAAAAAAA/wAAAP8AAAD/AAAAAAAAAAAAAAAAAAAA/wAAAP///////////////////////////////////////////wAAAP//////////////////////////////////////////////////////AAAA/xOSE38AAAAAAAAAAAAAAAAAAAD/AAAA/wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAA//////////////////////////////////////8AAAD/AAAAAAAAAP///////////////////////////////////////////wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP8AAAD/AAAA/wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAAAAAAAAAAAAAAAAAAAAAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAANDQ3/AAAA/wAAAP8AAAD/AGb//wBm//8AZv//AGb//wAAAP8AAAD/AAAA/w2NDX8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP8AAAD/AAAA/wBm//8AZv//AGb//wBm//8AZv//AGb//wBm//8AAAD/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/wAAAP8AAAD/AGb//wBm//8AZv//AGb//wBm//8AAAD/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/AAAA/wBm//8AZv//AGb//wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP8AZv//AGb//wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/yQkJP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA///////////////////////////8f9/8/AAAAPwAAAD8AAAA/AAAAPwAAAD8AAAA/AAAAPwAAAD8AAAA/AAAAPwAAAD8AAAA7AAAAOwAAADMAAAAxAAAAMcAAAPHgCAHw+B4H4AP//+AD///gD///4H///+H////n/////////8='), auto; }</style>
</html>
