<!--
	THIS EXAMPLE WAS DOWNLOADED FROM https://echarts.apache.org/examples/en/editor.html?c=pie-borderRadius&code=PYBwLglsB2AEC8sDeAoWszGAG0iAXMmuhgE4QDmFApqYQOQRjUC29xAvgDTHbU3QAJoVQkMoBgFYApPR5i-AMzAMAxtWjNS7dN2IBnWhGr7CAbWLpRY2NACGLagwCCq9fv2wAYqWBt5NmAAniBOsPQgxnKWJKR2ghAArqawZvQALAAMslzhAOzZ9AC6AWJ2AG7AEIIAMnYARtTYAPLltNh2BLCKdtiGpSRMrADKwXwiMWL1wKSCtABK8UkpAIyZA1Mzc6QAwjgzDADEiifRNiTTs7QA6tVgABaEAEyTsHrnHY3YE-fo-vfAADuhB6fWoGxIIGA-iYUGgag0Wh0NneNlYIHudhhKWsHwaTR-vz-AOB3V6_VeYkUMDAwwgAC8wlkIVSaddqJR7ipwtNsIJkecOK9UQp8dgahBoGFcTZ_kCQeTqMKIYI7GA7OZKchYOVeokwmt0gAOXL2RwMYbUOykVT3WAAUWgFEl1HobxZ2t12H1hDyAGZJKaHGF6AARCCkaiqMBukU2JA6vVhSRG9a2YMMe0sOwQbCxj0Jr0-2DG9JB83hACq0DhsGcgn0-a1haThD9mTTZpDADVqtRgHWG7HXkUYkL0KOOABuIA
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
</body>
</html>