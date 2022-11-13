<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link
      rel="stylesheet"
      href="bootstrap-5.1.3-dist\css\bootstrap.css">
        
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
      <link rel="stylesheet" href="fontawesome/css/all.css">


        <title>Home Page</title>
        
        <style>
            #body { background:url('images/shop1.jpg');background-position: top; background-repeat: no-repeat;}
            .mm{ background:url('images/shop0.jpg'); margin-top: 555px;background-repeat: repeat-x;}
            .m1{text-shadow: 4px 4px 2px black;}
        </style>
    </head>
    <body id="body">
          <div class="mm">
          <nav class="navbar navbar-expand-lg navbar-light mt-2 ">
            <!-- <div class="container-fluid"> -->
              <a class="navbar-brand" href="#"> 
                <p class="h1 text-light m1 ms-5 ">T-SHIRT SHOPPING</p></a>
                
                <button  class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarnav"
                aria-controls="navbarnav" aria-expanded="false" aria-label="Toggle navigation "
                >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse text-center" id="navbarnav">
                <ul class="navbar-nav text-white  mx-auto  mb-5 mb-lg-0">
                  <li class="nav-item text-white ">
                    <a class="nav-link h4 fw-bold ms-5 text-light m1"  href="userlogin.php">USER LOGIN</a>
                  </li>
                  <li class="nav-item text-white">
                    <a class="nav-link h4 fw-bold ms-5 text-light m1"  href="register.php">USER REGISTER</a>
                  </li> 
                  <li class="nav-item text-light">
                    <a class="nav-link h4 fw-bold ms-5 text-light m1"  href="adminlogin.php">ADMIN LOGIN</a>
                  </li>
                  <!-- <li class="nav-item text-white">
                    <a class="nav-link  fw-bold ms-5  text-primary" href="record1.php">WIND RECORDS PER DAY</a>
                  </li> -->
                </ul>
              </div>
              <!-- </div> -->
              
            </nav>
          </div>
    </body>
</html>