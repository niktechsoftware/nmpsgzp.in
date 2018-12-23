  <!--footer starts-->
        <footer>
            <!--footer-widgets-wrapper starts-->
            <div class="footer-widgets-wrapper">
                <!--container starts-->
                <div class="container">
                    
                    <div class="column dt-sc-one-fourth first">
                        <aside class="widget widget_text">
                            <h3 class="widgettitle red_sketch"> contact </h3>
                            <div class="textwidget">
                                <p class="dt-sc-contact-info"><span class="fa fa-map-marker"></span> Bikapur, Ghazipur (u.p)  </p>
                                <p class="dt-sc-contact-info"><span class="fa fa-phone"></span> (+91) 9451- 00 - 7575 </p>
                                <p class="dt-sc-contact-info"><span class="fa fa-envelope"></span><a href="www.nmps.com"> info@nmps.in </a></p>
                            </div>
                        </aside>
                    </div>
                    <div class="column dt-sc-one-fourth"  style="width:40%">
                        <aside class="widget widget_recent_entries">
                            <h3 class="widgettitle green_sketch"> Facebook </h3>
                         
                         <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FNew-Modern-Public-School-239663529710343%2F&tabs=timeline&width=500&height=350&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=300963200468411" width="500" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                         <!--/twitter carousel -->
                        </aside>
                    </div>
                  
                    <div class="column dt-sc-one-fourth">
                        <aside class="widget widget_text">
                        <h3 class="widgettitle steelblue_sketch">Calender</h3>
                           <?php
/* Set the default timezone */
date_default_timezone_set("America/Montreal");

/* Set the date */
$date = strtotime(date("Y-m-d"));

$day = date('d', $date);
$month = date('m', $date);
$year = date('Y', $date);
$firstDay = mktime(0,0,0,$month, 1, $year);
$title = strftime('%B', $firstDay);
$dayOfWeek = date('D', $firstDay);
$daysInMonth = cal_days_in_month(0, $month, $year);
/* Get the name of the week days */
$timestamp = strtotime('next Sunday');
$weekDays = array();
for ($i = 0; $i < 7; $i++) {
	$weekDays[] = strftime('%a', $timestamp);
	$timestamp = strtotime('+1 day', $timestamp);
}
$blank = date('w', strtotime("{$year}-{$month}-01"));
?>
<table class='table table-bordered' style="table-layout: fixed;">
	<tr>
		<th colspan="7" class="text-center"> <?php echo $title ?> <?php echo $year ?> </th>
	</tr>
	<tr>
		<?php foreach($weekDays as $key => $weekDay) : ?>
			<td class="text-center"><?php echo $weekDay ?></td>
		<?php endforeach ?>
	</tr>
	<tr>
		<?php for($i = 0; $i < $blank; $i++): ?>
			<td></td>
		<?php endfor; ?>
		<?php for($i = 1; $i <= $daysInMonth; $i++): ?>
			<?php if($day == $i): ?>
				<td><strong><?php echo $i ?></strong></td>
			<?php else: ?>
				<td><?php echo $i ?></td>
			<?php endif; ?>
			<?php if(($i + $blank) % 7 == 0): ?>
				</tr><tr>
			<?php endif; ?>
		<?php endfor; ?>
		<?php for($i = 0; ($i + $blank + $daysInMonth) % 7 != 0; $i++): ?>
			<td></td>
		<?php endfor; ?>
	</tr>
</table>
                        </aside>
                    </div>
                    
                </div>    
                <!--container ends-->
            </div>
            <!--footer-widgets-wrapper ends-->  
            <div class="copyright">
        		<div class="container">
                	<p class="copyright-info">Â© 2015  Design by <a href="http://gfinch.in" target="_blank" title="">Gfinch Tehnologies</a></p>
        			
        		</div>
        	</div>  
        </footer>
        <!--footer ends-->
        
    </div>
    <!--wrapper ends-->
    <a href="#" title="Go to Top" class="back-to-top">To Top â†‘</a>
    <!--Java Scripts-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/nmps/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/nmps/js/jquery-migrate.min.js"></script>

   
	<script type="text/javascript" src="<?php echo base_url();?>assets/nmps/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/nmps/js/jquery-easing-1.3.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/nmps/js/jquery.sticky.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/nmps/js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/nmps/js/jquery.inview.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/nmps/js/validation.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/nmps/js/jquery.tipTip.minified.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/nmps/js/jquery.bxslider.min.js"></script>       
    <script type="text/javascript" src="<?php echo base_url();?>assets/nmps/js/jquery.prettyPhoto.js"></script>  
    <script type="text/javascript" src="<?php echo base_url();?>assets/nmps/js/twitter/jquery.tweet.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/nmps/js/jquery.parallax-1.1.3.js"></script>   
    <script type="text/javascript" src="<?php echo base_url();?>assets/nmps/js/shortcodes.js"></script>   
    <script type="text/javascript" src="<?php echo base_url();?>assets/nmps/js/custom.js"></script>
   
    <!-- Layer Slider --> 
    <script type="text/javascript" src="<?php echo base_url();?>assets/nmps/js/jquery-transit-modified.js"></script> 
    <script type="text/javascript" src="<?php echo base_url();?>assets/nmps/js/layerslider.kreaturamedia.jquery.js"></script> 
    <script type='text/javascript' src="<?php echo base_url();?>assets/nmps/js/greensock.js"></script> 
    <script type='text/javascript' src="<?php echo base_url();?>assets/nmps/js/layerslider.transitions.js"></script> 
    <!--<script type="text/javascript">var lsjQuery = jQuery;</script>--> 
    <script type="text/javascript">var lsjQuery = jQuery;</script><script type="text/javascript"> lsjQuery(document).ready(function() { if(typeof lsjQuery.fn.layerSlider == "undefined") { lsShowNotice('layerslider_1','jquery'); } else { lsjQuery("#layerslider_4").layerSlider({responsiveUnder: 1170, layersContainer: 1170, skinsPath: 'js/layerslider/skins/'}) } }); </script>
    
</body>
</html>