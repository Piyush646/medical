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
<<<<<<< HEAD
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
=======
                    <div class="col-md-6">
                        <div class="cv-foot-newsletter">
                            <form method="post">
                                <input type="text" name="email" placeholder="Enter your email"/>
                                <button type="submit" name="subscribe" class="cv-btn">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="cv-foot-box cv-foot-logo">
                        <img src="admin/uploads/<?=$about['logo']?>" alt="image" class="img-fluid"/>
                        <!-- <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat quis nostrud exercitation ullamco laboris.</p> -->
                    
                    </div>
                </div>
                <!-- <div class="col-lg-8 col-md-6">
                    <div class="cv-foot-box cv-foot-links">
                        <h2>Categories</h2>
                        <ul>
                            <li><a href="javascript.html">Face masks</a></li>
                            <li><a href="javascript.html">PPE Kit</a></li>
                            <li><a href="javascript.html">Safety suits</a></li>
                            <li><a href="javascript.html">Eye protector</a></li>
                            <li><a href="javascript.html">Disposable</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="cv-foot-box cv-foot-links">
                        <h2>Usefull links</h2>
                        <ul>
                            <li><a href="javascript.html">About</a></li>
                            <li><a href="javascript.html">Services</a></li>
                            <li><a href="javascript.html">Privacy Policy</a></li>
                            <li><a href="javascript.html">Statements</a></li>
                            <li><a href="javascript.html">Faq</a></li>
                        </ul>
                    </div>
                </div> -->
                <div class="col-lg-4 col-md-6" >
                    <div class="cv-foot-box cv-foot-contact"  >
                        <h2>Useful Links</h2>
                        <ul>
                            <li><a  href="index">Home</a></li>
                            <li><a  href="shop">Shop</a></li>
                            <li><a  href="about">About</a></li>
                            <li><a  href="contact">Contact Us</a></li>
                        </ul>
>>>>>>> 42ba3aaf56789d71f494991eb64c3dac0f8631c7
                    </div>
                </div>
<<<<<<< HEAD
            </div>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="footer-content">
                            <p>Int Trade Global - Copyright © 2021              &emsp; &emsp; &emsp;Credits link – Vaagha.com</p>
                        </div>
=======
                <div class="col-lg-4 col-md-6" >
                    <div class="cv-foot-box cv-foot-contact" >
                        <h2>Contact</h2>
                        <ul>
                            <li><p><?=$contact['email']?></p></li>
                            <li><p><?=$contact['phn']?></p></li>
                            <li><p><?=$contact['address']?></p></li>
                        </ul>
                        <ul class="cv-foot-social">
                            <li><a href="<?=$about['facebook']?>">
                                <svg viewBox="0 0 24 24" style="margin-top: 5px" xmlns="http://www.w3.org/2000/svg"><path d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z"/></svg>
                            </a></li>
                            <li><a href="<?=$about['twitter']?>">
                                <svg viewBox="-21 -81 681.33464 681" style="margin-top: 5px" xmlns="http://www.w3.org/2000/svg"><path d="m200.964844 515.292969c241.050781 0 372.871094-199.703125 372.871094-372.871094 0-5.671875-.117188-11.320313-.371094-16.9375 25.585937-18.5 47.824218-41.585937 65.371094-67.863281-23.480469 10.441406-48.753907 17.460937-75.257813 20.636718 27.054687-16.230468 47.828125-41.894531 57.625-72.488281-25.320313 15.011719-53.363281 25.917969-83.214844 31.808594-23.914062-25.472656-57.964843-41.402344-95.664062-41.402344-72.367188 0-131.058594 58.6875-131.058594 131.03125 0 10.289063 1.152344 20.289063 3.398437 29.882813-108.917968-5.480469-205.503906-57.625-270.132812-136.921875-11.25 19.363281-17.742188 41.863281-17.742188 65.871093 0 45.460938 23.136719 85.605469 58.316407 109.082032-21.5-.660156-41.695313-6.5625-59.351563-16.386719-.019531.550781-.019531 1.085937-.019531 1.671875 0 63.46875 45.171875 116.460938 105.144531 128.46875-11.015625 2.996094-22.605468 4.609375-34.558594 4.609375-8.429687 0-16.648437-.828125-24.632812-2.363281 16.683594 52.070312 65.066406 89.960937 122.425781 91.023437-44.855469 35.15625-101.359375 56.097657-162.769531 56.097657-10.5625 0-21.003906-.605469-31.2617188-1.816407 57.9999998 37.175781 126.8710938 58.871094 200.8867188 58.871094"/></svg>
                            </a></li>
                            <li><a href="<?=$about['instagram']?>">
                                <svg viewBox="0 0 24 24" style="margin-top: 5px" xmlns="http://www.w3.org/2000/svg"><path d="m12.004 5.838c-3.403 0-6.158 2.758-6.158 6.158 0 3.403 2.758 6.158 6.158 6.158 3.403 0 6.158-2.758 6.158-6.158 0-3.403-2.758-6.158-6.158-6.158zm0 10.155c-2.209 0-3.997-1.789-3.997-3.997s1.789-3.997 3.997-3.997 3.997 1.789 3.997 3.997c.001 2.208-1.788 3.997-3.997 3.997z"/><path d="m16.948.076c-2.208-.103-7.677-.098-9.887 0-1.942.091-3.655.56-5.036 1.941-2.308 2.308-2.013 5.418-2.013 9.979 0 4.668-.26 7.706 2.013 9.979 2.317 2.316 5.472 2.013 9.979 2.013 4.624 0 6.22.003 7.855-.63 2.223-.863 3.901-2.85 4.065-6.419.104-2.209.098-7.677 0-9.887-.198-4.213-2.459-6.768-6.976-6.976zm3.495 20.372c-1.513 1.513-3.612 1.378-8.468 1.378-5 0-7.005.074-8.468-1.393-1.685-1.677-1.38-4.37-1.38-8.453 0-5.525-.567-9.504 4.978-9.788 1.274-.045 1.649-.06 4.856-.06l.045.03c5.329 0 9.51-.558 9.761 4.986.057 1.265.07 1.645.07 4.847-.001 4.942.093 6.959-1.394 8.453z"/><circle cx="18.406" cy="5.595" r="1.439"/></svg>
                            </a></li>
                        </ul>
>>>>>>> 42ba3aaf56789d71f494991eb64c3dac0f8631c7
                    </div>
                </div>
            </div>
        </footer>