<?php include("cabecalho_template.php"); ?>
	
	<style>
		input{
			padding: 10px 80px;
			margin: 8px;
			text-align: center;
			border: 1px solid #4682B4;
		}
		button{
			margin: 5px;
			display: inline-block;
		}
		div{
			display: inline-block;
		}
		p{
			margin: 5px;
		}
	</style>
	
</head>

<body>
  
  <div id="main">
	
	<article>

		<center>

<div id = "dica_semanal" style = " width: 90%;">
	
	
	 <center>
	 
	  <h1> Como navegar pelo sistema !!! </h1>
	   <hr />
	 </center>
	

	<link href="banner2.css" rel="stylesheet" type="text/css" />
	<script type="text/jscript" src="js/imagem.js"></script>

	<div id="banner" class="banner" style = "width: 70%; height: 10%;">
	
		<div id="banner_img" style = "width: 70%;">
			<center>
				<img src="imagem1.jpg" style = "width:100%; height: 10%;" border="0" alt="Banner">
			<center>
		</div>
		
		<div id="botoes">
			<a href="javascript:void(0);" id="banner_img_1" value ="banner_img_1" class="hover" onclick="mudaImg('0');">*</a>
			<a href="javascript:void(0);" id="banner_img_2" onclick="mudaImg('1');">*</a>
			<a href="javascript:void(0);" id="banner_img_3" onclick="mudaImg('2');">*</a>
			<a href="javascript:void(0);" id="banner_img_4" onclick="mudaImg('3');">*</a>
			<a href="javascript:void(0);" id="banner_img_5" onclick="mudaImg('4');">*</a>
			<a href="javascript:void(0);" id="banner_img_6" onclick="mudaImg('5');">*</a>
		</div>
		
		</div>
	

</div>
		
	</article>
<?php include("rodape_template.php"); ?>