<?php
// Admin Depocu ve Personelin Panellerine Erişebilecek
require "page_layouts/settings.php"; // require, include gibi belirtilen dosyayı kodun yazıldığı dosya içerisine eklemek için kullanılır. Ama include gibi uyarı vermek yerine hata verir ve kodun çalışmasını durdurur. require fonksiyonunun da kullanımı include fonksiyonu ile aynıdır.
require "page_layouts/sidebar.php";
require "page_layouts/navbar.php";
require "page_layouts/footer.php";
include_once 'connection.php'; // Bu fonksiyon include fonksiyonu ile aynı şekilde çalışarak dışarıdan dosya dahil etme olanağı sağlar. Tek farkı bir dosya içerisinde aynı dosyanın birden fazla çağrılmasını engeller.

session_start();
ob_start();

$activePersonelINFO = $_SESSION["adSoyad"];
$activePersonelID = $_SESSION["personel_ID"];
$yetkiSeviyesi = $_SESSION["yetkiSeviyesi"];

if ($yetkiSeviyesi != 1):
  echo ("<script> alert('Karşm Sen Admin Değilsin He Çok Dolanma Buralarda');</script>"); 
  header('Location: login.php');
endif;

ob_end_flush();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

      <title><?php echo $siteBasligi; ?></title>
      <link rel="icon" href="<?php echo $favicon; ?>" type="image/ico" />
      <!-- Bootstrap / Custom Theme Style Basla-->
      <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
      <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
      <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
      <link href="../build/css/custom.min.css" rel="stylesheet">
      <!-- Bootstrap / Custom Theme Style Bitis -->
  </head>
  <?php
  profilePicStyle();
?>

<body class="nav-md">

<!-- SideBar Başlangıç -->
<?php
    sideBar($activePersonelINFO,$yetkiSeviyesi);
  ?>
<!-- SideBar Başlangıç -->

<!-- Top NavBar Başlangıç -->
  <?php
    adminNavbar($activePersonelINFO);
  ?>
