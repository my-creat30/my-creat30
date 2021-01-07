<?php
include('header.php');
?>
<body>
<div class="row">
<?php
$db = mysqli_connect('localhost','root','','test');
 $selectquery= "SELECT * from tblproducts";
 $query= mysqli_query($db,$selectquery);
 

 
 $result=mysqli_fetch_array($query);

 <h2 class="title"><b>Latest Products</b></h2>
  <div class="row">
   
	 	
	 
	 <?php while($result=mysqli_fetch_array($query)){?>
	  <div class="col-3">
	  <h4><?php echo $result['productName'];?></h4>
	  <a href="productdetails.php"> <img src="uploads/<?php echo $result['image'];?>"></a>
	
      </div>
   
   
     <?php }       ?>
	
 
		</div>
		
 
  

  </body>
  <html>