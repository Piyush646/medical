<?php

require_once '../lib/core.php';

if(isset($_POST['deleteFile']))
{
    $id =$_POST['deleteFile'];
    $sql ="delete from product_img where id=$id";
    if($conn->query($sql))
    {
        
        echo "ok";
    }else
    {
        echo $conn->error;
    }
}
?>