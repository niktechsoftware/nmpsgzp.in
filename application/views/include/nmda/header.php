<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>New Modern Defence Academy</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="<?php echo base_url();?>assets/nmda/css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/nmda/js/bjqs-1.3.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/nmda/lightbox/css/screen.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/nmda/lightbox/css/lightbox.css">
	

<script>
$(window).load(function() {
	$('.blueberry').blueberry();
});
</script>

<!--slider-->

</head>
<body>
<div class="header-bg">
<div class="wrap">
<div class="header">
<div class="logo">
	<a href="#"><img src="<?php echo base_url();?>assets/nmda/images/logo.png" alt=""></a>
</div>
<div class="nav">
	<nav>
		    <ul class="sf-menu">
		        <li <?php if(strlen($this->uri->segment(2)) == 0) :?> class="current" <?php endif;?>"><a href="<?php echo base_url()?>nmda">Home</a></li>
		        <li <?php if($this->uri->segment(2) == "about") :?> class="current" <?php endif;?>"><a href="<?php echo base_url()?>nmda/about">About</a></li>
		        <li <?php if($this->uri->segment(2) == "gallery") :?> class="current" <?php endif;?>"><a href="<?php echo base_url()?>nmda/gallery">Gallery</a></li>
		         <li><a href="<?php echo base_url()?>iManage/">Login</a></li>
		        <li <?php if($this->uri->segment(2) == "contact") :?> class="current" <?php endif;?>"><a href="<?php echo base_url()?>nmda/contact">Contact</a></li>
		    </ul>
		    <div class="clear"></div>
		</nav>
</div>
	<div class="clear"></div>
</div>
</div>
</div>
<div class="clear"></div>
<div class="slider-bg">
<div class="wrap">
<div class="sidebar">
	<!-- blueberry -->
	   <div class="blueberry">
      <ul class="slides">
        <li><img src="<?php echo base_url();?>assets/nmda/img/slide1.jpg" /></li>
        <li><img src="<?php echo base_url();?>assets/nmda/img/slide2.jpg" /></li>
        <li><img src="<?php echo base_url();?>assets/nmda/img/slide3.jpg" /></li>
       </ul>
    </div>
    <!-- blueberry -->
</div>
</div>
</div>
<div class="clear"></div>

<div class="clear"></div>