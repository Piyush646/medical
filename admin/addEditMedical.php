<?php
    require_once 'header.php';
    require_once 'navbar.php';
    require_once 'left-navbar.php';
 
    $id=$_SESSION['id'];
    
        if(isset($_POST['add']) && isset($_POST['ename']) && isset($_POST['edis']) && isset($_POST['eprice']))
        {
            // $id=$_GET['token'];
            $name=$_POST['ename'];
            $dis=$conn->real_escape_string($_POST['edis']);
            $short_des=$conn->real_escape_string($_POST['short_des']);
            $price=$_POST['eprice'];
            $code=$_POST['ecode'];
            $category = $_POST['category'];
            $sql="insert into  product(name,price,dis, short_des, status,code,category) values ('$name','$price','$dis', '$short_des', 1, $code,'$category')";
            if($conn->query($sql))
                {
                    $insert_id = $conn->insert_id;
                    if(upload_images2($_FILES,$conn,"product_img","p_id","img",$insert_id,"projectFile"))
                    {
                        $resMember = "all_true";
                    }else
                    {
                        $resMember = "files_left";
                    }
                     
                }
               else
            {
                $errorMember=$conn->error;
            }
        }
        
             
                if(isset($_POST['edit']))
                {
                    $id=$_GET['token'];
                    $name=$_POST['ename'];
                    $dis=$conn->real_escape_string($_POST['edis']);
                    $short_des=$conn->real_escape_string($_POST['short_des']);
                    $price=$_POST['eprice'];
                    $code=$_POST['ecode'];
                    $category=$_POST['category'];
                    $sql="update product set name='$name',price='$price',dis='$dis', short_des='$short_des', code='$code',category='$category' where id='$id'";
                    if($conn->query($sql))
                    {
                        if(upload_images2($_FILES,$conn,"product_img","p_id","img",$id,"projectFile"))
                        {
                            $resMember = "all_true";
                        }else
                        {
                            $resMember = "files_left";
                        }
                    }
                   else
                    {
                      $errorMember=$conn->error;
                    }
                }
                
            
        
            if(isset($_GET['token']))
            {
                $id=$_GET['token'];
                $sql="select * from product where id='$id'";
                $result =  $conn->query($sql);
                if($result->num_rows)
                {
                    $row = $result->fetch_assoc(); 
                    $productList = $row;  
                }

                $sql = "SELECT * from product_img where p_id=$id";
                if($result = $conn->query($sql))
                {
                    if($result->num_rows)
                    {
                        while($row = $result->fetch_assoc())
                        {
                            $product_img[]=$row;
                        }
                         
                    }
                     
                }else
                {
                    echo $conn->error;
                }

                $sql = "select * from category";
                if($result = $conn->query($sql))
                {
                    if($result->num_rows)
                    {
                        while($row = $result->fetch_assoc())
                        {
                            $catee[]=$row;
                        }
                         
                    }
                     
                }else
                {
                    echo $conn->error;
                }

}else{

$sql = "SELECT * from category";
  if($result = $conn->query($sql))
  {
    while($row = $result->fetch_assoc())
    {
        $cat[]=$row; 
    }       
  }
  else
  {
    echo "error : ".$conn->error;
  }

  $sqll = "SELECT * from product order by id desc limit 1";
    if($result = $conn->query($sqll))
    {
       
            $happy[]=$result->fetch_assoc();
        
    }
}
?>

