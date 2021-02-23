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
            
            $sql="delete from plan where id=$id";
            if($conn->query($sql))
            {
                $resPlan=true;   
            }
            else
            {
                $errorSubject=$conn->error;
            }
        }
        
        if(isset($_POST['add']))
        {
            $name=test_input($_POST['memName']);
            $sql="insert into plan(p_amount) values('$name')";
            if($conn->query($sql))
            {
                    $resPlan = "true";
            }
            else
            {
                $errorSubject=$conn->error;
            }
        }
        
        if(isset($_POST['edit']))
        {
            $name=test_input($_POST['ePlanAmt']);
            $id=test_input($_POST['eid']);
            
            $sql="update plan set p_amount='$name' where id=$id";
            if($conn->query($sql))
            {
                    $resPlan  = "true";
            }
            else
            {
                $errorSubject=$conn->error;
            }
        }
 
    }
        
    $sql="select * from plan";
    $result =  $conn->query($sql);
    if($result->num_rows)
    {
        while($row = $result->fetch_assoc())
        {
            $planList[] = $row;
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
            Subject List
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
            if(isset($resPlan))
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
                             <th>Plan Amount</th>
                             <th>Action</th>
                        </tr>
                    </thead>
                     <tbody> 
 
                    
                     <?php
                        
                            if (isset($planList)) 
                            {
                                $i = 1;
                                foreach ($planList as $detail) 
                                {    
                                
                     ?>
                        
                                     <tr> 
                                        <td style="  text-align: center; " id="serial<?=$i?>"><?=$detail['serial_no'];?></td>
                                        <td style="  text-align: center; " id="planAmt<?=$i?>"><?=$detail['p_amount'];?></td>  
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
            <h4 class="modal-title">Add package</h4>
           </div>
           <form method="post">
           <div class="modal-body">
               <div class="row">
                  <div class="col-md-6"> 
                       <div class="form-group">
                            <label>Plan amount</label><br>   //no  of epin
                            <input type="text"  id="memName" name="memName" class="form-control">  
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
            <h4 class="modal-title">Edit Plan</h4>
           </div>
           <form method="post">
           <div class="modal-body">
               <div class="row">
                  <div class="col-md-6"> 
                       <div class="form-group">
                            <label>Plan Name</label><br>
                            <input type="text"  id="ePlanAmt" name="ePlanAmt" class="form-control">
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
        $("#eid").val(id);
        $("#ePlanAmt").val($("#planAmt"+count).html());
    }  
</script>