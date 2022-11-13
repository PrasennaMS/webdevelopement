<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCT DETAILS</title>
    <link href="bootstrap-5.1.3-dist\css\bootstrap.css" rel="stylesheet">
    <style>
        .ms{height: 200px; width: 150px;}
        /* .b{background-color: rgb(249, 146, 43);border-radius: 20px;} */
    </style>
</head> 
<body>
<form method="POST" action="" enctype="multipart/form-data">
    <div class="container-fluid">
        <div class="row">
            <div class="col-1 pt-5 text-center bg-black text-white">
                <h3><br>B<br>E<br>F<br>O<br>R<br>E<br> <br>C<br>U<br>S<br>T<br>O<br>M<br>I<br>S<br>E<br></h3>
            </div>
            <div class="col-3">
                <div class="row text-center">
                    <div class="col-12 ">
                        <!-- <hr><h3>T-SHIRT MODELS</h3><hr> -->
                        <img src="images/1.png" class="ms" alt="white"/>
                        <h5>HALF HAND T-shirt </h5>
                    </div>
                    <div class="col-12 ">
                        <img src="images/bb.jpg" class="ms" alt="white"/>
                        <h5>FULL HAND T-shirt </h5>
                    </div>
                    <div class="col-12 ">
                        <img src="images/w2.png" class="ms" alt="white"/>
                        <h5>DOUBLE COLOUR T-shirt </h5>
                    </div>
                </div>
            </div>

            <div class="col-4 form-group b">
                <div class="text-center">
                <hr><h3>PRODUCT DETAILS</h3><hr>
                </div>
            <div>
                <h5>T-shirt Colour:</h5>
                <select name="colour" class="form-control" required>
                    <option>-- Select --</option>
                    <option value="red">Red</option>
                    <option value="white">White</option>
                    <option value="black">Black</option>
                    <option value="yellow">Yellow</option>
                    <option value="green">Green</option>
                    <option value="blue">Blue</option>
                    <option value="orange">Orange</option>
                </select><br>
                <h5>T-shirt Model & Price:</h5>
                <select name="hand" class="form-control" required>
                    <option>-- Select --</option>
                    <option value="half hand">Half Hand - Rs350</option>
                    <option value="full hand">Full Hand - Rs500</option>
                    <option value="double color">Double Colour - Rs750</option>
                </select><br>
                <h5>Insert Customize PNG Image:</h5>
                    <input type="file" name="uploadfile" class="form-control" value="" /><br>
                <h5>T-shirt Customise Side:</h5>
                <select name="logo" class="form-control" required>
                    <option>-- Select --</option>
                    <option value="left side">Left Side</option>
                    <option value="center">Center</option>
                    <option value="back side">Back side</option>
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
                <input type="submit" name="submit"  class="form-control bg-black text-warning" value="Submit"/>
            </div>
            </div>

            <div class="col-3">
                <div class="row text-center">
                    <div class="col-12 ">
                        <!-- <hr><h3>CUSTOMISE T-SHIRT</h3><hr> -->
                        <img src="images/demo1.jpg" class="ms" alt="white"/>
                        <h5>CUSTOMISE  AT LEFT SIDE</h5>
                    </div>
                    <div class="col-12">
                        <img src="images/demo3.png" class="ms" alt="white"/>
                        <h5>CUSTOMISE  AT CENTER</h5>
                    </div>
                    <div class="col-12">
                        <img src="images/demoo.jpg" class="ms" alt="white"/>
                        <h5> CUSTOMISE AT BACK SIDE</h5>
                    </div>
                </div>
            </div>
            <div class="col-1 pt-5 text-center bg-black text-white">
                <h3><br>A<br>F<br>T<br>E<br>R<br> <br>C<br>U<br>S<br>T<br>O<br>M<br>I<br>S<br>E<br>D</h3>
            </div>
        </div>
    </div>
</form>
</body>
</html>
<?php
$connect=mysqli_connect('localhost','root','','tshirt');
$msg = "";
if(isset($_POST['submit']))
{   
    $filename = $_FILES["uploadfile"]["name"];
    $select=mysqli_query($connect,"select * from product where customiseimage='$filename' ");
    $row=mysqli_num_rows($select);
    if(mysqli_num_rows($select)==1)
    {
            while($row=mysqli_fetch_assoc($select))
            {
                if($row['customiseimage']==$filename)
                {
                    echo '<script>alert("Change the png image name & upload again");</script>';
                }
            } 
    }
    else
        {
        if("half hand"==$_POST['hand']){
            $a=350;
            $_SESSION['price']=$a;
        }
        elseif("full hand"==$_POST['hand']){
            $a=500;
            $_SESSION['price']=$a;
        }
        elseif("double color"==$_POST['hand']){
            $a=750;
            $_SESSION['price']=$a;
        }
        else 
        {
            echo "no value";
        }
        if($a){
            $filename = $_FILES["uploadfile"]["name"];
            $tempname = $_FILES["uploadfile"]["tmp_name"];    
                $folder = "logos/".$filename;

               
          
    // $db = mysqli_connect("localhost", "root", "", "photos");
  
        // Get all the submitted data from the form
        // $sql = "INSERT INTO normaltshirt VALUES ('name','$filename')";
  
        // Execute query
        // mysqli_query($connect, $sql);
          
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            echo "success";
        }else{
            echo "Failed to upload image";
      }
            $g=$_SESSION['gmail1'];
            $total=$a*$_POST['quantity'];
            $sql=mysqli_query($connect,"select * from  totalproduct where tshirt='custome'");
            while($row=mysqli_fetch_assoc($sql))
            {
                $r1=$row['remaining'];
            }
            $r=$r1-$_POST['quantity'];
            $up=mysqli_query($connect,"update totalproduct set remaining='$r' where tshirt='custome' ");
            
            $_SESSION['total']=$total;
            $_SESSION['color']=$_POST['colour'];
            $_SESSION['hand']=$_POST['hand'];
            $_SESSION['logo']=$_POST['logo'];
            $_SESSION['size']=$_POST['size'];
            $_SESSION['quantity']=$_POST['quantity'];
            $_SESSION['pic']=$filename;
            $s=mysqli_query($connect,"insert into product values ('$_POST[colour]','$_POST[hand]','$filename','$_POST[logo]','$_POST[size]','$_POST[quantity]','$a','$g','no payment')");
            if($s)
            {
            ECHO '   <meta http-equiv = "refresh" content = "0; url =payment.php" />';
            //  echo '<script>alert("INVALID EMAIL ! CHECK WHETHER EMAIL ALREADY REGISTERED");</script>';
            }
            else 
            {
                echo "not inserted";
            }
        }       
    }
}
?>