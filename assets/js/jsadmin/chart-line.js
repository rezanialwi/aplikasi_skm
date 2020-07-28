window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer",
	{
		title:{
			text: "Result Hari Ini?",
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
			toolTipContent: "{name}: {y} Manusia",
			showInLegend: true,
			indexLabel: "#percent%", 
			dataPoints: [
				{  y: <?php echo $senang; ?>, name: "Sangat Puas", legendMarkerType: "triangle"},
				{  y: <?php echo $kurang; ?>, name: "Tidak Puas", legendMarkerType: "square"},
				{  y: <?php echo $cukup; ?>, name: "Cukup Puas", legendMarkerType: "circle"}
			]
		}
		]
	});
	chart.render();
}