<!-- Top NavBar Bitiş -->

        <!-- page content -->
        <div class="right_col" role="main" style="max-height: 2000px; min-height: 2000px;">
        <div class="row">
          
          <div class="col-md-3 col-md-3  tile_stats_count">
    <div class="x_panel">
            <span class="count_top"><i class="fa fa-user"></i> <b>Toplam Kullanıcı Sayısı </b></span>
            <div class="count">2500</div>
            <span class="count_bottom"><i class="green">4% </i> From last Week</span>
          </div>
          </div><div class="col-md-3 col-md-3  tile_stats_count">
    <div class="x_panel">
            <span class="count_top"><i class="fa fa-user"></i> <b>Şirketlerin Ortalama Sermayesi</b></span>
            <div class="count">2500</div>
            <span class="count_bottom"><i class="green">4% </i> From last Week</span>
          </div>
          </div><div class="col-md-3 col-md-3  tile_stats_count">
    <div class="x_panel">
            <span class="count_top"><i class="fa fa-user"></i> <b>Piyasa Değeri Ortalaması </b></span>
            <div class="count">2500</div>
            <span class="count_bottom"><i class="green">4% </i> From last Week</span>
          </div>
          </div><div class="col-md-3 col-md-3  tile_stats_count">
    <div class="x_panel">
            <span class="count_top"><i class="fa fa-user"></i> <b>Tarih</b></span>
            <div class="count">2500</div>
            <span class="count_bottom"><i class="green">4% </i> From last Week</span>
          </div>
          </div>




        
      </div>
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Satış Grafiği <small>| &nbsp3 Aylık</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-9 col-sm-12 ">
                      <div class="demo-container">
                      <div id="multi_barchart" style="height: 500px"></div>
                      </div>
                      <div class="tiles">
                        <div class="col-md-4 tile">
                          <br>
                          <span>Aylık Yapılan Satış</span>
                          <h2>231,809</h2>
                          <span class="sparkline11 graph" style="height: 160px;">
                               <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                          </span>
                        </div>
                        <div class="col-md-4 tile">
                        <br>
                          <span>Aylık Toplam Kazanç</span>
                          <h2>$231,809</h2>
                          <span class="sparkline22 graph" style="height: 160px;">
                                <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                          </span>
                        </div>
                        <div class="col-md-4 tile">
                        <br>
                          <span>Total Sessions</span>
                          <h2>231,809</h2>
                          <span class="sparkline11 graph" style="height: 160px;">
                                 <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                          </span>
                        </div>
                      </div>

                    </div>

                    <div class="col-md-3 col-sm-12 ">
                      <div>
                        <div class="x_title">
                          <h2>Son Girişler</h2>

                          <div class="clearfix"></div>
                        </div>
                        <ul class="list-unstyled top_profiles scroll-view">
                        <!-- Listeleme Başlangıc -->

                        <li class="media event">
                            <a class="pull-left border-aero profile_thumb">
                              <i class="fa fa-user aero"></i>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#">Ozan Kandaş</a>
                              <p><strong>XX.XX.XXXX Tarih XX:XX </strong> Saatinde Giriş Yaptı </p>
                            </div>
                          </li>
                          <li class="media event">
                            <a class="pull-left border-aero profile_thumb">
                              <i class="fa fa-user blue"></i>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#">Egemen Tepe</a>
                              <p><strong>XX.XX.XXXX Tarih XX:XX </strong> Saatinde Çıkış Yaptı </p>
                            </div>
                          </li>
                          <li class="media event">
                            <a class="pull-left border-green profile_thumb">
                              <i class="fa fa-user green"></i>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#">Derya Çelik</a>
                              <p><strong>XX.XX.XXXX Tarih XX:XX </strong> Saatinde Giriş Yaptı </p>
                            </div>
                          </li>
                          <li class="media event">
                            <a class="pull-left border-blue profile_thumb">
                              <i class="fa fa-user blue"></i>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#">Egemen Tepe</a>
                              <p><strong>XX.XX.XXXX Tarih XX:XX </strong> Saatinde Giriş Yaptı </p>
                            </div>
                          </li>
                          <li class="media event">
                            <a class="pull-left border-aero profile_thumb">
                              <i class="fa fa-user aero"></i>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#">Ozan Kandaş</a>
                              <p><strong>XX.XX.XXXX Tarih XX:XX </strong> Saatinde Çıkış Yaptı </p>
                            </div>
                          </li>
                          <li class="media event">
                            <a class="pull-left border-green profile_thumb">
                              <i class="fa fa-user green"></i>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#">Derya Çelik</a>
                              <p><strong>XX.XX.XXXX Tarih XX:XX </strong> Saatinde Çıkış Yaptı </p>
                            </div>
                          </li>
                          <li class="media event">
                            <a class="pull-left border-green profile_thumb">
                              <i class="fa fa-user green"></i>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#">Derya Çelik</a>
                              <p><strong>XX.XX.XXXX Tarih XX:XX </strong> Saatinde Giriş Yaptı </p>
                            </div>
                          </li>
                          <li class="media event">
                            <a class="pull-left border-green profile_thumb">
                              <i class="fa fa-user blue"></i>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#">Emir Çoban</a>
                              <p><strong>XX.XX.XXXX Tarih XX:XX </strong> Saatinde Çıkış Yaptı </p>
                            </div>
                          </li>
                          <li class="media event">
                            <a class="pull-left border-green profile_thumb">
                              <i class="fa fa-user blue"></i>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#">Emir Çoban</a>
                              <p><strong>XX.XX.XXXX Tarih XX:XX </strong> Saatinde Giriş Yaptı </p>
                            </div>
                          </li>
                        </ul>
                        
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              
              <div class="col-md-4 col-sm-6  widget_tally_box">
                <div class="x_panel">
                
                <h6><center>Kazanç / Maliyet Durumu</center></h6>
                <hr>
                <div class="clearfix"></div>
                <div id="gauge_ring" style="height:400px"></div>
                  
                </div> 
                
              </div>

              <!-- start of weather widget -->
              <div class="col-md-4 col-sm-6 ">
                
                <div class="x_panel">
                                    
                <div class="clearfix"></div>
                <h6><center>Haftalık Müşteri Grafiği</center></h6>
                <hr>

                <div id="linesmooth" style="height:400px"></div>
                  
                </div> 
              </div>
              <!-- end of weather widget -->

              <div class="col-md-4 col-sm-6 ">
                <div class="x_panel">
                                    
                <div class="clearfix"></div>
                <h6><center>Parça Popülerlik Grafiği</center></h6>
                <hr>
                  <div id="piechart" style="height: 400px"></div>

                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php
        footer();
        ?>
        
        <!-- /footer content -->
      </div>
    </div>

