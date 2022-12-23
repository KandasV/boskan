<!--
	THIS EXAMPLE WAS DOWNLOADED FROM https://echarts.apache.org/examples/en/editor.html?c=gauge-ring&code=MYewdgzgLgBA5gQwK5wKYBEFQTAvDAbQCgYYBvE0mMBAW1QC4YByZgGktKgEsoAbRuU4wQAM1ERUUAMKowUVACcmBZgAYApOxYA2TcwC6wgL4cqMACZSE3PkwrmAbgj5JUAQTDdaWbuCZQim5m5iLikjJyCsqE6lpsLAC0AKz6BiGkxpSmlA5UNPRMrBkwPPyCeVTCpGISUrLySipx2sypWkbmOeZW2Lb21bURDdHN-gkt6dUwAEYgilaKAOrcFlAAFkwARGpbJaSgfPMMWwDu67yoW0Qm2SGV1HSCzADSCABeCGAA5-zCZQIBqEwnVIo0Yqpxkk9B0TCVejY7EJgc5XB4vD4eP4YKIXJJ9iDhlEmrEocxEgAONIEw7HZjnS5_YFzBZKFZrTbqZjTHldO65YQFZ6ABkBAPqAAig9BgAFkXNwAJ5SASKbhMqgAirTIb1YkQloTADMaThwgR_WRoVRbk83l82MCwS14R14LG8RYABZjXzMvdBU8igAFJQQcCoPgwABrVnoytVJQ1QNC2rBo1J7smJp61nND1IVvRtqxYACQVQBJTIxJkIzAEZvVQspkiAYANxEEAAB2LeAtkhVqAgKmEedK8s7z0QKFQavM0AQiignjggJgAE41AS5BZl6vEgAmADsm-mnZA3FdFuBEHWIFOTFxfEk026oU7ihAcEUg6HV9CN7vUtHWBGpHCUPgEE7B88XLaZSA_JAwAsaRIKA2CQJgYA-G4KCcRgglSEuWgAGUoHlVdR3MFlFnZDYmFrAiqGopRpBAI4YmYABiD0dB4njuQwptQlfcwEAAD24CAABkL01DDsLAVBSPIuSMJgU5VjomAvTgmAhK6AkIE7bCoBkxSk2vW97zwp90JAixJOwMBgEEE95LkOAtPrF8CXEySABVuGAABrCz_ys6DbJ86Y_OkhAZnDMK5wimz8V0hz52cwRUmi4ELCwBAmCnNBMGwAlEz_cxRHAKBiO4d5BFrD1ctCM0kUo9TNM2GBUkY9ZUG4OB1igeiPUY6r5DqhrRsY2kOOQKAQFnUJmMUVj2KKBalsY1aACUEAcpBf33NyQNW2juoY3TqsUTE02YMgC2MAThNuUgjGMdsIgASXBVEAApREQ4Ae3-gBKC1iowAqCDUAwADoC17es1HbUhKEoKHSoQAgDQRpH8A3NH4GQEqYY9fGXDcXsTuJ2h5WkdYFygeGIgAeW7PwwH-h5-24Qdh2BDr8uwIrSehsrdLPC80w60gAOsx9n0El9hE6PSwfbUwYBOtQ1E1oA
	⚠ Please be aware that this chart is not an official demo of Apache ECharts but is made by user-generated code.
-->
<!DOCTYPE html>
<html lang="en" style="height: 100%">
<head>
  <meta charset="utf-8">
</head>
<body style="height: 100%; margin: 0">
  <div id="container" style="height: 100%"></div>

  
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@5.4.1/dist/echarts.min.js"></script>
  <!-- Uncomment this line if you want to dataTool extension
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@5.4.1/dist/extension/dataTool.min.js"></script>
  -->
  <!-- Uncomment this line if you want to use gl extension
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts-gl@2/dist/echarts-gl.min.js"></script>
  -->
  <!-- Uncomment this line if you want to echarts-stat extension
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts-stat@latest/dist/ecStat.min.js"></script>
  -->
  <!-- Uncomment this line if you want to use map
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@4.9.0/map/js/china.js"></script>
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@4.9.0/map/js/world.js"></script>
  -->
  <!-- Uncomment these two lines if you want to use bmap extension
  <script type="text/javascript" src="https://api.map.baidu.com/api?v=3.0&ak=YOUR_API_KEY"></script>
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@5.4.1/dist/extension/bmap.min.js"></script>
  -->

  <script type="text/javascript">
    var dom = document.getElementById('container');
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
          width: 40
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
</body>
</html>