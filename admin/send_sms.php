<?php
    require_once 'header.php';
    require_once 'navbar.php';
    require_once 'left-navbar.php';
 
    $id=$_SESSION['id'];
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(isset($_POST['sendAll']))
        {   
            $sms = $_POST['sms_txt'];
            $numbers=implode(',',$_POST['sms_numbers']);   
            $result = json_decode(send_sms($numbers,$sms)); 
            if($result->status==='success')
            {
                $resMember=true;
            }
        }
 
    }
        
    $sql="select * from gym_member";
    $result =  $conn->query($sql);
    if($result->num_rows)
    {
        while($row = $result->fetch_assoc())
        {
            $memberList[] = $row;
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
<form method="post">
    <section class="content-header">
        <h1>
            Gym Members
        </h1>
        <ol class="breadcrumb">
            <li>
                <div class="pull-right">
                    <button type="submit" class="btn btn-primary" name="sendAll">Send SMS To Selected</button>
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
               
                <label>Type Your Sms Here </label>
                <textarea style="width: 100%;height:150px;resize:none;margin-bottom:10px" class="form-control" name="sms_txt" required></textarea> 
                    <table id="example3" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th id="checkallCheck">Check <input type="checkbox"  onclick="checkAll()"></th>
                                <th>S.No.</th> 
                                <th>Name</th>
                                <th>Father's Name</th>
                                <th>Address</th>
                                <th>Mobile No.</th>
                                <th>Date of Joining</th> 
                            </tr>
                        </thead>
                        <tbody> 
    
                        
                        <?php 
                                if (isset($memberList)) 
                                {
                                    $i = 1;
                                    foreach ($memberList as $detail) 
                                    {     
                        ?> 
                                        <tr> 
                                            <td id="check_<?=$i?>"><input type="checkbox" name="sms_numbers[]"   value="<?=$detail['mob_no']?>"></td>
                                            <td style="  text-align: center; " id="serialNo<?=$i?>"><?=$detail['serial_no'];?></td> 
                                            <td style="  text-align: center; " id="name<?=$i?>"><?=$detail['name'];?></td> 
                                            <td style="  text-align: center; " id="f_name<?=$i?>"><?=$detail['f_Name'];?></td> 
                                            <td style="  text-align: center; " id="address<?=$i?>"><?=$detail['address'];?></td> 
                                            <td style="  text-align: center; " id="mob_no<?=$i?>"><?=$detail['mob_no'];?></td>
                                            <td style="  text-align: center; " id="date<?=$i?>"><?=$detail['date'];?></td>
                                             
                                        </tr>
                                    
                                <?php
                                    $i++;
                                        
                                                
                                    }
                                }
                            ?>
            
                            </tbody>
                        </table>    
               
           </div>
        </div>    
      <!-- /.box -->
    </section>
    </form>
     <!-- /.content -->
</div>

                         
    <div class="modal fade" id="modal-default">
      <div class="modal-dialog" >
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title"> Add New Member</h4>
           </div>
           <form method="post">
           <div class="modal-body">
               <div class="row">
                  <div class="col-md-6"> 
                       <div class="form-group">
                            <label>Member Id</label><br>   
                            <input type="text"  id="serialNo" name="serialNo" class="form-control" required>  
                        </div> 
                   </div>
                   <div class="col-md-6"> 
                       <div class="form-group">
                            <label>Name</label><br>   
                            <input type="text"  id="name" name="name" class="form-control"  required>  
                        </div> 
                   </div>
                </div>  
               <div class="row">
                  <div class="col-md-6"> 
                       <div class="form-group">
                            <label>Father's Name</label><br>   
                            <input type="text"  id="fName" name="fName" class="form-control"  required>  
                        </div> 
                   </div>
                   <div class="col-md-6"> 
                       <div class="form-group">
                            <label>Address</label><br>   
                            <input type="text"  id="address" name="address" class="form-control"  required>   
                        </div> 
                   </div>
                </div> 
               <div class="row">
                  <div class="col-md-6"> 
                       <div class="form-group">
                            <label>Mobile No.</label><br>   
                            <input type="text"  id="mobNo" name="mobNo" class="form-control"  required> 
                        </div> 
                   </div>
                   <div class="form-group">
                       <div class="col-md-6"> 
                            <label>Date</label><br>  
                           <input type="text"  value="<?=date('d/m/Y')?>" id="date" name="date" class="form-control"  required>
                       </div>
                   </div>
                </div> 
               <div class="row">
                  <div class="col-md-6"> 
                       <div class="form-group">
                            <label>Fees Amount</label><br>   
                            <input type="number"  id="feesAmt" name="feesAmt" class="form-control"  required>  
                        </div> 
                   </div>
                   <div class="col-md-6"> 
                       <div class="form-group">
                            <label>Month Package</label><br>   
                             
                            <select  id="monthPkg" name="monthPkg" class="form-control">
                                <option>1</option>
                                <option>3</option>
                                <option>6</option>
                                <option>12</option>
                            </select>
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
            <h4 class="modal-title">Edit Member</h4>
           </div>
           <form method="post">
           <div class="modal-body">
               <div class="row">
                  <div class="col-md-6"> 
                       <div class="form-group">
                            <label>Member Id</label><br>   
                            <input type="text"  id="eserialNo" name="eserialNo" class="form-control" required>  
                        </div> 
                   </div>
                   <div class="col-md-6"> 
                       <div class="form-group">
                            <label>Name</label><br>   
                            <input type="text"  id="ename" name="ename" class="form-control"  required>  
                        </div> 
                   </div>
                </div>  
               <div class="row">
                  <div class="col-md-6"> 
                       <div class="form-group">
                            <label>Father's Name</label><br>   
                            <input type="text"  id="efName" name="efName" class="form-control"  required>  
                        </div> 
                   </div>
                   <div class="col-md-6"> 
                       <div class="form-group">
                            <label>Address</label><br>   
                            <input type="text"  id="eaddress" name="eaddress" class="form-control"  required>   
                        </div> 
                   </div>
                </div> 
               <div class="row">
                  <div class="col-md-6"> 
                       <div class="form-group">
                            <label>Mobile No.</label><br>   
                            <input type="text"  id="emobNo" name="emobNo" class="form-control"  required> 
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
    
    function checkAll()
    {
        var checkBoxes = $("input[name=sms_numbers\\[\\]]");
        checkBoxes.prop("checked", !checkBoxes.prop("checked"));
    }
</script>
