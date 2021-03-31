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
           
                $category=$res->fetch_assoc();
           
            
        }
        $caty = $category['id'];
    }

    $sql="select * from product where category='$caty' and status=1";
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

<div style="text-align: center;" class="jumbotron">
    <h1><?=$category['caty']?></h1>
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
                            <div class="col-md-5 col-xs-5" style="margin-bottom :10px;">
                                <img id="categories_img1" src="admin/uploads/<?=$n['img']?>">
                            </div>
                
                            <div class="col-md-7 col-xs-5" style="padding-left:40px">
                                <h3 id="categories_h1"><?=$n['name']?></h3>
                                <div style="margin-top: 15px">
                                    <h5 style="font-weight: bold;color:#999999;margin-top:15px;margin-bottom:15px">Product Code:<?=$n['code']?></h5>
                                    <ol>
                                        <li id="categories_list"><?=$n['dis']?></li>
                                        
                                    </ol>
                                </div>
                                <a href="contact.php" class="btn btn-primary">Get Quote</a>
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
                                    <ol>
                                        <li id="categories_list"><?=$n['dis']?></li>
                                        
                                    </ol>
                                </div>
                                <a href="contact.php" class="btn btn-primary">Get Quote</a>
                            </div>

                            <div class="col-md-5 col-xs-5" style="margin-bottom :10px;">
                                <img id="categories_img1" src="admin/uploads/<?=$n['img']?>">
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


<script src="javascript/categories%20us.js"></script>





<?php
require_once "footer.php";
require_once "js_links.php";

?>