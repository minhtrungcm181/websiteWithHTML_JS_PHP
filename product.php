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
                        <a class="nav-link text-white" href="?page=login">Login</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white" href="?page=product">Product</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white" href="?page=contact">Contact</a>
                      </li>
                      
                </ul>
          </nav>
         <div class = "container p-5 my-5 border"> 
            <table class = "table">
            <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <?php include ('product_query.php');
    while($row = mysqli_fetch_assoc($result)) {
    ?>
    <tbody>
    <tr>
        <td> <?php echo $row['name'];?> </td>
        <td> <?php echo $row['infor'];?> </td>
        <td> <?php echo $row['price'];?> </td>
        <?php } ?>
    </tbody>
    </table>

         </div>

        <div class = container> 
        <ul class="pagination">
  <li class="page-item"><a class="page-link" href="product.php?pagination=1">1</a></li>
  <li class="page-item"><a class="page-link" href="product.php?pagination=2">2</a></li>
  <li class="page-item"><a class="page-link" href="product.php?pagination=3">3</a></li>
</ul>

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