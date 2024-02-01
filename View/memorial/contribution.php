<<<<<<< Updated upstream
=======
<?php
session_start();
//echo $_SESSION['email'];
//echo $_SESSION['idClient']; 


?>
>>>>>>> Stashed changes
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
      <title>memorial books</title>
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
   <style>

.Contact {
<<<<<<< Updated upstream
   background-image: url('image.jpg'); /* Add the path to your image */
=======
   background-image: url('contrib.jpg'); /* Add the path to your image */
>>>>>>> Stashed changes
   background-size: cover; /* Adjust as needed */
   background-repeat: no-repeat; /* Adjust as needed */
   /* Other styles for the contact section */
   padding: 40px 0; /* Adjust padding as needed */
}

.contact-form {
   background-color: rgba(240, 240, 240, 0.8); /* Fallback color if image doesn't load */
   padding: 20px; /* Adjust padding as needed */
   border-radius: 8px; /* Adjust border-radius as needed */
   /* Add any other styling you require for the form container */
}


      /* A77A1 */
#book_categories {
  width: 100%;
  height: 150px; /* el toul */
  border: 1px solid #ccc;
  border-radius: 4px;
  padding: 5px;
  box-sizing: border-box;
  font-size: 14px;
  margin-bottom: 10px;
  overflow-y: auto; /* scroll */
}

/* A77A1 */
#book_categories option {
  padding: 5px;
}

/* A77A2*/
#book_categories option:checked {
  background-color: #e0e0e0;
  font-weight: bold;
}


    /* Hide the original select element */
    #selected_category {
        display: none;
    }

    .Contact {
        background-color: #f0f0f0; /* Change this color to the one you prefer */
    }
    
    .Contact .container {
        background-color: rgba(240, 240, 240, 0.5); /* Change this color to the one you prefer */
    }

    .contact-form {
        background-color: #f0f0f0; /* Change this color to the one you prefer */
    }

   </style>
   
   </head>
   <!-- body -->
   <body class="main-layout contact-page">
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
<<<<<<< Updated upstream
                                 <li > <a href="index.html">Home</a> </li>
                                 <li> <a href="about.html">About us</a> </li>
                                 <li><a href="books.html">Our Books</a></li>
                                 <li><a href="library.html">library</a></li>
                                 <li><a href="panier.html">panier</a></li>
                                 <li class="active"><a href="contact.html">Contribuer</a></li>
                                 <li class="mean-last"> <a href="#"><img src="images/search_icon.png" alt="#" /></a> </li>
                                 <li class="mean-last"> <a href="#"><img src="images/top-icon.png" alt="#" /></a> </li>
=======
                                 <li > <a href="index.php">Home</a> </li>
                                 <li><a href="books - Copie.php">Our Books</a></li>
                                 <li><a href="http://127.0.0.1:5000">ChatBot</a></li>
                                 <li> <a href="reclamationC.php">Reclamer</a> </li>
                                 <li class="active"><a href="contribution.php">Contribuer</a></li>
                                 <li class="mean-last"> <a href="changerprofil.php"><img src="images/top-icon.png" alt="#" /></a> </li>
>>>>>>> Stashed changes
                              </ul>
                           </nav>
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
                     <h2>Contribuer par l'un de vos livres !</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- EL FORM HNE YA 7SIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIN -->


      <div class="Contact">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="contact-form">
                    <form id="myForm" method="POST" action="/Controller/processform.php" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <input class="form-control" placeholder="Nom" name="name" type="text">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
<<<<<<< Updated upstream
                                <input class="form-control" placeholder="Email" name="email" type="Email">
=======
                            <input class="form-control" placeholder="Email" name="email" type="Email" value="<?php echo $_SESSION['email'];?> " readonly>
