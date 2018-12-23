<!DOCTYPE HTML>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="en-gb" class="no-js"> <!--<![endif]-->
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
<title>NEW MODERN PUBLIC SCHOOL</title>
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="<?php echo base_url();?>assets/nmps/favicon.ico" type="image/x-icon" />
<link href="<?php echo base_url();?>assets/nmps/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/nmps/css/shortcodes.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/nmps/css/responsive.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/nmps/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel='stylesheet' id='layerslider-css' href="<?php echo base_url();?>assets/nmps/css/layerslider.css" type='text/css' media='all' />
<!--prettyPhoto-->
<link href="<?php echo base_url();?>assets/nmps/css/prettyPhoto.css" rel="stylesheet" type="text/css" media="all" />   
<!--[if IE 7]>
<link href="<?php echo base_url();?>assets/nmps/css/font-awesome-ie7.css" rel="stylesheet" type="text/css">
<![endif]-->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--Fonts-->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Bubblegum+Sans' rel='stylesheet' type='text/css'>
<!--jquery-->
<script src="<?php echo base_url();?>assets/nmps/js/modernizr-2.6.2.min.js"></script>
</head>
<body class="main">
	<!--wrapper starts-->
    <div class="wrapper">
        <!--header starts-->
        <header>
            <div class="container">
                <div class="logo">
                    <a href="<?php echo base_url();?>" title="Kids Life"><img src="<?php echo base_url();?>assets/nmps/images/logo.png" alt="Kids Life" title="Kids Life"></a>
                </div>
               
            </div>
            <!--menu-container starts-->
            <div id="menu-container">
                <div class="container">
                    <!--nav starts-->
                    <nav id="main-menu">
                    	<div class="dt-menu-toggle" id="dt-menu-toggle">Menu<span class="dt-menu-toggle-icon"></span></div>
                        <ul id="menu-main-menu" class="menu">
                            <li <?php if(strlen($this->uri->segment(2)) == 0) :?>class="current_page_item menu-item-simple-parent menu-item-depth-0 red" <?php endif;?>> <a href="<?php echo base_url()?>nmps"> Home </a>                          
                            </li>
                           <li <?php if($this->uri->segment(2) == "about") :?> class="current_page_item menu-item-simple-parent menu-item-depth-0 red" <?php endif;?>><a href="<?php echo base_url()?>nmps/about">About Us</a>
					</li>
					<li <?php if($this->uri->segment(2) == "admission") :?> class="current_page_item menu-item-simple-parent menu-item-depth-0 red" <?php endif;?>>
						<a href="<?php echo base_url()?>nmps/admission">Admission Procedure</a>
					</li>
					<li <?php if($this->uri->segment(2) == "feature") :?> class="current_page_item menu-item-simple-parent menu-item-depth-0 red" <?php endif;?>>
						<a href="<?php echo base_url()?>nmps/feature">Salient Feature</a>
					</li>
					<li <?php if($this->uri->segment(2) == "gallery") :?> class="current_page_item menu-item-simple-parent menu-item-depth-0 red" <?php endif;?>>
						<a href="<?php echo base_url()?>nmps/gallery">Gallery</a>
					</li>
					<li class="has-mega">
						<a href="<?php echo base_url()?>nmp/homeController" class="active">Login</a>
					</li>
					<li <?php if($this->uri->segment(2) == "contact") :?> class="current_page_item menu-item-simple-parent menu-item-depth-0 red" <?php endif;?>>
						<a href="<?php echo base_url()?>nmps/contact">contact</a>
					</li>
                        </ul>
                    </nav>
                    <!--nav ends-->
                </div>
            </div>
            <!--menu-container ends-->
        </header>
        <!--header ends-->