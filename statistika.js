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
    var list = document.getElementById("koguest2").value;
    var tulemus;
    if(vastus=="Kogu Eesti"){
        tulemus = JSON.parse(list[0]);
    }
    if (vastus == "Piirkond"){
        tulemus = JSON.parse(list[2]);
    }
    if (vastus == "Partei"){
         tulemus = JSON.parse(list[2]);
    }
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
                name: 'Häälte osakaal',
                data: list
            }]
        });
    });
});}

