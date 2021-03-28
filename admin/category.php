<?php
    require_once 'header.php';
    require_once 'navbar.php';
    require_once 'left-navbar.php';
 
    $id=$_SESSION['id'];
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(isset($_POST['delete']))
        {
            $id=test_input($_POST['delete']);
           
                $sql="delete from product where id=$id";
                if($conn->query($sql))
                {
                    $resMember=true;   
                }
                else
                {
                    $errorMember=$conn->error;
                }

           
        }
        
        if(isset($_POST['feature']))
        {
            $id=$_POST['feature'];
            $sql="update product set status=2 where id='$id'";
            if($conn->query($sql))
                    {
                        $resMember=true;   
                    }
                    else
                    {
                        $errorMember=$conn->error;
                    }
    
        }
        if(isset($_POST['unfeature']))
        {
            $id=$_POST['unfeature'];
            $sql="update product set status=1 where id='$id'";
            if($conn->query($sql))
                    {
                        $resMember=true;   
                    }
                    else
                    {
                        $errorMember=$conn->error;
                    }
    
        }

        if(isset($_POST['hide']))
        {
            $id=$_POST['hide'];
            $sql="update product set status=0 where id='$id'";
            if($conn->query($sql))
                    {
                        $sql="update product set new=0 where id='$id'";
                        if($conn->query($sql)){
                        $resMember=true; }  
                    else
                    {
                        $errorMember=$conn->error;
                    }
                    } 
        }
    
        if(isset($_POST['show']))
        {
            $id=$_POST['show'];
            $sql="update product set status=1 where id='$id'";
            if($conn->query($sql))
                    {
                        $resMember=true;   
                    }
                    else
                    {
                        $errorMember=$conn->error;
                    }
    
        }   
        
        if(isset($_POST['undo_new']))
        {
            $id=$_POST['undo_new'];
            $sql="update product set new=0 where id='$id'";
            if($conn->query($sql))
                    {
                        $resMember=true;   
                    }
                    else
                    {
                        $errorMember=$conn->error;
                    }
    
        }

        if(isset($_POST['new']))
        {
            $id=$_POST['new'];
            $sql="update product set new=1 where id='$id'";
            if($conn->query($sql))
                    {
                        $resMember=true;   
                    }
                    else
                    {
                        $errorMember=$conn->error;
                    }
    
        }
 
    }
        
    $sql="select * from product";
    $result =  $conn->query($sql);
    if($result->num_rows)
    {
        while($row = $result->fetch_assoc())
        {
            $productList[] = $row;
        }
    }
 
    $sql ="Select * from category";
if($res=$conn->query($sql))
{
    if($res->num_rows)
    {
        while($row = $res->fetch_assoc())
        {
            $category[]=$row;
        }
        
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
        <h1><i class="bi bi-grid-3x3-gap-fill"></i>&nbsp; Category
        </h1>
        <ol class="breadcrumb">
            <li>
                <div class="pull-right">
                    <a href="" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Rebuild"><i class="fa fa-refresh"></i></a>
                </div>
            </li>
        </ol>
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
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                             
                             <th style="  text-align: center;">S No.</th>
                             <th style="  text-align: center;width:50%" width="50%">Category</th>
                             <th >Action</th>
                        </tr>
                    </thead>
                     <tbody> 
 
                    
                     <?php 
                            if (isset($category)) 
                            {
                                $i = 1;
                                foreach ($category as $d) 
                                {     
                     ?> 
                                     <tr> 
                                         
                                         
                                        <td style="  text-align: center; " id="name<?=$i?>"><?=$d['id'];?></td> 
                                        <td style="  text-align: center; " width="50%" id="price<?=$i?>">
                                            <input type="text" class="form-control edit" name="category" id="category<?=$d['id']?>" style="width:50%" value="<?=$d['category'];?>" disabled>
                                        </td>
                                         
                                        <td>
                                             <form method="post">
                                             
                                                
                                                <Button type="button" class="btn btn-success"  name="edit" id="edit<?=$d['id']?>" onclick="makeEditable(<?=$d['id']?>)"><i class="bi bi-pencil-square"></i></Button>
                                                <button type="button" style="display:none" class="btn btn-warning" name="" onclick="ajax(<?=$d['id']?>)" id="update<?=$d['id']?>" value="<?=$d['id']?>" >Update</button>
                                                &nbsp; 
                                                <Button type="submit" class="btn btn-danger" name="delete" value="<?= $d['id']?>"><i class="bi bi-trash"></i>Delete</Button>
                                                <a href="../categories?token=<?=$d['id']?>">
                                                    <button type="button" class="btn btn-tool"><i class="bi bi-eye-fill"></i></button>
                                                </a>
                                                </form>
                                        </td>
                                    </tr>
                                 
                            <?php
                                $i++;
                                    
                                            
                                }
                            }
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

  

<?php
    require_once 'js-links.php';
?>

<!-- <script>
    function setEditValues(id,count)
    {
        $("#eid").val(id); 
        $("#ename").val($("#name"+count).html());
        
        $("#eprice").val($("#price"+count).html());
        $("#edis").val($("#dis"+count).html());
    }  
</script> -->
<script>
    function makeEditable(db_id)
    {   
        $(".edit").attr("disabled",true);
        $(".btn-success").show();  
        $(".btn-warning").hide();
        $("#category"+db_id).attr("disabled",false)
        //$("#"+editBtn+counter).hide();
        //$("#"+updateBtn+counter).show().attr('name',updateBtnName).html('Update');  
        $("#edit"+db_id).hide();
        $("#update"+db_id).show().attr('name',"change")  
        $("#category"+db_id).focus();      
    }
    setTimeout(function()
    {
        $(".alert").hide();
    },3000);
    function ajax(id)
    {
        
        var category = $("#category"+id).val();
        $.ajax(
        {
          url:'cat_ajax.php',
          type:"POST",
          data:{change:id,
                category:category
                     
              },
              success : function(data)
                {
                  if(data.trim()=="updated")
                  {
                    $(".btn-warning").hide();
                    $(".btn-success").show();  
                    $("#category"+id).attr("disabled",true);
                  }

                },
                error:
                function(err){} 

      });

    }
    
</script>