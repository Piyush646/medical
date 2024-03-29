<?php
    require_once 'header.php';
    require_once 'navbar.php';
    require_once 'left-navbar.php';
    if(isset($_POST['delete']))
        {
            $id=test_input($_POST['delete']);
           
                $sql="delete from home_slider where id=$id";
                if($conn->query($sql))
                {
                    $resMember=true;   
                }
                else
                {
                    $errorMember=$conn->error;
                }

           
        }
    if(isset($_POST['add']))
    {
        $heading= $conn->real_escape_string($_POST['heading']);
        $sub_heading=$conn->real_escape_string($_POST['sub_heading']);   
        $link=$_POST['link'];
        $sort_order=$_POST['sort_order'];
        $image = upload_image($_FILES);
        if($image!='err')
        {
            $sql="insert into home_slider(heading,sub_heading,link,image,sort_order) values('$heading','$sub_heading','$link','uploads/$image',$sort_order)";
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
    if(isset($_POST['edit']))
    {
        $id=$_POST['eid'];
        $heading= $conn->real_escape_string($_POST['eheading']);
        $sub_heading=$conn->real_escape_string($_POST['esub_heading']); 
        $link=$_POST['elink'];
        $sort_order = $_POST['esort_order'];
        $image = upload_image($_FILES);
        if($image!="err")
        {
            $sql="update home_slider set heading='$heading',sub_heading='$sub_heading',link='$link',image='uploads/$image',sort_order='$sort_order' where id='$id'";
        }else
        {
            $sql="update home_slider set heading='$heading',sub_heading='$sub_heading',link='$link',sort_order='$sort_order' where id='$id'";
        }
        
        if($conn->query($sql))
        {
            $resMember=true;   
        }
        else
        {
            $errorMember=$conn->error;
        }
    }
    $sql="select * from home_slider";
    $res= $conn->query($sql);
    if($res->num_rows)
    {
        while($row=$res->fetch_assoc())
        {
            $home_slider[]=$row;
        }
    }
?>
 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Slider Element</h1>
        <ol class="breadcrumb">
            <li>
                <div class="pull-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i></button>

                    
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
                             
                             
                             <th style="  text-align: center;">Heading</th>
                             <th style="  text-align: center;">Image</th>
                             <th style="  text-align: center;">Link</th>
                             <th style="  text-align: center;">Sort Order</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                     <tbody> 
 
                    
                     <?php 
                            if (isset($home_slider)) 
                            {
                                $i = 1;
                                foreach ($home_slider as $d) 
                                {     
                     ?> 
                                     <tr> 
                                         
                                         
                                         <td style="  text-align: center; " id="heading<?=$i?>"><?=$d['heading']?></td> 
                                         <td style="  text-align: center; " id="image<?=$i?>"><img width="100px" height="100px" src="<?=$d['image']?>"/></td>
                                         <td style="  text-align: center; " id="link<?=$i?>"><?=$d['link']?></td>   
                                         <td style="  text-align: center; " id="sort_order<?=$i?>"><?=$d['sort_order']?></td>   
                                        <td>
                                            <input type="hidden" id="short_des<?=$i?>" value="<?=$d['sub_heading']?>"/>
                                             <form method="post">
                                                <button href="" name="" type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModaledit" onclick="editSetValues('<?=$d['id'] ?>',<?=$i?>)" value="">
                                                            <i class="fa fa-edit">Edit</i>
                                                </button>
                                                <button  class="btn btn-danger" type="submit" name="delete" value="<?=$d['id']?>">
                                                            <i class="fa fa-trash-o"></i> Delete
                                                </button>
                                                
                                               

                                            </form>
                                        </td>
                                    </tr>
                                 
                            <?php
                                $i++;
                                    
                                            
                                }
                            }
                            else
                            {
                                ?>
                                <p>NO VALUES INSERTED</p>
                                <?php
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
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel"> Add Slider Element :</h3>
      
      </div>
      <div class="modal-body">
      <form method="post" enctype="multipart/form-data">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                         <label>Heading :</label>
                        <input type="text" class="form-control" id="" name="heading" value="" required> 
                    </div>
                    </div>
                    <div class="row"> 
                    <div class="col-sm-12">
                         <label >Short Description :</label>
                         <textarea class="form-control" id="" style="resize:none;height:100px" name="sub_heading" required></textarea> 
                    </div> 
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <label >Link :</label>
                        <input type="text" class="form-control" id="" name="link" value="">
                        
                    </div>
                    <div class="col-sm-4">
                        <label >Sort Order :</label>
                        <input type="number" class="form-control" id="" name="sort_order" value="">
                        
                    </div>
                </div>
                <div class="row">   
                    <div class="col-sm-6">
                        <label >Select Image :</label>
                        <input type="file" class="form-control" id="" name="images" value="" required>
                    </div>     
                </div> 
             </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="add">ADD</button>
      </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModaledit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Edit Slider Element</h3>
         
      </div>
      <div class="modal-body">
      <form method="post" enctype="multipart/form-data" action>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                         <label >Heading :</label>
                        <input type="text" class="form-control" id="eheading" name="eheading" value="" required>
    
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                         <label >Short Description :</label>
                         <textarea class="form-control" name="esub_heading" id="esub_heading" style="resize:none;height:100px" required></textarea> 
                    </div> 
                </div><br>
                <div class="row">
                    <div class="col-sm-8">
                        <label >Link :</label>
                        <input type="text" class="form-control" id="elink" name="elink" value="">
                        
                    </div>
                    <div class="col-sm-4">
                        <label >Sort Order :</label>
                        <input type="number" class="form-control" id="esort_order" name="esort_order" value="">
                        
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-6">
                        <label >Image :</label>
                        <input type="file" class="form-control"  name="images" value="">
                        <input type="hidden" id="eid" name="eid">
                    </div>       
                    
                </div><br><br>
             </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="edit">EDIT</button>
      </div>
      </form>
    </div>
  </div>
</div>
  


 
<?php
    require_once 'js-links.php';
?>
</html>
<script>
function editSetValues(id,count)
{
    $("#eid").val(id);
    $("#eheading").val($("#heading"+count).html());
    $("#esub_heading").html($("#short_des"+count).val());
    $("#elink").val($("#link"+count).html());
    $("#esort_order").val($("#sort_order"+count).html());
   
}

setTimeout(function()
{
    $(".alert").hide();
},3000);

    
</script> 