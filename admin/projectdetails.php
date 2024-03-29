<?php
    require_once 'header.php';
    require_once 'navbar.php';
    require_once 'left-navbar.php';
 
    $id=$_SESSION['id'];
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        if(isset($_POST['add']))
        {
            $title=$_POST['title'];
            $description=$_POST['description'];
            $start_date=$_POST['start_date'];
            $incentive=$_POST['incentive'];
            $group_num=$_POST['group_num'];
            $participants=$_POST['participants'];
            $sql="select com_id from projectmanager where id='$MANAGER_ID'";
            if($result = $conn->query($sql))
            {
                if($result->num_rows)
                {
                    $cid  = $result->fetch_assoc();  
                }   
            }
            $comid=$cid['com_id'];
            $res=intval($participants/$group_num);
            $in=$incentive/$group_num;
            $i=1;
            $group_mem=$res+1;
            $rem=$participants%$group_num;
            $temp=$rem;
            $sql="insert into projects(pm_id, cm_id,  title, description, start_date, incentive, participants, group_num, status) values('$MANAGER_ID', '$comid', '$title', '$description', '$start_date', '$incentive', '$participants', '$group_num', '1')";
            if($conn->query($sql))
            {
                $insert_id = $conn->insert_id;
                if(upload_images($_FILES,$conn,"project_files","p_id","file",$insert_id,"projectFile",$website_link."/manager/uploads"))
                {
                    $resMember = "all_true";
                }else
                {
                    $resMember = "files_left";
                }
                if($rem==0)
                {    
                    $sql="insert into group_details(p_id, name, incentive, user_count, status) values";
                        
                    for($i=1; $i<=$group_num; $i++)
                    {
                    $sql .="('$insert_id', 'group$i','$in', '$res', 1),";
                    }
                    $sql=rtrim($sql, ',');
                    if($conn->query($sql))
                    {
                        $resMember = true;
                    }
                    else
                    {
                        $errorMember = $conn->error;
                    }
                }
                else if($rem!=0)
                {
                    $sql="insert into group_details(p_id, name, incentive, user_count, status) values";
                    while($temp!=0)
                    {
                        $sql .="('$insert_id', 'group$i','$in', '$group_mem', 1),";
                        $i++;
                        $temp--;
                    }
                    if($i!=$group_num)
                    {
                        while($i!=$group_num)
                        {
                            $sql .="('$insert_id', 'group$i','$in', '$res', 1),";
                            $i++;
                        }
                    }
                    if($i==$group_num)
                    {
                        $sql .="('$insert_id', 'group$i','$in', '$res', 1),";
                    }
                    $sql=rtrim($sql, ',');
                    if($conn->query($sql))
                    {
                        $resMember = true;
                    }
                    else
                    {
                        $errorMember = $conn->error;
                    }
                }
               
            }
            else
            {
                $errorMember=$conn->error;
            }
        }
    }
    
    if(isset($_GET['token'])&& !empty($_GET['token']))
    { 
        $token=$_GET['token'];
        if(isset($_POST['edit']))
        {  
            $title=$_POST['title'];
            $description=$_POST['description'];
            $start_date=$_POST['start_date'];
            $incentive=$_POST['incentive'];
            $group_num=$_POST['group_num'];
            $participants=$_POST['participants'];
            $sql="update projects set start_date='$start_date', pm_id='$MANAGER_ID', title='$title', description='$description', incentive='$incentive', group_num='$group_num', participants='$participants'  where id='$token'";
            if($conn->query($sql))
            {
                $insert_id = $token;
                if(upload_images($_FILES,$conn,"project_files","p_id","file",$insert_id,"projectFile",$website_link."/manager/uploads"))
                {
                    $resMember = "all_true";
                }else
                {
                    $resMember = "files_left";
                }
                
            }
            else
            {
                $errorMember=$conn->error;
            }
        }  
        
        $sql = "select p.* from projects p where p.id=$token";
        if($result = $conn->query($sql))
        {
            if($result->num_rows)
            {
                $project_details  = $result->fetch_assoc();  
            }   
        }
        else
        {
            $errorMember=$conn->error;
        }


        $sql = "SELECT * from project_files where p_id=$token";
        if($result = $conn->query($sql))
        {
            if($result->num_rows)
            {
                while($row = $result->fetch_assoc())
                {
                    $project_files[]=$row;
                }
                 
            }
             
        }
    }

?>
<style>
    .box-body{
	overflow: auto!important;
}
</style>

