

<!DOCTYPE html>
<html lang="en">
   <link rel="stylesheet" href="{{ url_for('static', filename='style.css') }}">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Nous Edition</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ url_for('static', filename='css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ url_for('static', filename='css/style.css') }}">
<link rel="stylesheet" href="{{ url_for('static', filename='css/responsive.css') }}">
<link rel="stylesheet" href="{{ url_for('static', filename='css/jquery.mCustomScrollbar.min.css') }}">

      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout home_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{ url_for('static', filename='images/loading.gif') }}" type="image/gif" alt="#" /></div>
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
                           <div class="logo"> <a href="index.html"><img src="{{ url_for('static', filename='images/logo.png') }}" alt="#"></a> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <ul class="menu-area-main">
                                 <li class="active"> <a href=""></a> </li>
                                 <li> <a href=""></a> </li>
                                 <li><a href=""></a></li>
                                 <li><a href="http://localhost:3000/View/memorial/index.php">Revenir a la page d'acceuil</a></li>
                                 <li><a href=""></a></li>
                                 <li><a href=""></a></li>
                                 <li class="mean-last"> <a href="#"><img src="{{ url_for('static', filename='images/search_icon.png') }}" alt="#" /></a> </li>
                                 <li class="mean-last"> <a href="#"><img src="{{ url_for('static', filename='images/top-icon.png') }}" alt="#" /></a> </li>
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
      <section class="slider_section">
         <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="First slide" src="{{ url_for('static', filename='images/CHATBOT.jpg') }}" alt="First slide">
                  
               </div>
               
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
      </section>
      <!-- about -->
      
      <!-- end about -->
      <!-- Library -->
      
            
         </div>
      </div>
      <!-- end Books -->
      <!-- Contact -->
      

      <div class="container">
         <div class="chatbox">
             <div class="chatbox__support">
                 <div class="chatbox__header">
                     <div class="chatbox__image--header">
                        <img src="https://img.icons8.com/color/48/000000/circled-user-female-skin-type-5--v1.png" alt="image">

                     </div>
                     <div class="chatbox__content--header">
                         <h4 class="chatbox__heading--header">Chat support</h4>
                         <p class="chatbox__description--header">Bonjour, je suis Nous Bot ! Comment puis-je vous aider ?</p>
                     </div>
                 </div>
                 <div class="chatbox__messages">
                     <div></div>
                 </div>
                 <div class="chatbox__footer">
                     <input type="text" placeholder="Write a message...">
                     <button class="chatbox__send--footer send__button">Send</button>
                 </div>
             </div>
             <div class="chatbox__button">
                 <button><img src="{{ url_for('static', filename='images/chatbox-icon.svg') }}" /></button>
             </div>
         </div>
     </div>
     
         <script>
             $SCRIPT_ROOT = {{ request.script_root|tojson }};
         </script>
         <script type="text/javascript" src="{{ url_for('static', filename='app.js') }}"></script>
     
      <!-- end Contact -->
      <!-- footer -->
      
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{ url_for('static', filename='js/jquery.min.js') }}"></script>
      <script src="{{ url_for('static', filename='js/popper.min.js') }}"></script>
      <script src="{{ url_for('static', filename='js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ url_for('static', filename='js/jquery-3.0.0.min.js') }}"></script>
      <script src="{{ url_for('static', filename='js/plugin.js') }}"></script>
      <script src="{{ url_for('static', filename='js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ url_for('static', filename='js/custom.js') }}"></script>
      
   </body>
</html>


<!-- CURSORSSS -->

