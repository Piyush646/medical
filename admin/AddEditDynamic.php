<?php
    require_once 'header.php';
    require_once 'navbar.php';
    require_once 'left-navbar.php';
 
    $id=$_SESSION['id'];
    
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if(isset($_POST["add"])){

            $title = $_POST["title"];
            $content =$conn->real_escape_string($_POST['content']);
            $sql = "INSERT INTO dynamic_pages(title, content) VALUES ('{$title}', '{$content}')";

            if($conn->query($sql))
                {
                    $resMember=true;
                    header("location: dynamic_pages");   
                }
                else
                {
                    $errorMember=$conn->error;
                }

        }/*add end*/

        if(isset($_POST['edit'])){
            $id = $_POST["edit"];
            $title = $_POST["title"];
            $content = $conn->real_escape_string($_POST["content"]);
            $sql = "UPDATE dynamic_pages SET title = '{$title}', content = '{$content}' WHERE id = '{$id}'";
            if($conn->query($sql))
                     {
                         header("location: dynamic_pages");
                     }else
                     {
                         $resMember = "failed";
                     }
                 
        }

    }

    if(isset($_GET["token"]))
    {
        $id=$_GET['token'];
        $sql="SELECT * FROM dynamic_pages WHERE id='$id'";
        $result =  $conn->query($sql);
        if($result->num_rows)
        {
            $row = $result->fetch_assoc(); 
            $pageList = $row;  
        }
        else
        {
            echo $conn->error;
        }

     }

?>
    


    <body>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Dynamic Pages
                </h1>

            </section>

            <!-- Main content -->
            <br>
            <section class="content">
            <div class="box">
                  <div class="box-body">
                            
                            <div class="col-lg-10">
                                <form method="POST" role="form">

                                
                                    <div class="form-group">
                                        <label for="">Page Title</label>
                                        <input type="text" name="title" class="form-control" id="" value="<?php if($pageList){ echo $pageList['title'];} ?>" placeholder="Page Title">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Content</label>
                                        <textarea name="content" id="edis" class="form-control" rows="3" required="required">
                                            <?php if($pageList){ echo $pageList['content'];} ?>
                                        </textarea>
                                    </div>
                                

                                    <?php 

                                        if($pageList){ ?>

                                         <button type="submit" name="edit" value="<?= $pageList['id']?>" class="btn btn-primary mt-4">Update Page</button>

                                        <?php } else { ?>

                                        <button type="submit" name="add" value="true" class="btn btn-primary mt-4">Add Page</button>

                                        <?php }

                                     ?>
                                </form>
                            </div>
                

                           
                    </div>
                <!-- /.box-footer-->
              </div>    
          <!-- /.box -->
        </section>
        <!-- /.content -->
    </div>

                <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
              
    </body>      

  

<?php
    require_once 'js-links.php';
?>

<script>
     CKEDITOR.replace( 'edis' );

    setTimeout(function()
    {
        $(".alert").hide();
    },3000);
</script>

