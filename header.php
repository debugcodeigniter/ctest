<?php header('Content-Type: text/html; charset=utf-8');?>
<!DOCTYPE html>
<html>
  
<head>
    <title><?php echo ($config['page_title']) ? $config['page_title'] : "";?></title>
		<meta name="keywords" content="<?php echo ($config['keywords']) ? $config['keywords'] : "";?>" />
		
        <meta name="description" content="<?php echo ($config['description']) ? $config['description'] : "";?>">
		<meta name="author" content="<?php echo ($config['author']) ? $config['author'] : "";?>">
		<link rel="canonical" href="<?php echo current_url();?>"/>
		<meta name="robots" content="">
		<!-- Facebook OpenGraph Tags -->
		<meta property="og:title" content="<?php echo ($config['page_title']) ? $config['page_title'] : "";?>"/>
		<meta property="og:type" content="website"/>
		<meta property="og:url" content="<?php echo current_url();?>"/>
		<meta property="og:image" content="<?php echo ($config['og_image']) ? $config['og_image'] : "";?>"/>
		<meta property="og:site_name" content="1st Choice Lab Services"/>
		<meta property="fb:app_id" content="<?php echo ($config['fb_app_id']) ? $config['fb_app_id'] : "";?>"/> <!-- Use your own API Key. Go to http://developers.facebook.com/ for more information. -->
		<meta property="og:description" content="<?php echo ($config['description']) ? $config['description'] : "";?>"/>
		
		<link rel="shortcut icon" href="<?php echo base_url().'images/favicon.ico';?>" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	
    <!-- 1st Choice Lab Color Theme -->
	<link rel="stylesheet" id="color" href="<?php echo base_url('Yes');?>css/color_theme.css">
    
    <!-- 1st Choice Lab Main CSS -->
    <link href="<?php echo base_url('Yes');?>css/firstchoice.css" rel="stylesheet">

    <!-- Bootstrap 3.0 CSS -->
    <link href="<?php echo base_url('Yes');?>css/bootstrap.css" rel="stylesheet">
<!--Masonary CSS-->
    <link rel="stylesheet" href="<?php echo base_url('Yes');?>css/reset.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('Yes');?>css/prettyPhoto.css" />
   

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

	<script src="<?php echo base_url('Yes');?>js/jquery.js"></script>
     <!-- jQuery KenBurn Slider  -->	
	<script src="<?php echo base_url('Yes');?>js/jquery.themepunch.plugins.min.js"></script>			
    <script src="<?php echo base_url('Yes');?>js/jquery.themepunch.revolution.min.js"></script>	

  </head>
  <body> 
	
    
    <div id="wrapper">
    
    
    