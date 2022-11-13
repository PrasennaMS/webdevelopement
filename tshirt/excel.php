<?php  
// include('config.php');
$connect=mysqli_connect('localhost','root','','tshirt');

header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=SALES_Daily_Report.xls");  
header("Pragma: no-cache"); 
header("Expires: 0");
$sep = "\t"; //tabbed character

print("\n");   
        $schema_insert = str_replace($sep."$", "", "totaltshirt".$sep."tshirt".$sep."remaining");
        $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
        $schema_insert .= "\t";
        print(trim($schema_insert));
        print "\n";
$result=mysqli_query($connect,"select totaltshirt,tshirt,remaining from totalproduct");
    while($row =$result->fetch_assoc())
    {
        $schema_insert = "";
          $schema_insert=$row['totaltshirt'].$sep.$row['tshirt'].$sep.$row['remaining'];
        
        $schema_insert = str_replace($sep."$", "", $schema_insert);
        $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
        $schema_insert .= "\t";
        print(trim($schema_insert));
        print "\n";
    }  


 exit;
?>