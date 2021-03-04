<!--db.php-->
<?php

$con=mysqli_connect("localhost", "root","","cms");


if (!$con){
	die("Not connected");
}


?>



<!--Header Section-->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <script src="<?php echo base_url()?>public/templetes/fontawesome/js/fontawesome.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url()?>public/templetes/fontawesome/css/fontawesome.min.css">

<link href="<?php echo base_url()?>public/templetes/styles.css" rel="stylesheet">
</head>




<!--Navigation Section-->
<!--db.php-->
<body>




  <div class="top">
  
    <div class="top-right">
      
  
      <a class="#" href="#signup">&nbsp;&nbsp;&nbsp;&nbsp; Signup  |</a>
      <a href="#">Login  |</a>
      <a href="#">RSS Feeds  |</a>
      <a href="#">Archeived News</a>

    </div>
    <div class="social1" style="float: right;" >
      <a href="<?php echo base_url()?>public/templetes//https://facebook.com/coding.np"><span class="fab fa-facebook-f"  ></span></a>
      <a href="#"><span class="<?php echo base_url()?>public/templetes/fab fa-twitter"></span></a>
      <a href="<?php echo base_url()?>public/templetes/https://instagram.com/coding.np"><span class="fab fa-instagram"></span></a>
      <a href="<?php echo base_url()?>public/templetes/https://youtube.com/c/codingnepal"><span class="fab fa-youtube"></span></a>
    </div>

  </div>
<nav>
  <input type="checkbox" id="check">
  <label for="check" class="checkbtn">
    <i class="fas fa-bars"></i>
  </label>
  
  <ul>

<?php 
  $query="select * from categories";
  $result=mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
      {
       $cat_title=$row['cat_title'];

        echo "<li><a class='active' href='#'>{$cat_title}</a></li>";
      }
?>


   
    <li><a href="admin">Admin Panel</a></li>
  </ul>
</nav>

<br>

  

<div class="main">
  <div class="image1">
    <img  src="th.jpg">
  </div>
  <div class="text1">
    <div class="container1">
    <div class="child" style="text-align: center;" >
      <img  src="./imgs/About.png">
      <h1 style="color: blue;">Lorem Ipsum</h1>
      <p>The methods themselves usually aren't difficult to understand.</p>

    </div>
  </div>
  <div class="container2" style="text-align: center;">
    <div class="child">
      <img  src="./imgs/About.png">
      <h1 style="color: blue;">Lorem Ipsum</h1>
      <p>The methods themselves usually aren't difficult to understand.</p>

    </div>
  </div>
  <div class="container3" style="text-align: center;">
    <div class="child">
      <img  src="./imgs/About.png">
      <h1 style="color: blue;">Lorem Ipsum</h1>
      <p>The methods themselves usually aren't difficult to understand.</p>

    </div>
  </div>
  <div class="container4" style="text-align: center;">
    <div class="child">
      <img  src="./imgs/About.png">
      <h1 style="color: blue;">Lorem Ipsum</h1>
      <p>The methods themselves usually aren't difficult to understand.</p>
      


    </div>
  </div>
  </div>
  </div>
    
<div class="contact">
  <div class="contact1">
  
  <h1 > Lorem ispsum doler it sem</h1>
  <p > Why not try our services today, you won't regret your choice</p></div>
  
  <button class="button1">CONTACT US TODAY</button>

</div>

    <!-- Footer -->



    <footer style="color: aliceblue;">
      <div class="main-content">
        <div class="left box">
          <h2>
About us</h2>
<div class="content">
            <p>
Lorem Ipsum code new where you can learn web designing, web development, ui/ux designing, html css tutorial, hover animation and effects, javascript and jquery tutorial and related so on.</p>
<p style="color:blue; float: right;">Read More>></p>
              <div class="social">
              <a href="https://facebook.com/coding.np"><span class="fab fa-facebook-f"></span></a>
              <a href="#"><span class="fab fa-twitter"></span></a>
              <a href="https://instagram.com/coding.np"><span class="fab fa-instagram"></span></a>
              <a href="https://youtube.com/c/codingnepal"><span class="fab fa-youtube"></span></a>
            </div>
</div>
</div>
<div class="center box">
          <h2>
Quick Links</h2>
<div class="content">
            <div class="place">
              <span class="fas fa-map-marker-alt"></span>
              <span class="text">Birendranagar, Surkhet</span>
            </div>
<div class="phone">
              <span class="fas fa-phone-alt"></span>
              <span class="text">+089-765432100</span>
            </div>
<div class="email">
              <span class="fas fa-envelope"></span>
              <span class="text">abc@example.com</span>
            </div>
</div>
</div>
<div class="center box">
  <h2>
Latest Bolg Post</h2>
<div class="content">
    <div class="place">
      <span class="fas fa-map-marker-alt"></span>
      <span class="text">Birendranagar, Surkhet</span>
    </div>
<div class="phone">
      <span class="fas fa-phone-alt"></span>
      <span class="text">+089-765432100</span>
    </div>
<div class="email">
      <span class="fas fa-envelope"></span>
      <span class="text">abc@example.com</span>
    </div>
</div>
</div>
<div class="right box">
          <h2>
Contact us</h2>
<div class="content">
            <form action="#">
              <div class="email">
                <div class="text">
Email *</div>
<input type="email" required>
              </div>
<div class="msg">
                <div class="text">
Message *</div>
<!-- NOTE: Due to more textarea tag I got an error. So I changed the textarea name to changeit. Please change that changeit name to textarea -->
<changeit id=".msgForm" rows="2" cols="25" required></changeit> <!-- replace this changeit name to textarea -->
              
              <br />
<div class="btn">
<button type="submit">Send</button>
              </div>
 
              
</body>
</html>
