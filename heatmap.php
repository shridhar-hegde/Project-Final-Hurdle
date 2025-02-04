<!doctype html>
<<?php
  $my_array = array(1, 1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 1, 2, 2, 2, 1, 2, 1, 4, 2, 1, 1);
 ?>

<html class="zc-html">

<head>
  <meta charset="utf-8">
  <title>ZingSoft Demo</title>
  <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');
    .chart--container {
      height: 100%;
      width: 100%;
      min-height: 530px;
    }

    .zc-ref {
      display: none;
    }
  </style>
</head>
​

<body class="zc-body">

  <div id="myChart" class="chart--container">
    <a href="https://www.zingchart.com/" rel="noopener" class="zc-ref">Powered by ZingChart</a>
  </div>

  <script>
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "b55b025e438fa8a98e32482b5f768ff5"]; // CHART CONFIG
    // -----------------------------
    let chartConfig = {
      globals: {
        fontFamily: 'Roboto'
      },
      graphset: [{
        type: 'piano',
        theme: 'classic',
        backgroundColor: '#fff',
        title: {
          text: 'Surf Height',
          adjustLayout: true,
          paddingBottom: '25px',
          backgroundColor: 'none',
          fontColor: '#05636c',
          fontSize: '24px'
        },
        subtitle: {
          text: 'Black\'s Beach - La Jolla',
          backgroundColor: 'none',
          fontColor: '#05636c',
          fontSize: '14px',
          height: '25px',
          x: '-9.5px',
          y: '38.5px'
        },
        legend: {
          align: 'center',
          borderWidth: '0px',
          footer: {
            backgroundColor: 'none',
            borderColor: 'none',
            fontColor: '#05636c',
            fontSize: '14px',
            textAlign: 'center'
          },
          item: {
            borderColor: 'none',
            fontColor: '#05636c',
            size: '13px'
          },
          layout: 'x6',
          marker: {
            type: 'square',
            borderColor: 'none',
            borderRadius: '8px',
            size: '13px'
          },
          shadow: false,
          toggleAction: 'none',
          verticalAlign: 'bottom',
          width: '80%'
        },
        plot: {
          tooltip: {
            text: ' The surf will be about %v feet.',
            fontColor: 'white',
            fontSize: '14px',
            textAlign: 'left'
          },
          aspect: 'none',
          borderColor: '#eeeeee',
          borderRadius: '7px',
          borderWidth: '2px',
          rules: [{
              backgroundColor: '#081D58',
              fontColor: '#05636c',
              rule: '%node-value > 6'
            },
            {
              backgroundColor: '#253494',
              fontColor: '#05636c',
              rule: '%node-value > 4 && %node-value <= 5'
            },
            {
              backgroundColor: '#225EA8',
              fontColor: '#05636c',
              rule: '%node-value > 3 && %node-value <= 4'
            },
            {
              backgroundColor: '#1D91C0',
              fontColor: '#05636c',
              rule: '%node-value > 2 && %node-value <= 3'
            },
            {
              backgroundColor: '#41B6C4',
              fontColor: '#05636c',
              rule: '%node-value > 1 && %node-value <= 2'
            },
            {
              backgroundColor: '#7FCDBB',
              fontColor: '#05636c',
              rule: '%node-value > 0 && %node-value <= 1'
            }
          ]
        },
        plotarea: {
          margin: 'dynamic'
        },
        scaleX: {
          values: ['2a', '3a', '4a', '5a', '6a', '7a', '8a', '9a', '10a', '11a', '12a', '1p', '2p', '3p', '4p', '5p', '6p', '7p', '8p', '9p', '10p', '11p'],
          guide: {
            visible: false
          },
          item: {
            borderColor: 'none',
            fontColor: '#05636c',
            size: '13px'
          },
          lineWidth: '0px',
          placement: 'opposite',
          tick: {
            visible: false
          },
          zooming: true,
          zoomSnap: true
        },
        scaleY: {
          values: ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'],
          guide: {
            visible: false
          },
          item: {
            borderColor: 'none',
            fontColor: '#05636c',
            size: '13px'
          },
          lineWidth: '0px',
          mirrored: true,
          tick: {
            visible: false
          },
          zooming: true
        },
        zoom: {
          alpha: 0.75,
          backgroundColor: '#e5e8ea',
          borderColor: '#009',
          borderWidth: '2px',
          preserveZoom: true
        },
        scrollX: {
          bar: {
            alpha: .5,
            backgroundColor: '#01579B',
            borderRadius: '3px'
          },
          handle: {
            backgroundColor: '#01579B',
            borderRadius: '5px',
            borderTop: 'none',
            borderRight: 'none',
            borderBottom: 'none',
            borderLeft: 'none'
          }
        },
        scrollY: {
          bar: {
            alpha: .5,
            backgroundColor: '#01579B',
            borderRadius: '3px'
          },
          handle: {
            backgroundColor: '#01579B',
            borderRadius: '5px',
            borderTop: 'none',
            borderRight: 'none',
            borderBottom: 'none',
            borderLeft: 'none'
          }
        },
        series: [{
            text: '2-3 Ft',
            values: <?php echo json_encode($my_array); ?>,
            legendMarker: {
              backgroundColor: '#7FCDBB'
            }
          },
          {
            text: '3-4 Ft',
            values: [2, 2, 2, 2, 2, 2, 3, 3, 3, 2, 2, 3, 3, 3, 3, 2, 2, 2, 2, 1, 2, 3],
            legendMarker: {
              backgroundColor: '#41B6C4'
            }
          },
          {
            text: '4-5 Ft',
            values: [2, 2, 2, 2, 3, 3, 3, 3, 3, 3, 4, 4, 4, 4, 4, 4, 4, 4, 3, 3, 3, 2],
            legendMarker: {
              backgroundColor: '#1D91C0'
            }
          },
          {
            text: '5-6 Ft',
            values: [2, 3, 3, 2, 3, 3, 3, 4, 5, 4, 4, 5, 4, 4, 5, 4, 4, 3, 3, 3, 3, 3],
            legendMarker: {
              backgroundColor: '#225EA8'
            }
          },
          {
            text: '6-7 Ft',
            values: [3, 2, 3, 2, 3, 3, 4, 4, 4, 5, 5, 5, 5, 4, 4, 5, 4, 3, 2, 3, 4, 4],
            legendMarker: {
              backgroundColor: '#253494'
            }
          },
          {
            text: '7-8 Ft',
            values: [2, 3, 5, 6, 5, 6, 5, 6, 5, 6, 6, 6, 6, 5, 6, 5, 6, 4, 5, 4, 4, 4],
            legendMarker: {
              backgroundColor: '#081D58'
            }
          },
          {
            text: '1-2 Ft',
            values: [3, 2, 3, 2, 3, 3, 4, 4, 4, 5, 5, 5, 5, 4, 4, 5, 4, 3, 2, 3, 4, 7],
            legendMarker: {
              backgroundColor: '#fff'
            },
            legendItem: {
              visible: false
            }
          }
        ]
      }]
    };

    // RENDER CHARTS
    // -----------------------------
    zingchart.render({
      id: 'myChart',
      data: chartConfig
    });
  </script>
</body>

</html>
