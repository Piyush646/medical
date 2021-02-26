<?php
require_once "header.php";
require_once "navbar.php";
if (isset($_GET['token'])) {
    $p_id = $_GET['token'];
    $sql = "select * from product where (status=2 or status =1) and id = $p_id";
    if ($res = $conn->query($sql)) {
        if ($res->num_rows) {
            while ($row = $res->fetch_assoc()) {
                
                $product = $row;
            }

        $sql="select img from product_img where p_id='$p_id'";
        if($result=$conn->query($sql))
        {
            if($result->num_rows)
            {
                while($row = $result->fetch_assoc())
                {
                    $product_img[]=$row;
                }
                
            }
        }
 
        }
    }

    
}
?>

 
        <!-- main header end -->
        <!-- breadcrumb start -->
        <div class="cv-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="cv-breadcrumb-box">
                            <h1>Product Single</h1>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Product Single</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb end -->
        <!-- shop start -->

        <div class="cv-product-single spacer-top spacer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-sm-10 " style="margin-bottom:15px">
                                <div class="cv-pro-thumb-img">
                                    <img src="<?= $product_img[0]['img'] ?>" alt="image" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="cv-prod-content">
                                    <h2 class="cv-price-title"><?= $product['name'] ?></h2>
                                    <p class="cv-pdoduct-price"><del>$170</del><?= $product['price'] ?></p>
                                    <!-- <div class="cv-prod-category">
                                    <span>Category :</span>
                                    <a href="#" class="cv-prod-category"> Face Mask</a>,
                                    <a href="#" class="cv-prod-category"> Body Cover</a>
                                </div> -->
                                    <!-- <p class="cv-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </p> -->
                                </div>
                                <div class="cv-prod-count">
                                    <div class="cv-cart-quantity">
                                        <button class="cv-sub"></button>
                                        <input type="number" value="1" min="1">
                                        <button class="cv-add"></button>
                                    </div>
                                    <a href="tel:34567894567890" class="cv-price-cart">
                                        Call For Quote
                                        <i style="margin-left:0px" class="fa fa-phone" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="cv-prod-text">

                                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="cv-shop-tab">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-link active" data-toggle="tab" href="#cv-pro-description" role="tab" aria-selected="true">description</a>
                                <!-- <a class="nav-link" data-toggle="tab" href="#cv-pro-review" role="tab" aria-selected="false">Review</a> -->
                            </div>
                            <div class="tab-content cv-tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="cv-pro-description">
                                    <p><?=html_entity_decode($product['dis'])?></p>
                                </div>
                                <!-- <div class="tab-pane fade" id="cv-pro-review">
                                    <div class="cv-blog-comment">
                                        <ul>
                                            <li>
                                                <div class="cv-comment-box">
                                                    <div class="cv-comment-img">
                                                        <img src="assets/images/insta-wid1.jpg" alt="image" class="img-fluid">
                                                    </div>
                                                    <div class="cv-comment-text">
                                                        <h3>John Michel</h3>
                                                        <a href="javascript:;" class="cv-cmnt-date">1 June, 2020</a>
                                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat aute irure dolor in reprehenderit.</p>
                                                        <a href="javascript:;" class="cv-cmnt-reply">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.633 511.633">
                                                                <g>
                                                                    <path d="M463.375,183.726c-35.782-36.735-92.789-57.764-171.02-63.094V45.83c0-7.994-3.713-13.608-11.136-16.846
                                                                    c-7.803-3.23-14.466-1.902-19.985,3.999L115.06,179.161c-3.618,3.621-5.424,7.902-5.424,12.85c0,4.949,1.807,9.229,5.424,12.847
                                                                    l146.178,146.177c3.432,3.617,7.71,5.425,12.85,5.425c2.283,0,4.661-0.476,7.136-1.427c7.423-3.238,11.139-8.847,11.139-16.845
                                                                    v-71.663c30.642,2.475,56.097,7.471,76.376,14.989c20.27,7.519,36.494,18.034,48.677,31.549
                                                                    c28.362,31.405,38.451,85.171,30.266,161.311c-0.376,4.951,1.807,8.186,6.567,9.708c0.571,0.192,1.427,0.284,2.569,0.284
                                                                    c3.806,0,6.468-1.618,7.994-4.853l5.709-11.42c2.662-5.331,6.516-13.945,11.56-25.841c5.041-11.901,9.616-23.794,13.709-35.692
                                                                    c4.093-11.893,7.755-25.026,10.992-39.396c3.234-14.376,4.853-27.079,4.853-38.116
                                                                    C511.63,265.094,495.546,216.657,463.375,183.726z"></path>
                                                                    <path d="M63.953,192.011c0-4.952,1.809-9.233,5.424-12.85L182.725,65.531V45.83c0-7.994-3.715-13.608-11.138-16.846
                                                                    c-7.804-3.23-14.465-1.902-19.983,3.999L5.424,179.161C1.809,182.781,0,187.062,0,192.011c0,4.949,1.809,9.229,5.424,12.847
                                                                    l146.18,146.177c3.425,3.617,7.708,5.425,12.85,5.425c2.284,0,4.663-0.476,7.137-1.427c7.423-3.238,11.138-8.847,11.138-16.845
                                                                    v-19.985L69.377,204.857C65.762,201.24,63.953,196.962,63.953,192.011z"></path>
                                                                </g>
                                                            </svg>
                                                            Reply</a>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <div class="cv-comment-box">
                                                            <div class="cv-comment-img">
                                                                <img src="assets/images/insta-wid2.jpg" alt="image" class="img-fluid">
                                                            </div>
                                                            <div class="cv-comment-text">
                                                                <h3>Michel John</h3>
                                                                <a href="javascript:;" class="cv-cmnt-date">1 June, 2020</a>
                                                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat aute irure dolor in reprehenderit.</p>
                                                                <a href="javascript:;" class="cv-cmnt-reply">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.633 511.633">
                                                                        <g>
                                                                            <path d="M463.375,183.726c-35.782-36.735-92.789-57.764-171.02-63.094V45.83c0-7.994-3.713-13.608-11.136-16.846
                                                                            c-7.803-3.23-14.466-1.902-19.985,3.999L115.06,179.161c-3.618,3.621-5.424,7.902-5.424,12.85c0,4.949,1.807,9.229,5.424,12.847
                                                                            l146.178,146.177c3.432,3.617,7.71,5.425,12.85,5.425c2.283,0,4.661-0.476,7.136-1.427c7.423-3.238,11.139-8.847,11.139-16.845
                                                                            v-71.663c30.642,2.475,56.097,7.471,76.376,14.989c20.27,7.519,36.494,18.034,48.677,31.549
                                                                            c28.362,31.405,38.451,85.171,30.266,161.311c-0.376,4.951,1.807,8.186,6.567,9.708c0.571,0.192,1.427,0.284,2.569,0.284
                                                                            c3.806,0,6.468-1.618,7.994-4.853l5.709-11.42c2.662-5.331,6.516-13.945,11.56-25.841c5.041-11.901,9.616-23.794,13.709-35.692
                                                                            c4.093-11.893,7.755-25.026,10.992-39.396c3.234-14.376,4.853-27.079,4.853-38.116
                                                                            C511.63,265.094,495.546,216.657,463.375,183.726z"></path>
                                                                            <path d="M63.953,192.011c0-4.952,1.809-9.233,5.424-12.85L182.725,65.531V45.83c0-7.994-3.715-13.608-11.138-16.846
                                                                            c-7.804-3.23-14.465-1.902-19.983,3.999L5.424,179.161C1.809,182.781,0,187.062,0,192.011c0,4.949,1.809,9.229,5.424,12.847
                                                                            l146.18,146.177c3.425,3.617,7.708,5.425,12.85,5.425c2.284,0,4.663-0.476,7.137-1.427c7.423-3.238,11.138-8.847,11.138-16.845
                                                                            v-19.985L69.377,204.857C65.762,201.24,63.953,196.962,63.953,192.011z"></path>
                                                                        </g>
                                                                    </svg>
                                                                    Reply</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="cv-comment-box">
                                                    <div class="cv-comment-img">
                                                        <img src="assets/images/insta-wid6.jpg" alt="image" class="img-fluid">
                                                    </div>
                                                    <div class="cv-comment-text">
                                                        <h3>Nikki Bela</h3>
                                                        <a href="javascript:;" class="cv-cmnt-date">1 June, 2020</a>
                                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat aute irure dolor in reprehenderit.</p>
                                                        <a href="javascript:;" class="cv-cmnt-reply">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.633 511.633">
                                                                <g>
                                                                    <path d="M463.375,183.726c-35.782-36.735-92.789-57.764-171.02-63.094V45.83c0-7.994-3.713-13.608-11.136-16.846
                                                                    c-7.803-3.23-14.466-1.902-19.985,3.999L115.06,179.161c-3.618,3.621-5.424,7.902-5.424,12.85c0,4.949,1.807,9.229,5.424,12.847
                                                                    l146.178,146.177c3.432,3.617,7.71,5.425,12.85,5.425c2.283,0,4.661-0.476,7.136-1.427c7.423-3.238,11.139-8.847,11.139-16.845
                                                                    v-71.663c30.642,2.475,56.097,7.471,76.376,14.989c20.27,7.519,36.494,18.034,48.677,31.549
                                                                    c28.362,31.405,38.451,85.171,30.266,161.311c-0.376,4.951,1.807,8.186,6.567,9.708c0.571,0.192,1.427,0.284,2.569,0.284
                                                                    c3.806,0,6.468-1.618,7.994-4.853l5.709-11.42c2.662-5.331,6.516-13.945,11.56-25.841c5.041-11.901,9.616-23.794,13.709-35.692
                                                                    c4.093-11.893,7.755-25.026,10.992-39.396c3.234-14.376,4.853-27.079,4.853-38.116
                                                                    C511.63,265.094,495.546,216.657,463.375,183.726z"></path>
                                                                    <path d="M63.953,192.011c0-4.952,1.809-9.233,5.424-12.85L182.725,65.531V45.83c0-7.994-3.715-13.608-11.138-16.846
                                                                    c-7.804-3.23-14.465-1.902-19.983,3.999L5.424,179.161C1.809,182.781,0,187.062,0,192.011c0,4.949,1.809,9.229,5.424,12.847
                                                                    l146.18,146.177c3.425,3.617,7.708,5.425,12.85,5.425c2.284,0,4.663-0.476,7.137-1.427c7.423-3.238,11.138-8.847,11.138-16.845
                                                                    v-19.985L69.377,204.857C65.762,201.24,63.953,196.962,63.953,192.011z"></path>
                                                                </g>
                                                            </svg>
                                                            Reply</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="cv-blog-cmnt-reply">
                                        <h2 class="cv-sidebar-title">leave a reply</h2>
                                        <form>
                                            <input type="text" placeholder="Enter Your Name" />
                                            <input type="text" placeholder="Enter Your Email" />
                                            <input type="text" placeholder="Enter Your Subject" />
                                            <textarea placeholder="Message Here"></textarea>
                                            <button class="cv-btn">Submit</button>
                                        </form>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4">
                    <div class="cv-shop-sidebar">
                        <div class="cv-widget cv-search">
                            <h2 class="cv-sidebar-title">Product Search</h2>
                            <form>
                                <input type="text" placeholder="Product Search"/>
                                <button class="cv-btn">search</button>
                            </form>
                        </div>
                        <div class="cv-widget cv-range-slider">
                            <h2 class="cv-sidebar-title">Filter by price</h2>
                            <div class="range-slider">
                                <input type="text" class="js-range-slider" value="" />
                            </div>
                        </div>
                        <div class="cv-widget cv-product-category">
                            <h2 class="cv-sidebar-title">Categories</h2>
                            <ul>
                                <li><a href="javascript:;">Consectetur adipiscing elit</a></li>
                                <li><a href="javascript:;">Quis nostrud exercitation</a></li>
                                <li><a href="javascript:;">Duis aute irure dolor in repreh</a></li>
                                <li><a href="javascript:;">Sunt in culpa officia deserunt</a></li>
                                <li><a href="javascript:;">Ut enim ad minim veniam</a></li>
                            </ul>
                        </div>
                        <div class="cv-widget cv-product-instagram">
                            <h2 class="cv-sidebar-title">Instagram</h2>
                            <ul>
                                <li><a href="javscript:;"><img src="assets/images/insta-wid1.jpg" alt="image" class="img-fluid"></a></li>
                                <li><a href="javscript:;"><img src="assets/images/insta-wid2.jpg" alt="image" class="img-fluid"></a></li>
                                <li><a href="javscript:;"><img src="assets/images/insta-wid3.jpg" alt="image" class="img-fluid"></a></li>
                                <li><a href="javscript:;"><img src="assets/images/insta-wid4.jpg" alt="image" class="img-fluid"></a></li>
                                <li><a href="javscript:;"><img src="assets/images/insta-wid5.jpg" alt="image" class="img-fluid"></a></li>
                                <li><a href="javscript:;"><img src="assets/images/insta-wid6.jpg" alt="image" class="img-fluid"></a></li>
                            </ul>
                        </div>
                        <div class="cv-widget cv-tag">
                            <h2 class="cv-sidebar-title">Tag Cloud</h2>
                            <ul>
                                <li><a href="javscript:;">Face</a></li>
                                <li><a href="javscript:;">Mask</a></li>
                                <li><a href="javscript:;">Body</a></li>
                                <li><a href="javscript:;">Hand</a></li>
                                <li><a href="javscript:;">Eye</a></li>
                                <li><a href="javscript:;">Doctor</a></li>
                                <li><a href="javscript:;">Sanitizer</a></li>
                                <li><a href="javscript:;">Price</a></li>
                                <li><a href="javscript:;">Corona</a></li>
                                <li><a href="javscript:;">Virus</a></li>
                                <li><a href="javscript:;">Drugs</a></li>
                                <li><a href="javscript:;">Medicine</a></li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                </div>
            </div>
        </div>

        <!-- shop end
     related product start
    <div class="cv-arrival cv-related-product cv-product-slider spacer-top-less">
        <div class="container">
            <div class="cv-heading">
                <h1>Related products</h1>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="cv-product-box">
                                    <div class="cv-product-img">
                                        <img src="assets/images/product2.jpg" alt="image" class="img-fluid"/>
                                        <div class="cv-product-button">
                                            <a href="javascript:;" class="cv-btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 461.312 461.312">
                                                <g>
                                                    <path d="M230.656,156.416c-40.96,0-74.24,33.28-74.24,74.24s33.28,74.24,74.24,74.24s74.24-33.28,74.24-74.24
                                                        S271.616,156.416,230.656,156.416z M225.024,208.64c-9.216,0-16.896,7.68-16.896,16.896h-24.576
                                                        c0.512-23.04,18.944-41.472,41.472-41.472V208.64z"></path>
                                                </g>
                                                <g>
                                                    <path d="M455.936,215.296c-25.088-31.232-114.688-133.12-225.28-133.12S30.464,184.064,5.376,215.296
                                                        c-7.168,8.704-7.168,21.504,0,30.72c25.088,31.232,114.688,133.12,225.28,133.12s200.192-101.888,225.28-133.12
                                                        C463.104,237.312,463.104,224.512,455.936,215.296z M230.656,338.176c-59.392,0-107.52-48.128-107.52-107.52
                                                        s48.128-107.52,107.52-107.52s107.52,48.128,107.52,107.52S290.048,338.176,230.656,338.176z"></path>
                                                </g>
                                            </svg> View detail</a>
                                            <a href="javascript:;" class="cv-btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <g>
                                                        <path d="M507.519,116.384C503.721,111.712,498.021,109,492,109H129.736l-1.484-13.632l-0.053-0.438C121.099,40.812,74.583,0,20,0
                                                            C8.954,0,0,8.954,0,20s8.954,20,20,20c34.506,0,63.923,25.749,68.512,59.928l23.773,218.401C91.495,327.765,77,348.722,77,373
                                                            c0,0.167,0.002,0.334,0.006,0.5C77.002,373.666,77,373.833,77,374c0,33.084,26.916,60,60,60h8.138
                                                            c-2.034,5.964-3.138,12.355-3.138,19c0,32.532,26.467,59,59,59s59-26.468,59-59c0-6.645-1.104-13.036-3.138-19h86.277
                                                            c-2.034,5.964-3.138,12.355-3.138,19c0,32.532,26.467,59,59,59c32.533,0,59-26.468,59-59c0-32.532-26.467-59-59-59H137
                                                            c-11.028,0-20-8.972-20-20c0-0.167-0.002-0.334-0.006-0.5c0.004-0.166,0.006-0.333,0.006-0.5c0-11.028,8.972-20,20-20h255.331
                                                            c35.503,0,68.084-21.966,83.006-55.962c4.439-10.114-0.161-21.912-10.275-26.352c-10.114-4.439-21.912,0.161-26.352,10.275
                                                            C430.299,300.125,411.661,313,392.331,313h-240.39L134.09,149h333.308l-9.786,46.916c-2.255,10.813,4.682,21.407,15.495,23.662
                                                            c1.377,0.288,2.75,0.426,4.104,0.426c9.272,0,17.59-6.484,19.558-15.92l14.809-71C512.808,127.19,511.317,121.056,507.519,116.384
                                                            z M399,434c10.477,0,19,8.523,19,19s-8.523,19-19,19s-19-8.523-19-19S388.523,434,399,434z M201,434c10.477,0,19,8.524,19,19
                                                            c0,10.477-8.523,19-19,19s-19-8.523-19-19S190.523,434,201,434z"></path>
                                                    </g>
                                                </svg>
                                            add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="cv-product-data">
                                        <a href="javascript:;" class="cv-price-title">Plastic face shield</a>
                                        <p class="cv-pdoduct-price">$165</p>
                                        <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="cv-product-box">
                                    <div class="cv-product-img">
                                        <span class="cv-sale">sale</span>
                                        <img src="assets/images/product8.jpg" alt="image" class="img-fluid"/>
                                        <div class="cv-product-button">
                                            <a href="javascript:;" class="cv-btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 461.312 461.312">
                                                <g>
                                                    <path d="M230.656,156.416c-40.96,0-74.24,33.28-74.24,74.24s33.28,74.24,74.24,74.24s74.24-33.28,74.24-74.24
                                                        S271.616,156.416,230.656,156.416z M225.024,208.64c-9.216,0-16.896,7.68-16.896,16.896h-24.576
                                                        c0.512-23.04,18.944-41.472,41.472-41.472V208.64z"></path>
                                                </g>
                                                <g>
                                                    <path d="M455.936,215.296c-25.088-31.232-114.688-133.12-225.28-133.12S30.464,184.064,5.376,215.296
                                                        c-7.168,8.704-7.168,21.504,0,30.72c25.088,31.232,114.688,133.12,225.28,133.12s200.192-101.888,225.28-133.12
                                                        C463.104,237.312,463.104,224.512,455.936,215.296z M230.656,338.176c-59.392,0-107.52-48.128-107.52-107.52
                                                        s48.128-107.52,107.52-107.52s107.52,48.128,107.52,107.52S290.048,338.176,230.656,338.176z"></path>
                                                </g>
                                            </svg> View detail</a>
                                            <a href="javascript:;" class="cv-btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <g>
                                                        <path d="M507.519,116.384C503.721,111.712,498.021,109,492,109H129.736l-1.484-13.632l-0.053-0.438C121.099,40.812,74.583,0,20,0
                                                            C8.954,0,0,8.954,0,20s8.954,20,20,20c34.506,0,63.923,25.749,68.512,59.928l23.773,218.401C91.495,327.765,77,348.722,77,373
                                                            c0,0.167,0.002,0.334,0.006,0.5C77.002,373.666,77,373.833,77,374c0,33.084,26.916,60,60,60h8.138
                                                            c-2.034,5.964-3.138,12.355-3.138,19c0,32.532,26.467,59,59,59s59-26.468,59-59c0-6.645-1.104-13.036-3.138-19h86.277
                                                            c-2.034,5.964-3.138,12.355-3.138,19c0,32.532,26.467,59,59,59c32.533,0,59-26.468,59-59c0-32.532-26.467-59-59-59H137
                                                            c-11.028,0-20-8.972-20-20c0-0.167-0.002-0.334-0.006-0.5c0.004-0.166,0.006-0.333,0.006-0.5c0-11.028,8.972-20,20-20h255.331
                                                            c35.503,0,68.084-21.966,83.006-55.962c4.439-10.114-0.161-21.912-10.275-26.352c-10.114-4.439-21.912,0.161-26.352,10.275
                                                            C430.299,300.125,411.661,313,392.331,313h-240.39L134.09,149h333.308l-9.786,46.916c-2.255,10.813,4.682,21.407,15.495,23.662
                                                            c1.377,0.288,2.75,0.426,4.104,0.426c9.272,0,17.59-6.484,19.558-15.92l14.809-71C512.808,127.19,511.317,121.056,507.519,116.384
                                                            z M399,434c10.477,0,19,8.523,19,19s-8.523,19-19,19s-19-8.523-19-19S388.523,434,399,434z M201,434c10.477,0,19,8.524,19,19
                                                            c0,10.477-8.523,19-19,19s-19-8.523-19-19S190.523,434,201,434z"></path>
                                                    </g>
                                                </svg>
                                            add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="cv-product-data">
                                        <a href="javascript:;" class="cv-price-title">Hand gloves</a>
                                        <p class="cv-pdoduct-price"><del>$70</del> $65</p>
                                        <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="cv-product-box">
                                    <div class="cv-product-img">
                                        <img src="assets/images/product4.jpg" alt="image" class="img-fluid"/>
                                        <div class="cv-product-button">
                                            <a href="javascript:;" class="cv-btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 461.312 461.312">
                                                <g>
                                                    <path d="M230.656,156.416c-40.96,0-74.24,33.28-74.24,74.24s33.28,74.24,74.24,74.24s74.24-33.28,74.24-74.24
                                                        S271.616,156.416,230.656,156.416z M225.024,208.64c-9.216,0-16.896,7.68-16.896,16.896h-24.576
                                                        c0.512-23.04,18.944-41.472,41.472-41.472V208.64z"></path>
                                                </g>
                                                <g>
                                                    <path d="M455.936,215.296c-25.088-31.232-114.688-133.12-225.28-133.12S30.464,184.064,5.376,215.296
                                                        c-7.168,8.704-7.168,21.504,0,30.72c25.088,31.232,114.688,133.12,225.28,133.12s200.192-101.888,225.28-133.12
                                                        C463.104,237.312,463.104,224.512,455.936,215.296z M230.656,338.176c-59.392,0-107.52-48.128-107.52-107.52
                                                        s48.128-107.52,107.52-107.52s107.52,48.128,107.52,107.52S290.048,338.176,230.656,338.176z"></path>
                                                </g>
                                            </svg> View detail</a>
                                            <a href="javascript:;" class="cv-btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <g>
                                                        <path d="M507.519,116.384C503.721,111.712,498.021,109,492,109H129.736l-1.484-13.632l-0.053-0.438C121.099,40.812,74.583,0,20,0
                                                            C8.954,0,0,8.954,0,20s8.954,20,20,20c34.506,0,63.923,25.749,68.512,59.928l23.773,218.401C91.495,327.765,77,348.722,77,373
                                                            c0,0.167,0.002,0.334,0.006,0.5C77.002,373.666,77,373.833,77,374c0,33.084,26.916,60,60,60h8.138
                                                            c-2.034,5.964-3.138,12.355-3.138,19c0,32.532,26.467,59,59,59s59-26.468,59-59c0-6.645-1.104-13.036-3.138-19h86.277
                                                            c-2.034,5.964-3.138,12.355-3.138,19c0,32.532,26.467,59,59,59c32.533,0,59-26.468,59-59c0-32.532-26.467-59-59-59H137
                                                            c-11.028,0-20-8.972-20-20c0-0.167-0.002-0.334-0.006-0.5c0.004-0.166,0.006-0.333,0.006-0.5c0-11.028,8.972-20,20-20h255.331
                                                            c35.503,0,68.084-21.966,83.006-55.962c4.439-10.114-0.161-21.912-10.275-26.352c-10.114-4.439-21.912,0.161-26.352,10.275
                                                            C430.299,300.125,411.661,313,392.331,313h-240.39L134.09,149h333.308l-9.786,46.916c-2.255,10.813,4.682,21.407,15.495,23.662
                                                            c1.377,0.288,2.75,0.426,4.104,0.426c9.272,0,17.59-6.484,19.558-15.92l14.809-71C512.808,127.19,511.317,121.056,507.519,116.384
                                                            z M399,434c10.477,0,19,8.523,19,19s-8.523,19-19,19s-19-8.523-19-19S388.523,434,399,434z M201,434c10.477,0,19,8.524,19,19
                                                            c0,10.477-8.523,19-19,19s-19-8.523-19-19S190.523,434,201,434z"></path>
                                                    </g>
                                                </svg>
                                            add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="cv-product-data">
                                        <a href="javascript:;" class="cv-price-title">Saftey mask</a>
                                        <p class="cv-pdoduct-price">$25</p>
                                        <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="cv-product-box">
                                    <div class="cv-product-img">
                                        <span class="cv-sale">sale</span>
                                        <img src="assets/images/product7.jpg" alt="image" class="img-fluid"/>
                                        <div class="cv-product-button">
                                            <a href="javascript:;" class="cv-btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 461.312 461.312">
                                                <g>
                                                    <path d="M230.656,156.416c-40.96,0-74.24,33.28-74.24,74.24s33.28,74.24,74.24,74.24s74.24-33.28,74.24-74.24
                                                        S271.616,156.416,230.656,156.416z M225.024,208.64c-9.216,0-16.896,7.68-16.896,16.896h-24.576
                                                        c0.512-23.04,18.944-41.472,41.472-41.472V208.64z"></path>
                                                </g>
                                                <g>
                                                    <path d="M455.936,215.296c-25.088-31.232-114.688-133.12-225.28-133.12S30.464,184.064,5.376,215.296
                                                        c-7.168,8.704-7.168,21.504,0,30.72c25.088,31.232,114.688,133.12,225.28,133.12s200.192-101.888,225.28-133.12
                                                        C463.104,237.312,463.104,224.512,455.936,215.296z M230.656,338.176c-59.392,0-107.52-48.128-107.52-107.52
                                                        s48.128-107.52,107.52-107.52s107.52,48.128,107.52,107.52S290.048,338.176,230.656,338.176z"></path>
                                                </g>
                                            </svg> View detail</a>
                                            <a href="javascript:;" class="cv-btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <g>
                                                        <path d="M507.519,116.384C503.721,111.712,498.021,109,492,109H129.736l-1.484-13.632l-0.053-0.438C121.099,40.812,74.583,0,20,0
                                                            C8.954,0,0,8.954,0,20s8.954,20,20,20c34.506,0,63.923,25.749,68.512,59.928l23.773,218.401C91.495,327.765,77,348.722,77,373
                                                            c0,0.167,0.002,0.334,0.006,0.5C77.002,373.666,77,373.833,77,374c0,33.084,26.916,60,60,60h8.138
                                                            c-2.034,5.964-3.138,12.355-3.138,19c0,32.532,26.467,59,59,59s59-26.468,59-59c0-6.645-1.104-13.036-3.138-19h86.277
                                                            c-2.034,5.964-3.138,12.355-3.138,19c0,32.532,26.467,59,59,59c32.533,0,59-26.468,59-59c0-32.532-26.467-59-59-59H137
                                                            c-11.028,0-20-8.972-20-20c0-0.167-0.002-0.334-0.006-0.5c0.004-0.166,0.006-0.333,0.006-0.5c0-11.028,8.972-20,20-20h255.331
                                                            c35.503,0,68.084-21.966,83.006-55.962c4.439-10.114-0.161-21.912-10.275-26.352c-10.114-4.439-21.912,0.161-26.352,10.275
                                                            C430.299,300.125,411.661,313,392.331,313h-240.39L134.09,149h333.308l-9.786,46.916c-2.255,10.813,4.682,21.407,15.495,23.662
                                                            c1.377,0.288,2.75,0.426,4.104,0.426c9.272,0,17.59-6.484,19.558-15.92l14.809-71C512.808,127.19,511.317,121.056,507.519,116.384
                                                            z M399,434c10.477,0,19,8.523,19,19s-8.523,19-19,19s-19-8.523-19-19S388.523,434,399,434z M201,434c10.477,0,19,8.524,19,19
                                                            c0,10.477-8.523,19-19,19s-19-8.523-19-19S190.523,434,201,434z"></path>
                                                    </g>
                                                </svg>
                                            add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="cv-product-data">
                                        <a href="javascript:;" class="cv-price-title">Oxygen mask</a>
                                        <p class="cv-pdoduct-price"><del>$70</del> $65</p>
                                        <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                Add Arrows  
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    </div>
    </div>
 
     related product end -->
    <!-- footer start 
    <div class="cv-footer spacer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="cv-foot-box cv-foot-logo">
                        <img src="assets/images/logo.svg" alt="image" class="img-fluid"/>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat quis nostrud exercitation ullamco laboris.</p>
                        <ul class="cv-foot-social">
                            <li><a href="javascript:;">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z"/></svg>
                            </a></li>
                            <li><a href="javascript:;">
                                <svg viewBox="-21 -81 681.33464 681" xmlns="http://www.w3.org/2000/svg"><path d="m200.964844 515.292969c241.050781 0 372.871094-199.703125 372.871094-372.871094 0-5.671875-.117188-11.320313-.371094-16.9375 25.585937-18.5 47.824218-41.585937 65.371094-67.863281-23.480469 10.441406-48.753907 17.460937-75.257813 20.636718 27.054687-16.230468 47.828125-41.894531 57.625-72.488281-25.320313 15.011719-53.363281 25.917969-83.214844 31.808594-23.914062-25.472656-57.964843-41.402344-95.664062-41.402344-72.367188 0-131.058594 58.6875-131.058594 131.03125 0 10.289063 1.152344 20.289063 3.398437 29.882813-108.917968-5.480469-205.503906-57.625-270.132812-136.921875-11.25 19.363281-17.742188 41.863281-17.742188 65.871093 0 45.460938 23.136719 85.605469 58.316407 109.082032-21.5-.660156-41.695313-6.5625-59.351563-16.386719-.019531.550781-.019531 1.085937-.019531 1.671875 0 63.46875 45.171875 116.460938 105.144531 128.46875-11.015625 2.996094-22.605468 4.609375-34.558594 4.609375-8.429687 0-16.648437-.828125-24.632812-2.363281 16.683594 52.070312 65.066406 89.960937 122.425781 91.023437-44.855469 35.15625-101.359375 56.097657-162.769531 56.097657-10.5625 0-21.003906-.605469-31.2617188-1.816407 57.9999998 37.175781 126.8710938 58.871094 200.8867188 58.871094"/></svg>
                            </a></li>
                            <li><a href="javascript:;">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m12.004 5.838c-3.403 0-6.158 2.758-6.158 6.158 0 3.403 2.758 6.158 6.158 6.158 3.403 0 6.158-2.758 6.158-6.158 0-3.403-2.758-6.158-6.158-6.158zm0 10.155c-2.209 0-3.997-1.789-3.997-3.997s1.789-3.997 3.997-3.997 3.997 1.789 3.997 3.997c.001 2.208-1.788 3.997-3.997 3.997z"/><path d="m16.948.076c-2.208-.103-7.677-.098-9.887 0-1.942.091-3.655.56-5.036 1.941-2.308 2.308-2.013 5.418-2.013 9.979 0 4.668-.26 7.706 2.013 9.979 2.317 2.316 5.472 2.013 9.979 2.013 4.624 0 6.22.003 7.855-.63 2.223-.863 3.901-2.85 4.065-6.419.104-2.209.098-7.677 0-9.887-.198-4.213-2.459-6.768-6.976-6.976zm3.495 20.372c-1.513 1.513-3.612 1.378-8.468 1.378-5 0-7.005.074-8.468-1.393-1.685-1.677-1.38-4.37-1.38-8.453 0-5.525-.567-9.504 4.978-9.788 1.274-.045 1.649-.06 4.856-.06l.045.03c5.329 0 9.51-.558 9.761 4.986.057 1.265.07 1.645.07 4.847-.001 4.942.093 6.959-1.394 8.453z"/><circle cx="18.406" cy="5.595" r="1.439"/></svg>
                            </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
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
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="cv-foot-box cv-foot-newsletter">
                        <h2>Newsletter</h2>
                        <p>Sign up for our newsletter</p>
                        <form>
                            <input type="text" placeholder="Enter your email"/>
                            <button class="cv-btn">subscribe</button>
                        </form>
                        <div class="cv-foot-payment">
                            <a href="javascript:;"><img src="assets/images/pay1.png" alt="image" class="img-fluid"/></a>
                            <a href="javascript:;"><img src="assets/images/pay2.png" alt="image" class="img-fluid"/></a>
                            <a href="javascript:;"><img src="assets/images/pay3.png" alt="image" class="img-fluid"/></a>
                            <a href="javascript:;"><img src="assets/images/pay4.png" alt="image" class="img-fluid"/></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     footer end
     copyright start 
    <div class="cv-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>&copy; 2020. All right reserverd by Medical Equipments</p>
                </div>
            </div>
        </div>
    </div>
     copyright end
    login start
    <div class="cv-login">
        <div class="modal fade" id="loginModel">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="cv-login-close close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body">
                        <div class="cv-login-box">
                            <div class="cv-login-wlcm-box">
                                <div class="cv-login-wlcm">
                                    <h2>Sign Up</h2>
                                    <p>If you don't have a personal account please sign up</p>
                                    <a href="javascript:;" data-toggle="modal" data-target="#signUpModal" data-dismiss="modal" aria-label="Close" class="cv-btn">Sign up</a>
                                </div>
                            </div>
                            <div class="cv-login-form">
                                <h2>Sign in to your account</h2>
                                <p>Use your email for login</p>
                                <form>
                                    <input type="text" placeholder="Email"/>
                                    <input type="password" placeholder="Password"/>
                                    <a href="javascript:;" class="pa-forgot-password" data-toggle="modal" data-target="#forgotModal" data-dismiss="modal" aria-label="Close">Forgot your password?</a>
                                    <button class="cv-btn">Sign in</button>
                                 </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    login end
     sign up start
    <div class="cv-login">
        <div class="modal fade" id="signUpModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="cv-login-close close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body">
                        <div class="cv-login-box">
                            <div class="cv-login-wlcm-box">
                                <div class="cv-login-wlcm">
                                    <h2>Sign In</h2>
                                    <p>If you have a personal account, please sign in</p>
                                    <a href="javascript:;" data-toggle="modal" data-target="#loginModel" data-dismiss="modal" aria-label="Close" class="cv-btn">Sign in</a>
                                </div>
                            </div>
                            <div class="cv-login-form">
                                <h2>Create Account</h2>
                                <p>Use your email for registration</p>
                                <form>
                                    <input type="text" placeholder="Full Name"/>
                                    <input type="text" placeholder="Email"/>
                                    <input type="password" placeholder="Password"/>
                                    <button class="cv-btn">Sign up</button>
                                 </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
     sign up end
     forgot start
    <div class="cv-login">
        <div class="modal fade" id="forgotModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="cv-login-close close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body">
                        <div class="cv-login-box">
                            <div class="cv-login-wlcm-box">
                                <div class="cv-login-wlcm">
                                    <h2>Sign In</h2>
                                    <p>If you have a personal account, please sign in</p>
                                    <a href="javascript:;" data-toggle="modal" data-target="#loginModel" data-dismiss="modal" aria-label="Close" class="cv-btn">Sign in</a>
                                </div>
                            </div>
                            <div class="cv-login-form">
                                <h2>Forgot Password</h2>
                                <p>Use your email for reset password</p>
                                <form>
                                    <input type="text" placeholder="Email"/>
                                    <button class="cv-btn">submit</button>
                                 </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    forgot end
</div> -->

    <?php
    require_once 'js_links.php';
    require_once "footer.php"
    ?>
</body>

</html>