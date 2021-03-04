<!--db.php-->
<?php require_once "includes/db.php"



?>



  <div class="top">
  
    <div class="top-right">
      
  
      <a class="#" href="#signup">&nbsp;&nbsp;&nbsp;&nbsp; Signup  |</a>
      <a href="#">Login  |</a>
      <a href="#">RSS Feeds  |</a>
      <a href="#">Archeived News</a>

    </div>
    <div class="social1" style="float: right;" >
      <a href="https://facebook.com/coding.np"><span class="fab fa-facebook-f"  ></span></a>
      <a href="#"><span class="fab fa-twitter"></span></a>
      <a href="https://instagram.com/coding.np"><span class="fab fa-instagram"></span></a>
      <a href="https://youtube.com/c/codingnepal"><span class="fab fa-youtube"></span></a>
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
