$(".counter").counterUp({
        delay: 100,
        time: 1200
    });

 $('.vcarousel').carousel({
            interval: 3000
         })
 $(document).ready(function() {
    
   var sparklineLogin = function() { 
        $('#sparklinedash').sparkline([ 0, 5, 6, 10, 9, 12, 4, 9, 12, 10, 9], {
            type: 'bar',
            height: '30',
            barWidth: '4',
            resize: true,
            barSpacing: '10',
            barColor: '#becfa6'
        });
         $('#sparklinedash2').sparkline([ 0, 5, 6, 10, 9, 12, 4, 9, 12, 10, 9], {
            type: 'bar',
            height: '30',
            barWidth: '4',
            resize: true,
            barSpacing: '10',
            barColor: '#b5a8b9'
        });
          $('#sparklinedash3').sparkline([ 0, 5, 6, 10, 9, 12, 4, 9, 12, 10, 9], {
            type: 'bar',
            height: '30',
            barWidth: '4',
            resize: true,
            barSpacing: '10',
            barColor: '#85b4d0'
        });
           $('#sparklinedash4').sparkline([ 0, 5, 6, 10, 9, 12, 4, 9, 12, 10, 9], {
            type: 'bar',
            height: '30',
            barWidth: '4',
            resize: true,
            barSpacing: '10',
            barColor: '#cbb2ae'
        });
        
   }
    var sparkResize;
 
        $(window).resize(function(e) {
            clearTimeout(sparkResize);
            sparkResize = setTimeout(sparklineLogin, 500);
        });
        sparklineLogin();

});
  Morris.Area({
        element: 'morris-area-chart',
        data: [{
                    period: '2010',
                    iphone: 0,
                    ipad: 0,
                    itouch: 0
                }, {
                    period: '2011',
                    iphone: 50,
                    ipad: 15,
                    itouch: 5
                }, {
                    period: '2012',
                    iphone: 20,
                    ipad: 50,
                    itouch: 65
                }, {
                    period: '2013',
                    iphone: 60,
                    ipad: 12,
                    itouch: 7
                }, {
                    period: '2014',
                    iphone: 30,
                    ipad: 20,
                    itouch: 120
                }, {
                    period: '2015',
                    iphone: 25,
                    ipad: 80,
                    itouch: 40
                }, {
                    period: '2016',
                    iphone: 10,
                    ipad: 10,
                    itouch: 10
                }


                ],
                lineColors: ['#fb9678', '#01c0c8', '#8698b7'],
                xkey: 'period',
                ykeys: ['iphone', 'ipad', 'itouch'],
                labels: ['Site A', 'Site B', 'Site C'],
                pointSize: 0,
                lineWidth: 0,
                resize:true,
                fillOpacity: 0.8,
                behaveLikeLine: true,
                gridLineColor: '#e0e0e0',
                hideHover: 'auto'
        
    });
Morris.Area({
        element: 'morris-area-chart2',
        data: [{
            period: '2010',
            SiteA: 0,
            SiteB: 0,
            
        }, {
            period: '2011',
            SiteA: 130,
            SiteB: 100,
            
        }, {
            period: '2012',
            SiteA: 80,
            SiteB: 60,
            
        }, {
            period: '2013',
            SiteA: 70,
            SiteB: 200,
            
        }, {
            period: '2014',
            SiteA: 180,
            SiteB: 150,
            
        }, {
            period: '2015',
            SiteA: 105,
            SiteB: 90,
            
        },
         {
            period: '2016',
            SiteA: 250,
            SiteB: 150,
           
        }],
        xkey: 'period',
        ykeys: ['SiteA', 'SiteB'],
        labels: ['Site A', 'Site B'],
        pointSize: 0,
        fillOpacity: 0.7,
        pointStrokeColors:['#ccc', '#cbb2ae'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        lineWidth: 0,
        smooth: false,
        hideHover: 'auto',
        lineColors: ['#ccc', '#cbb2ae'],
        resize: true
        
    });
$(document).ready(function() {
    
   var sparklineLogin = function() { 
        $('#sales1').sparkline([20, 40, 30], {
            type: 'pie',
            height: '100',
            resize: true,
            sliceColors: ['#aec9cb', '#cbb2ae', '#f1f2f7']
        });
        $('#sales2').sparkline([6, 10, 9, 11, 9, 10, 12], {
            type: 'bar',
            height: '154',
            barWidth: '4',
            resize: true,
            barSpacing: '10',
            barColor: '#85b4d0'
        });
        
   }
    var sparkResize;
 
        $(window).resize(function(e) {
            clearTimeout(sparkResize);
            sparkResize = setTimeout(sparklineLogin, 500);
        });
        sparklineLogin();

});