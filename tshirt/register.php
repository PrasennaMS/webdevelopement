<?php
session_start();
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CUSTOMER REGISTER</title>
        <link href="bootstrap-5.1.3-dist\css\bootstrap.css" rel="stylesheet">
        <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <style>
            .body{color: white;}
        </style>
    </head>
    <body> 
        <form method="POST" action="">
        <section class="h-100 bg-white body">
            <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                <div class="card card-registration bg-black">
                    <div class="col-6 offset-3">
                        <div class="card-body p-md-5">
                        <h1 class=" text-uppercase text-center">Registration Form</h1>
        
                        <div class="form-outline ">
                            <label class="form-label" for="form3Example8">NAME:</label>
                            <input type="text" id="form3Example8" class="form-control form-control-lg bg-white text-black" placeholder="Enter your name" name="name" required/>
                        </div>
        
                        <div class="form-outline pt-2">
        
                            <label class="mb-0 me-4">GENDER: </label>
                            <br>
        
                            <input
                                class="form-check-input ms-5 bg-white"
                                type="radio"
                                value="female" name="gen" required
                            /> Female
                            <input
                                class="form-check-input ms-5 bg-white"
                                type="radio"
                                value="male" name="gen" required
                            /> Male
                            <input
                                class="form-check-input ms-5 bg-white "
                                type="radio"
                                value="other" name="gen" required
                            />  Other
        
                        </div>
        
                        <div class="form-outline pt-2">
                            <label class="form-label" for="form3Example9">PASSWORD:</label>
                            <input type="password" id="form3Example9" class="form-control form-control-lg bg-white text-black" placeholder="Enter your password" name="password" required/>
                        </div>
        
                        <div class="form-outline ">
                            <label class="form-label" for="form3Example90">EMAIL:</label>
                            <input type="email" id="form3Example90" class="form-control form-control-lg bg-white text-black" placeholder="Enter your email" name="gmail" required/>
                        </div>
        
                        <div class="form-outline ">
                            <label class="form-label" for="form3Example99">PHONE NUMBER:</label>
                            <input type="tel" id="form3Example99" class="form-control form-control-lg bg-white text-black" placeholder="Enter your phone number" name="phonenumber" required pattern="[0-9]{10}"/>
                        </div>

                        <div class="d-flex justify-content-center pt-3">
                            <input type="submit" class="btn btn-warning btn-lg ms-2" value="Submit form" name="submit">
                        </div>
        
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
$connect=mysqli_connect('localhost','root','','tshirt');
if(isset($_POST['submit']))
{
   
$select=mysqli_query($connect,"select * from register where gmail='$_POST[gmail]' ");
$row1=mysqli_num_rows($select);
// echo $row1;
if(mysqli_num_rows($select)==1)
{
        while($row=mysqli_fetch_assoc($select))
        {
            if($row['gmail']==$_POST['gmail'])
            {
                echo '<script>alert("INVALID EMAIL ! CHECK WHETHER EMAIL ALREADY REGISTERED");</script>';
            }
        } 
}
else
{
    // echo '<script>alert("else");</script>';
    $s=mysqli_query($connect,"insert into register values ('$_POST[name]','$_POST[gen]','$_POST[password]','$_POST[gmail]','$_POST[phonenumber]')");
    if($s)
    {
     ECHO '   <meta http-equiv = "refresh" content = "0; url =userlogin.php" />';
    }
    else 
    {
        echo "not inserted";
    }
}
}
?>