>>>>>>> Stashed changes
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <input class="form-control" placeholder="Numero tel" name="phone_nu" type="text">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <input class="form-control" placeholder="Adresse" name="subject" type="text">
                            </div>
                            <div class="col-sm-12">
                                <textarea class="textarea" name="message" placeholder="Veuillez mettre une description bréve de votre livre ici"></textarea>
                            </div>
                            <div class="col-sm-12">
                            <label for="categ">Category :</label>
                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                <label for="selected_category"></label>
                                <select id="selected_category" name="selected_category">
                                    <?php
                            // Establish database connection
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "nous editions";

                            try {
                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                // Retrieve categories from the database
                                $stmt = $conn->prepare("SELECT category_id, category_name FROM category_table");
                                $stmt->execute();
                                $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                // Display categories as options
                                foreach ($categories as $category) {
                                    $optionValue = $category['category_id'] . '|' . $category['category_name']; // Concatenating ID and name
                                    echo "<option value='" . $optionValue . "'>" . $category['category_name'] . "</option>";
                                }
                            } catch (PDOException $e) {
                                echo "Connection failed: " . $e->getMessage();
                            }
                            ?>
                                </select>
                                </div>
                                <div class="col-sm-12">
                                <label for="facebook_link">Facebook Link:</label>
                                <input class="form-control" placeholder="Facebook Link" name="facebook_link" type="text">
                            </div>
                            </div>

                            
                            
                            
                            <div class="col-sm-12 mt-3">
                                <label for="myfile">Select a file (preferably a .word file):</label>
                                <div class="input-group">
                                    <input type="file" id="myfile" name="myfile" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 mt-3">
                                <div class="text-center">
                                    <button class="send-btn" type="submit">Submit File</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <p id="error-message" style="color: red; font-size: 1.2em; text-align: center; display: none;">Not all fields filled.</p>
                </div>
            </div>
        </div>
    </div>
</div>
     
      <!-- footer -->
      
      <!-- end footer -->
      <!-- Javascript files-->

      <script>
    document.getElementById('myForm').addEventListener('submit', function(event) {
        var inputs = document.querySelectorAll('#myForm input:not([type="file"]), #myForm textarea');
        var select = document.getElementById('selected_category');
        var errorMessage = document.getElementById('error-message');
        var filled = true;

        // Check if any input or textarea is empty
        inputs.forEach(function(input) {
            if (input.value.trim() === '') {
                filled = false;
                return;
            }
        });

        // Check if select is not selected
        if (select.value === '') {
            filled = false;
        }

        if (!filled) {
            event.preventDefault(); // Prevent form submission
            errorMessage.style.display = 'block'; // Display error message
        } else {
            errorMessage.style.display = 'none'; // Hide error message if all fields are filled
        }
    });
</script>

<script>
    document.getElementById('myForm').addEventListener('submit', function(event) {
        var fileInput = document.getElementById('myfile');
        var errorMessage = document.getElementById('error-message');
        var fileSizeLimitMB = 40; // Set the file size limit in MB

        // Check file size
        if (fileInput.files.length > 0) {
            var fileSize = fileInput.files[0].size; // in bytes
            var fileSizeMB = fileSize / (1024 * 1024); // Convert bytes to MB
            if (fileSizeMB > fileSizeLimitMB) {
                event.preventDefault(); // Prevent form submission
                errorMessage.textContent = 'File size should be less than ' + fileSizeLimitMB + 'MB.';
                errorMessage.style.display = 'block'; // Display error message
            } else {
                errorMessage.style.display = 'none'; // Hide error message if file size is within limit
            }
        }
    });
</script>




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




<!-- CURSORSSS -->

