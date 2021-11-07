<?php
  $year = date('Y');
?>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
  var options = {
    series: [{
    name: 'Receita',
    type: 'area',
    data: ['<?php ControllerIndexs\ControllerIndex::chart('Jan',"'$year-01-01' AND '$year-01-31'"); ?>','<?php ControllerIndexs\ControllerIndex::chart('Feb',"'$year-02-01' AND '$year-02-31'"); ?>','<?php ControllerIndexs\ControllerIndex::chart('Mar',"'$year-03-01' AND '$year-03-31'"); ?>','<?php ControllerIndexs\ControllerIndex::chart('Apr',"'$year-04-01' AND '$year-04-31'"); ?>','<?php ControllerIndexs\ControllerIndex::chart('May',"'$year-05-01' AND '$year-05-31'"); ?>','<?php ControllerIndexs\ControllerIndex::chart('Jun',"'$year-06-01' AND '$year-06-31'"); ?>','<?php ControllerIndexs\ControllerIndex::chart('Jul',"'$year-07-01' AND '$year-07-31'"); ?>','<?php ControllerIndexs\ControllerIndex::chart('Aug',"'$year-08-01' AND '$year-08-31'"); ?>','<?php ControllerIndexs\ControllerIndex::chart('Sep',"'$year-09-01' AND '$year-09-31'"); ?>','<?php ControllerIndexs\ControllerIndex::chart('Oct',"'$year-10-01' AND '$year-10-31'"); ?>','<?php ControllerIndexs\ControllerIndex::chart('Nov',"'$year-01-01' AND '$year-01-31'"); ?>','<?php ControllerIndexs\ControllerIndex::chart('Dec',"'$year-01-01' AND '$year-01-31'"); ?>']
  }],
    chart: {
      toolbar: {
        show: false,
      },
    height: 250,
    type: 'line',
    foreColor: '#fff',
    fontFamily: 'Poppins, sans-serif'
  },
  stroke: {
    curve: 'smooth',
    colors: ['#ffffff'],
    width: 2,
  },
  fill: {
    type:'solid',
  },
  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
  markers: {
    size: 5,
    colors: 'transparent',
    strokeColors: '#fff',
    strokeWidth: 2,
    strokeOpacity: 0.7,
  },
  grid: {
    show: true,
    borderColor: 'rgba(255, 255, 255, 0.171)',
    strokeDashArray: 0,
    position: 'back',
  },
  tooltip: {
    shared: true,
    intersect: false,
    y: {
      formatter: function (y) {
        if(typeof y !== "undefined") {
          return  y.toFixed(0) + " points";
        }
        return y;
      }
    }
  }


  };

  var chart = new ApexCharts(document.querySelector("#chart"), options);
  chart.render();
      


  ////////////////////////////////////////////////////////////////////

  var options = {
  chart: {
      height: 350,
      type: 'radialBar',
  },
  series: [70],
  labels: ['Progress'],
}

  var chart = new ApexCharts(document.querySelector("#chart-radialbar"), options);

  chart.render();


  ////////////////////////////////////////////////////////////////////
      
  var options = {
          series: [{
          name: 'Views',
          data: [<?php $views = ControllerIndexs\ControllerIndex::getViews('Jan',"'$year-01-01' AND '$year-01-31'"); ?> ,<?php $views = ControllerIndexs\ControllerIndex::getViews('Feb',"'$year-02-01' AND '$year-02-31'"); ?>,<?php $views = ControllerIndexs\ControllerIndex::getViews('Mar',"'$year-03-01' AND '$year-03-31'"); ?>,<?php $views = ControllerIndexs\ControllerIndex::getViews('Apr',"'$year-04-01' AND '$year-04-31'"); ?>,<?php $views = ControllerIndexs\ControllerIndex::getViews('May',"'$year-05-01' AND '$year-05-31'"); ?>,<?php $views = ControllerIndexs\ControllerIndex::getViews('Jun',"'$year-06-01' AND '$year-06-31'"); ?>,<?php $views = ControllerIndexs\ControllerIndex::getViews('Jul',"'$year-07-01' AND '$year-07-31'"); ?>,<?php $views = ControllerIndexs\ControllerIndex::getViews('Aug',"'$year-08-01' AND '$year-08-31'"); ?>,<?php $views = ControllerIndexs\ControllerIndex::getViews('Sep',"'$year-09-01' AND '$year-09-31'"); ?>,<?php $views = ControllerIndexs\ControllerIndex::getViews('Oct',"'$year-10-01' AND '$year-10-31'"); ?>,<?php $views = ControllerIndexs\ControllerIndex::getViews('Nov',"'$year-11-01' AND '$year-11-31'"); ?>,<?php $views = ControllerIndexs\ControllerIndex::getViews('Dec',"'$year-12-01' AND '$year-12-31'"); ?>]
        }],
          chart: {
          height: 250,
          type: 'bar',
          tolbar: {
            show:false,
          }
        },
        grid: {
          show: false,
      },
        plotOptions: {
          bar: {
            borderRadius: 0,
            dataLabels: {
              position: 'top', // top, center, bottom
            },
          }
        },
        dataLabels: {
          enabled: false,
          formatter: function (val) {
            return val + "%";
          },
          offsetY: -20,
          style: {
            fontSize: '12px',
            colors: ["#333"]
          }
        },
        
        xaxis: {
          categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          position: 'top',
          labels: {
          show: false,
          },
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false
          },
          crosshairs: {
            fill: {
              type: 'gradient',
              gradient: {
                colorFrom: '#000',
                colorTo: '#000',
                stops: [0, 100],
                opacityFrom: 0.4,
                opacityTo: 0.5,
              }
            }
          },
          tooltip: {
            enabled: true,
          }
        },
        yaxis: {
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false,
          },
          labels: {
            show: false,
            formatter: function (val) {
              return val + "%";
            }
          }
        
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart-bar"), options);
        chart.render();
      
      
    
    

</script>