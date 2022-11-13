<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PAGE</title>
    <link href="bootstrap-5.1.3-dist\css\bootstrap.css" rel="stylesheet">
    <style>
        .ms{width: 315px;}
        /* .b{background-color: rgb(249, 146, 43);border-radius: 20px;} */
        body{background-color: black;color: whitesmoke;}
    </style>
</head>
<body> 
<form method="POST" action="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <div class="row">
                <div class="text-center">
                    <hr><hr><h3>DETAILS</h3><hr><hr>
                </div>
                <div class="d-grid ms-5 p-2 ms">
                    <input type="submit" class="btn btn-outline-light btn-lg" value="USER DETAILS" name="submit" >
                </div>
                <div class="d-grid ms-5 p-2 ms">
                    <input type="submit" class="btn btn-outline-light btn-lg" value="CUSTOMISE T-SHIRT ORDERS" name="button1">
                </div>
                <div class="d-grid ms-5 p-2 ms">
                    <input type="submit" class="btn btn-outline-light btn-lg" value="NORMAL T-SHIRT ORDERS" name="button">
                </div><div class="d-grid ms-5 p-2 ms">
                    <input type="submit" class="btn btn-outline-light btn-lg" value="TOTAL & REMAINING T-SHIRT" name="button2">
                </div>
                <div class="text-center ">
                    <a href="index.php" id="m1"><h4 class="p-5">-Logout-</h4></a>
                </div>
                </div>
            </div>
            <div class="col-9">
                <?php
                if(isset($_POST['submit'])){
                    ?><div class="text-center">
                        <hr><hr><h3>USER DETAILS</h3><hr><hr>
                    </div>
                    <!-- <div class="col-12" data-aos="fade-up-right"> -->
                    <table class="table table-bordered  table-dark table-striped ">
                        <thead class="">
                            <tr>
                                <th><h4>NAME</h4></th>
                                <th><h4>GENDER</h4></th>
                                <th><h4>PASSWORD</h4></th>
                                <th><h4>EMAIL</h4></th>
                                <th><h4>PHONE NUMBER</h4></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                $connect=mysqli_connect('localhost','root','','tshirt');
                                $sql=mysqli_query($connect,"select * from  register");
                                
                                while($row=mysqli_fetch_assoc($sql))
                                {
                        ?>
                        <tr>
                            <td><?php echo $row['name'];?> </td>
                            <td><?php echo $row['gender'];?> </td>
                            <td><?php echo $row['password'];?> </td>
                            <td><?php echo $row['gmail'];?> </td>
                            <td><?php echo $row['phonenumber'];?> </td>    
                        
                        <?php
                                }
                        ?>
                        </tr>
                        </tbody>
                    </table>
                <!-- </div> -->
                    <?php
                    }

                if(isset($_POST['button'])){
                ?>
                <div class="text-center">
                    <hr><hr><h3>NORMAL T-SHIRT ORDERS</h3><hr><hr>
                </div>
                <!-- <div class="col-12" data-aos="fade-up-left"> -->
                    <table class="table table-bordered  table-dark table-striped ">
                        <thead class="">
                            <tr>
                                <th><h4>T-SHIRT MODEL</h4></th>
                                <th><h4>T-SHIRT SIZE</h4></th>
                                <th><h4>T-SHIRT QUANTITY</h4></th>
                                <th><h4>PRICE</h4></th>
                                <th><h4>BUYER</h4></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                $connect=mysqli_connect('localhost','root','','tshirt');
                                $sql=mysqli_query($connect,"select * from  normalproduct");
                                
                                while($row=mysqli_fetch_assoc($sql))
                                {
                        ?>
                        <tr>
                            <td><?php echo $row['model'];?> </td>
                            <td><?php echo $row['size'];?> </td>
                            <td><?php echo $row['quantity'];?> </td>
                            <td><?php $a=$row['price']*$row['quantity']; echo $a;?> </td>
                            <td><?php echo $row['gmail'];?> </td>     
                        
                        <?php
                                }
                        ?>
                        </tr>
                        </tbody>
                    </table>
                    <?php
                    }
                    ?>
                <?php
                if(isset($_POST['button1'])){
                ?>
                <div class="text-center">
                    <hr><hr><h3>CUSTOMISE T-SHIRT ORDERS</h3><hr><hr>
                </div>
            <!-- </div> -->
                <!-- <div class="col-12" data-aos="flip-left"> -->
                    <table class="table table-bordered table-dark table-striped ">
                        <thead>
                            <tr>
                                <th><h4>T-SHIRT COLOR</h4></th>
                                <th><h4>T-SHIRT MODEL</h4></th>
                                <th><h4>T-SHIRT SIZE</h4></th>
                                <th><h4>CUSTOMISE IMAGE SIDE</h4></th>
                                <th><h4>QUANTITY</h4></th>
                                <th><h4>BUYER</h4></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                $connect=mysqli_connect('localhost','root','','tshirt');
                                $sql=mysqli_query($connect,"select * from  product");
                                
                                while($row=mysqli_fetch_assoc($sql))
                                {
                        ?>
                        <tr>
                            <td><?php echo $row['colour'];?> </td>
                            <td><?php echo $row['model'];?> </td>
                            <td><?php echo $row['size'];?> </td>
                            <td><?php echo $row['customiseside'];?> </td>
                            <td><?php echo $row['quantity'];?> </td>  
                            <td><?php echo $row['gmail'];?> </td>
                        <?php
                                }
                        ?>
                        </tr>
                        </tbody>
                    </table>
                    <?php
                    }
                    ?>
                    <?php
                    if(isset($_POST['button2'])){
                    ?>
                    <div class="text-center">
                        <hr><hr><h3>TOTAL T-SHIRT AVAILABLE</h3><hr><hr>
                    </div>
                <!-- </div> -->
                    <div class="text-center">
                        <h5>NORMAL T-SHIRT</h5>
                    </div>
                <table class="table table-bordered table-dark table-striped text-center">
                        <thead>
                            <tr>
                                <th><h4>TOTAL NORMAL <br> T-SHIRT</h4></th>
                                <th><h4>BALANCE NORMAL <br>T-SHIRT</h4></th>
                                <!-- <th></th> -->
                                <!-- <th><h4>QUANTITY</h4></th>
                                <th><h4>BUYER</h4></th> -->
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                $connect=mysqli_connect('localhost','root','','tshirt');
                                $sql=mysqli_query($connect,"select * from  totalproduct where tshirt='normal'");
                                while($row=mysqli_fetch_assoc($sql))
                                {
                        ?>
                        <tr>
                            <td><?php echo $row['totaltshirt'];?> </td>
                            <td><?php echo $row['remaining'];?> </td>
                            <!-- <td></td> -->
                        <?php
                                }
                        ?>
                        </tr>
                        </tbody>
                    </table>

                    <div class="text-center">
                        <h5>CUSTOMISE T-SHIRT</h5>
                    </div>
                    <table class="table table-bordered table-dark table-striped text-center">
                    <thead>
                            <tr>
                                <th><h4>TOTAL CUSTOMIZE <br>T-SHIRT</h4></th>
                                <th><h4>TOTAL CUSTOMISED <br>T-SHIRT</h4></th>
                                <!-- <th></th> -->
                                <!-- <th><h4>QUANTITY</h4></th>
                                <th><h4>BUYER</h4></th> -->
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                $connect=mysqli_connect('localhost','root','','tshirt');
                                $sql=mysqli_query($connect,"select * from  totalproduct where tshirt='custome'");
                                while($row=mysqli_fetch_assoc($sql))
                                {
                        ?>
                        <tr>
                            <td><?php echo $row['totaltshirt'];?> </td>
                            <td><?php echo $row['remaining'];?> </td>
                            <!-- <td></td> -->
                        <?php
                                }
                        ?>
                        </tr>
                        </tbody>
                    </table>
                    <a href="excel.php" class="btn btn-primary nav-link text-white" >DOWNLOAD REPORT</a>
                    <?php
                    }
                    ?>
            </div>
        </div>
    </div>
</form>
</body>
</html>