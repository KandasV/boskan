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
              <h6><a href="../mainPage.php">Anasayfa</a>  / İşlemci</h6>
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
                      <img src="images/urun14_1.jpg" width="390px" height="390" alt="..." />
                    </div>
                  <!-- Ana Ürün Resmi Bitiş -->

                    <div class="product_gallery">
                      <a>
                        <img src="images/urun14_2.jpg" alt="..." />
                      </a>
                      <a>
                        <img src="images/urun14_3.jpg" alt="..." />
                      </a>
                      <a>
                        <img src="images/urun14_4.jpg" alt="..." />
                      </a>
                    </div>
                  </div>

                  <div class="col-md-5 col-sm-5 " style="border:0px solid #e5e5e5;">

<!-- Parça Adı Başlangıç -->
  <h3 class="prod_title"> AMD RYZEN 7 5700G 3.8GHz 16MB Önbellek 8 Çekirdek AM4 7nm İşlemci </h3>
<!-- Parça Adı Bitiş -->
<br /><br />
                    
<!-- Parça Fiyatı Başlangıç -->              
  <div class="">
    <div class="product_price">
      <h1 class="price">4.829,96 ₺</h1>
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
          AMD RYZEN 7 5700G 3.8GHz 16MB Önbellek 8 Çekirdek AM4 7nm İşlemci
</br>
AMD Ryzen™ 5000 G-Serisi masaüstü işlemcilerin benzeri görülmemiş hızıyla, ister en yeni oyunları oynuyor, ister bir sonraki gökdeleni tasarlıyor, ister bilimsel veriler üretiyor olun, durdurulamaz olun. AMD Ryzen™ masaüstü işlemcilerle lider sizsiniz.
</br>
</br>
Dahili Grafikler
</br>
AMD Ryzen™ 5 5600G masaüstü işlemcisi, bir masaüstü işlemcide dünyanın en hızlı grafiklerini sunar. 6 çekirdek, 12 iş parçacığı, 4,4 GHz-e varan hız artışı, toplam 19 MB önbellek ve 1,9 GHz-e kadar 7 Grafik İşlem Birimi ile en iyi oyunları akıcı 1080p-de oynayın.
</br>
</br>
En Yeni Teknolojiler
</br>
Tüm Ryzen™ 5000 Serisi işlemciler, Precision Boost 2 ve Precision Boost Overdrive dahil olmak üzere bilgisayarınızın işlem gücünü artırmak için tasarlanmış eksiksiz Ryzen™ teknolojileri paketiyle birlikte gelir .
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
          <td>CPU Model</td>
          <td>Ryzen 7 5700G</td>
        </tr>
        <tr>
          <td>Frekans Hızı</td>
          <td>3.8 GHz</td>
        </tr>
        <tr>
          <td>Max Frekans Hızı</td>
          <td>4.6 GHz</td>
        </tr>
        <tr>
          <td>Çekirdek Sayısı</td>
          <td>8</td>
        </tr>
        <tr>
          <td>İş Parçacığı Sayısı</td>
          <td>16</td>
        </tr>
        <tr>
          <td>Uyumlu Soketler</td>
          <td>AM4</td>
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