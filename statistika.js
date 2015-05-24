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
    var list;
    if(vastus=="Kogu Eesti"){
        list = JSON.parse(document.getElementById("koguest2").value);
    }
    if (vastus == "Piirkond"){
        list=JSON.parse(document.getElementById("piirk").value);
        alert(list);
    }
    if (vastus == "Partei"){
        list=JSON.parse(document.getElementById("erak").value);
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

