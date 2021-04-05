 

<div class="cv-top-header bg-primary">
    <div class="container ">
        <div class="row " style="text-align: center">
            <div class="col-md-4">
            </div>
            <div class="col-md-2">
                <div class="cv-head-contact">
                    <h3 style="font-weight:bold;color:white"><i class="bi bi-telephone-fill"></i> <?=$contact['phn']?></h3>
                </div>
            </div>
            <div class="col-md-2">
                <div class="cv-head-contact">
                    <h3 style="font-weight:bold;color:white"><i class="fa fa-envelope" aria-hidden="true"></i>  <?=$contact['email']?></h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cv-main-header  ">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-9">
                <div class="cv-logo">
                    <a href="index"><img style="height:10em; margin-left:30px;" src="admin/uploads/<?=$about['logo']?>" alt="image"
                            class="img-fluid" /></a>
                </div>
            </div>
            <div class="col-lg-9 col-3">
                <div class="cv-nav-bar">
                    <div class="cv-menu">
                        <ul>
                            <li><a href="index">Home</a></li>
                            <li class="cv-children-menu"><a href="#!" >Products</a>
                            <?php
                                if(isset($category)) 
                                {
                                    ?>
                                      <ul class="cv-sub-mmenu">
                                    
                                    <?php
                                    foreach($category as $caty)
                                    {
                            ?>
                                            <li>
                                                            <a href="categories?token=<?=$caty['id']?>"><?= ucfirst($caty['caty'])?></a>                                
                                                    </li>
                            <?php
                                    }
                                    ?>
                                           
                                    </ul>
                                    <?php
                                }
                            ?>
                              
                            
                            
                           </li>
                            <li><a href="about">About</a></li>
                            <li><a href="contact">Contact US</a></li>


                        </ul>
                    </div>  
                    <div class="cv-toggle-nav">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>