<?php

function sideBar(){
	
	$sideBar = '

  <div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <br>
    <div class="navbar nav_title" style="border: 0;">
    <ul class="navbar">
            <img src="images/logo_white.png" width="180px" height="50px">
        </ul>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
     </br>
      <div class="profile_info">
        <span>Hoşgeldiniz,</span>
        <h2>Değerli Müşterimiz</h2>
      </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <ul class="nav side-menu">

          <li>
            <a href="mainPage.php"><i class="fa fa-home"></i>&nbsp Anasayfa </a> 
          </li>

          <li>
            <a href="satisMenu_islemci.php"><i class="fas fa-microchip" style="font-size:15px;color:white"></i>&nbsp&nbsp&nbsp&nbsp İşlemci </a> 
          </li>
          
          <li>
            <a href="satisMenu_anakart.php"><i class="material-icons" style="font-size:18px;color:white">developer_board</i>&nbsp&nbsp&nbsp&nbspAnakart </a> 
            
          </li>
          
          <li>
            <a href="satisMenu_gpu.php"><i class="fas fa-money-bill" style="font-size:15px;color:white"></i>&nbsp&nbsp&nbsp&nbspEkran Kartı </a> 
          </li>

          <li>
           <a href="satisMenu_bellek.php"><i class="fas fa-memory" style="font-size:15px;color:white"></i>&nbsp&nbsp&nbsp&nbspBellek </a> 
          </li>

          <li><a><i class="fas fa-server" style="font-size:15px;color:white"></i>&nbsp&nbsp&nbsp&nbspDepolama <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="satisMenu_hdd.php">Sabit Disk</a></li>
              <li><a href="satisMenu_ssd.php">SSD</a></li>
            </ul>
          </li>
          
          <li><a><i class="fas fa-fan" style="font-size:15px;color:white"></i>&nbsp&nbsp&nbsp&nbspSoğutma <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a>İşlemci Soğutma<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li class="sub_menu"><a href="satisMenu_havasogutma.php">Hava Soğutma</a>
                    </li>
                    <li><a href="satisMenu_sivisogutma.php">Sıvı Soğutma</a>
                  </ul>
                </li>
                <li><a href="satisMenu_fan.php">Kasa Fanı</a>
            </ul>
          </li>

          <li>
            <a href="satisMenu_psu.php"><i class="	fas fa-charging-station" style="font-size:15px;color:white"></i>&nbsp&nbsp&nbsp&nbspGüç Kaynağı </a> 
          </li>
                            
        </ul>
        
    </div>

    
    </div>

    
    <!-- /sidebar menu -->
  </div>
</div>
	';
	
	echo $sideBar;	
}

?>