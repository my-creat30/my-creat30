<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style1.css">
    <!-- Custom CSS -->
<style>
* {
  box-sizing: border-box;
}

.row {
  display: flex;
}

/* Create three equal columns that sits next to each other */
.column {
  flex: 33.33%;
  padding: 5px;
}
.carousel {
    height: 800px;
}

.item {
    width:100%;
    height: 800px;
    background-color: white;
}

.item > img {
    margin: 0 auto;
    padding-top: 15px;
}

p {
    padding-bottom:5px;
}

.carousel-indicators li {
    background-color: black;
}

.carousel-indicators .active {
    background-color: cornflowerblue;
}
</style>
</head>
<body>


       <div>
       
	
		<div  >
			<img  src="logo.png" alt="logo" style="width:100px size:125px;">
		</div>
		<div  class="centerdiv" style="float:right; width:125px; "> 
			
				<a href="https://www.facebook.com/login" class="fa fa-facebook"target="blank" ></a>
				
               <a href="https://twitter.com/Twitter?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="fa fa-twitter"target="blank" ></a>
			   
			<a href="https://www.instagram.com/accounts/login/"  class="fa fa-instagram" target="blank"> </a>
			<a href="https://pk.linkedin.com/"  class="fa fa-linkedin" target="blank"><a/>
			
		</div>
		 <nav class="navbar" style="margin-bottom:20px;">
			
				<ul>
					<li><a class="active" href="file:///C:/Users/Boom/Downloads/WEBLAB/TEST.html">Home</a></li>
					<li><a href="file:///C:/Users/Boom/Downloads/WEBLAB/about%20us.html" target="blank">About US</a></li>
					<li><a href="file:///C:/Users/Boom/Downloads/WEBLAB/products.html"target="blank">Products</a></li>
					<li><a href="file:///C:/Users/Boom/Downloads/WEBLAB/contact.html"target="blank">Contact Us</a></li>
					
					
				</ul>
          </nav>
		 
    <div class="container">

       
        <div id="mycarousel" class="carousel slide" data-ride="carousel" data-interval="1500">

            <ul class="carousel-indicators">
                <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                <li data-target="#mycarousel" data-slide-to="1"></li>
                <li data-target="#mycarousel" data-slide-to="2"></li>
                <li data-target="#mycarousel" data-slide-to="3"></li>
                <li data-target="#mycarousel" data-slide-to="4"></li>
            </ul>

            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/ex.png" alt="">
                    
                </div>
                <div class="item"><img src="img/sale.png" alt="">
                    <div class="carousel-caption">
                        <button class="btn btn-lg btn-primary"></button>
                    </div>
                </div>
                <div class="item"><img src="img/moti.jpg" alt=""></div>
                  
            
            </div>

            <a href="#mycarousel" class="carousel-control left" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a href="#mycarousel" class="carousel-control right" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
  <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- Custom JavaScript -->
    <script src="script.js"></script>

        </div>

    </div>

   





<div class="latest">
		<div class="small-container">
		  <div class="row">
			<div class="col-sm-4">
				<a href="#"></a>
				<img src="category-1.jpg" alt="">
			</div>
		    <div class="col-sm-4">
				<img src="category-2.jpg" alt="" >
			</div>
			<div class="col-sm-4">
				<a href="#" ></a>
				<img src="category-3.jpg" alt="">
			</div>
		 </div>
      </div>
     </div>
    <!----footer---->
			<?php
include('footer.php');
?>
</body>
</html>