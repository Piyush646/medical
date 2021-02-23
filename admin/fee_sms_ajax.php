<?php
require_once '../lib/core.php';
$date = date('d/m/Y'); 
if(isset($_POST['dsms']))
{
    $mem_id=test_input($_POST['dsms']);
    $sql="SELECT due_fee FROM manage_sms where id=1";
    $result=$conn->query($sql);
    if($result->num_rows>0){ 
        $sms = $result->fetch_assoc()['due_fee'];
    }
    $sql="SELECT name,mob_no FROM gym_member where id=$mem_id";
    $result=$conn->query($sql);
    if($result->num_rows>0){
         $row=$result->fetch_assoc();
         print_r(send_sms($row['mob_no'],$sms)); 
    } 
}


if(isset($_POST['ndsms']))
{ 
    $mem_id=test_input($_POST['ndsms']);
    $sql="SELECT near_due FROM manage_sms where id=1";
    $result=$conn->query($sql);
    if($result->num_rows>0){ 
        $sms = $result->fetch_assoc()['near_due'];
    }
    $sql="SELECT name,mob_no FROM gym_member where id=$mem_id";
    $result=$conn->query($sql);
    if($result->num_rows>0){
         $row=$result->fetch_assoc();
         print_r(send_sms($row['mob_no'],$sms)); 
    } 
}

if(isset($_POST['neardueby']))
{
    $day = $_POST['neardueby'];
    $sql="select * from gym_member m,mem_fees f where m.id = f.mem_id and STR_TO_DATE(f.last_date,'%d/%m/%Y') > STR_TO_DATE('$date','%d/%m/%Y') and STR_TO_DATE('$date','%d/%m/%Y') > DATE_SUB(STR_TO_DATE(f.last_date,'%d/%m/%Y'), INTERVAL $day DAY)";
    $result =  $conn->query($sql);
    if($result->num_rows)
    {
        while($row = $result->fetch_assoc())
        {
            $feesList[] = $row;
        }
    }
    echo json_encode($feesList);
}
?>