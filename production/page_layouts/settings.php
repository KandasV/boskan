<?php

$siteBasligi = "BOSKAN Bilgi Sistemi";
$favicon = "images/computer_logo.png";

function ustSidebar(){
	
	$ustSidebar = '	
	<div class="navbar nav_title" style="border: 0;">
      <a href="index.php" class="site_title"><i class="fa fa-bar-chart"></i> <span>BOSKAN</span></a>
    </div>	
	';
	
	echo $ustSidebar;	
}

$sidebarKisaIsim = "BOSKAN";

function profilePicStyle(){
	
	$profilePicStyle = '	
	<style>
		.img-circle.profile_img {
		background: none;
		width: 80%;
		}
	</style>
	';
	
	echo $profilePicStyle;	
}


?>