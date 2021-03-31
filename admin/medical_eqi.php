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
        
    $sql="select product.name,product.price,product.dis,product.status,product.id,product.code,product.new,product.short_des,product.category
    ,category.caty from product join category on product.category = category.id";
    $result =  $conn->query($sql);
    if($result->num_rows)
    {
        while($row = $result->fetch_assoc())
        {
            $productList[] = $row;
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
        <h1>Equipments
        </h1>
        <ol class="breadcrumb">
            <li>
                <div class="pull-right">
                    <a title="" href="./addEditMedical.php" class="btn btn-primary" ><i class="fa fa-plus"></i></a> 
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
                             
                             <th >Name</th>
                             <th >Price</th>
                             <th >Product Code</th>
                             <th >Category</th> 
                            <th>Action</th>
                        </tr>
                    </thead>
                     <tbody> 
 
                    
                     <?php 
                            if (isset($productList)) 
                            {
                                $i = 1;
                                foreach ($productList as $d) 
                                {     
                     ?> 
                                     <tr> 
                                         
                                         
                                         <td  id="name<?=$i?>"><?=$d['name'];?></td> 
                                         <td  id="price<?=$i?>"><?=$d['price'];?></td>
                                         <td  id="code<?=$i?>"><?=$d['code'];?></td> 
                                         <td  id="cat<?=$i?>"><?=$d['caty']?></td> 
                                         
                                           <td>
                                             <form method="post">
                                                <a href="./addEditMedical.php?token=<?=$d['id']?>" name="confirm" type="button" class="btn btn-success"  onclick="" value="<?=$d['id'] ?>">
                                                            <i class="fa fa-edit">Edit</i>
                                                </a>
                                                <button  class="btn btn-danger" type="submit" name="delete" value="<?=$d['id']?>">
                                                            <i class="fa fa-trash-o"></i> Delete
                                                </button>
                                                <?php
                                                $status=$d['status'];
                                                switch($status)
                                                {   
                                                    case 0:
                                                        
                                                        ?>
                                                        <button  class="btn btn-primary" type="submit" name="show" value="<?=$d['id']?>">
                                                        <i class="fa fa-eye" aria-hidden="true"></i> Show
                                                        </button>
                                                        <?php
                                                        break;
                                                    case 1:
                                                        ?>
                                                        <button  class="btn btn-warning" type="submit" name="hide" value="<?=$d['id']?>">
                                                        <i class="fa fa-eye-slash" aria-hidden="true"></i> Hide
                                                        </button>
                                                       
                                                        <?php
                                                        
                                                        break;
                                                        
                                                    case 2:
                                                    ?>
                                                    <button  class="btn btn-warning" type="submit" name="hide" value="<?=$d['id']?>">
                                                        <i class="fa fa-eye-slash" aria-hidden="true"></i> Hide
                                                        </button>
                                                    
                                                    <?php
                                                    
                                                    break;
                                                    
                                                    ?>
                                                    
                                                    <?php  
                                                    }
                                                
                                                    ?>
                                               

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
    setTimeout(function()
    {
        $(".alert").hide();
    },3000);

    
</script>