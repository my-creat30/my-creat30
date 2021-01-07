<!DOCTYPE html>
<?php
include('header.php');
if(isset($_POST['upload']))
{
	//var_dump('form submitted');
	//die();
	$con = mysqli_connect("localhost","root","","test");
	
		
		 $id = $_POST['pid'] ; 
	 $name = $_POST['title'] ;   //variables where form data is saved//
	  $price = $_POST['pprice'] ;
	   $code = $_POST['pcode'] ;
	   $stock = $_POST['pinstock'] ;   
	  $disc = $_POST['pdis'] ;
	   $size = $_POST['psize'] ;
	   $detail = $_POST['pdetail'] ;
	
		if(mysqli_query($con,"INSERT INTO tblproducts(productId,productName,productPrice,productCode,productInstock,productDiscount,productsizes,productDetails) VALUES 
		( '$id ' ,'$name','$price', '$code','$stock','$disc',' $size','$detail')")){
			echo"record insereted";
		} 
	
	
}

?>
<head>
	<title>Bootstrap Example</title>

	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">

		<h2>Add New Product</h2> <br>
		
		<form action=""  method="POST"   enctype="multipart/form-data">
			<div class="form-group">
				<label >Product ID:</label>
				<input type="text" class="form-control"  placeholder="Enter id" name="pid">
			</div>
			<div class="form-group">
				<label >Product Name:</label>
				<input type="text" class="form-control"  placeholder="Enter  Name for product" name="title">
			</div>
			<div class="form-group">
				<label >Product Price:</label>
				<input type="text" class="form-control"  placeholder="Enter price for product" name="pprice">
			</div>
			<div class="form-group">
				<label >Product Code:</label>
			 <input type="text" class="form-control"    placeholder="Product code" name="pcode" >
			</div>
			<div class="form-group">
				<label >Product Instock:</label>
			 <input type="text"class="form-control"    placeholder="Product available Y/N" name="pinstock" >
			</div>
			<div class="form-group">
				<label >Product Discount:</label>
			 <input type="text" class="form-control"   placeholder="Product discount"  name="pdis">
			</div>
			<div class="form-group">
				<label >Product Size:</label>
			 <input type="text" class="form-control"   placeholder="Enter size"        name="psize" >
			</div>
			<div class="form-group">
				<label >Product Detail:</label>
			 <input type="text"   class="form-control" placeholder="Enter remaining details" name="pdetail" >
			</div>
			<button type="submit" name="upload" class="btn btn-default">upload</button>
			<input type="file" name="file" placeholder="Product Profile" ><br>
		</form>
	</div>
	<?php 
   $db = mysqli_connect('localhost','root','','test');
    if(isset($_POST['upload'])){
	 $image =$_FILES['file']['name']; //image ki filar us k name k ly array
      $title= $_POST['title'];
	  
	  $target="uploads/".basename($image); //path jidr file ne jana
	  
	   $query ="insert into stdb values ('$image','$title')";
	   mysqli_query($db,$query );   //imag database me save kradi
	   
	   if(move_uploaded_file($_FILES['file']['tmp_name'], $target )){
		   
		   echo"file uploaded succesfully";
	   }else {
		   
		   echo"file not uploaded";
		   
	   }
		
	}
 ?>

