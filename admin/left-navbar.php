
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
   <!-- sidebar: style can be found in sidebar.less -->
   <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- <div class="user-panel">
             <div class="image">
               <form enctype="multipart/form-data" action="image_upload_demo_submit" method="post" name="image_upload_form" id="image_upload_form">
                  <div id="imgArea" class="pull-left image"
                     <img src="<?=$DATA['user_pic'];?>" width="48" height="48" >
                     <div class="progressBar">
                        <div class="bar"></div>
                        <div class="percent">0%</div>
                     </div>
                     <div id="imgChange"><span><i class="fa fa-edit"></i></span>
                        <input type="file" accept="image/*" name="image_upload_file" id="image_upload_file">
                     </div>
                  </div>
               </form>
            </div>
            <div class="pull-left info">
               <p>Admin</p>
               <p><?=$DATA['name'];?></p>
            </div>
         </div> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
         <li class="header"><strong>MAIN NAVIGATION</strong></li>
         <li>
            <a href="dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
         </li>
<!--          <li>
            <a href="medical_eqi">
            <i class="fa fa-list"></i> <span>Equipments</span>
            </a>
         </li> -->

         <li class="treeview">
            <a href="medical_eqi">
            <i class="fa fa-list"></i>
            <span>Equipments</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            
            <ul class="treeview-menu">
               <li>
                  <a href="medical_eqi">
                     <i class="fa fa-circle"></i>All
                  </a>
               </li> 

               <?php 

               $query = "SELECT * FROM category";
               $result = $conn->query($query);

               foreach ($result as $category) { ?>
                 
                 <li>
                   <a href="medical_eqi?token=<?= $category['id']?>">
                     <i class="fa fa-circle"></i> <?= $category['caty']?>
                   </a>
                 </li>

               <?php } ?>


            </ul>
         </li>

         <li>
           <a href="category">
           <i class="bi bi-grid-3x3-gap-fill"></i> <span>  &nbsp;Category</span>
           </a>
         </li>
         <li>
           <a href="dynamic_pages">
             <i class="fa fa-file-text" aria-hidden="true"></i> <span> Dynamic Pages</span>
           </a>
         </li>
         <li>
            <a href="subscribers">
            <i class="fa fa-bell" aria-hidden="true"></i> <span>Subscribers</span>
            </a>
         </li>
         <li>
            <a href="about">
            <i class="fa fa-info-circle" aria-hidden="true"></i> <span>About</span>
            </a>
         </li>
         <!-- <li>
            <a href="home_slider">
            <i class="fa fa-image" aria-hidden="true"></i> <span>Home Slider</span>
            </a>
         </li> -->
         <li>
            <a href="quote">
            <i class="fa fa-quote-left" aria-hidden="true"></i><span>Quote</span>
            </a>
         </li>
         
          
          <!-- <li>
           <a href="gym_member">
                <i class="fa fa-user"></i>Gym Members
            </a>
         </li>
          
          
         <li>
           <a href="mem_history">
                <i class="fa fa-history"></i>Transaction History
            </a>
         </li>
         <li>
           <a href="manage_sms">
                <i class="fa fa-commenting"></i>Manage SMS
            </a>
         </li>
         <li class="treeview">
            <a href="#">
            <i class="fa fa-money"></i>
            <span>Fee Management</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            
            <ul class="treeview-menu">
               <li>
                  <a href="fees?token=3">
                     <i class="fa fa-circle"></i>Due Fees
                  </a>
               </li> 
               <li>
                     <a href="fees?token=1">
                        <i class="fa fa-circle"></i>Near Due Fees
                     </a>
               </li>
            
               <li>
                  <a href="fees?token=2">
                     <i class="fa fa-circle"></i>Paid Fees
                  </a>
               </li>
            </ul>
         </li> -->

         <li>
           <a href="logout">
                <i class="fa fa-sign-out"></i>Log Out
            </a>
         </li>
      </ul>
   </section>
   <!-- /.sidebar -->
</aside>
