<!--db.php-->
<?php require_once "includes/db.php"



?>

<div class="nobody" style="text-align: left;" >
  <h1>NobodysFool</h1>
  <p>Free Website Templete</p>
 <?php
    if(isset($_POST['btn_search'])){


      echo'working';
    }

 ?>





<form class="example" action="" method="post" >
    <input type="text" placeholder="Search.." name="search2">
    <button type="submit"><i class="fa fa-search" name="btn_search"></i></button>
  </form>
  </div>

  
  <br>



<div class="parent">

<div class="a">

<?php 
  $query="select * from post";
  $result=mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
      {
       $post_title=$row['post_title'];

        echo " <p><br>{$post_title}</p>";
      }
?>

<button class="button">Read More>></button>
</div>
<div class="b">

<?php 
  $query="select * from photo";
  $result=mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
      {
       $photo_title=$row['photo_title'];

        
      }
?>
<img  src="imgs/<?php echo $photo_title ?>">

</div>
</div>
