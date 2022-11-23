<!DOCTYPE html>
<html lang = "en">
    <head> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" sizes="16x16" href="img/bk_logo1.png">
        <link rel="stylesheet" href="html_layout.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <title> BK Company </title>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm" style ="background-color: darkkhaki">
        <div class="top-left-part">
            <b>
                <img src="img/bk_logo1.png" alt="home" style="float:left;width:140px;padding-right: 10px;" >
            </b>
              <h1 style="color: white;"> BK Company LTC.</h1>
        </div>
        
    </nav>

          <nav class="navbar navbar-expand-sm justify-content-left" style ="background-color: grey">
            <div class="navbar-header"> 
                <!-- <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-bars"></i>
                </a> -->
                
              
                <ul class="nav navbar-top-links navbar-left m-l-20 hidden-xs" >
                   
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="?page=home">Home</a>
                      </li>
                     
                      <li class="nav-item">
                        <a class="nav-link text-white" href="?page=product">Product</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white" href="?page=contact">Contact</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white" href="?page=contact"><?php include ('login_processing.php'); echo "Hi, " .$_SESSION['user'] ; ?></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white" href="logout.php">Logout</a>
                      </li>
                </ul>
          </nav>
      <div class ="row">
      <div class="container pt-5 p-5 my-5" style = "background-color: khaki">
  <h1>Create NEW FUTURE</h1>
  <p>Designed and built with all the love in the world by the Bootstrap team with the help of our contributors.</p>
  <p>Designed and built with all the love in the world by the Bootstrap team with the help of our contributors.</p>
</div>

      </div>
      <div class = "row pt-5 p-5 my-2">
     <div class = "col-lg-4 col-md-4 col-sm-12 col-xs-12">
     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/la2.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/la3.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/la2.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>  
    </div>
    <div class ="col-lg-6 col-md-6 col-sm-12 col-xs-12"> 
        <h1> Cities are near to us </h1>
        <p>The world is home to some 4,416 cities - from the crumbling grandeur of Rome to the bristling, ultra-modern towers of Shanghai. It includes tiny Adamstown, a microscopic settlement in the Pitcairn Islands with a population of only 48; it includes Venice, a floating city laced by idyllic canals and breathtaking palazzos. And like the people who inhabit them, each has its own distinctive personality, allure, photo-worthy moments, and reasons to pay them a visit. Here, in our humble opinion, are the world’s most beautiful cities.</p>
      </div>
      </div>
</div>
    <div class = "row pt-5 p-5 my-2"> 
      <div class = "col-lg-4 col-md-4 col-sm-12 col-xs-12"> 
        <h1 style="font-family: Arial, Helvetica, sans-serif; font-style: italic;"> "Go Wherever You Want" </h1> </div>
        <div class = "col-lg-8 col-md-8 col-sm-12 col-xs-12"> 
        <img class="d-block w-50" src="img/col3.webp"> </div>
        <div class = "container pt-3 p-1 my-2"> 
        <p> While Rome may get the credit for being Italy's most historic city, 
          Florence holds the flame for sheer, unadulterated Italian beauty. 
          A walk down any cobblestone street will reveal astonishing piazzas and cathedrals—and the skyline dominating the cathedral of Santa Maria del Fiore is a cannot-miss. Also a must-see? The museums and galleries packed to the rafters with some of the world’s most exquisite, 
          and enduring, art; not least Michelangelo’s iconic David, poised beneath a specially designed portal to the heavens themselves.</p> 
        </div>
      </div>

    </div>
     <div class = "my-0"> 
      <footer class = "text-center text-lg-start text-white" style ="background-color: grey "> 
      <div class = "container p-1 pb-0">
      <section class="">
        <p class="d-flex justify-content-center align-items-center">
          
          <button type="button" class="btn btn-outline-light btn-rounded">
            license
          </button>
          <a
           class="btn btn-outline-light btn-floating m-1"
           href="#!"
           role="button"
           ><i class="fa fa-android"></i
          >Tel: 0123456789</a>
        </p>
      </section>
      <div
         class="text-center p-1"
         style="background-color:grey"
         >
      © 2020 Copyright:
      <a class="text-white" href="https://www.facebook.com/trinh.buller/"
         >Minh Trung</a
        >
    </div>


      </div>

      </footer>

          
    </body>
</html>