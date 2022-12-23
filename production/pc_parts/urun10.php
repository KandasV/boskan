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
                      <img src="images/urun10_1.jpg" width="390px" height="390" alt="..." />
                    </div>
                  <!-- Ana Ürün Resmi Bitiş -->

                    <div class="product_gallery">
                      <a>
                        <img src="images/urun10_2.jpg" alt="..." />
                      </a>
                      <a>
                        <img src="images/urun10_3.jpg" alt="..." />
                      </a>
                      <a>
                        <img src="images/urun10_4.jpg" alt="..." />
                      </a>
                    </div>
                  </div>

                  <div class="col-md-5 col-sm-5 " style="border:0px solid #e5e5e5;">

<!-- Parça Adı Başlangıç -->
  <h3 class="prod_title"> AMD RYZEN 5 5600X 3.7GHz 32MB Önbellek 6 Çekirdek AM4 7nm İşlemci </h3>
<!-- Parça Adı Bitiş -->
<br /><br />
                    
<!-- Parça Fiyatı Başlangıç -->              
  <div class="">
    <div class="product_price">
      <h1 class="price">3.933,68 ₺</h1>
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
          Oyundaki En Hızlı Birim
</br>
AMD Ryzen™ 5000 Serisi işlemciler, türünün tek örneği sürükleyici deneyimler sunarak yeni nesil zorlu oyunlara güç verir ve 3D ve video işleme3 ve yazılım derleme gibi her türlü çok kanallı göreve hükmeder. Oyun performansınızı güçlendirmek için bir masaüstü işlemcide veya bir grafik kartıyla birlikte bulunabilecek en hızlı grafik performansına sahiptir.
</br>
</br>
En Son Teknoloji
</br>
Büyük işlem gücü ile desteklemek için en son teknolojiler geliyor. Tüm AMD Ryzen™ 5000 Serisi işlemciler, belirli işlemcilerde Precision Boost 25, Precision Boost Overdrive6, PCIe® 4.0 ve Yeniden Boyutlandırılabilir BAR dahil olmak üzere bilgisayarınızın işlem gücünü artırmak için tasarlanmış eksiksiz bir teknoloji paketiyle birlikte gelir.
</br>
</br>
Sisteminizi Güvenle Kurun
</br>
AMD Ryzen™ işlemcilerin yapılandırılması ve özelleştirilmesi kolaydır. Bu işlemciler yalnızca basit bir BIOS güncellemesi ile AMD 500 ve belirli 400* serisi anakartlarda kullanıma hazır olmakla kalmaz, Ryzen™ Master ve AMD StoreMI ile işlemcinizi kolayca ince ayar yapabilir ve ayarlayabilirsiniz.
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
          <td>Ryzen 5 5900X</td>
        </tr>
        <tr>
          <td>Frekans Hızıı</td>
          <td>3.7 GHz</td>
        </tr>
        <tr>
          <td>Max Frekans Hızı</td>
          <td>4.6 GHz</td>
        </tr>
        <tr>
          <td>Çekirdek Sayısı</td>
          <td>6</td>
        </tr>
        <tr>
          <td>İş Parçacığı Sayısı</td>
          <td>12</td>
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