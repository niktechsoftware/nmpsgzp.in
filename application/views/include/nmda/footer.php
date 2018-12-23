<div class="clear"></div>
<div class="footer-bg">
<div class="wrap">
	<div class="footer-grid">
	  <h3> contact </h3>
		  <div class="textwidget">
		 
                                <p style="color:#FFF">Bikapur, Ghazipur (u.p) <br> United States<br> 
                             +91) 9451- 00 - 7575 <br>
                               <a href="www.nmps.com"> info@nmps.in </a></p>
                            </div>
	</div>
	<div class="footer-grid">
		<h3>Pages</h3>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Gallery</a></li>
			<li><a href="#">Contact Us</a></li>
		</ul>
	</div>
	<div class="f-box">
	
                            <h3 > Facebook </h3>
                            <div class="textwidget">
                           <div id="fb-root"></div>
						<script>(function(d, s, id) {
						  var js, fjs = d.getElementsByTagName(s)[0];
						  if (d.getElementById(id)) return;
						  js = d.createElement(s); js.id = id;
						  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4";
						  fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script> 
						<div class="fb-page" data-href="https://www.facebook.com/gfinch.in" data-width="290" data-height="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div></div> 
						<!--/twitter carousel -->
						</div>
                      
	</div>
	<div class="footer-grid1">
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
 <style type="text/css">

	table tr th
	{
		color:#FFF;
	}
	table tr td {
		color:#039;
	}
	</style>
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
 
		</div>
	<div class="clear"></div>
</div>
</div>
<div class="footer1-bg">
<div class="wrap">
				<div class="copy">
			<p>© 2013 All rights Reserved | Design by &nbsp;<a href="http://gfinch.in" target="_blank">Gfinch Technology </a></p>
			</div>	
</div>
</div>
</body>
</html>