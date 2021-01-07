<?php
include('header.php');

$db = mysqli_connect('localhost','root','','test');
 $selectquery= "SELECT * from tblproducts";
 $query= mysqli_query($db,$selectquery);
 if($query){
	 echo "connected";
 }
 else{
	  echo " not connected";
 }
 $num = mysqli_num_rows($query);
 
 
 $res=mysqli_fetch_array($query);


?>
<body>
  <div class="row">
   
	
	
	 <?php while($res = mysqli_fetch_array($query))  {  ?>
     <div class="col-lg-4">
	 <h4><img src="uploads/<?php echo $res['image'];?>"alt="product" class="img-fluid"><h4>
       <p > ID:<?php echo $res['productId'] ?></p>
       
		 <p> Available:<?php echo $res['productInstock'] ?></p>
		  
		   </p>discount: <?php echo $res['productDiscount'] ?></p>
			<p>Details <?php echo $res['productDetails'] ?></p>
	
     </div>
 
   <?php }       ?>
	 
 
		</div>
		

  
  </body>
  <html>
   <?php
include('footer.php');
?>