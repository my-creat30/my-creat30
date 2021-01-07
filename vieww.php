<?php  

//include('accessControl.php');
include('header.php');  
include('connection.php');  

$sql = "SELECT * FROM tblproducts";
$result = $con->query($sql); // $con
//var_dump($result);
//die();


?>
<!DOCTYPE html>

<head>
  <title style="margin-top:10">Admin Panel</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
  
  <div class="container-fluid">
  
     <h2>Admin Panel </h2>
  <br>

  
    <div class="pull-left">
      <button class="btn btn-primary"><a href="imgdetails2.php" style="color:white">Add New</a></button>
    </div><br>      
  <table class="table table-striped">
    <thead>
      <tr>
        <th>productid</th>
        <th>productname</th>
        <th>price</th>
		<th>code</th>
        <th>stock</th>
        <th>size</th>
		<th>discount</th>
		<th>detail</th>
        <th>image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
     <?php while($res = mysqli_fetch_array($result)){ ?>
      <tr>
        <td><?php echo $res['productId'] ?></td>
        <td><?php echo $res['productName']?></td>
        <td><?php echo $res['productPrice'] ?></td>
		 <td><?php echo $res['productCode'] ?></td>
		  <td><?php echo $res['productInstock'] ?></td>
		   <td><?php echo $res['productSizes'] ?></td>
		    <td><?php echo $res['productDiscount'] ?></td>
			 <td><?php echo $res['productDetails'] ?></td>
			 <td><img src="uploads/<?php echo $res['image'];?>?>"width="100" height="100"></td>
        <td><button class="btn btn-warning"><a href="editp.php?id=<?php echo 
        $res['productId']?>" style="color:white">Update</a></button>
          <button class="btn btn-danger" onclick="delete_row(<?php  echo $res['productId']   ?>)">Delete</button></td>
        </tr>
      <?php }?>
    </tbody>
  </table>
</div>
<script>
  function delete_row(productId)
  {
    //console.log($id);
    //return false;
    if(confirm("Are you sure you want to delete?"))
    {
      window.location.href="deletepp.php?id="+productId+"";
    }
  }
</script>
<?php
include('footer.php'); 
?>
</body>
</html>