<style>
    .box-body{
	overflow: auto!important;
}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Equipments
        </h1>
         
    </section>

    <!-- Main content -->
      <br>
    <section class="content">
        <?php
            if(isset($resMember))
            {
        ?>
                <div class="alert alert-success"><strong>Success! </strong> your request successfully updated. </div> 
        <?php
            }
            else if(isset($errorMember))
            {
        ?>
                <div class="alert alert-danger"><strong>Error! </strong><?=$errorMember?></div> 
        <?php
                
            }
        ?>
      
            <div class="box">
              <div class="box-body">
              <form method="post" enctype="multipart/form-data">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <br>
                        <label>Category of Equipment :</label>
                        <select class="form-control" aria-label="Default select example" name="category">
                          <?php
                              if(isset($cat))
                              {
                                
                                foreach ($cat as $category)
                                {                               
                                  foreach($happy as $birthday)
                                  {
                                    $sel = "";                                                                                                             
                                    if($birthday['category']  == $category['id'])
                                    {
                                          $sel = "selected";
                                    }
                                  
                                  ?>
                                  <option value="<?=$category['id']?>" <?=$sel?>><?=$category['caty']?></option>
                                  <?php
                                  }
                                }
                              }
                              else if(isset($_GET['token']))
                              {
                                foreach ($catee as $c)
                                {                               
                                 
                                    $sel = "";                                                                                                             
                                    if($productList['category']  == $c['id'])
                                    {
                                          $sel = "selected";
                                    }
                                  
                                  ?>
                                  <option value="<?=$c['id']?>" <?=$sel?>><?=$c['caty']?></option>
                                  <?php
                                 
                                }
                              }
                                
                          ?>

                          </select>
                    </div>
                    <div class="col-sm-12"><br>
                         <label >Name of Equipment :</label>
                        <input type="text" class="form-control" id="" name="ename" value="<?=$productList['name']?>">

                    </div>
                     <div class="col-sm-6"><br>
                        <label >Price (in Dollars) :</label>
                        <input type="text" class="form-control" id="" name="eprice" value="<?=$productList['price']?>">
                        
                    </div>
                    <div class="col-sm-6"><br>
                        <label >Product Code :</label>
                        <input type="text" class="form-control" id="" name="ecode" value="<?=$productList['code']?>">
                        
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-10"> 
                        <div class="form-group">
                            <label style="margin-left:5px">Description</label><br> 
                            <textarea  id="edis" name="edis" class="form-control" rows="3" style="resize: none;width: 100%;" required><?=$productList['dis']?></textarea>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10"> 
                        <div class="form-group">
                            <label >Short Description</label>
                            <textarea id="short_des" name="short_des" class="form-control" rows="3" style="resize: none;width: 100%;" required><?=$productList['short_des']?></textarea>
                        </div>
                    </div>                        
                </div><br><br>
                
                <div class="form-group">
                    <label>Add Product Images :</label><br>
                    <button type="button" class="btn btn-success" onclick="addFilesField()"><i class="fa fa-plus"></i></button>
                </div> 
                
                <div class="row" style="margin-bottom:20px"> 
                        
                        <?php
                            if(isset($product_img)) 
                            {
                                $counter=0;
                                foreach($product_img as $file)
                                { 
                                      
                                    ?>
                                    <div class="col-md-2" id="file<?=$counter?>">
                                        <div class="col-md-8">
                                            <a href="./uploads/<?=$file['img']?>" target="_blank"><img src="./uploads/<?=$file['img']?>" width="100px" height="100px"/></a>
                                        </div>
                                        <div class="col-md-1">
                                            <button type="button" class="btn btn-danger" onclick="deleteFile(<?=$file['id']?>,'file<?=$counter?>')"><i class="fa fa-trash"></i></button>
                                        </div>
                                    </div>
                                    <?php
                                    
                                }
                            }
                        
                        ?>
                              
                    
                </div>
                <div class="row">
                        <div class="col-md-4" id="filesDiv"> 
                                 
                                
                        </div>
                </div>

                <br><br>
                    <?php
                        if(isset($productList))
                        {
                            ?>
                                 <center><button type="submit" class="btn btn-lg btn-primary" name="edit">SAVE</button></center>
                            <?php
                        }else
                        {
                            ?>
                            <center><button type="submit" class="btn btn-lg btn-primary" name="add">Add</button></center>
                            <?php
                        }
                    ?>
                 
            </div>
        </form>             
                       
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

  

<?php
    require_once 'js-links.php';
?>
<script>
     CKEDITOR.replace( 'edis' );

    setTimeout(function()
    {
        $(".alert").hide();
    },3000);



    var counter=1;
    function addFilesField()
    {
        
        var inhtml  = `<div class="row" style="margin-top:20px" >    
                            <div class="col-md-10">
                                <input   type="file" id='projectfile${counter}' name="projectFile[]" class="form-control"/>
                            </div> 
                            <div class="col-md-2">
                                <button type="button" class="btn btn-danger" onclick="removeField('projectfile${counter}')"><i class="fa fa-trash"></i></button>
                            </div> 
                        </div>`;
        $("#filesDiv").append(inhtml);
        counter++;

    }

    function removeField(id)
    {
            $("#"+id).parent().parent().remove();
            
    }  
    function deleteFile(id,divId)
    {
        $.ajax({
            url:"files_ajax.php",
            type:"POST",
            data:{
                deleteFile:id
            },
            success:function(data)
            {
            
                if(data.trim()=="ok")
                {
                    $("#"+divId).remove();  
                }else
                {
                    console.log(data);
                }
            },
            error:function()
            {

            }
        
        })
    } 
    
</script>
 
