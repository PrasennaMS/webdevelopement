<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NORMAL T-SHIRT</title>
    <link href="bootstrap-5.1.3-dist\css\bootstrap.css" rel="stylesheet">
    <style>
    </style>
</head>
<body> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center text-white bg-black">
                <hr><h3>T-shirts Models</h3><hr>
            </div>
        </div><br>
        <div class="row">
            <div class="col-3 text-center">
                <img src="images/1.png" height="200px" width="150px">
                <h3>White T-shirt</h3>
                <h5>Rs100</h5>
            </div>
            <div class="col-3 text-center">
                <img src="images/y2.jpg" height="200px" width="175px">
                <h3>Yellow T-shirt</h3>
                <h5>Rs200</h5>
            </div>
            <div class="col-3 text-center">
                <img src="images/b1.webp" height="200px" width="175px">
                <h3>Black T-shirt</h3>
                <h5>Rs300</h5>
            </div>
            <div class="col-3 text-center">
                <img src="images/bb.jpg" height="200px" width="150px">
                <h3> V-neck T-shirt</h3>
                <h5>Rs750</h5>
            </div>
        </div><br>
        <div class="row">
            <div class="col-3 text-center">
                <img src="images/demoo.jpg" height="200px" width="150px">
                <h3>Double neck T-shirt</h3>
                <h5>Rs400</h5>
            </div>
            <div class="col-3 text-center">
                <img src="images/demo3.png" height="200px" width="150px">
                <h3>Cotton T-shirt</h3>
                <h5>Rs250</h5>
            </div>
            <div class="col-3 text-center">
                <img src="images/demo2.jpg" height="200px" width="150px">
                <h3>Ringer T-shirt</h3>
                <h5>Rs350</h5>
            </div>
            <div class="col-3 text-center">
                <img src="images/demo1.jpg" height="200px" width="150px">
                <h3>Pocket T-shirt</h3>
                <h5>Rs600</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-6 offset-3 ">
                <form method="POST" action="">
                    <div class="text-center text-white bg-black">
                        <hr><h3>ORDER HERE</h3><hr>
                    </div>
                    <h5>T-shirt Models:</h5>
                <select name="hand1" class="form-control" required>
                    <option>-- Select --</option>
                    <option value="white">White T-shirt</option>
                    <option value="yellow">Yellow T-shirt</option>
                    <option value="black">Black T-shirt</option>
                    <option value="v-neck">V-neck T-shirt</option>
                    <option value="double-neck">Double-neck T-shirt</option>
                    <option value="cotton">Cotton T-shirt</option>
                    <option value="ringer">Ringer T-shirt</option>
                    <option value="pocket">Pocket T-shirt</option>
                </select><br>
                    <h5>T-shirt Size:</h5>
                <select name="size" class="form-control" required>
                    <option>-- Select --</option>
                    <option value="small">Small</option>
                    <option value="medium">Medium</option>
                    <option value="large">Large</option>
                    <option value="x-large">X-large</option>
                    <option value="xx-large">XX-large</option>
                </select><br>
                <h5>Quantity:</h5>
                <input type="number" name="quantity" placeholder="Enter your quantity"  class="form-control" required/>
                <br>
                <input type="submit" name="submit"  class="form-control bg-black text-warning" value="Submit"/><br>
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
    $g=$_SESSION['gmail1'];
    echo $g;
    if("white"==$_POST['hand1']){
        $a=100;
    }
    elseif("yellow"==$_POST['hand1']){
        $a=200;
    }
    elseif("black"==$_POST['hand1']){
        $a=300;
    }
    elseif("v-neck"==$_POST['hand1']){
        $a=750;
    }
    elseif("double-neck"==$_POST['hand1']){
        $a=400;
    }
    elseif("cotton"==$_POST['hand1']){
        $a=250;
    }
    elseif("ringer"==$_POST['hand1']){
        $a=350;
    }
    elseif("pocket"==$_POST['hand1']){
        $a=600;
    }
    else 
    {
        echo "no value";
    }
    if($a)
    {
        $g=$_SESSION['gmail1'];
        $total=$a*$_POST['quantity'];
        while($row=mysqli_fetch_assoc($sql))
        {
            $r1=$row['remaining'];
        }
        $r=$r1-$_POST['quantity'];
        $up=mysqli_query($connect,"update totalproduct set remaining='$r' where tshirt='normal' ");

        $_SESSION['one']=$a;
        $_SESSION['total']=$total;
        $_SESSION['hand1']=$_POST['hand1'];
        $_SESSION['size']=$_POST['size'];
        $_SESSION['quantity']=$_POST['quantity'];
        // $_SESSION['pic']=$_POST['uploadfile'];
        $s=mysqli_query($connect,"insert into normalproduct values ('$_POST[hand1]','$_POST[size]','$_POST[quantity]','$a','$g')");
        if($s)
        {
        ECHO '<meta http-equiv = "refresh" content = "0; url =normalpayment.php" />';
        //  echo '<script>alert("INVALID EMAIL ! CHECK WHETHER EMAIL ALREADY REGISTERED");</script>';
        }
        else 
        {
            echo "not inserted";
        }
    }
}
?>