<?php
require_once "header.php";
require_once "navbar.php";

if(isset($_GET['token']))
{
    $id=$_GET['token'];
    $sql="select * from category where id='$id'";
    $caty = "";
    if($res=$conn->query($sql))
    {
        if($res->num_rows)
        {
           
                $categoty_data=$res->fetch_assoc();
           
            
        }
        $caty = $categoty_data['id'];
    }

    $sql="SELECT * FROM product WHERE category='$caty' AND status=1 ORDER BY sort_order ASC";
    if ($res = $conn->query($sql)) {
        if ($res->num_rows) {
            while ($row = $res->fetch_assoc()) {
                $id = $row['id'];
                $new[$row['id']] = $row;
                $sql = "select img from product_img where p_id='$id' limit 1";
                if ($result = $conn->query($sql)) {
                    if ($result->num_rows) {
                        $new[$row['id']]['img'] = $result->fetch_assoc()['img'];
                    }
                }
            }
        }
    }

}
?>
<style>
   .featires ul>li {
    list-style: disc inside;
    margin-left: 18px;
    }

</style>
<div style="text-align: center;" class="jumbotron">
    <h1><?=$categoty_data['caty']?></h1>
</div>

<div class="container">
    <?php
        if(isset($new))
        {$i=1;
            foreach($new as $n)
            {
                if($i%2!=0)
                {
                    ?>
                    <div class="mt-lg-5 mt-sm-5">
                        <div class="row bg-light" style="padding : 20px;">
                            <div class="col-md-5 col-xs-5 text-center" style="margin-bottom :10px;">
                                <img src="admin/uploads/<?=$n['img']?>"  class="img-fluid" style="height: 400px; border: 3px solid #dedede; padding: 40px;">
                            </div>
                
                            <div class="col-md-7 col-xs-5" style="padding-left:40px">
                                <h3 id="categories_h1"><?=$n['name']?></h3>
                                <div style="margin-top: 15px">
                                    <h5 style="font-weight: bold;color:#999999;margin-top:15px;margin-bottom:15px">Product Code:<?=$n['code']?></h5>
                                    <div class="featires">
                                        <?=html_entity_decode($n['dis'])?>
                                    </div>
                                        
                                  
                                </div>
                                <a href="contact.php" class="btn btn-primary mt-4">Get Quote</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }else{
        ?>
        
    

                    <div class="mt-lg-5 mt-sm-5">
                        <div class="row bg-light" style="padding : 20px;">
                            

                            <div class="col-md-7 col-xs-5" style="padding-left:40px">
                                <h3 id="categories_h1"><?=$n['name']?></h3>
                                <div style="margin-top: 15px">
                                    <h5 style="font-weight: bold;color:#999999;margin-top:15px;margin-bottom:15px">Product Code:<?=$n['code']?></h5>
                               
                                    <div class="featires">
                                        <?=html_entity_decode($n['dis'])?>
                                    </div>
                                  
                                </div>
                                <a href="contact.php" class="btn btn-primary mt-4">Get Quote</a>
                            </div>

                            <div class="col-md-5 col-xs-5 text-center" style="margin-bottom :10px;">
                                <img src="admin/uploads/<?=$n['img']?>" class="img-fluid" style="height: 400px; border: 3px solid #dedede; padding: 40px;">
                            </div>
                        </div>
                    </div>

    <?php
                }
                $i++;

            }
        }
        else
        {
            ?>
                <div class="alert alert-danger" style="background-color: #3cbcff">
                    No record found!
                </div>
            
            <?php
        }
    
    ?>
</div>
<br>
 





<?php
require_once "footer.php";
require_once "js_links.php";

?>