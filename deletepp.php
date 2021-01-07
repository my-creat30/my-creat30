<?php

include('connection.php');
//include('accessControl.php');
  
   $row_id=$_GET['id'];
   echo "---".$row_id;
   $delete_query="DELETE FROM tblproducts where productId=".$row_id."";
  
   if($con->query($delete_query))
   {
    
    header('Location: vieww.php?message="deleted successfully"');
    
   }
   else
   {

   
   header('Location: vieww.php?message="Some thing went wrong"');
   }
  
   //header('Location: main.php');
 ?>