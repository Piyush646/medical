<?php
require_once 'header.php';
require_once 'navbar.php';
require_once 'left-navbar.php';
 
$sql="SELECT count(id) as count from product";
if($result=$conn->query($sql))
{
    if($result->num_rows>0)
    {
        $row=$result->fetch_assoc(); 
        $products=$row['count']; 
    }
} 
$sql="SELECT count(id) as count from subscribe";
if($result=$conn->query($sql))
{
    if($result->num_rows>0)
    {
        $row=$result->fetch_assoc(); 
          $subscriber=$row['count']; 
    }
} 
$sql="SELECT count(id) as count from quote";
if($result=$conn->query($sql))
{
    if($result->num_rows>0)
    {
        $row=$result->fetch_assoc(); 
          $quote=$row['count']; 
    }
} 
$sql="SELECT * from product order by time_stamp desc limit 10";
if($result=$conn->query($sql))
{
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            $product_details[]=$row; 
        }
        
    }
}

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-4">
                <a href="medical_eqi" style="background-color: white;">
                    <div class="info-box mb-3 bg-green">
                        <span class="info-box-icon"><i class="fa fa-tasks"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Equipments</span>
                            <span class="info-box-number"><?=$products?></span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="subscribers" style="background-color: white;">
                    <div class="info-box mb-3 bg-blue">
                        <span class="info-box-icon"><i class="fa fa-users"></i></span>
                        <div class="info-box-content" style="color: white;">
                            <span class="info-box-text">Subscribers</span>
                            <span class="info-box-number"><?=$subscriber?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="quote" style="background-color: white;">
                    <div class="info-box mb-3 bg-yellow">
                        <span class="info-box-icon"><i class="fa fa-comment"></i></span>
                        <div class="info-box-content" style="color: white;">
                            <span class="info-box-text">Quotes</span>
                            <span class="info-box-number"><?=$quote?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </a>
            </div>
        </div>
    
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border-transparent" style="background-color: #343a40;">
                        <h3 class="card-title" style="color: white;">Recently Added Equipments</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table m-0" style="border-spacing: 2px;  font-size: 16px;">
                                <thead style="font-weight: 800; background-color: #6c757d; color: white;">
                                    <tr>
                                        <th style="text-align: center;">S.no.</th>
                                        <th style="text-align: center;">Name</th>
                                        <th style="text-align: center;">Price</th>
                                        <th style="text-align: center;">Code</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">
                                    <?php
                                        if(isset($product_details))
                                        {
                                            $i=1;
                                            foreach($product_details as $data)
                                            {
                                    ?>
                                                <tr>
                                                    <td style="padding: 12px; color: #17a2b8;"><?=$i?></td>
                                                    <td style="padding: 12px;"><?=$data['name']?></td>
                                                    <td style="padding: 12px;"><?=$data['price']?></td>
                                                    <td style="padding: 12px;"><?=$data['code']?></td>
                                                </tr>
                                    <?php
                                                $i++;
                                            }
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix">
                            <a href="medical_eqi" class="btn btn-sm btn-info float-right">View All Equipments</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 	   
  <div class="control-sidebar-bg"></div>
<?php
require_once 'js-links.php';
?>
<!-- ChartJS -->
<script src="plugins/flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="plugins/flot-old/jquery.flot.resize.min.js"></script>
 