<style type="text/css">body { cursor: url('data:image/x-icon;base64,AAACAAEAICAAAAAAAACoEAAAFgAAACgAAAAgAAAAQAAAAAEAIAAAAAAAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/wAAAP8KCgr/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEBAQ/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAPjw9/AAAA/wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAZv//AGb//wBm//8AZv//AGb//wBm//8AZv//FEeU/wAAAP8AAAD/AAAA/wBm//8AZv//AGb//xQUFP8AAAD/AAAA/wAAAP8AZv//AGb//wBm//8AZv//AGb//wBm//8AZv//AAAA/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABm//8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP8AZv//AAAA/wAAAP8AAAD/AGb//xJFkf8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wBm//8AAAD/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGb//wAAAP8AAAD/////////////////////////////////////////////////AAAA////////////////////////////////////////////////////////////AGb//wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAZv//AAAA//////////////////////////////////////////////////////8AAAD/AAAA////////////////////////////////////////////AAAA//////8AZv//AAAA/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABm//8AAAD//////wAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP8AAAD//////wAAAP//////AAAA/wAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP///////////wBm//8AAAD/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGb//wAAAP//////AAAA////////////////////////////////////////////AAAA////////////////////////////////////////////////////////////AGb//wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAZv//AAAA//////8AAAD///////////////////////////////////////////8AAAD///////////////////////////////////////////////////////////8AZv//AAAA/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABm//8AAAD//////wAAAP///////////////////////////////////////////wAAAP///////////////////////////////////////////////////////////wBm//8AAAD/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGb//wAAAP//////AAAA////////////////////////////////////////////AAAA////////////////////////////////////////////////////////////AGb//wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAZv//AAAA//////8AAAD///////////////////////////////////////////8AAAD///////////////////////////////////////////////////////////8AZv//AAAA/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABm//8AAAD//////wAAAP///////////////////////////////////////////wAAAP///////////////////////////////////////////////////////////wBm//8AAAD/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGb//wAAAP//////AAAA////////////////////////////////////////////AAAA////////////////////////////////////////////////////////////AGb//wAAAP8AAAAAAAAAAAAAAAAAAAD/AAAAAAAAAAAAZv//AAAA//////8AAAD///////////////////////////////////////////8AAAD///////////////////////////////////////////////////////////8AZv//AAAA/wAAAAAAAAAAAAAAAAAAAP8AAAAAAAAAAABm//8AAAD//////wAAAP///////////////////////////////////////////wAAAP///////////////////////////////////////////////////////////wBm//8AAAD/AAAAAAAAAAAAAAD/AAAA/wAAAAAAAAAAAGb//wAAAP//////AAAA////////////////////////////////////////////AAAA////////////////////////////////////////////////////////////AGb//wAAAP8AAAAAAAAAAAAAAP8AAAD/AAAA/wAAAAAAZv//AGb///////8AAAD///////////////////////////////////////////8AAAD//////////////////////////////////////////////////////wAAAP8AZv//AAAA/wAAAAAAAAAAAAAA/wAAAP8AAAD/AAAAAAAAAAAAAAAAAAAA/wAAAP///////////////////////////////////////////wAAAP//////////////////////////////////////////////////////AAAA/xOSE38AAAAAAAAAAAAAAAAAAAD/AAAA/wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAA//////////////////////////////////////8AAAD/AAAAAAAAAP///////////////////////////////////////////wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP8AAAD/AAAA/wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAAAAAAAAAAAAAAAAAAAAAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAANDQ3/AAAA/wAAAP8AAAD/AGb//wBm//8AZv//AGb//wAAAP8AAAD/AAAA/w2NDX8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP8AAAD/AAAA/wBm//8AZv//AGb//wBm//8AZv//AGb//wBm//8AAAD/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/wAAAP8AAAD/AGb//wBm//8AZv//AGb//wBm//8AAAD/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/AAAA/wBm//8AZv//AGb//wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP8AZv//AGb//wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/yQkJP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA///////////////////////////8f9/8/AAAAPwAAAD8AAAA/AAAAPwAAAD8AAAA/AAAAPwAAAD8AAAA/AAAAPwAAAD8AAAA7AAAAOwAAADMAAAAxAAAAMcAAAPHgCAHw+B4H4AP//+AD///gD///4H///+H////n/////////8='), auto; }</style>