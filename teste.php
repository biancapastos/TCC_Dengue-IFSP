<?php include("cabecalho_template.php"); ?>

	<script src="js/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	
	<style>
		div{
			display: none;
		}
		p{
			margin: 6px;
		}
	</style>
	
	<script>
	
	function p1(p1){
		var p1 = p1.value;
		$.ajax({ 
			url : "regis_teste.php", 
			type : 'post', 
			data : { 
				p1: p1
			},
		})
	}
	
	function p2(p2){
		var p2 = p2.value;
		$.ajax({ 
			url : "regis_teste.php", 
			type : 'post', 
			data : { 
				p2: p2
			},
		})
	}
	
	function p3(p3){
		var p3 = p3.value;
		$.ajax({ 
			url : "regis_teste.php", 
			type : 'post', 
			data : { 
				p3: p3
			},
		})
	}
	
	function p4(p4){
		var p4 = p4.value;
		$.ajax({ 
			url : "regis_teste.php", 
			type : 'post', 
			data : { 
				p4: p4
			},
		})
	}
	
	function p5(p5){
		var p5 = p5.value;
		$.ajax({ 
			url : "regis_teste.php", 
			type : 'post', 
			data : { 
				p5: p5
			},
		})
	}
	
	function p6(p6){
		var p6 = p6.value;
		$.ajax({ 
			url : "regis_teste.php", 
			type : 'post', 
			data : { 
				p6: p6
			},
		})
	}
	
	function p7(p7){
		var p7 = p7.value;
		$.ajax({ 
			url : "regis_teste.php", 
			type : 'post', 
			data : { 
				p7: p7
			},
		})
	}
	
	function p8(p8){
		var p8 = p8.value;
		$.ajax({ 
			url : "regis_teste.php", 
			type : 'post', 
			data : { 
				p8: p8
			},
		})
	}
	
	function p9(p9){
		var p9 = p9.value;
		$.ajax({ 
			url : "regis_teste.php", 
			type : 'post', 
			data : { 
				p9: p9
			},
		})
	}
	

	function p10(p10){
		var p10 = p10.value;
		$.ajax({ 
			url : "regis_teste.php", 
			type : 'post', 
			data : { 
				p10: p10
			},
		})
	}

	
//////////////////////// DIVs //////////////////////////////////////////////////////

	$(document).ready(function(){
		$(".teste").fadeIn();
		$(".resultado").fadeIn();
		
		$(document).on('click', '#btn_faz_teste', function() {
			$("#texto").hide();
			$(".resultado").hide();
			$("#pergunta1").fadeIn();
		});
		
		$(document).on('click', '.btn_p1', function() {
			$("#pergunta1").hide();
			$("#pergunta2").fadeIn();
		});
		
		$(document).on('click', '.btn_p2', function() {
			$("#pergunta2").hide();
			$("#pergunta3").fadeIn();
		});
		
		$(document).on('click', '.btn_p3', function() {
			$("#pergunta3").hide();
			$("#pergunta4").fadeIn();
		});
		
		$(document).on('click', '.btn_p4', function() {
			$("#pergunta4").hide();
			$("#pergunta5").fadeIn();
		});
		
		$(document).on('click', '.btn_p5', function() {
			$("#pergunta5").hide();
			$("#pergunta6").fadeIn();
		});
		
		$(document).on('click', '.btn_p6', function() {
			$("#pergunta6").hide();
			$("#pergunta7").fadeIn();
		});
		
		$(document).on('click', '.btn_p7', function() {
			$("#pergunta7").hide();
			$("#pergunta8").fadeIn();
		});
		
		$(document).on('click', '.btn_p8', function() {
			$("#pergunta8").hide();
			$("#pergunta9").fadeIn();
		});
		
		$(document).on('click', '.btn_p9', function() {
			$("#pergunta9").hide();
			$("#pergunta10").fadeIn();
		});
		
		$(document).on('click', '.btn_p10', function() {
			$("#pergunta10").hide();
			$("#pergunta11").fadeIn();
		});
		
		$(document).on('click', '.btn_resultado', function() {
			$("#pergunta11").hide();
			window.location.reload();
		});
		
		////VOLTAR////
		$(document).on('click', '.voltar', function() {
			window.location.reload();
		});
		
	});
	
	</script>
	
</head>

