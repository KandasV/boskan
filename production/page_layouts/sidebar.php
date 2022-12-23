<?php

function sideBar($activePersonelINFO,$yetkiSeviyesi){
	if($yetkiSeviyesi==1)
  {
    $sideBar = '
    <div class="container body">
        <div class="main_container">
          <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
          <br>
          <div class="navbar nav_title" style="border: 0;">
          <ul class="navbar">
                  <img src="images/logo_white.png" width="180px" height="50px">
              </ul>
          </div>

          <div class="clearfix"></div>
          </br></br>

              <!-- sidebar menu -->
              <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                  <h3>Yönetici Paneli</h3>
                  <!-- menu profile quick info -->
              <div class="profile clearfix">
                <div class="profile_pic">
                  <img src="images/admin1.png" width="50%" height="10%" alt="..." class="img-circle profile_img">
                </div>
                <div class="profile_info">
                  <span>Hoşgeldiniz,</span>
                  <h2>'.$activePersonelINFO.'</h2>
                </div>
              </div>
              <!-- /menu profile quick info -->
                  <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Anasayfa</a>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="form.html">General Form</a></li>
                        <li><a href="form_advanced.html">Advanced Components</a></li>
                        <li><a href="form_validation.html">Form Validation</a></li>
                        <li><a href="form_wizards.html">Form Wizard</a></li>
                        <li><a href="form_upload.html">Form Upload</a></li>
                        <li><a href="form_buttons.html">Form Buttons</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="tables.html">Tables</a></li>
                        <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="chartjs.html">Chart JS</a></li>
                        <li><a href="chartjs2.html">Chart JS2</a></li>
                        <li><a href="morisjs.html">Moris JS</a></li>
                        <li><a href="echarts.html">ECharts</a></li>
                        <li><a href="other_charts.html">Other Charts</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              

              </div>
              <!-- /sidebar menu -->
            </div>
        </div>';
  }
  else if($yetkiSeviyesi==2)
  {
    $sideBar = '
    <div class="container body">
        <div class="main_container">
          <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
          <br>
          <div class="navbar nav_title" style="border: 0;">
          <ul class="navbar">
                  <img src="images/logo_white.png" width="180px" height="50px">
              </ul>
          </div>

          <div class="clearfix"></div>
          </br></br>

              <!-- sidebar menu -->
              <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                  <h3>Satış Personel Paneli</h3>
                  <!-- menu profile quick info -->
              <div class="profile clearfix">
                <div class="profile_pic">
                  <img src="images/seller.png" width="50%" height="10%" alt="..." class="img-circle profile_img">
                </div>
                <div class="profile_info">
                  <span>Hoşgeldiniz,</span>
                  <h2>'.$activePersonelINFO.'</h2>
                </div>
              </div>
              <!-- /menu profile quick info -->
                  <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Anasayfa</a>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="form.html">General Form</a></li>
                        <li><a href="form_advanced.html">Advanced Components</a></li>
                        <li><a href="form_validation.html">Form Validation</a></li>
                        <li><a href="form_wizards.html">Form Wizard</a></li>
                        <li><a href="form_upload.html">Form Upload</a></li>
                        <li><a href="form_buttons.html">Form Buttons</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="tables.html">Tables</a></li>
                        <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="chartjs.html">Chart JS</a></li>
                        <li><a href="chartjs2.html">Chart JS2</a></li>
                        <li><a href="morisjs.html">Moris JS</a></li>
                        <li><a href="echarts.html">ECharts</a></li>
                        <li><a href="other_charts.html">Other Charts</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              

              </div>
              <!-- /sidebar menu -->
            </div>
        </div>';
  }else if($yetkiSeviyesi==3)
  {
    $sideBar = '
    <div class="container body">
        <div class="main_container">
          <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
          <br>
          <div class="navbar nav_title" style="border: 0;">
          <ul class="navbar">
                  <img src="images/logo_white.png" width="180px" height="50px">
              </ul>
          </div>

          <div class="clearfix"></div>
          </br></br>

              <!-- sidebar menu -->
              <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                  <h3>Depo Sorumlusu Paneli</h3>
                  <!-- menu profile quick info -->
              <div class="profile clearfix">
                <div class="profile_pic">
                  <img src="images/delivery.png" width="50%" height="10%" alt="..." class="img-circle profile_img">
                </div>
                <div class="profile_info">
                  <span>Hoşgeldiniz,</span>
                  <h2>'.$activePersonelINFO.'</h2>
                </div>
              </div>
              <!-- /menu profile quick info -->
                  <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Anasayfa</a>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="form.html">General Form</a></li>
                        <li><a href="form_advanced.html">Advanced Components</a></li>
                        <li><a href="form_validation.html">Form Validation</a></li>
                        <li><a href="form_wizards.html">Form Wizard</a></li>
                        <li><a href="form_upload.html">Form Upload</a></li>
                        <li><a href="form_buttons.html">Form Buttons</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="tables.html">Tables</a></li>
                        <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="chartjs.html">Chart JS</a></li>
                        <li><a href="chartjs2.html">Chart JS2</a></li>
                        <li><a href="morisjs.html">Moris JS</a></li>
                        <li><a href="echarts.html">ECharts</a></li>
                        <li><a href="other_charts.html">Other Charts</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              

              </div>
              <!-- /sidebar menu -->
            </div>
        </div>';
  }
	
	echo $sideBar;
	
}


?>