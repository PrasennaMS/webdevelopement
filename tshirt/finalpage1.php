<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP</title>
    <link href="bootstrap-5.1.3-dist\css\bootstrap.css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <form method="POST" action="">
    <div class="container-fluid">
        <div class="row"> 
            <div class="col-12 text-center text-light bg-black">
                <hr><h3>ORDER CONFIRMATION </h3><hr>
            </div>
        </div>
        <div class="row">
            <div class="col-6 offset-3 p-5">
                <h5>Enter your OTP</h5>
                <input type="text" name="otp" placeholder="check your email"  class="form-control bg-black text-white" required/><br>
                <input type="submit" name="submit"  class="form-control bg-warning text-black " value="Submit"/><br>
            </div>
        </div>
        <?php
            $connect=mysqli_connect('localhost','root','','tshirt');
            if(isset($_POST['submit']))
            {
                $s=$_SESSION['gmail1'];
                if($_POST['otp']=='918273'){
                    $upi=mysqli_query($connect,"update productdetails set status= 'Payment Completed' where gmail= '$s' ");
                    ?>
                <div class="text-center"><?php
                echo '<script>alert("Thanks for your purchase on our website.....");</script>';
                echo '   <meta http-equiv = "refresh" content = "0; url =index.php" />';?>
                </div>
                    <?php
                }
                else{
                    echo '<script>alert("INCORRECT OTP!");</script>';}
            }
        ?>
    </div>
    </form>
</body>
</html>
