<?php
require_once "lib/core.php";
require_once 'headerplus.php';


if(isset($_POST['subscribe']))
{
    $email=$conn->real_escape_string($_POST['email']);
    $sql="insert into subscribe(email) values ('$email')";
    if($conn->query($sql)===true)
    {
    }
    else
    {
    }
}

$sql = 'select * from web_config';
if ($res = $conn->query($sql)) {
  if ($res->num_rows) {
    $about  =  $contact = $res->fetch_assoc();
  }
}

$sql ="Select * from category";
if($res=$conn->query($sql))
{
    if($res->num_rows)
    {
        while($row = $res->fetch_assoc())
        {
            $category[]=$row;
        }
        
    }
}
?>
<!DOCTYPE html>

<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Int Trade Global</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/font.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/categories.css">

    
    <!-- <link rel="apple-touch-icon" sizes="57x57" href="assets/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png"> -->
    <link rel="icon" href="assets/logo.png" type="image/icon type" style="border-radius:50%">
    <link rel="manifest" href="assets/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/logo.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,500;1,400&display=swap" rel="stylesheet">
</head>

<body>
<!-- preloader start -->
<div class="cv-ellipsis">
    <div class="cv-preloader">
        <div></div>
    </div>
</div>
<!-- preloader end -->
<!-- main wrapper start -->
<div class="cv-main-wrapper">