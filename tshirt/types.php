<?php
session_start();
$_SESSION['gmail1']=$_SESSION['gmail'];
?>
<html>
    <head>
        <link href="bootstrap-5.1.3-dist\css\bootstrap.css" rel="stylesheet">
        <title>T-SHIRT</title>
        <style>
            .ms{font-size: xx-large; font-weight: 900;font-family: 'Times New Roman', Times, serif;}
        </style>
    </head>
    <body class="bg-black gx-5 gy-5">
        <form method="POST" action="">
            <div class="container-fluid">
                <div class="row d-flex  vh-100" id="m1" >
                    
                    <div class="col-lg-6 col-md-6 d-grid p-5">
                        <input type="submit" value="CUSTOMISED T-SHIRT" class="btn btn-secondary btn-lg ms" name="student">
                    </div>
                    <div class="col-lg-6 col-md-6 d-grid p-5">
                        <input type="submit" value="NORMAL T-SHIRT" class="btn btn-secondary btn-lg ms" name="staff" >
                    </div>
                     <a href="index.php" class="text-center h4">-Logout-</>
                </div>
            </div>
        </form>
    </body>
</html>

<?php
$connect=mysqli_connect('localhost','root','','tshirt');
if(isset($_POST['student'])){
    ECHO '   <meta http-equiv = "refresh" content = "0; url =product.php" />';
}
if(isset($_POST['staff'])){
    ECHO '   <meta http-equiv = "refresh" content = "0; url =normaltshirt.php" />';
}
?>