<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAYMENT DETAILS</title>
    <link href="bootstrap-5.1.3-dist\css\bootstrap.css" rel="stylesheet">
    <style>
        .ms{height: 200px; width: 150px;}
        .b{background-color: rgb(249, 146, 43);border-radius: 20px;}
    </style>
</head>
<body> 
<form method="POST" action=""  enctype="multipart/form-data">
    <div class="container-fluid">
    <div class="row">
        <?php
         $connect=mysqli_connect('localhost','root','','tshirt');
         $a=$_SESSION['total'];
         $b=$_SESSION['color']; 
         $c=$_SESSION['hand'];
         $d=$_SESSION['logo'];
         $e=$_SESSION['size'];
         $f=$_SESSION['quantity'];
         $a1=$_SESSION['price'];
         $p=$_SESSION['pic'];
         $g=$_SESSION['gmail1'];
         $sql=mysqli_query($connect,"select * from  product where customiseimage= '$p'");
         
         
        ?>
        <div class="col-12 text-center text-light bg-black">
            <hr><h3>PRODUCT PAYMENT DETAILS</h3><hr>
        </div>
    </div>
    <div class="row">
        <div class="col-4 offset-1"><br>
            <h5>T-shirt Colour:</h5>
            <input type="text" name="" value="<?php echo $b ?>" class="form-control" disabled/><br>
            <h5>T-shirt Model:</h5>
            <input type="text" name="" value="<?php echo $c ?>" class="form-control" disabled/><br>
            <h5>T-shirt Customise Side:</h5>
            <input type="text" name="" value="<?php echo $d ?>" class="form-control" disabled/><br>
            <h5>T-shirt Color + Your Logo:</h5>
            
        <?php
        //  while($row=mysqli_fetch_assoc($sql))
        //  {
        //     echo '<div style="height: 250px ; width: 400px ;background-color:'.$b.';">';
        //     echo '<p  class=text-center >';
        //     $image_src = $row['customiseimage'];
        //     echo '<br><img src=upload/'.$image_src.' height="200px" width="200px">';
        //     echo '</p></div>';
        //  }

         $sql = "select customiseimage from product where customiseimage= '$p'";
         $result = mysqli_query($connect,$sql);
         while($row = mysqli_fetch_array($result))
         {
            echo '<div style="height: 250px ; width: 400px ;background-color:'.$b.';">';
            echo '<p  class=text-center >';
            $image_src = $row['customiseimage'];
            echo '<br><img src=logos/'.$image_src.' style=height="200px" width="200px">';
            echo '</p></div>';
        
         }
        ?>
        </div>
        <div class="col-4 offset-2"><br>
            <h5>T-shirt Size:</h5>
            <input type="text" name="" value="<?php echo $e ?>" class="form-control" disabled/><br>
            <h5>Quantity:</h5>
            <input type="text" name="" value="<?php echo $f ?>" class="form-control" disabled/><br>
            <h5>Amount Of One T-shirt:</h5>
            <input type="text" name="" value="Rs <?php echo $a1 ?>" class="form-control" disabled/><br>
            <h5>Total Amount:</h5>
            <input type="text" name="" value="Rs <?php echo $a ?>" class="form-control" disabled/><br>
                <h5>Select Payment Option:</h5>
                <select name="payment" class="form-control" required>
                    <option>-- Select --</option>
                    <option value="case on delivery">Cash On Delivery</option>
                    <!-- <option value="center">UPI</option> -->
                </select><br>
                <input type="submit" name="submit"  class="form-control bg-black text-warning" value="Proceed to pay"/><br>
        </div>
        </div>
    </div>
</form>
</body>
</html>

<?php
$connect=mysqli_connect('localhost','root','','tshirt');
if(isset($_POST['submit']))
{
    
        $s=mysqli_query($connect,"insert into productdetails values ('$a','$b','$c','$d','$e','$f','$a1','$g','$_POST[payment]','$p','not paid')");
        if($s)
        {$a=$g;
            $to_email = $a;
            $subject = "You have purchaced t-shirt from our website";
            $body = "OTP:918273  enter your otp to cofirm your order";
            $headers = "From: sender\'s email";
            
            if (mail($to_email, $subject, $body, $headers)) {
                echo '<script>alert("OTP has successfully sent to '."$to_email".'...");</script>';
                echo '   <meta http-equiv = "refresh" content = "0; url =finalpage.php" />';
            } else {
                echo "Email sending failed...";
            }
          }
        //  echo '<script>alert("INVALID EMAIL ! CHECK WHETHER EMAIL ALREADY REGISTERED");</script>';
        
        else 
        {
            echo "not inserted";
        }
    
    
}
?>