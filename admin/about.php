<?php
    require_once 'header.php';
    require_once 'navbar.php';
    require_once 'left-navbar.php';
    if(isset($_POST["about"]))
    {
        $email=$_POST['email'];
        $phn=$_POST['phn'];
        $ad=$conn->real_escape_string($_POST['address']);
        $loc=$conn->real_escape_string($_POST['location']);
        $msg = $conn->real_escape_string($_POST['message']);
        $message_email = $conn->real_escape_string($_POST['message_email']);
        $message_contact_link = $conn->real_escape_string($_POST['message_contact_link']);
        $ab_line1=$conn->real_escape_string($_POST['ab_line1']);
        $ab_line2=$conn->real_escape_string($_POST['ab_line2']);
        $ab_line3=$conn->real_escape_string($_POST['ab_line3']);
        $ab_line4=$conn->real_escape_string($_POST['ab_line4']);
        $facebook=$conn->real_escape_string($_POST['facebook']);
        $twitter=$conn->real_escape_string($_POST['twitter']);
        $insta=$conn->real_escape_string($_POST['instagram']);
        $vat=$conn->real_escape_string($_POST['vat']);
        $registration_number=$conn->real_escape_string($_POST['registration_number']);
        $img=imimage($_FILES);
        if($img!="err")
        {
        $sql="update web_config set email='$email',phn='$phn',address='$ad',location='$loc',logo='$img',message='$msg', message_email = '$message_email', message_contact_link = '$message_contact_link' ,ab_line1='$ab_line1',ab_line2='$ab_line2',ab_line3='$ab_line3',ab_line4='$ab_line4',facebook='$facebook',twitter='$twitter',instagram='$insta', vat = '$vat', registration_number = '$registration_number'"; 
         
        }
        else
        {
            $sql="update web_config set email='$email',phn='$phn',address='$ad',location='$loc',message='$msg', message_email='$message_email', message_contact_link = '$message_contact_link' ,ab_line1='$ab_line1',ab_line2='$ab_line2',ab_line3='$ab_line3',ab_line4='$ab_line4',facebook='$facebook',twitter='$twitter',instagram='$insta', vat = '$vat', registration_number = '$registration_number'";
        } 
        if($conn->query($sql))
        {
            $resMember=true;   
        }
        else
        {
            $errorMember=$conn->error;
        }
    }
    $sql="select * from web_config where id=1";
    if($res = $conn->query($sql))
    {
        if($res->num_rows)
        {
             $about=$res->fetch_assoc();
        }

    }

    if(isset($_GET['show_message_email'])){
        $show_message_email = $_GET['show_message_email'];
        $sql = "UPDATE web_config set show_message_email = '{$show_message_email}'";

        if($conn->query($sql))
        {
            header("location: about.php");   
        }
        else
        {
            $errorMember=$conn->error;
        }

    }
    

