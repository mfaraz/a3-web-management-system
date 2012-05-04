<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="A3, A3 online, a3 online game, a3 private server, a3 game, free online game, free private server, free a3, free a3 game online, revive, a3 revive, revive online game, free a3 revive" />
<meta name="description" content="This is an Account Management Tools for  <?=$this->config->item('homepage')?> Online Games to modify their character" />
<link href="<?=base_url()?>css/style.css" rel="stylesheet" type="text/css" />

<link href="<?=base_url()?>css/jquery-ui-1.8.18.custom.css" type="text/css" rel="stylesheet" />	

<script src="<?=base_url()?>js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>js/jquery-ui-1.8.18.custom.min.js" type="text/javascript"></script>

<link href="<?=base_url()?>images/favicon.ico" type="image/x-icon" rel="icon" />
<title><?=$this->config->item('homepage')?> Account Management Tools</title>



</head>
<body>
<div id="header">
	<h1><a href="#"><?=$this->config->item('homepage')?></a></h1>
	<h2>Account Management System</h2>
</div>
<div id="menu">

		<?php start_block_marker('templatemo_menu'); ?>
		<?php end_block_marker(); ?>

</div>
<hr />
<div id="page">
	<div id="content">
		<div class="post">
			<h2 class="title">

			<?php start_block_marker('page_title'); ?>
			<?php end_block_marker(); ?>

			</h2>
			
			<!-- <p class="meta"><span class="byline">Posted by <a href="#">Someone</a> on December 22, 2007</span> <a href="#" class="comments">18 comments</a></p>-->
			<p class="meta"><span class="byline">Account Information</p>
			
			<div class="entry">
			<table border="0" width="100%" cellpadding="2" style="border-collapse: collapse" id="table1">
				<tr>
					<td>

					<?php start_block_marker('service_box_float_l'); ?>
					<?php end_block_marker(); ?>

					</td>
					<td>
					
					<?php start_block_marker('service_box_float_r'); ?>
					<?php end_block_marker(); ?>
					
					</td>
				</tr>
			</table>
			</div>

		</div>

		<div class="post">
			<h2 class="title">&nbsp;&nbsp;</h2>
			<div class="entry">
			
				<?php start_block_marker('cleaner_h40a'); ?>
				<?php end_block_marker(); ?>
				
				<?php start_block_marker('cleaner_h40b'); ?>
				<?php end_block_marker(); ?>

			</div>
			<p class="meta"><span class="byline">Please Logout Before Using This System</p>
		</div>

	</div>
	<!-- end #content -->
	<div id="sidebar">
		<ul>
			<!--
			<li id="search">
				<form id="searchform" method="get" action="">
					<div>
						<input type="text" name="s" id="s" size="15" />
						<br />
						<input name="submit" type="submit" value="Search" />
					</div>
				</form>
			</li>
			-->
			<li>
				<h2>Menu</h2>

				<?php start_block_marker('templatemo_menu_side'); ?>
				<?php end_block_marker(); ?>

			</li>

		</ul>
		<div style="clear: both; height: 40px;">&nbsp;</div>
	</div>
	<!-- end #sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end #page -->
<hr />
<div id="footer">
<p>Page rendered in <strong>{elapsed_time}</strong> seconds using <strong>{memory_usage}</strong></p>
<p>Copyright © 2012 <?=$this->config->item('homepage')?> Private Server | Designed by <a href="http://forum.ragezone.com/members/294574.html" target="_blank">Zaugola</a> | Validate <a href="http://validator.w3.org/check?uri=referer">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a></p>
</div>
</body>
</html>
