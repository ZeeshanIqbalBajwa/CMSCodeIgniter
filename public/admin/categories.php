<!--Header-->
<?php require_once ('includes/header.php');

?>




<body>

    <div id="wrapper">

<!--Navigation-->
<?php require_once ('includes/nav.php');
?>


 <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="categories.php"><i class="fa fa-fw fa-table"></i> Categories</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Comments</a>
                    </li>
                    <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#posts"><i class="fa fa-fw fa-arrows-v"></i> Posts<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="posts" class="collapse">
                            <li>
                                <a href="#">View All Posts</a>
                            </li>
                            <li>
                                <a href="#">Add New Post</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-user"></i> Profile</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>




        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Blank Page
                            <small>Subheading</small>
                        </h1>
                        <h1>Category</h1>


                        <!--Add New Category-->

                    <div class="col-lg-6">

                        <?php 

                        if (isset($_POST['btn_category'])){
                            if($_POST['category']=="")
                            {
                                echo '<p class="alert alert-danger">Please Enter Category Name</p>';
                            }
                        
                             else{
                                 $Add_Cat = $_POST['category'];
                                 $query="insert into categories(cat_title)values ('$Add_Cat')";
                                 mysqli_query($con,$query);
                                }
                         }

                        ?>
                        <form action="" method="POST">
                            <label> Add New Category</label>

                            <input type="text" name="category" placeholder="Category" class="form-control mb-2">
                            <button class="btn btn-success" type="submit" name="btn_category">Add Category</button>

                        </form>


                    </div>


                    <div class="col-lg-6">
                        <table class="table table-bordered">
                            <tr>

                                <th style="width: 20%">Category ID</th>
                                <th style="width: 50%">Category Name</th>
                                 <th style="width: 15%">Delete</th>
                                 <th style="width: 15%">Update</th>
                                 



                            </tr>

                            <tr>
                            <?php
                            $sql="select * from categories";
                            $result=mysqli_query($con,$sql);

                            while($row=mysqli_fetch_assoc($result)){



                                ?>


                            
                                <td><?php echo $row['cat_id']?></td>
                                
                                <td><?php echo $row['cat_title']?></td>
                                <td> <a href="categories.php?Del=<?php echo $row['cat_id'];?>"><span class="fa fa-trash"></span></td>
                                    <td> <a href="categories.php?update=<?php echo $row['cat_id'];?>" class="btn btn-success">Edit<span class="fa fa-edit"></span></td>
                            </tr>
                            
                            <?php
                            }


                            //Delete the category Table
                            if(isset($_GET['Del']))
                            {
                                $Del = $_GET['Del'];
                                $sql="delete from categories where cat_id='$Del'";
                                $result=mysqli_query($con,$sql);
                                if($result)
                                {
                                    header("location:categories.php");
                                }
                            }
                            ?>


                        </table>

                       
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>


      



<!--Foooter-->
<?php require_once ('includes/footer.php');
?>