?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>About
        </h1>
    </section><br>
    <?php
            if(isset($resMember))
            {
        ?>
    <div class="alert alert-success"><strong>Success! </strong> your request successfully updated. </div>
    <?php
            }
            else if(isset($errorMember))
            {
        ?>
    <div class="alert alert-danger"><strong>Error! </strong><?=$errorMember?></div>
    <?php
                
            }
        ?>
    <div class="box">
        <div class="box-body">
            <form method="post" enctype="multipart/form-data">
                <div class="container-fluid">
                    <div class="row">
                        <?php
                                if(isset($about)) 
                                {     
                                    ?>
                        <div class="col-sm-6"><br>
                            <label>Email :</label>
                            <input type="email" class="form-control" id="" name="email" value="<?=$about['email']?>">

                        </div>
                        <div class="col-sm-6"><br>
                            <label>Contact Number :</label>
                            <input type="text" class="form-control" id="" name="phn" value="<?=$about['phn']?>">

                        </div>
                        <div class="col-sm-6"><br>
                            <label>Address :</label>
                            <input type="text" class="form-control" id="" name="address" value="<?=$about['address']?>">

                        </div>
                        <div class="col-sm-6"><br>
                            <label>Location :</label>
                            <input type="text" class="form-control" id="" name="location"
                                value="<?=$about['location']?>">

                        </div><br>
                        <div class="col-sm-6"><br>
                            <label>Facebook Handle :</label>
                            <input type="text" class="form-control" id="" name="facebook" value="<?=$about['facebook']?>">

                        </div>
                        <div class="col-sm-6"><br>
                            <label>Twitter Handle :</label>
                            <input type="text" class="form-control" id="" name="twitter" value="<?=$about['twitter']?>">

                        </div>
                         <div class="col-sm-6"><br>
                            <label>Instagram Handle :</label>
                            <input type="text" class="form-control" id="" name="instagram" value="<?=$about['instagram']?>">

                        </div>

                        <div class="col-sm-6"><br>
                            <label>VAT :</label>
                            <input type="text" class="form-control" id="" name="vat" value="<?=$about['vat']?>">
                        </div>

                        <div class="col-sm-6"><br>
                            <label>Registration Number :</label>
                            <input type="text" class="form-control" id="" name="registration_number" value="<?=$about['registration_number']?>">
                        </div>

                        <div class="col-sm-12"><br>
                            <label>Message from Admin :</label><br>
                            <textarea style="width: 100%;height:120px;resize:none"
                                name="message"><?=$about['message']?></textarea>
                        </div>


                        <div class="col-sm-12"><br>
                            <?php
                             if($about['show_message_email'] == "true"){?>


                                <a href="about.php?show_message_email=false" class="btn btn-primary">Remove Email</a>

                            <?php } else {?>

                                <a href="about.php?show_message_email=true" class="btn btn-primary">Show Email</a>

                            <?php } ?>
                        </div>  

                       <?php 

                        if($about['show_message_email'] == "true"){?>

                            <div class="col-sm-6"><br>
                                <label>Email</label>
                                <input type="text" class="form-control" name="message_email" value="<?=$about['message_email']?>">
                            </div>


                            <div class="col-sm-6"><br>
                                <label for="">Contact Link</label>
                                <input type="text" name="message_contact_link" class="form-control" required="required"  title="" value="<?= $about['message_contact_link'] ?>">
                            </div>

                        <?php } ?>


                        <div class="col-sm-12"><br>
                            <label>About Line 1:</label><br>
                            <textarea style="width: 100%;height:120px;resize:none"
                                name="ab_line1"><?=$about['ab_line1']?></textarea>
                        </div>
                        <div class="col-sm-12"><br>
                            <label>About Line 2:</label><br>
                            <textarea style="width: 100%;height:120px;resize:none"
                                name="ab_line2"><?=$about['ab_line2']?></textarea>
                        </div>
                        <div class="col-sm-12"><br>
                            <label>About Line 3:</label><br>
                            <textarea style="width: 100%;height:120px;resize:none"
                                name="ab_line3"><?=$about['ab_line3']?></textarea>
                        </div>
                        <div class="col-sm-12"><br>
                            <label>About Line 4:</label><br>
                            <textarea style="width: 100%;height:120px;resize:none"
                                name="ab_line4"><?=$about['ab_line4']?></textarea>
                        </div>
                        <div class="col-sm-12"><br>
                            <label>Add Logo :</label><br>
                            <input type="file" class="btn btn-success" name="images"></input>
                        </div><br><br>

                        <div class="row" style="margin-bottom:20px"><br> 
                            <div class="col-md-4" id="file<?=$counter?>">
                                <div class="col-md-8" style="margin-top:15px">
                                    <a href="uploads/<?=$about['logo']?>" target="_blank"><img src="uploads/<?=$about['logo']?>"
                                            width="100px" height="100px" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12"><br>
                            <center><button type="submit" class="btn btn-lg btn-primary" name="about">DONE</button>
                            </center>
                        </div><br>
                        <?php
                                }
                                ?>
                    </div>
                </div>
            </form>
        </div>
    </div><br><br>
</div><br><br>



<?php
    require_once 'js-links.php';
?>

<script>
setTimeout(function() {
    $(".alert").hide();
}, 3000);
</script>