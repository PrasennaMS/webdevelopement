<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload Check</title>
    <link href="bootstrap-5.1.3-dist\css\bootstrap.css" rel="stylesheet">
</head>
<body>
    <form method="POST" action="" enctype="multipart/form-data">
        
        <input type="file" 
         name="uploadfile" 
         value="" />
    
    <div>
        <input type="text" placeholder="enter t-shirt name"  name="name">
        <input type="submit" name="upload" value="SUBMIT">
    </div>
    </form>
    
</body>
</html>


<?php
$connect=mysqli_connect('localhost','root','','tshirt');
  $msg = "";
  
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "upload/".$filename;
          
    // $db = mysqli_connect("localhost", "root", "", "photos");
  
        // Get all the submitted data from the form
        $sql = "INSERT INTO normaltshirt VALUES ('$_POST[name]','$filename')";
  
        // Execute query
        mysqli_query($connect, $sql);
          
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
  }
  
?>




$sql = "select image from addname";
 $result = mysqli_query($connect,$sql);
 while($row = mysqli_fetch_array($result))
 {
    $image_src = $row['image'];
    echo '<img src=upload/'.$image_src.'>';

 }
  echo '   <img src=.upload/'.$image_src.' >';