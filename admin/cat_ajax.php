<?php

require_once "../lib/core.php";

    if(isset($_POST['change']))
    {
        $category = $_POST['category'];
        $id = $_POST['change'];
        $sql = "update category set caty='$category' where id='$id'";
        if($conn->query($sql))
        {
            
            echo "updated";
        }
        else
        {
            echo "error : ".$conn->error;
        }
    }

    if(isset($_POST['change']) && isset($_POST['photo']))
    {
        $id=$_POST['id'];
        $photo = $_POST['photo'];
        $sql = "update category set caty='$category' where id='$id'";
        if($conn->query($sql))
        {
            if(update_image($conn,"category","id","cat_img",$id,$photo))
            {
                echo "updated";
            }else
            {
                echo "error : ".$conn->error;
            }
        }
        else
        {
            echo "error : ".$conn->error;
        }
    }
?>