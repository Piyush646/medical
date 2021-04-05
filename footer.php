 <?php
    $sql = 'select * from category';
    if ($res = $conn->query($sql)) {
      if ($res->num_rows) {
        $caty = $res->fetch_assoc();
      }
    }
 ?>
<!-- footer start -->
<div class="cv-footer cv-footer-two spacer-bottom">
        
</div>
    <!-- footer end --> 
    </div>

    <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-content">
                        <!-- <img src="assets/images/400dpiLogo.png" alt="image" class="img-fluid"/> -->
                            <img src="assets/images/400dpiLogo.png" class="img-fluid" alt="Footer Logo" height="1000px" width="1000px">
                            <ul class="list-unstyled">
                                <li><p><i class="fas fa-home" aria-hidden="true"></i> &nbsp;<?=$contact['location']?></p></li>
                                <!-- <li><p>Camelon Street, Glasgow, G32 6AF</p></li> -->
                                <li><p><a href="tel:<?=$contact['phn']?>"><i class="fas fa-phone-alt" aria-hidden="true"></i> &nbsp; <?=$contact['phn']?></a></p></li>
                                <li><p><a href="mailto:<?=$contact['email']?>"><i class="fas fa-envelope" aria-hidden="true"></i> &nbsp; <?=$contact['email']?></a></p></li>
                                <!-- <li><p><i class="fas fa-calculator" aria-hidden="true"></i> &nbsp; VAT: GB143179319</p></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-content">
                            <ul class="list-unstyled footer-menu">
                                <li><p class="footer-big-text">Int Trade Global is a registered trademark of Sharon Services (UK) Ltd.</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="footer-content">
                            <ul id="menu-footer-menu-1" class="list-unstyled footer-menu">
                            <li id="menu-item-51" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7 current_page_item menu-item-51 nav-item"><a class="nav-link" href="index" aria-current="page">Home</a></li>
                                <li id="menu-item-52" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-52 nav-item"><a class="nav-link" href="about">About</a></li>
                                <li id="menu-item-55" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-55 nav-item"><a class="nav-link" href="shop">Shop</a></li>
                                <li id="menu-item-137" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-137 nav-item"><a class="nav-link" href="#">Cookies</a></li>
                                <li id="menu-item-125" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-125 nav-item"><a class="nav-link" href="#">Terms &amp; Conditions</a></li>
                                <li id="menu-item-53" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53 nav-item"><a class="nav-link" href="contact">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="footer-content">
                            <ul id="menu-footer-menu-2" class="list-unstyled footer-menu">
                                <?php
                                if(isset($caty))
                                {
                                    foreach($caty as $c)
                                    {    
                                ?>
                                    <li ><a  href="categories?token=<?=$c['id']?>"><?=$c['caty']?></a></li>
                                <?php
                                    }
                                }
                                ?>
                            </ul>   
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="footer-content">
                            <p>Int Trade Global - Copyright © 2021              &emsp; &emsp; &emsp;Credits link – Vaagha.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>