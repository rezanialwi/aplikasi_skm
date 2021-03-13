<div class="jumbotron">
<div class="row konten">
	<div class="col-md-12 col-sm-12">
		<div id="chartContainer" style="height: 300px; width: 100%;"></div>
	</div>
</div>
</div>

<script type="text/javascript" src="<?php echo base_url() ?>as/chart/canvasjs.min.js"></script>
<script type="text/javascript">
window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer",
	{
		title:{
			text: "Grafik Perbagian ?",
			fontFamily: "arial black"
		},
                animationEnabled: true,
		legend: {
			verticalAlign: "bottom",
			horizontalAlign: "center"
		},
		theme: "theme1",
		data: [
		{        
			type: "pie",
			indexLabelFontFamily: "Garamond",       
			indexLabelFontSize: 20,
			indexLabelFontWeight: "bold",
			startAngle:0,
			indexLabelFontColor: "MistyRose",       
			indexLabelLineColor: "darkgrey", 
			indexLabelPlacement: "inside", 
			toolTipContent: "{name}: {y} Orang Sangat Puas",
			showInLegend: true,
			indexLabel: "#percent%", 
			dataPoints: [
				{  y: <?php echo $pidana; ?>, name: "Pidana", legendMarkerType: "circle"},
				{  y: <?php echo $hukum; ?>, name: "Hukum", legendMarkerType: "circle"},
				{  y: <?php echo $umum; ?>, name: "Umum & Keuangan", legendMarkerType: "circle"},
				{  y: <?php echo $perdata; ?>, name: "Perdata", legendMarkerType: "circle"},
				{  y: <?php echo $tipikor; ?>, name: "Tipikor", legendMarkerType: "circle"},
				{  y: <?php echo $phi; ?>, name: "Phi", legendMarkerType: "circle"}
			]
		}
		]
	});
	chart.render();
}
</script>