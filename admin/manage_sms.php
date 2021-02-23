<?php
    require_once 'header.php';
    require_once 'navbar.php';
    require_once 'left-navbar.php';
 
    $id=$_SESSION['id'];
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
         
        
        if(isset($_POST['update']))
        {   
            $due=test_input($_POST['due']);
            $near_due=test_input($_POST['near_due']);
            $sql="update manage_sms set near_due='$near_due',due_fee='$due'";
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
        
    $sql="select * from manage_sms";
    $result =  $conn->query($sql);
    if($result->num_rows)
    {
        while($row = $result->fetch_assoc())
        {
            $smsDetails = $row;
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
        
            if(isset($smsDetails))
            { 
            ?>
                <form method="post">
                    <div class="box">
                        <div class="box-body">  
                            <h4>Near Due Fee SMS</h4>
                            <textarea style="width: 100%;height:100px;resize:none" name="near_due"><?=$smsDetails['near_due']?></textarea>
                        </div>
                    </div>    
                    <div class="box">
                        <div class="box-body"> 
                            <h4>Due Fee SMS</h4>
                            <textarea style="width: 100%;height:100px;resize:none" name="due" ><?=$smsDetails['due_fee']?></textarea>
                        </div>
                    </div> 
                    <section class="content-header">
                        <ol class="breadcrumb">
                            <li>
                                <div class="pull-right">    
                                    <button type="submit" class="btn btn-success" name="update">Save</button>   
                                </div>
                            </li>
                        </ol>
                    </section>
                </form>
                
            <?php
            }
            ?>
      <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
    
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
