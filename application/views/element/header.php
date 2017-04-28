<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
  
  <title><?php if($this->uri->segment(1) != 'home' && $this->uri->segment(1) != "") echo $this->uri->segment(1)."  |  " ; ?><?php echo $site['0']['page_title'] ?></title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo $site['0']['meta_desc'] ?>">
  <meta name="keywords" content="<?php echo $site['0']['meta_keyword'] ?>">
  <meta name="author" content="">

  <!-- Bootstrap Styles -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Styles -->
  
  <link href="assets/css/animations.css" rel="stylesheet">
  <link href="assets/css/owl-carousel.css" rel="stylesheet">
  <link href="assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>



  <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,500,700,800,600,300,900' rel='stylesheet' type='text/css'>

    
  <!-- Support for HTML5 -->
  <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Enable media queries on older browsers -->
  <!--[if lt IE 9]>
    <script src="assets/js/respond.min.js"></script>
  <![endif]-->

</head>