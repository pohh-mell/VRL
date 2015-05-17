function makeData(){
    var valik = document.getElementById("statvalik");
    var vastus = valik.options[valik.selectedIndex].value;
    var sql;
    if (vastus == "Kogu Eesti"){
        sql="SELECT kandidaadid.id as Number,kandidaadid.nimi as Nimi,piirkond as Piirkond ,x.Nimi as Erakond, IFNULL(abi,0) as Hääli FROM kandidaadid
left join (select Haal,count(Haal) as abi from users group by users.haal) as t on kandidaadid.id=t.Haal
left join erakonnad as x on kandidaadid.Erakonna_id=x.id
order by Number;";
    }
    var string = 
}


function funktioon() {

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
                data: [
                    ['Karl on muna',   159.0],
                    ['IE',       26.8],
                    {
                        name: 'Chrome',
                    
                        y: 12.8,
                        sliced: true,
                        selected: true
                    },
                    ['Safari',    8.5],
                    ['Opera',     6.2],
                    ['Others',   0.7]
                ]
            }]
        });
    });
});}