<style type="text/css">body { cursor: url('data:image/x-icon;base64,AAACAAEAICAAAAAAAACoEAAAFgAAACgAAAAgAAAAQAAAAAEAIAAAAAAAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/wAAAP8KCgr/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEBAQ/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAPjw9/AAAA/wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAZv//AGb//wBm//8AZv//AGb//wBm//8AZv//FEeU/wAAAP8AAAD/AAAA/wBm//8AZv//AGb//xQUFP8AAAD/AAAA/wAAAP8AZv//AGb//wBm//8AZv//AGb//wBm//8AZv//AAAA/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABm//8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP8AZv//AAAA/wAAAP8AAAD/AGb//xJFkf8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wBm//8AAAD/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGb//wAAAP8AAAD/////////////////////////////////////////////////AAAA////////////////////////////////////////////////////////////AGb//wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAZv//AAAA//////////////////////////////////////////////////////8AAAD/AAAA////////////////////////////////////////////AAAA//////8AZv//AAAA/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABm//8AAAD//////wAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP8AAAD//////wAAAP//////AAAA/wAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP///////////wBm//8AAAD/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGb//wAAAP//////AAAA////////////////////////////////////////////AAAA////////////////////////////////////////////////////////////AGb//wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAZv//AAAA//////8AAAD///////////////////////////////////////////8AAAD///////////////////////////////////////////////////////////8AZv//AAAA/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABm//8AAAD//////wAAAP///////////////////////////////////////////wAAAP///////////////////////////////////////////////////////////wBm//8AAAD/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGb//wAAAP//////AAAA////////////////////////////////////////////AAAA////////////////////////////////////////////////////////////AGb//wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAZv//AAAA//////8AAAD///////////////////////////////////////////8AAAD///////////////////////////////////////////////////////////8AZv//AAAA/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABm//8AAAD//////wAAAP///////////////////////////////////////////wAAAP///////////////////////////////////////////////////////////wBm//8AAAD/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGb//wAAAP//////AAAA////////////////////////////////////////////AAAA////////////////////////////////////////////////////////////AGb//wAAAP8AAAAAAAAAAAAAAAAAAAD/AAAAAAAAAAAAZv//AAAA//////8AAAD///////////////////////////////////////////8AAAD///////////////////////////////////////////////////////////8AZv//AAAA/wAAAAAAAAAAAAAAAAAAAP8AAAAAAAAAAABm//8AAAD//////wAAAP///////////////////////////////////////////wAAAP///////////////////////////////////////////////////////////wBm//8AAAD/AAAAAAAAAAAAAAD/AAAA/wAAAAAAAAAAAGb//wAAAP//////AAAA////////////////////////////////////////////AAAA////////////////////////////////////////////////////////////AGb//wAAAP8AAAAAAAAAAAAAAP8AAAD/AAAA/wAAAAAAZv//AGb///////8AAAD///////////////////////////////////////////8AAAD//////////////////////////////////////////////////////wAAAP8AZv//AAAA/wAAAAAAAAAAAAAA/wAAAP8AAAD/AAAAAAAAAAAAAAAAAAAA/wAAAP///////////////////////////////////////////wAAAP//////////////////////////////////////////////////////AAAA/xOSE38AAAAAAAAAAAAAAAAAAAD/AAAA/wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAA//////////////////////////////////////8AAAD/AAAAAAAAAP///////////////////////////////////////////wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP8AAAD/AAAA/wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAAAAAAAAAAAAAAAAAAAAAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAANDQ3/AAAA/wAAAP8AAAD/AGb//wBm//8AZv//AGb//wAAAP8AAAD/AAAA/w2NDX8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP8AAAD/AAAA/wBm//8AZv//AGb//wBm//8AZv//AGb//wBm//8AAAD/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/wAAAP8AAAD/AGb//wBm//8AZv//AGb//wBm//8AAAD/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/AAAA/wBm//8AZv//AGb//wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP8AZv//AGb//wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/yQkJP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA///////////////////////////8f9/8/AAAAPwAAAD8AAAA/AAAAPwAAAD8AAAA/AAAAPwAAAD8AAAA/AAAAPwAAAD8AAAA7AAAAOwAAADMAAAAxAAAAMcAAAPHgCAHw+B4H4AP//+AD///gD///4H///+H////n/////////8='), auto; }</style>
