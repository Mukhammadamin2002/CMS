
    <?php include "includes/admin_header.php"; ?>


    <div id="wrapper">

        <!-- Navigation -->

        <?php include "includes/admin_navigation.php"; ?>



        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">


                            <h1 class="page-header">
                                Welcome To Admin
                                <small>Author</small>
                            </h1>
                        <div class="col-xs-6">

                            <?php  insert_categories();  ?>

                            <form action="" method="post">
                               
                                <div class="form-group">
                                 <label for="cat_title">Add Category</label>
                                    <input class="form-control" type="text" name="cat_title">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                                </div>
                            </form>

                        <?php 
                        // Update 

                        if (isset($_GET['edit'])) {
                            $cat_id = $_GET['edit'];

                            include "includes/update_categories.php";
                        }

                         ?>

                        </div> <!-- Add Category Form -->

                        <div class="col-xs-6">

                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Category TItle</th>
                                            <th>Delete</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                        <tbody>

                                                <?php findAllCategories(); ?>

                                                 <?php 

                                                 //Deleting Query

                                                if (isset($_GET['delete'])) {
                                                    $the_cat_id = $_GET['delete'];

                                                    $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id}";
                                                    $delete_query = mysqli_query($connection, $query);
                                                    header("location: categories.php");
                                                }




                                                ?>

                                        </tbody>
                                </table>

                        </div>
                     
                    </div>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include "includes/admin_footer.php"; ?> <!-- Categories Footer File -->