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
            
            $sql="delete from u_register where id=$id";
            if($conn->query($sql))
            {
                $resRegister=true;   
            }
            else
            {
                $errorSubject=$conn->error;
            }
        }
        
        if(isset($_POST['add']))
        {
            $rId=test_input($_POST['regRid']);
            $mobile=test_input($_POST['regMobile']);
            $name=test_input($_POST['regName']);
            $sql="insert into u_register(r_id,mobile,u_name) values('$rId','$mobile','$name')";
            if($conn->query($sql))
            {
                    $resRegister = "true";
            }
            else
            {
                $errorSubject=$conn->error;
            }
        }
        
        if(isset($_POST['edit']))
        {   
            $rId=test_input($_POST['eregRid']);
            $mobile=test_input($_POST['eregMobile']);
            $name=test_input($_POST['eregName']);
            $id=test_input($_POST['eid']);
            
            $sql="update u_register set r_id='$rId',mobile='$mobile',u_name='$name' where id=$id";
            if($conn->query($sql))
            {
                    $resRegister  = "true";
            }
            else
            {
                $errorSubject=$conn->error;
            }
        }
 
    }
        
    $sql="select * from u_register";
    $result =  $conn->query($sql);
    if($result->num_rows)
    {
        while($row = $result->fetch_assoc())
        {
            $registerList[] = $row;
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
            Registered Users List
        </h1>
        <ol class="breadcrumb">
            <li>
                <div class="pull-right">
                    <button title="" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus"></i></button> 
                    <a href="" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Rebuild"><i class="fa fa-refresh"></i></a>
                </div>
            </li>
        </ol>
    </section>

    <!-- Main content -->
      <br>
    <section class="content">
        <?php
            if(isset($resRegister))
            {
        ?>
                <div class="alert alert-success"><strong>Success! </strong> your request successfully updated. </div> 
        <?php
            }
            else if(isset($errorSubject))
            {
        ?>
                <div class="alert alert-danger"><strong>Error! </strong><?=$errorSubject?></div> 
        <?php
                
            }
        ?>
      
            <div class="box">
              <div class="box-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                             <th>Serial No</th>
                             <th>r_id</th>
                             <th>mobile</th>
                             <th>u_name</th>
                             <th>Action</th>
                        </tr>
                    </thead>
                     <tbody> 
 
                    
                     <?php
                        
                            if (isset($registerList)) 
                            {
                                $i = 1;
                                foreach ($registerList as $detail) 
                                {    
                                
                     ?>
                        
                                     <tr> 
                                        <td style="  text-align: center; " id="serial<?=$i?>"><?=$i;?></td>
                                        <td style="  text-align: center; " id="r_id<?=$i?>"><?=$detail['r_id'];?></td> 
                                         <td style="  text-align: center; " id="mobile<?=$i?>"><?=$detail['mobile'];?></td> 
                                         <td style="  text-align: center; " id="name<?=$i?>"><?=$detail['u_name'];?></td> 
                                           <td>
                                             <form method="post">
                                                <button name="confirm" type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-edit"  onclick="setEditValues(<?=$detail['id'] ?>,<?=$i?>)" value="<?=$detail['id'] ?>">
                                                            <i class="fa fa-edit">Edit</i>
                                                </button>
                                                <button  class="btn btn-danger" type="submit" name="delete" value="<?=$detail['id']?>">
                                                            <i class="fa fa-trash-o"></i> Delete
                                                </button>

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

                         
    <div class="modal fade" id="modal-default">
      <div class="modal-dialog" >
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title"> Register New User</h4>
           </div>
           <form method="post">
           <div class="modal-body">
               <div class="row">
                  <div class="col-md-6"> 
                       <div class="form-group">
                            <label>Referal id</label><br>   
                            <input type="text"  id="regRid" name="regRid" class="form-control">  
<!--                           <select></select> mobile and name as input-->
                        </div> 
                   </div>
                   <div class="col-md-6"> 
                       <div class="form-group">
                            <label>Mobile No.</label><br>   
                            <input type="text"  id="regMobile" name="regMobile" class="form-control">  
<!--                           <select></select> mobile and name as input-->
                        </div> 
                   </div>
                </div>  
               <div class="row">
                  <div class="col-md-6"> 
                       <div class="form-group">
                            <label>User Name</label><br>   
                            <input type="text"  id="regName" name="regName" class="form-control">  
<!--                           <select></select> mobile and name as input-->
                        </div> 
                   </div>
                </div> 
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            <button type="submit" name="add" class="btn btn-primary" value="">Add</button>
          </div>
             </form>
            </div>
               
            </div>
            <!-- /.modal-content -->
          </div>

    <div class="modal fade" id="modal-edit">
      <div class="modal-dialog" >
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title">Edit Registered Users</h4>
           </div>
           <form method="post">
           <div class="modal-body">
               <div class="row">
                  <div class="col-md-6"> 
                       <div class="form-group">
                            <label>Referal id</label><br>   
                            <input type="text"  id="eRid" name="eregRid" class="form-control">  
<!--                           <select></select> mobile and name as input-->
                        </div> 
                   </div>
                   <div class="col-md-6"> 
                       <div class="form-group">
                            <label>Mobile No.</label><br>   
                            <input type="text"  id="eregMobile" name="eregMobile" class="form-control">  
<!--                           <select></select> mobile and name as input-->
                        </div> 
                   </div>
                </div>  
               <div class="row">
                  <div class="col-md-6"> 
                       <div class="form-group">
                            <label>User Name</label><br>
                            <input type="text"  id="eregName" name="eregName" class="form-control">
                           <input type="hidden"  id="eid" name="eid" class="form-control">
                        </div> 
                   </div>
                </div> 
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            <button type="submit" name="edit" class="btn btn-primary" value="">Edit</button>
          </div>
             </form>
            </div>
             
        </div>
            <!-- /.modal-content -->
      </div>
          

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->       
  <div class="control-sidebar-bg"></div>

  

<?php
    require_once 'js-links.php';
?>

<script>
    function setEditValues(id,count)
    {
//        alert($("#r_id"+count).html());
        $("#eid").val(id); 
        $("#eRid").val($("#r_id"+count).html());
        $("#eregMobile").val($("#mobile"+count).html());
        $("#eregName").val($("#name"+count).html());
    }  
</script>
