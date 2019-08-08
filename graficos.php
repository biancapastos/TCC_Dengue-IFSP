<?php include("cabecalho_template.php"); ?>

</head>

<body>

 <div id = "main">
    
	<article style = "font-family: verdana; font-size: 18px;">	
	  <center>

		<h2> Graficos </h2>
		<div style = "padding: 5px 80px;">
			<span style = "font-size: 18px; color: grey; padding: 10px;"> 
			  Veja nos diferentes gráficos informacoes sobre a dengue e as relacoes com os casos marcados.
			</span>
			<hr />
		</div>
<?php



	$grave_nao = "SELECT COUNT( grave ) FROM teste WHERE grave LIKE  'nao' ";
	$grave_sim = "SELECT COUNT( grave ) FROM teste WHERE grave LIKE  'sim' ";
	$grave_atencao = "SELECT COUNT( grave ) FROM teste WHERE grave LIKE  'atencao' ";
	
	$p1 = "SELECT COUNT( p1 ) FROM teste WHERE p1 LIKE  'sim' ";
	$p2 = "SELECT COUNT( p2 ) FROM teste WHERE p2 LIKE  'sim' ";
	$p3 = "SELECT COUNT( p3 ) FROM teste WHERE p3 LIKE  'sim' ";
	$p4 = "SELECT COUNT( p4 ) FROM teste WHERE p4 LIKE  'sim' ";
	$p5 = "SELECT COUNT( p5 ) FROM teste WHERE p5 LIKE  'sim' ";
	$p6 = "SELECT COUNT( p6 ) FROM teste WHERE p6 LIKE  'sim' ";
	$p7 = "SELECT COUNT( p7 ) FROM teste WHERE p7 LIKE  'sim' ";
	$p8 = "SELECT COUNT( p8 ) FROM teste WHERE p8 LIKE  'sim' ";
	$p9 = "SELECT COUNT( p9 ) FROM teste WHERE p9 LIKE  'sim' ";
	$p10 = "SELECT COUNT( p10 ) FROM teste WHERE p10 LIKE  'sim' ";
		
	$resultado_grave_nao = mysqli_query($link, $grave_nao);
	$resultado_grave_sim = mysqli_query($link, $grave_sim);
	$resultado_grave_atencao = mysqli_query($link, $grave_atencao);
	
	$resultado_p1 = mysqli_query($link, $p1);
	$resultado_p2 = mysqli_query($link, $p2);
	$resultado_p3 = mysqli_query($link, $p3);
	$resultado_p4 = mysqli_query($link, $p4);
	$resultado_p5 = mysqli_query($link, $p5);
	$resultado_p6 = mysqli_query($link, $p6);
	$resultado_p7 = mysqli_query($link, $p7);
	$resultado_p8 = mysqli_query($link, $p8);
	$resultado_p9 = mysqli_query($link, $p9);
	$resultado_p10 = mysqli_query($link, $p10);
		
	//$linha_gn = mysqli_fetch_array($resultado_grave_nao);
	//$linha_gs = mysqli_fetch_array($resultado_grave_sim);
	//$linha_ga = mysqli_fetch_array($resultado_grave_atencao);
	
	$linha_p1 = mysqli_fetch_array($resultado_p1);
	$linha_p2 = mysqli_fetch_array($resultado_p2);
	$linha_p3 = mysqli_fetch_array($resultado_p3);
	$linha_p4 = mysqli_fetch_array($resultado_p4);
	$linha_p5 = mysqli_fetch_array($resultado_p5);
	$linha_p6 = mysqli_fetch_array($resultado_p6);
	$linha_p7 = mysqli_fetch_array($resultado_p7);
	$linha_p8 = mysqli_fetch_array($resultado_p8);
	$linha_p9 = mysqli_fetch_array($resultado_p9);
	$linha_p10 = mysqli_fetch_array($resultado_p10);
	


?>		
		<div id = "graficos">
		
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['sintomas', 'ocorrencia'],
          ['p1','<?php echo $linha_p1[0];?>'],
          ['p2','<?php echo $linha_p2[0];?>'],
          ['p3','<?php echo $linha_p3[0];?>'],
          ['p4','<?php echo $linha_p4[0];?>'],
          ['p5','<?php echo $linha_p5[0];?>'],
          ['p6','<?php echo $linha_p6[0];?>'],
          ['p7','<?php echo $linha_p7[0];?>'],
          ['p8','<?php echo $linha_p8[0];?>'],
          ['p9','<?php echo $linha_p9[0];?>'],
          ['p10','<?php echo $linha_p10[0];?>']
        ]);

        var options = {
          title: 'Resultado geral das intensidades dos sintomas'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
</script>
		
		<div id="piechart" > </div>
	
		</div>
	  </center>
	</article>
	
<?php

 include("rodape_template.php"); ?>