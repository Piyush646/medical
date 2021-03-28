<?php
require_once "header.php";
require_once "navbar.php";

if(isset($_GET['token']))
{
    $id=$_GET['token'];
    $sql="select * from category where id='$id'";
    if($res=$conn->query($sql))
    {
        if($res->num_rows)
        {
           
                $category=$res->fetch_assoc();
           
            
        }
    }
}
?>

<div style="text-align: center;" class="jumbotron">
    <h1><?=$category['category']?></h1>
</div>

<div class="container">

    <div class="mt-lg-5 mt-sm-5">
        <div class="row bg-light" style="padding : 20px;">
            <div class="col-md-5 col-xs-5" style="margin-bottom :10px;">
                <img id="categories_img1" src="assets/images/medical_img1.jpg">
            </div>

            <div class="col-md-7 col-xs-5" style="padding-left:40px">
                <h3 id="categories_h1">Premium Disposable Bed Incontinence Sheets 60x90cm</h3>
                <div style="margin-top: 15px">
                    <h5 style="font-weight: bold;color:#999999;margin-top:15px;margin-bottom:15px">Product Code: SIL6090</h5>
                    <ol>
                        <li id="categories_list">High Quality Disposable Incontinence Bed Pads with absorption capacity of 1400ml</li>
                        <li id="categories_list" >Soft Top Layer offers greater comfort to the user</li>
                        <li id="categories_list">SAP embedded absorption Layer : Increases capacity and retains fluids longer</li>
                        <li id="categories_list">60x90 cm : Ideal size for placement on Bed. For convenience packed in Individual Packs of 25</li>
                    </ol>
                </div>
                <a href="contact.php" class="btn btn-primary">Get Quote</a>
            </div>
        </div>
    </div>

    <div class="mt-lg-5 mt-sm-5">
        <div class="row bg-light" style="padding : 20px;">
            <div class="col-md-7 col-xs-5" style="padding-left:20px;margin-bottom:10px">
                <h3 id="categories_h1">Premium Disposable Bed Incontinence Sheets 60x90cm</h3>
                <div style="margin-top: 15px">
                    <h5 style="font-weight: bold;color:#999999;margin-top:15px;margin-bottom:15px">Product Code: SIL6090</h5>
                    <ol>
                        <li id="categories_list">High Quality Disposable Incontinence Bed Pads with absorption capacity of 1400ml</li>
                        <li id="categories_list" >Soft Top Layer offers greater comfort to the user</li>
                        <li id="categories_list">SAP embedded absorption Layer : Increases capacity and retains fluids longer</li>
                        <li id="categories_list">60x90 cm : Ideal size for placement on Bed. For convenience packed in Individual Packs of 25</li>
                    </ol>
                </div>
                <a href="contact.php" class="btn btn-primary float-right">Get Quote</a>
            </div>

            <div class="col-md-5 col-xs-5">
                <img id="categories_img1" src="assets/images/medical_img1.jpg">
            </div>

            
        </div>
    </div>
</div>


<script src="javascript/categories%20us.js"></script>





<?php
require_once "footer.php";
require_once "js_links.php";

?>