<!-- Custom Scripts Baslangic -->

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="../vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- morris.js -->
    <script src="../vendors/raphael/raphael.min.js"></script>
    <script src="../vendors/morris.js/morris.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="../build/js/custom.min.js"></script>

<!-- Custom Scripts Bitis -->


<!-- Custom Charts Scripts -->

<!-- PieChart  -->
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@5.4.1/dist/echarts.min.js"></script>

  <script type="text/javascript">
  var dom = document.getElementById('piechart');
  var myChart = echarts.init(dom, null, {
    renderer: 'canvas',
    useDirtyRect: false
  });
  var app = {};
  
  var option;
    option = {
    tooltip: {
    trigger: 'item'
  },
  legend: {
    top: '5%',
    left: 'center'
  },
  series: [
    {
    name: 'Access From',
    type: 'pie',
    radius: ['40%', '70%'],
    avoidLabelOverlap: false,
    itemStyle: {
      borderRadius: 10,
      borderColor: '#fff',
      borderWidth: 2
    },
    label: {
      show: false,
      position: 'center'
    },
    emphasis: {
      label: {
        show: false,
        fontSize: 40,
        fontWeight: 'bold'
      }
    },
    labelLine: {
      show: false
    },
    data: [
      { value: 1048, name: 'Search Engine' },
      { value: 735, name: 'Direct' },
      { value: 580, name: 'Email' },
      { value: 484, name: 'Union Ads' },
      { value: 300, name: 'Video Ads' }
    ]
    }
    ]
    };

    if (option && typeof option === 'object') {
      myChart.setOption(option);
    }

  window.addEventListener('resize', myChart.resize);
  </script>

  <!-- PieChart Bitis -->

<script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@5.4.1/dist/echarts.min.js"></script>

<script type="text/javascript">
    var dom = document.getElementById('multi_barchart');
    var myChart = echarts.init(dom, null, {
      renderer: 'canvas',
      useDirtyRect: false
    });
    var app = {};
    
    var option;

    const posList = [

];
app.configParameters = {
  rotate: {
    min: -90,
    max: 90
  },
  align: {
    options: {
      left: 'left',
      center: 'center',
      right: 'right'
    }
  },
  verticalAlign: {
    options: {
      top: 'top',
      middle: 'middle',
      bottom: 'bottom'
    }
  },
  position: {
    options: posList.reduce(function (map, pos) {
      map[pos] = pos;
      return map;
    }, {})
  },
  distance: {
    min: 0,
    max: 100
  }
};
app.config = {
  rotate: 90,
  align: 'left',
  verticalAlign: 'middle',
  position: 'insideBottom',
  distance: 15,
  onChange: function () {
    const labelOption = {
      rotate: app.config.rotate,
      align: app.config.align,
      verticalAlign: app.config.verticalAlign,
      position: app.config.position,
      distance: app.config.distance
    };
    myChart.setOption({
      series: [
        {
          label: labelOption
        },
        {
          label: labelOption
        },
        {
          label: labelOption
        },
        {
          label: labelOption
        }
      ]
    });
  }
};
const labelOption = {
  show: true,
  position: app.config.position,
  distance: app.config.distance,
  align: app.config.align,
  verticalAlign: app.config.verticalAlign,
  rotate: app.config.rotate,
  formatter: '{c}  {name|{a}}',
  fontSize: 12,
  rich: {
    name: {}
  }
};
option = {
  tooltip: {
    trigger: 'axis',
    axisPointer: {
      type: 'shadow'
    }
  },
  legend: {
    data: ['Forest', 'Steppe', 'Desert', 'Wetland']
  },
  xAxis: [
    {
      type: 'category',
      axisTick: { show: false },
      data: ['Ekim', 'Kasım','Aralık']
    }
  ],
  yAxis: [
    {
      type: 'value'
    }
  ],
  series: [
    {
      name: 'İşlemci',
      type: 'bar',
      barGap: 0,
      label: labelOption,
      emphasis: {
        focus: 'series'
      },
      data: [320, 1200, 301, 334, 900]
    },
    {
      name: 'Anakart',
      type: 'bar',
      label: labelOption,
      emphasis: {
        focus: 'series'
      },
      data: [220, 182, 191, 234, 290]
    },
    {
      name: 'Ekran Kartı',
      type: 'bar',
      label: labelOption,
      emphasis: {
        focus: 'series'
      },
      data: [150, 232, 201, 154, 190]
    },
    {
      name: 'Bellek',
      type: 'bar',
      label: labelOption,
      emphasis: {
        focus: 'series'
      },
      data: [150, 232, 201, 154, 500]
    },
    {
      name: 'Depolama',
      type: 'bar',
      label: labelOption,
      emphasis: {
        focus: 'series'
      },
      data: [98, 77, 101, 99, 40]
    },
    {
      name: 'Soğutma',
      type: 'bar',
      label: labelOption,
      emphasis: {
        focus: 'series'
      },
      data: [150, 232, 201, 154, 190]
    },
    {
      name: 'Güç Kaynağı',
      type: 'bar',
      label: labelOption,
      emphasis: {
        focus: 'series'
      },
      data: [150, 232, 201, 154, 190]
    }
  ]
};

    if (option && typeof option === 'object') {
      myChart.setOption(option);
    }

    window.addEventListener('resize', myChart.resize);
  </script>

