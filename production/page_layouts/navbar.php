<?php

function adminNavbar($activePersonelINFO){
	
	$navbar = '
      <div class="top_nav">
      <div class="nav_menu">
          <nav class="nav navbar-nav">
          <ul class=" navbar-right">
            <li class="nav-item dropdown open" style="padding-left: 15px;">
            <a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>

          </li>
        </ul>
          </nav>
        </div>
      </div>
	';
	
	echo $navbar;	
}

?>