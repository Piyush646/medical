<?php
require_once 'header.php';
require_once 'navbar.php';
require_once 'left-navbar.php';


  $sql = "SELECT * FROM dynamic_pages";
  $result =  $conn->query($sql);
  if($result->num_rows)
  {
      while($row = $result->fetch_assoc())
      {
          $DynamicList[] = $row;
      }
  }





  if($_SERVER["REQUEST_METHOD"] === "POST"){

    $id=$_SESSION['id'];

    echo "<script>alert($id)</script>";

    if(isset($_POST['delete'])){

      $id = $_POST["delete"];

      $sql = "DELETE FROM dynamic_pages WHERE id = '{$id}' ";

        if($conn->query($sql))
        {
            $resMember=true;
            header("location: dynamic_pages");   
        }
        else
        {
            $errorMember=$conn->error;
        }

    }


  }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Pages</title>
</head>

<body>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Dynamic Pages
            </h1>

            <ol class="breadcrumb">
                <li>
                    <div class="pull-right">
                        <a title="" href="AddEditDynamic" class="btn btn-primary" ><i class="fa fa-plus"></i></a> 
                        <a href="" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Rebuild"><i class="fa fa-refresh"></i></a>
                    </div>
                </li>
            </ol>
        </section>

        <!-- Main content -->
        <br>
        <section class="content">
        <div class="box">
              <div class="box-body">
                        

                <table class="table text-center table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>S.No</th>
                      <th>Title</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>

                      <?php 

                        foreach ($DynamicList as $pages) { ?>
                          
                          <tr>
                            <td><?= $pages['id']?></td>
                            <td><?= $pages['title'] ?></td>

                            <td>
                              <form action="dynamic_pages.php" method="post">
                              <a href="AddEditDynamic?token=<?=$pages['id']?>" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                              
                              &nbsp; 
                              <Button type="submit" class="btn btn-danger" name="delete" value="<?= $pages['id'] ?>"><i class="bi bi-trash"></i>Delete</Button>

                              <a href="../pages?token=<?=$pages['id']?>">
                                  <button type="button" class="btn btn-tool"> <i class="bi bi-eye-fill"></i></button>
                              </a>

                            </form>
                            </td>

                          </tr>


                        <?php }

                       ?>


                  </tbody>
                </table>

                       
                </div>
            <!-- /.box-footer-->
          </div>    
      <!-- /.box -->
    </section>
    <!-- /.content -->
</div>

            <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
</body>
<?php
require_once 'js-links.php';
?>

</html>