<script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@5.4.1/dist/echarts.min.js"></script>
<script type="text/javascript">
    var dom = document.getElementById('gauge_ring');
    var myChart = echarts.init(dom, null, {
      renderer: 'canvas',
      useDirtyRect: false
    });
    var app = {};
    
    var option;

    const gaugeData = [
  {
    name: '',
    title: {
    offsetCenter: ['0%', '60%']
    },
    detail: {
    valueAnimation: true,
      offsetCenter: ['0%', '-50%'],
    }
  },
  {
    name: '',
    title: {
     
      offsetCenter: ['0%', '50%']
    },
    detail: {
     offsetCenter: ['0%', '0%'],
      borderWidth: "0",
      color:"white"

    }
  },
  {
    name: 'Kazanç',
    title: {
      offsetCenter: ['0%', '-60%']
    },
    detail: {
      valueAnimation: false,
      offsetCenter: ['0%', '-80%'],
      color:'white',
      borderWidth:'0'
      
      
    }
  },
  {
    name: 'İşletme Maliyetleri',
    title: {
      offsetCenter: ['0%', '30%']
    },
    detail: {
      valueAnimation: true,
      offsetCenter: ['0%', '40%']
    }
  },
  {
    name: 'Personel Ödemeleri',
    title: {
      offsetCenter: ['0%', '0%']
    },
    detail: {
      valueAnimation: true,
      offsetCenter: ['0%', '10%']
    }
  }
];
option = {
  series: [
    {
      type: 'gauge',
      startAngle: 90,
      endAngle: -270,
      pointer: {
        show: false
      },
      progress: {
        show: true,
        overlap: false,
        roundCap: true,
        clip: false,
        itemStyle: {
          borderWidth: 1,
          borderColor: '#464646'
        }
      },
      axisLine: {
        lineStyle: {
          width: 30
        }
      },
      max:'500',
      splitLine: {
        show: false,
        distance: 0,
        length: 10
      },
      axisTick: {
        show: false
      },
      axisLabel: {
        show: false,
        distance: 50
      },
      data: gaugeData,
      title: {
        fontSize: 14
      },
      detail: {
        width: 50,
        height: 14,
        fontSize: 14,
        color: 'auto',
        borderColor: 'auto',
        borderRadius: 20,
        borderWidth: 1,
        formatter: '{value}'
      }
    }
  ]
};
setInterval(function () {
  gaugeData[0].value = 100;
  
  
  gaugeData[3].value = 90;
  gaugeData[4].value = 20;
  myChart.setOption({
    series: [
      {
        data: gaugeData,
        pointer: {
          show: false
        }
      }
    ]
  });
}, 2000);

    if (option && typeof option === 'object') {
      myChart.setOption(option);
    }

    window.addEventListener('resize', myChart.resize);
  </script>

<script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@5.4.1/dist/echarts.min.js"></script>
<script type="text/javascript">
    var dom = document.getElementById('linesmooth');
    var myChart = echarts.init(dom, null, {
      renderer: 'canvas',
      useDirtyRect: false
    });
    var app = {};
    
    var option;

    option = {
  xAxis: {
    type: 'category',
    data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
  },
  yAxis: {
    type: 'value'
  },
  series: [
    {
      data: [150, 230, 224, 218, 135, 147, 260],
      type: 'line'
    }
  ]
};

    if (option && typeof option === 'object') {
      myChart.setOption(option);
    }

    window.addEventListener('resize', myChart.resize);
  </script>
  </body>
</html>