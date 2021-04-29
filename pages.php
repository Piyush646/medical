<?php
require_once "header.php";
require_once "navbar.php";

if(isset($_GET['token']))
{
    $id=$_GET['token'];
    $sql="select * from dynamic_pages where id='$id'";
    if($res=$conn->query($sql))
    {
        if($res->num_rows)
        {
           
                $page_data=$res->fetch_assoc();
           
            
        }
    }

}
?>

<style>
   .container .row .col-lg-10 ul>li {
    list-style: disc inside;
    margin-left: 18px;
    }

</style>

<?php

    if($page_data){ ?>

        <div class="jumbotron text-center">
            <h1><?=$page_data['title']?></h1>
        </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <?= $page_data['content'] ?>
            </div>
        </div>
    </div>
    
<?php } else { ?> 

    <div class="jumbotron text-center">
        <h1>Invalid Page Access</h1>
    </div>


 <?php } ?>




<?php
require_once "footer.php";
require_once "js_links.php";

?>