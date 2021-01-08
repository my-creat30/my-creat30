<?php 
include ('header.php');
?>

 <style>
 body{
 background-position:center;
 background-size:cover;}
 </style>
 <body>
  <form action="vieww.php">
 <div class="container">

	<div class="row">
	<div class="col-md-6">
		<h2> Login Here </h2>
  <form method="POST">
	<div class="form-group ">
		<input type="text" name="user" placeholder="User Name">
		</div>
	<div class="form-group ">
		<input type="password" name="pass" placeholder="password"><br>
		</div>
	
	<input type="submit" name="submit" value="Login"><br>
	
</form>
</div>
</div>

<?php
   $inv="";
   $db = mysqli_connect("localhost","root","","test");
   if(isset($_POST['submit'])){
    $uname=($_POST['user']);   //form me jo name= hai//
   $passwrd=($_POST['pass']);
   
     if ( $uname!= "" && $passwrd!=""){
		 
		 $query="select *  from login where username='".$uname."'  		
	     and password='".$passwrd."'" ; # and ka mtlb ek hi row me dono value exist krti passwrd ar name
	    
		$result=mysqli_query($db,$query);
		$row = mysqli_num_rows($result);
		if($row>0)  //mtlb ek user,password to hoga db me//
		{
			
			session_start();
			$_SESSION['username']= $uname;
			$_SESSION['password']= $passwrd;
			header('Location:addproductt.php'); //login krne p jo file open krni project ki

		}
	else {
		$inv= "Username or Password Invalid"; 
		 }
		  
	}
	
  }
 
 
?>

 <p style="color: red;"> <?php echo $inv ;?>   </p> 
