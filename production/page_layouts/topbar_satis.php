<?php

function topBar(){
	
	$topBar = '
  <div class="top_nav">
  <div class="nav_menu">
    <ul class=" navbar-right">
        <li>
          <a href="login.php">
            <button type="button" class="btn btn-dark">Bilgi Sistemi Girişi</button>
          </a>
        </li>
    </ul>
  </div>
  </div>
	          ';

	echo $topBar;	
}

?>