<body>

	<div id="main">
	  <article  style = "font-family: verdana; font-size: 17px;">
		
		<div class = "teste">
			<br />
			<center> <h3 id = "titulo"> <b>Teste de Sintomas</b> </h3> </center>
			<br />
			
			<center>
			<div class = "resultado" style = "border: 4px double #4682B4; width: 86%; padding: 35px;">
				<?php
					include("result_teste.php");
				?>
			</div>
			
			<div id = "pergunta1" style = "border: 3px double #4682B4; width: 55%; padding: 15px;" >
				<h4>Pergunta 1</h4> 
				<p>Voce sente falta de apetite ?</p>
				<select name = "p1" id = "p1" onchange = "p1(this)"  >
					<option>Selecione</option>
					<option value = "sim" >Sim</option>
					<option value = "nao" >Nao</option>
				</select>
				<button class = "btn_p1">Proxima</button>
			</div>
			
			<div id = "pergunta2" style = "border: 3px double #4682B4; width: 55%; padding: 15px;" >
				<h4>Pergunta 2</h4> 
				<p>Voce sente dor ou incomodo ao movimentar os olhos ?
				<a href= " https://www.dicionarioinformal.com.br/dor+retro-orbit%E1ria/" target="resource window">(dor retro-orbit?ria )</a></p>
				<select name = "p2" id = "p2" onchange = "p2(this)"  >
					<option>Selecione</option>
					<option value = "sim" >Sim</option>
					<option value = "nao" >Nao</option>
				</select>
				<button class = "btn_p2">Proxima</button>
			</div>
			
			<div id = "pergunta3" style = "border: 3px double #4682B4; width: 55%; padding: 15px;" >
				<h4>Pergunta 3</h4> 
				<p>Voce percebeu alguma mancha vermelha ou roxas em seu corpo ?
				<a href= " https://drauziovarella.uol.com.br/doencas-e-sintomas/purpura-trombocitopenica-idiopatica/" target="resource window">(p?rpura)</a>
				</p>
				<select name = "p3" id = "p3" onchange = "p3(this)"  >
					<option>Selecione</option>
					<option value = "sim" >Sim</option>
					<option value = "nao" >Nao</option>
				</select>
				<button class = "btn_p3">Proxima</button>
			</div>
			
			<div id = "pergunta4" style = "border: 3px double #4682B4; width: 55%; padding: 15px;" >
				<h4>Pergunta 4</h4> 
				<p>Voce sente dor de cabeca frequente ou tem a sensacao de estar com a cabeca pesada ? 
				<a href= "https://drauziovarella.uol.com.br/doencas-e-sintomas/dor-de-cabeca-cefaleia/" target="resource window">(Cefaleia)</a></p>
				<select name = "p4" id = "p4" onchange = "p4(this)"  >
					<option>Selecione</option>
					<option value = "sim" >Sim</option>
					<option value = "nao" >Nao</option>
				</select>
				<button class = "btn_p4">Proxima</button>
			</div>
			
			<div id = "pergunta5" style = "border: 3px double #4682B4; width: 55%; padding: 15px;" >
				<h4>Pergunta 5</h4> 
				<p>Voce sente dores musculares<a href= "https://blog.drconsulta.com/causas-da-mialgia/" target="resource window">(Mialgia)</a>
					ou nas "juntas"<a href= "http://www.move.med.br/2018/04/12/o-que-e-artralgia/" target="resource window">(Artralgia)</a> 
					
				</p>
				<select name = "p5" id = "p5" onchange = "p5(this)"  >
					<option>Selecione</option>
					<option value = "sim" >Sim</option>
					<option value = "nao" >Nao</option>
				</select>
				<button class = "btn_p5">Proxima</button>
			</div>
			
			<div id = "pergunta6" style = "border: 3px double #4682B4; width: 55%; padding: 15px;" >
				<h4>Pergunta 6</h4> 
				<p>Voce sente dor abdominal INTENSA e CONTINUA ?</p>
				<select name = "p6" id = "p6" onchange = "p6(this)"  >
					<option>Selecione</option>
					<option value = "sim" >Sim</option>
					<option value = "nao" >Nao</option>
				</select>
				<button class = "btn_p6">Proxima</button>
			</div>
			
			<div id = "pergunta7" style = "border: 3px double #4682B4; width: 55%; padding: 15px;" >
				<h4>Pergunta 7</h4> 
				<p>Voce tem vomitos persistentes ?</p>
				<select name = "p7" id = "p7" onchange = "p7(this)"  >
					<option>Selecione</option>
					<option value = "sim" >Sim</option>
					<option value = "nao" >Nao</option>
				</select>
				<button class = "btn_p7">Proxima</button>
			</div>
			
			<div id = "pergunta8" style = "border: 3px double #4682B4; width: 55%; padding: 15px;" >
				<h4>Pergunta 8</h4> 
				<p>Voce teve algum tipo de sangramento ?
				<a href= "https://site.medicina.ufmg.br/observaped/exantema-doenca-exantematica/" target="resource window">(Exantema)</a>
				</p>
				<select name = "p8" id = "p8" onchange = "p8(this)"  >
					<option>Selecione</option>
					<option value = "sim" >Sim</option>
					<option value = "nao" >Nao</option>
				</select>
				<button class = "btn_p8">Proxima</button>
			</div>
			
			<div id = "pergunta9" style = "border: 3px double #4682B4; width: 55%; padding: 15px;" >
				<h4>Pergunta 9</h4> 
				<p>Voce teve febre alta (maior que 38.5ºC) ? </p>
				<select name = "p9" id = "p9" onchange = "p9(this)"  >
					<option>Selecione</option>
					<option value = "sim" >Sim</option>
					<option value = "nao" >Nao</option>
				</select>
				<button class = "btn_p9">Proxima</button>
			</div>
			
			<div id = "pergunta10" style = "border: 3px double #4682B4; width: 55%; padding: 15px;" >
				<h4>Pergunta 10</h4> 
				<p>Voce notou alguma mudanca de comportamento, como irritabilidade ? </p>
				<select name = "p10" id = "p10" onchange = "p10(this)"  >
					<option>Selecione</option>
					<option value = "sim" >Sim</option>
					<option value = "nao" >Nao</option>
				</select>
				<button class = "btn_p10">Proxima</button>
			</div>
			
			<div id = "pergunta11" style = "border: 3px double #4682B4; width: 55%; padding: 15px;" >
				<p>Obrigado por responder as questoes!</p>
				<input type = "hidden" id = "mostrar_resultado" value = "sim"/>
				<input type = "submit" value = "FIM" class = "btn_resultado" />
			</div>
			
			</center>
		
		</div>
		
	  </article>
	  
<?php include("rodape_template.php"); ?>