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
              <h6><a href="../mainPage.php">Anasayfa</a>  / PowerSupply</h6>
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
                      <img src="images/urun35_1.jpg" width="390px" height="390" alt="..." />
                    </div>

                  <!-- Ana Ürün Resmi Bitiş -->

                  <div class="product_gallery">
                      <a>
                        <img src="images/urun35_2.jpg" alt="..." />
                      </a>
                      <a>
                        <img src="images/urun35_3.jpg" alt="..." />
                      </a>
                      <a>
                        <img src="images/urun35_4.jpg" alt="..." />
                      </a>
                    </div>
                  </div>
                  <!-- Ana Ürün Resmi Bitiş -->
                  <div class="col-md-5 col-sm-5 " style="border:0px solid #e5e5e5;">

<!-- Parça Adı Başlangıç -->
  <h3 class="prod_title"> CORSAIR CX550F RGB 550W 80+ Bronze Siyah Full Modüler 120mm Fanlı PSU </h3>
<!-- Parça Adı Bitiş -->
<br /><br />
                    
<!-- Parça Fiyatı Başlangıç -->              
  <div class="">
    <div class="product_price">
      <h1 class="price">1.930,91 ₺</h1> 
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
          GLOW İLE GİDİN
</br>
          CX-F RGB güç kaynakları, kolay kablo yönetimi için sekiz ayrı adreslenebilir RGB LED ve tamamen modüler kablolarla bilgisayarınızın içini aydınlatır.
</br>
</br>
PARLAK AYDINLATMA, AKILLI KONTROLLÜ
</br>
          Her CX-F RGB PSU-da, yapınıza güzel vurgu aydınlatması sağlamak için ayrı ayrı adreslenebilir sekiz RGB LED-li parlak bir şekilde aydınlatılmış 120 mm RGB fan bulunur.
</br>
</br>
AYDINLATMANIN ÜÇ YOLU
</br>
          Arkadaki düğmeye basın, bir CORSAIR iCUE RGB Aydınlatma Denetleyicisine (ayrı satılır) bağlayın veya birlikte verilen adaptör kablosuyla anakartınızın yerleşik ARGB kontrolünü kullanın. Aydınlatmanızı istediğiniz gibi kontrol edin.
</br>
</br>
VERİMLİ, TAM MODÜLER GÜÇ
</br>
          CORSAIR CX-F RGB Serisi tamamen modüler güç kaynakları, sisteminize güvenilir 80 PLUS Bronze verimli güç sağlar ve daha temiz bir yapı için yalnızca ihtiyacınız olan kabloları kullanmanıza izin verir.
</br>
</br>
DÜŞÜK GÜRÜLTÜ İÇİN OPTİMİZE EDİLMİŞTİR
</br>
          CX-F, gürültü seviyelerini düşük tutmak için özel bir fan eğrisine sahip, ince ayarlanmış 120 mm RGB fana sahiptir.
</br>
</br>
TEKNOLOJİ VE GÜVENİLİRLİK
</br>
          Tutarlı, güvenilir güç ve üstün elektrik performansı için her bir CX-F RGB güç kaynağı, DC-DC dönüştürmeli sağlam bir LLC topolojisine ve 105 °C dereceli %100 Japon birincil kapasitörlerine sahiptir. Ve Microsoft Modern Bekleme Desteği, son derece hızlı uykudan uyanma süreleri ve daha iyi düşük yük verimliliği sağlar.
</br>
</br>
          Neredeyse tüm modern meraklı PC kasalarına kolay uyum sağlar.
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
          <td>Güç</td>
          <td>550W</td>
        </tr>
        <tr>
          <td>Modüler</td>
          <td>Full Modüler</td>
        </tr>
        <tr>
          <td>Fan Sayısı</td>
          <td>1</td>
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