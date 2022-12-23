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
              <h6><a href="../mainPage.php">Anasayfa</a>  / Ekran Kartı</h6>
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
                      <img src="images/urun2_2.jpg" width="390px" height="390" alt="..." />
                    </div>
                  <!-- Ana Ürün Resmi Bitiş -->

                    <div class="product_gallery">
                      <a>
                        <img src="images/urun2_1.jpg" alt="..." />
                      </a>
                      <a>
                        <img src="images/urun2_4.jpg" alt="..." />
                      </a>
                      <a>
                        <img src="images/urun2_3.jpg" alt="..." />
                      </a>
                    </div>
                  </div>

                  <div class="col-md-5 col-sm-5 " style="border:0px solid #e5e5e5;">

<!-- Parça Adı Başlangıç -->
  <h3 class="prod_title"> NVIDIA GeForce RTX 3060 DUAL V2 OC 12GB GDDR6 192 Bit </h3>
<!-- Parça Adı Bitiş -->
<br /><br />
                    
<!-- Parça Fiyatı Başlangıç -->              
  <div class="">
    <div class="product_price">
      <h1 class="price">10.649,00 ₺</h1>
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
          2 Kat Fan. 2 Kat Eğlence.
</br>
</br>
          En yeni NVIDIA® Ampere mimarisine sahip ASUS Dual GeForce RTX™ 3060, dinamik termal performansı geniş uyumluluk ile bir araya getiriyor. Soğutucuya hava akışını en üst düzeye çıkarmak için iki adet Eksen teknolojili fan dahil olmak üzere amiral gemisi grafik kartlarından gelişmiş soğutma çözümleri, daha az alanda daha fazla güç sağlayan 20cm uzunluğundaki 2 slot kaplayan bu karta yerleştirildi. Bu geliştirmeler, ASUS Dual-i kompakt bir yapıda yüksek grafik performansı isteyen oyuncular için mükemmel bir seçim haline getiriyor.
</br>
Daha İyi, Daha Hızlı, Daha Güçlü
</br>
İki adet Eksen Teknolojili Fan, daha uzun kanatlara sahip olmak için daha küçük yuvalar kullanıyor ve aşağı yönlü hava basıncını artırmak için bir bariyer halkasından yararlanıyor.
</br>
</br>
Sessiz zeka
</br>
Gereksiz gürültüyü ortadan kaldırmak için, GPU sıcaklığı 50 derecenin altına düştüğünde ve güç tüketimi düşük olduğunda bir durdurma modu tüm fanları durdurur.
</br>
</br>
Isıyı Dağıtın
</br>
Yeniden tasarlanan bir kapak, soğutma bloğu ve ısı borusu düzeni, iki adet Eksen teknolojili fanların kasanın yan panelinden yararlanmasına olanak tanır ve hava akışı alanı sağlar.
</br>
</br>
Hassas Otomatik Üretim
</br>
Auto-Extreme Teknolojisi, endüstride yeni standartlar belirleyen ve tüm lehim işlemlerinin tek seferde yapılmasını sağlayan bir otomatik üretim sürecidir. Bu süreç, bileşenler üzerindeki termal zorlanmayı azaltıyor ve güçlü temizlik kimyasallarının kullanılmasını önlüyor. Sonuçta doğaya daha az etki eden, üretimde güç tüketimini azaltan, daha güvenilir bir ürün ortaya çıkıyor.
</br>
</br>
Koruyucu Arka Plaka
</br>
PCB, yapısal sağlamlık katan bir alüminyum arka plakayla güçlendirildi. Bu plaka; PCB-nin bükülmesini önlüyor, bileşenleri ve iletken hatları hasara karşı koruyor.
</br>
</br>
Paslanmaz Çelik Braket
</br>
Dual-in montaj braketi, daha sert ve korozyona karşı daha dayanıklı olan 304 Paslanmaz Çelik ile güçlendirilmiştir.
</br>
</br>
DLSS YAPAY ZEKA (AI) HIZLANDIRMA
</br>
NVIDIA DLSS, GeForce RTX’teki yapay zeka odaklı Tensor çekirdeklerini kullanarak kare hızlarını ve görüntü kalitesini artıran çığır açıcı bir yapay zeka görüntü işleme teknolojisi. Bu teknoloji sayesinde ayarları ve çözünürlüğü en üst düzeye çekip inanılmaz bir görsel deneyim yaşayabileceksiniz. Yapay zeka devrimi bu teknolojiyle oyun dünyasına geldi.
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
          <td>GPU Model</td>
          <td>GeForce RTX 3060</td>
        </tr>
        <tr>
          <td>Bellek Tipi</td>
          <td>GDDR6</td>
        </tr>
        <tr>
          <td>Max Çekirdek Hızı</td>
          <td>1867 MHz</td>
        </tr>
        <tr>
          <td>Bellek Kapasitesi</td>
          <td>12 GB </td>
        </tr>
        <tr>
          <td>Bellek Hızı</td>
          <td>15000 MHz</td>
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