<?php 
  require "page_layouts/topbar.php";
  require "page_layouts/urunStyle.php";
?>

<html lang="en">
  <head>
    <title>BOSKAN</title>

    <!-- Script / Style Dahil Ediliyor -->
    <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="../../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <link href="../../build/css/custom.min.css" rel="stylesheet">
    <script src="../../vendors/jquery/dist/jquery.min.js"></script>
    <script src="../../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../build/js/custom.min.js"></script>
    <!-- Script / Style Dahil Edildi -->
  </head>
<?php
  urunStyle();
?>
  <body class="nav-md">
  <div class="container body">
      
      <!-- Üst Menü Başlangıç -->
      <?php
        topNavBar();
      ?>
      <!-- Üst Menü Bitiş -->


      <!-- Ürün Paneli Başlangıç -->
      <div class="right_col" role="main">
        <div class="">
          

          <!-- Parça Türü ve Link Ataması Başlangıç -->
          <div class="page-title">
            <div class="title_left">
              <h6><a href="../mainPage.php">Anasayfa</a>  / RAM</h6>
            </div>
          </div>  
          <!-- Parça Türü ve Link Ataması Bitiş -->

          
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_content">
                  <div class="col-md-7 col-sm-7 ">

                  <!-- Ana Ürün Resmi Başlangıç-->
                  <div>
                      <img src="images/urun25_4.jpg" width="390px" height="390" alt="..." />
                    </div>

                  <!-- Ana Ürün Resmi Bitiş -->

                  <div class="product_gallery">
                      <a>
                        <img src="images/urun25_2.jpg" alt="..." />
                      </a>
                      <a>
                        <img src="images/urun25_3.jpg" alt="..." />
                      </a>
                      <a>
                        <img src="images/urun25_1.jpg" alt="..." />
                      </a>
                    </div>
                  </div>
                  <!-- Ana Ürün Resmi Bitiş -->
                  <div class="col-md-5 col-sm-5 " style="border:0px solid #e5e5e5;">

<!-- Parça Adı Başlangıç -->
  <h3 class="prod_title"> GSKILL 64GB (2x32GB) Trident Z5 Neo RGB 6000MHz CL32 DDR5 1.4V AMD EXPO Siyah Dual Kit Ram </h3>
<!-- Parça Adı Bitiş -->
<br /><br />
                    
<!-- Parça Fiyatı Başlangıç -->              
  <div class="">
    <div class="product_price">
      <h1 class="price">11.025,92 ₺</h1>
      <br>
      <p>Fiyatla %60 KDV Dahildir</p>
    </div>
  </div>
<!-- Parça Fiyatı Bitiş -->              



                  <div class="">
                    <button type="button" class="btn btn-info">Stokta</button>
                      <button type="button" class="btn btn-warning">%10 İndirim</button>
                    </div>
                  </div>


        


<div class="col-md-12">

  <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Temel Bilgiler</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Özellikler</a>
    </li>
  </ul>

<!-- Bilgi ve Tablo İçerik Başlangıç -->
<div class="tab-content" id="myTabContent">



<!-- Temel Bilgiler Başlangıç -->
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"> 
          <!-- <img src="images/urun_56_bilgi.jpg"/> -->
          AMD Ryzen için Çarpıcı Peformans DDR5
</br>
          DDR5 özellikli AMD platformları için tasarlanan Trident Z5 Neo RGB, DDR5 AMD platformlarında yüksek hız aşırtmalı bellek performansı elde etmek için yüksek kaliteli, elle ekranlaşmış DDR5 DRAM IC'lerden oluşturulmuştur.
          Hız aşırtmalı bellek performansını ortaya çıkarmak için, Trident ZB Neo RGB, BIOS'ta basit bir bellek hız aşırtması deneyimine izin vermek için AMD Expo (Hızaşırtma için Genişletilmiş Profiller) desteğiyle birlikte gelir.
        </div>
<!-- Temel Bilgiler Bitiş -->
    
    
<!-- Tablo İçerikleri Başlangıç -->
<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  <div class="x_content">
    <table class="table">
    <thead>
        <tr>
          <th>Özellik</th>
          <th>Açıklama</th>
        </tr>
      </thead>
      <tbody>
        <tr>
        <tr>
          <td>Ram Tipi</td>
          <td>DDR5</td>
        </tr>
      <tr>
          <td>Ram Kapasitesi</td>
          <td>64</td>
        </tr>
        <tr>
          <td>Ram Frekans Hızı</td>
          <td>6000MHz</td>
        </tr>
        <tr>
          <td>Cas Gecikme</td>
          <td>32</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<!-- Tablo İçerikleri Bitiş -->
    
</div>
<!-- Bilgi ve Tablo İçerik Bitiş -->

</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Ürün Paneli Bitiş -->
      
</div>
</div>
</body>
</html>