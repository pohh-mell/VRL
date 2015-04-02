<?php
$title = "Statistika";
$link = "http://e-haaletus.azurewebsites.net/";
include "header.php";
?>

<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>



	<div class="container">
		

		<div class="middle">
			<ol class="singleline">
			
			<li><select onchange="funktioon();">
	   		    <option value="Kogu Eesti">Kogu Eesti</option>
			    <option value="Tartumaa">Partei</option>
			</select></li>
			</ol>

		


			<div id="container2" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto">
				
				
				<script type="text/javascript">
    			function funktioon () {
    $('#container2').highcharts({
        chart: {
           // plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Browser market shares at a specific website, 2014'
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
                ['KArl',   45.0],
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
}
				</script>




			</div>


		</div>	
	</div>
<?php include "footer.php"; ?>