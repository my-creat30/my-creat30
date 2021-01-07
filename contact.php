<?php
include('header.php');
?>



<!-- Business Adresss -->
<div style="float:right; margin:70px 50px";>
<p><i ><b> Visit us at</b> <br>
 Aurangzeb Block New Garden Town, Punjab<br>
 To get directions go to  </i></p>
 <!---google map code--->
 <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=garden%20town&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123movies online free</a></div>
 <style>.mapouter{position:relative;text-align:right;height:300px;width:600px;}.gmap_canvas 
 {overflow:hidden;background:none!important;height:300px;width:600px;}</style></div>
 </div>
 
    

<div class="contact-form">
<h3 style="margin-top:60px;">Contact Us</h3>
  <form   method="get" action="">
    <label for="fname"> Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.."><br>

    <label >Email</label>
    <input type="email"  name="email" placeholder="...@gmail.com"><br>
	 
	<label >Phone</label>
    <input type="text"  name="phone"><br>


    <label >Role:</label>
    
	Student:<input type="checkbox" value="Student">
	Teacher:<input type="checkbox" value="Teacher"><br>
	
	
	
    <label for="city">City</label>
    <select id="city" name="city">
      <option value="lahore">Lahore</option>
      <option value="karachi">Karachi</option>
      <option value="islamabad">Islamabad</option>
    </select>
	<br>

    <label  >Message</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px "></textarea>
	

    <input type="submit" value="Submit">
  </form>
</div>
<!----footer---->
			<?php
include('footer.php');
?>

</body>
</html>