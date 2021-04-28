 

    <!-- footer end --> 
    </div>

    <footer style="padding-top:0">
            <div class="container">
                <div class="row" style="margin-top:66px">
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-content">
                        <!-- <img src="assets/images/400dpiLogo.png" alt="image" class="img-fluid"/> -->
                            <img src="assets/images/400dpiLogo.png" class="img-fluid" alt="Footer Logo" height="1000px" width="1000px" style="margin-bottom: 0;">
                            <ul class="list-unstyled" >
                                <!-- <li><p><i class="fas fa-home" aria-hidden="true"></i> &nbsp;<?=$contact['location']?></p></li> -->
                                <!-- <li><p>Camelon Street, Glasgow, G32 6AF</p></li> -->
                                <li><p><a href="tel:<?=$contact['phn']?>"><i class="fas fa-phone-alt" aria-hidden="true"></i> &nbsp; <?=$contact['phn']?></a></p></li>
                                <li><p><a href="mailto:<?=$contact['email']?>"><i class="fas fa-envelope" aria-hidden="true"></i> &nbsp; <?=$contact['email']?></a></p></li>

                                <li><p><a href="#"><?= $contact['vat']?></a></p></li>
                                <li><p><a href="#"><?= $contact['registration_number']?></a></p></li>
                                <!-- <li><p><i class="fas fa-calculator" aria-hidden="true"></i> &nbsp; VAT: GB143179319</p></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6" >
                        <div class="footer-content">
                            <ul class="list-unstyled footer-menu">
                                <li><p class="footer-big-text">Int Trade Global is a registered trademark of Sharon Services (UK) Ltd.</p></li>
                                <li><button type="button" class="btn btn-primary" data-toggle="modal" id="cookieBtn" data-target="#exampleModalCenter" style="visibility:hidden">
                                        
                                    </button></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6" >
                        <div class="footer-content">
                            <ul id="menu-footer-menu-1" class="list-unstyled footer-menu">
                            <li id="menu-item-51" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7 current_page_item menu-item-51 nav-item"><a class="nav-link" href="index" aria-current="page">Home</a></li>
                                <li id="menu-item-52" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-52 nav-item"><a class="nav-link" href="about">About</a></li>
                                <!-- <li id="menu-item-55" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-55 nav-item"><a class="nav-link" href="shop">Shop</a></li> -->
                                <li id="menu-item-137" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-137 nav-item"><a class="nav-link" href="#">Cookies</a></li>
                                <li id="menu-item-125" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-125 nav-item"><a class="nav-link" href="#">Terms &amp; Conditions</a></li>
                                <li id="menu-item-53" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53 nav-item"><a class="nav-link" href="contact">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6" >
                        <div class="footer-content">
                            <ul id="menu-footer-menu-2" class="list-unstyled footer-menu">
                                <?php
                                if(isset($category))
                                {
                                    foreach($category as $c)
                                    {    
                                ?>
                                    <li class="d-flex justify-content-left"><a  href="categories?token=<?=$c['id']?>"><?=$c['caty']?></a></li>
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
                            <!-- <p>Int Trade Global - Copyright © 2021 </p> -->
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"  data-backdrop="static"     style="position:fixed;top: 420;height:300px;width:100%;padding-right:0">
  <div class="modal-dialog  " role="document" >
    <div class="modal-content" style="background:transparent" >
      <div class="modal-body" style="background:#000000;opacity:0.8;">
        <div class="container">
            <div class="row" style="margin-left:50px">
                <div class="col-lg-11 col-md-11">

                </div>
                <div class="col-lg-1 col-md-1">
                    <button type="button" class="close" data-dismiss="modal" onclick="setCookie('accept_cookie','no',180)" aria-label="Close" style="color: white">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                </div>
                <div class="row" style="margin-top:20px;margin-bottom:20px">
                    <div class="col-lg-2 col-md-2" style="padding-right:0;padding-left:0;font-family: 'Poppins', sans-serif;"></div>
                    <div class="col-lg-8 col-md-8" style="padding-left:0">
                        <center>
                            <p style="color:white;font-size:larger">We use cookies to  make your  experiences<br>
                            on this website better!</p>
                        </center>
                    </div>
                    
                    <div class="col-lg-2 col-md-2">
                        <center>
                            <button class="btn btn-warning" onclick="setCookie('accept_cookie','yes',180)" data-dismiss="modal" aria-label="Close" style="border-radius: 50px">Accept Cookies</button>
                        </center>
                    </div>
                </div>
           
        </div>
      </div> 
    </div>
  </div>
</div>
