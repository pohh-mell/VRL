//function makeData(){
//    var valik = document.getElementById("statvalik");
//    var vastus = valik.options[valik.selectedIndex].value;
//    var sql;
//
//    if (vastus == "Kogu Eesti"){
//        
//    }
//    alert(document.getElementById("koguest"));
//}


function funktioon() {
//makeData();
    var valik = document.getElementById("statvalik");
    var vastus = valik.options[valik.selectedIndex].value;
    var list = JSON.parse(document.getElementById("kek").value);
    alert(list);
$(function () {
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({  
        
            chart: {    
               // plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'line',
                renderTo: 'container2'

            },
            title: {
                text: 'Statistika, 2015'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                        style: {
                            color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                        }
                    }
                }
            },
            series: [{
                type: 'pie',
                name: 'Browser share',
                data: list
            }]
        });
    });
});}