<div class="content-wrapper">

    <section class="content-header">
        <h1>
          Project Details
        </h1>
    </section>
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
        
                <form method="post" enctype="multipart/form-data">
                    <div class="row">
                        
                        <div class="col-md-5"> 
                            <div class="form-group">
                                <label>Project Title</label><br>   
                                <input type="text"  id="title" name="title" class="form-control" value="<?=$project_details['title']?>" required>  
                            </div> 
                        </div>
                        <div class="col-md-5"> 
                            <div class="form-group">
                                <label>Start Date</label><br> 
                                <input type="date"  id="start_date" name="start_date" class="form-control" value="<?=$project_details['start_date']?>" required>  
                            </div> 
                        </div>

                    </div>  
                    <div class="row">
                        <div class="col-md-10"> 
                            <div class="form-group">
                                <label style="margin-left:5px">Project Description</label><br> 
                                <textarea type="text"  id="description" name="description" class="form-control" style="resize: vertical;height:150px" required>  <?=$project_details['description']?> </textarea> 
                            </div> 
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-md-5"> 
                            <div class="form-group">
                                <label>Incentive</label><br> 
                                <input type="text"  id="incentive" name="incentive" class="form-control" value="<?=$project_details['incentive']?>" required>  
                            </div> 
                        </div>
                        <div class="col-md-5"> 
                            <div class="form-group">
                                <label>Number of Participants</label><br> 
                                <input type="text"  id="participants" name="participants" class="form-control" value="<?=$project_details['participants']?>" required>
                            </div> 
                        </div> 
                    </div>
                    <div class="row" style="margin-bottom:20px">  
                        <div class="col-md-5"> 
                            <div class="form-group">
                                <label>No. of Groups</label><br> 
                                <input type="text"  id="group_num" name="group_num" class="form-control" value="<?=$project_details['group_num']?>" required>  
                            </div> 
                        </div>
                      
                        <div class="col-md-12"> 
                            <div class="form-group">
                                <label>Project Files</label><br>  
                                <button type="button" class="btn btn-success" onclick="addFilesField()"><i class="fa fa-plus"></i></button>
                            </div> 
                        </div>
                    </div>
                    <div class="row" style="margin-bottom:20px"> 
                        
                            <?php
                                if(isset($project_files)) 
                                {
                                    $counter=0;
                                    foreach($project_files as $file)
                                    { 
                                          
                                        ?>
                                        <div class="col-md-2" id="file<?=$counter?>">
                                            <div class="col-md-8">
                                                <a href="<?=$file['file']?>" target="_blank"><img src="<?=$file['file']?>" width="100px" height="100px"/></a>
                                            </div>
                                            <div class="col-md-1">
                                                <button type="button" class="btn btn-danger" onclick="deleteFile(<?=$file['id']?>,'file<?=$counter?>')"><i class="fa fa-trash"></i></button>
                                            </div>
                                        </div>
                                        <?php
                                        
                                    }
                                }
                            
                            ?>
                                  
                        
                    </div>
                    <div class="row">
                        <div class="col-md-4" id="filesDiv"> 
                                 
                                
                        </div>
                    </div>
        
        
                        <?php
                                if(isset($project_details))
                                {
                        ?>
                                        <button type="submit" name="edit" class="btn btn-primary" value="">Edit</button>
                            <?php
                                }
                                else
                                {
                            ?>
                                        
                                        <button type="submit" name="add" class="btn btn-primary" value="">Add</button>
                        <?php
                                }
                        ?>
                
                    
                </form>
         

    </section>
</div>
<div class="control-sidebar-bg"></div>

  

<?php
    require_once 'js-links.php';
?>


<script>
    var counter=1;
    function addFilesField()
    {
        var inhtml  = `<div class="row" style="margin-top:20px" >    
                            <div class="col-md-10">
                                <input   type="file" id='projectfile${counter}' name="projectFile[]" class="form-control"/>
                            </div> 
                            <div class="col-md-2">
                                <button type="button" class="btn btn-danger" onclick="removeField('projectfile${counter}')"><i class="fa fa-trash"></i></button>
                            </div> 
                        </div>`;
        $("#filesDiv").append(inhtml);
        counter++;

    }

    function removeField(id)
    {
            $("#"+id).parent().parent().remove();
            
    }

    function deleteFile(id,divId)
    {
        $.ajax({
            url:"files_ajax.php",
            type:"POST",
            data:{
                deleteFile:id
            },
            success:function(data)
            {
            
                if(data.trim()=="ok")
                {
                    $("#"+divId).remove();  
                }else
                {
                    console.log(data);
                }
            },
            error:function()
            {

            }
        
        })
    }
</script>