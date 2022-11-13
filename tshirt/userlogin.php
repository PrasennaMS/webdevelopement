<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUSTOMER LOGIN</title>
    <link href="bootstrap-5.1.3-dist\css\bootstrap.css" rel="stylesheet">
    <style>
        /* .gradient-custom {
            background: #6a11cb;
            background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));
            background: linear-gradient(to right, rgb(36, 46, 244), rgb(101, 36, 255))
            } */
            
        /* body{background-image: url(images/img1.png);background-repeat: no-repeat;background-size: cover;color:black;} */
        .msp{background-color: black;color: whitesmoke;}
    </style> 
</head>
<body>
<form method="POST" action="">
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card text-white msp" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 ">

              <h2 class="fw-bold mb-2 text-uppercase">Welcome CUSTOMER</h2>
              <p class="text-white-50 mb-5">Please enter your email and password!</p>

              <div class="form-outline form-white mb-4">
              <label class="form-label" for="typeEmailX">Email</label>
                <input type="email" id="typeEmailX" class="form-control form-control-lg" placeholder="Enter your email" name="gmail"/>
              </div>

              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typePasswordX">Password</label>
                <input type="password" id="typePasswordX" class="form-control form-control-lg" placeholder="Enter your password" name="password"/>
              </div>

              <!-- <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p> -->

              <input type="submit" class="btn btn-outline-light btn-lg px-5" name="submit1" value="Login">

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>
</body>
</html>
<?php
// login form
$connect=mysqli_connect('localhost','root','','tshirt');
if(isset($_POST['submit1']))
{
  $_SESSION['gmail']=$_POST['gmail'];
    $sql=mysqli_query($connect,"select * from register where gmail= '$_POST[gmail]' and password= '$_POST[password]'");
    if(mysqli_num_rows($sql)==1){
      header('location:types.php');
        echo "success";
    }
    else{
        echo '<script>alert("INVALID EMAIL or PASSWORD");</script>';
    }
}
?>