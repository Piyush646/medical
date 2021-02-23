<?php
    require_once 'header.php';
    require_once 'navbar.php';
    require_once 'left-navbar.php';
 
    $id=$_SESSION['id'];
    
    $date = date('d/m/Y'); 
    if($_SERVER["REQUEST_METHOD"] == "POST")
    { 
        if(isset($_POST['edit']))
        {   
            $feesAmt=test_input($_POST['efeesAmt']);
            $monthPkg=test_input($_POST['emonthPkg']);
            $date = date('d/m/Y');
            $lastDate = date('d/m/Y', strtotime($date."+$monthPkg months"));
            $id=test_input($_POST['eid']);
            $memId=test_input($_POST['emem_id']);
            $sql="update mem_fees set fees_amt='$feesAmt',month_pkg='$monthPkg',date='$date',last_date=DATE_FORMAT(DATE_ADD(STR_TO_DATE('$date','%d/%m/%Y'), INTERVAL $monthPkg MONTH),'%d/%m/%Y') where id=$id";
            if($conn->query($sql))
            {
                $resMember  = "true";
            }
            else
            {
                $errorMember=$conn->error;
            }
        }
        
        if(isset($_POST['bdsmss']))
        {
            $sql="SELECT due_fee FROM manage_sms where id=1";
            $result=$conn->query($sql);
            if($result->num_rows>0){
                $sms = $result->fetch_assoc()['due_fee'];
            }
            $numbers=implode(',',$_POST['sms_numbers']);  
                $result = json_decode(send_sms($numbers,$sms));

            if($result->status==='success')
            {
                $resMember=true;
            }

              
        }
         

        if(isset($_POST['bndsmss']))
        {   
            $sql="SELECT near_due FROM manage_sms where id=1";
            $result=$conn->query($sql);
            if($result->num_rows>0){ 
                $sms = $result->fetch_assoc()['near_due'];
            }
            $numbers=implode(',',$_POST['sms_numbers']);  
            echo $numbers; 
            $result = json_decode(send_sms($numbers,$sms));
            print_r($result);
            if($result->status==='success')
            {
                $resMember=true;
            }
        }
    }
    
    if(isset($_GET['token']) && !empty($_GET['token'])){  
        $date = date('d/m/Y');  
        $a = $_GET['token'];
        if($a == 3){
            $sql="select * from gym_member m,mem_fees f where m.id = f.mem_id and STR_TO_DATE(f.last_date,'%d/%m/%Y') < STR_TO_DATE('$date','%d/%m/%Y')";
            $displayTitle='Due Fee Memebers';
            $btn_name="bdsms";
            $btn_names="bdsmss";
        }
        if($a == 1){
           $sql="select * from gym_member m,mem_fees f where m.id = f.mem_id and STR_TO_DATE(f.last_date,'%d/%m/%Y') > STR_TO_DATE('$date','%d/%m/%Y') and STR_TO_DATE('$date','%d/%m/%Y') > DATE_SUB(STR_TO_DATE(f.last_date,'%d/%m/%Y'), INTERVAL 2 DAY)";
           $displayTitle='Near Due Fee Memebers';
           $btn_name="bndsms";
           $btn_names="bndsmss";
           $nearDue=true;
        }
        else if($a == 2){
            $sql="select * from gym_member m,mem_fees f where m.id = f.mem_id and STR_TO_DATE(f.last_date,'%d/%m/%Y') >STR_TO_DATE('$date','%d/%m/%Y')";
            $displayTitle='Paid Fee Memebers';
        }
    
        $result =  $conn->query($sql);
        if($result->num_rows)
        {
            while($row = $result->fetch_assoc())
            {
                $feesList[] = $row;
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
        <h1>
           <?=$displayTitle?>
        </h1>
        <ol class="breadcrumb">
            <li>
                <div class="pull-right">
                    <form method="post">  
                        <a href="" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Rebuild"><i class="fa fa-refresh"></i></a>
                    </form>
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
               $sql="insert into history (date,fees_amt,month_pkg,mem_id) value('$date','$feesAmt','$monthPkg','$memId')";  
//                $sql = "update history set date='$date',fees_amt='$feesAmt',month_pkg='$monthPkg',mem_id='$memId' where mem_id=$id";
                if($conn->query($sql))
                {
        ?>
                    <div class="alert alert-success"><strong>Success! </strong> your request successfully Completed. </div>    
        <?php    
                }
                else
                {
                     ?><div class="alert alert-warning"><strong>Error! </strong> your request is not updated in history table. </div>    
        <?php  
                } 
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
                  <?php
                        if(isset($nearDue))
                        {
                ?>
                        <div class="row"> 
                            <div class="col-md-10">
                                <label>Due In Days</label>
                                <input type="number" class="form-control" id="numDays" style="margin: 5px;"/>
                            </div>
                            <div class="col-md-2">
                                <label></label>
                                <button onclick="getData()" style="margin-top: 28px;" class="btn btn-primary">Go</button>
                            </div>
                        </div>
                <?php
                        }
                  ?>
            <form method="post">
                <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr> 
                                <?php
                                    if(isset($btn_name))
                                    {
                                ?>
                                    <th id="checkallCheck">Check <input type="checkbox"  onclick="checkAll()" ></th>   
                                <?php
                                    }
                                ?> 
                                <th>S.No.</th>
                                <th>Name</th>
                                <th>Father's Name</th>
                                <th>Date</th>
                                <th>End Date</th>
                                <th>Fees Amount</th>
                                <th>Month Package</th>
                                <th>Action
                                <?php
                                    if(isset($btn_name))
                                    {
                                ?> 
                                        <button type="submit" class="btn btn-primary" name="<?=$btn_names?>">Send SMS To Selected</button>
                                <?php
                                    }
                                ?>
                                </th>
                            </tr>
                        </thead>
                        <tbody id="tableBody"> 
    
                        
                        <?php
                                if (isset($feesList)) 
                                {
                                    $i = 1;
                                    foreach ($feesList as $detail) 
                                    {     
                        ?> 
                                    <tr>
                                            <?php
                                                if(isset($btn_name))
                                                {
                                            ?>
                                                <td id="check_<?=$i?>"><input type="checkbox" name="sms_numbers[]"   value="<?=$detail['mob_no']?>"></td>
 
                                            <?php
                                                }
                                            ?>
                                            <td style="text-align: center;"  id="mem_id<?=$i?>"><?=$detail['serial_no'];?></td> 
                                            <td style="text-align: center;"  id="name<?=$i?>"><?=$detail['name'];?></td> 
                                            <td style="text-align: center;"  id="f_name<?=$i?>"><?=$detail['f_Name'];?></td> 
                                            <td style="text-align: center; " id="date<?=$i?>"><?=$detail['date'];?></td> 
                                            <td style="text-align: center; " id="last_date<?=$i?>"><?=$detail['last_date'];?></td>
                                            <td style="text-align: center; " id="fess_amt<?=$i?>"><?=$detail['fees_amt'];?></td> 
                                            <td style="text-align: center; " id="month_pkg<?=$i?>"><?=$detail['month_pkg'];?></td> 
                                            <td>
                                                <form method="post">
                                                    <button name="confirm" type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-edit"  onclick="setEditValues(<?=$detail['id'] ?>,<?=$i?>,<?=$detail['mem_id'] ?>)" value="<?=$detail['id'] ?>">
                                                        <i class="fa fa-edit">Edit</i>
                                                    </button>
                                                    <?php
                                                        if(isset($btn_name))
                                                        {
                                                    ?>
                                                            <button name="send" type="button" class="btn btn-primary"   onclick="sendsms('<?=$detail['mem_id'] ?>')">
                                                                <i class="fa fa-edit">Send SMS</i>
                                                            </button>
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
            </form>    
         </div>
                          <!-- /.box-footer-->
    </div>    
      <!-- /.box -->
</section>
    <!-- /.content -->
</div>


    <div class="modal fade" id="modal-edit">
      <div class="modal-dialog" >
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title">Edit Fees</h4>
           </div>
           <form method="post">
           <div class="modal-body">
               <div class="row">
                  <div class="col-md-6"> 
                       <div class="form-group">
                            <label>Date</label><br>   
                            <input type="text" value="<?=date('d/m/Y')?>" id="edate" name="edate" class="form-control"  required>  
                        </div> 
                   </div>
                </div>  
               <div class="row">
                  <div class="col-md-6"> 
                       <div class="form-group">
                            <label>Fees Amount</label><br>   
                            <input type="text"  id="efeesAmt" name="efeesAmt" class="form-control"  required> 
                           <input type="hidden"  id="emem_id" name="emem_id" class="form-control">
                        </div> 
                   </div>
                   <div class="col-md-6"> 
                       <div class="form-group">
                            <label>Month Package</label><br>      
                            <select  id="emonthPkg" name="emonthPkg" class="form-control" required>
                                <option>1</option>
                                <option>3</option>
                                <option>6</option>
                                <option>12</option>
                            </select>
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
    function setEditValues(id,count,mem_id)
    {
        $("#eid").val(id); 
        $("#emem_id").val(mem_id); 
        $("#efeesAmt").val($("#fees_amt"+count).html());
        $("#emonthPkg").val($("#month_pkg"+count).html());
    }  
    function checkAll()
    {
        var checkBoxes = $("input[name=sms_numbers\\[\\]]");
        checkBoxes.prop("checked", !checkBoxes.prop("checked"));
    }
    function sendsms(id)
    {

            var data;
            switch(<?=$a?>)
            {
                case 1:
                    data = {ndsms:id}
                break;
                case 3:
                    data ={dsms:id}
                break;
            }

            $.ajax({
            url : "fee_sms_ajax.php",
            type : "POST",
            data : data,
            success : function(a)
            {
                 console.log(a);
            },
            error : function(data) 
            {
    
            } 
        }); 
    }

    function getData(){
        var x = $("#numDays").val(); 
        $.ajax({
            url : "fee_sms_ajax.php",
            type : "POST",
            data : {
                neardueby:x
            },
            success : function(a)
            {
                var data =  JSON.parse(a);
                $("#tableBody").empty();
                $("#checkallCheck").html(`Check <input type="checkbox"   onclick="checkAll()">`);
                var inhtml;
                var i=1;
                $.each(data,function(key,value){
                        inhtml =`<tr>
                                         <td id="check_`+i+`"><input type="checkbox" name="sms_numbers[]"  value="`+value.mob_no+`"></td>
                                         <td style="text-align: center;"  id="mem_id`+i+`">`+value.serial_no+`</td> 
                                         <td style="text-align: center;"  id="name`+i+`">`+value.name+`</td> 
                                         <td style="text-align: center;"  id="f_name`+i+`">`+value.f_Name+`</td> 
                                         <td style="text-align: center;" id="date`+i+`">`+value.date+`</td> 
                                         <td style="text-align: center;" id="last_date`+i+`">`+value.last_date+`</td>
                                         <td style="text-align: center;" id="fess_amt`+i+`">`+value.fees_amt+`</td> 
                                         <td style="text-align: center;" id="month_pkg`+i+`">`+value.month_pkg+`</td> 
                                         <td>
                                             <form method="post">
                                                <button name="confirm" type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-edit"  onclick="setEditValues(`+value.id+`,`+i+`,`+value.mem_id+`)" value="`+value.id+`">
                                                            <i class="fa fa-edit">Edit</i>
                                                </button>
                                                <?php
                                                    if(isset($btn_name))
                                                    {
                                                ?>
                                                        <button name="send" type="button" class="btn btn-primary"   onclick="sendsms('`+value.mem_id+`')">
                                                                    <i class="fa fa-edit">Send Sms</i>
                                                        </button>
                                                <?php     
                                                    }
                                                ?>
                                               
                                                
                                            </form>
                                        </td>
                                </tr>`;
                                i++;

                                $("#tableBody").append(inhtml);
                });
            },
            error : function(data) 
            {
    
            } 
        }); 
    };
</script>