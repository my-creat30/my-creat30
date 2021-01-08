<?php


$user_id=$_GET['id']; 



include('connection.php');
$user_data= mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tblproducts where productId=".$user_id.""));


if(isset($_POST['submit']))
{
  $target="uploads/".basename($_FILES['image']['name']); 
		//update the user
		 $id = $_POST['pid'] ; 
	 $name = $_POST['title'] ;   //variables where form data is saved//
	  $price = $_POST['pprice'] ;
	   $code = $_POST['pcode'] ;
	   $stock = $_POST['pinstock'] ;   
	  $disc = $_POST['pdis'] ;
	   $size = $_POST['psize'] ;
	   $detail = $_POST['pdetail'] ;
	    $image=$_FILES['image']['name'];
		
	  if(move_uploaded_file($_FILES['image']['tmp_name'], $target )){
		   
	echo " <br> image uploaded successfully";}
	else{
		echo "image could not be  uploaded ";
	}
	/* echo "UPDATE tblproducts SET  productId='$id' ,productName = '$name',productCode='$code',productSizes='$size',productPrice='$price',
		 productInstock='$stock',productDiscount='$disc',productDetails='$detail'  WHERE productId = '$user_id'";*/
		 
	mysqli_query($con,"UPDATE tblproducts SET  productId='$id' ,productName = '$name',productCode='$code',productSizes='$size',productPrice='$price',
		 productInstock='$stock',productDiscount='$disc',productDetails='$detail',image='$image'  WHERE productId = '$user_id'");
	
	
    header('Location: vieww.php');
		
	
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit User</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2>Edit User</h2><br>
		<form action=""  method="POST" enctype="multipart/form-data" >
			<div class="form-group">
				<label >Product ID:</label>
				<input type="text" class="form-control"  placeholder="Enter id" name="pid" 
				value="<?php echo $_GET['id'] ?>">
      
			</div>
			<div class="form-group">
				<label >Product Name:</label>
				<input type="text" class="form-control"  placeholder="Enter  Name for product" name="title" 
				value="<?php echo $user_data['productName']?>">
			</div>
			<div class="form-group">
				<label >Product Price:</label>
				<input type="text" class="form-control"  placeholder="Enter price for product" name="pprice" 
				value="<?php echo  $user_data['productPrice'] ?>">
			</div>
			<div class="form-group">
				<label >Product Code:</label>
			 <input type="text" class="form-control"    placeholder="Product code" name="pcode" 
			 value="<?php echo  $user_data['productCode'] ?>" >
			</div>
			<div class="form-group">
				<label >Product Instock:</label>
			 <input type="text"class="form-control"    placeholder="Product available Y/N" name="pinstock" 
			 value="<?php echo  $user_data['productInstock'] ?>" >
			</div>
			<div class="form-group">
				<label >Product Discount:</label>
			 <input type="text" class="form-control"   placeholder="Product discount"  name="pdis" 
			 value="<?php echo  $user_data['productDiscount'] ?>">
			</div>
			<div class="form-group">
				<label >Product Size:</label>
			 <input type="text" class="form-control"   placeholder="Enter size"      name="psize"
			 value="<?php echo  $user_data['productSizes'] ?>" >
			</div>
			<div class="form-group">
				<label >Product Detail:</label>
			 <input type="text"   class="form-control" placeholder="Enter remaining details" name="pdetail" 
			 value="<?php echo  $user_data['productDetails'] ?>" >
			</div>
			<div class="form-group">
			 <input type="file"   class="form-control"  name="image"  value="<img src="uploads/<?php echo $user_data['image'];?>"width="100" height="100">
			</div>
			<button type="submit" name="submit" class="btn btn-default">Submit</button>
		</form>
	</div>

</body>
</html>

