<?php
	if(isset($_SESSION['autenticacao'])){
		if($_SESSION["permissao"] == "1"){
?>
		<nav class = "navbar navbar-expand-md navbar-light" style="background-color: #4682B4;">
		
			<a class = "navbar-brand nav-link" id = "link" href = "#" >MENU</a>
			
			<button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#collapsibleNavbar"> 
				<span class = "navbar-toggler-icon"></span>
			</button>
			
			<div class = "collapse navbar-collapse" id = "collapsibleNavbar">
			
				<ul class = "navbar-nav">
				
					<li class = "nav-item">
						<a class = "nav-link" href = "#" id = "link1">Home</a>
					</li>
						
					<li class = "nav-item">
						<a class = "nav-link" href = "#" id = "link2">Mapa</a>
					</li>
						
					<li class = "nav-item">
						<a class = "nav-link" href = "#" id = "link3">Graficos</a>
					</li>
					
					<li class = "nav-item">
						<a class = "nav-link" href = "#" id = "link4">Ranking</a>
					</li>
					
					<li class = "nav-item">
						<a class = "nav-link" href = "#" id = "link5">Teste</a>
					</li>
					
					<li class = "nav-item">
						<a class = "nav-link" href = "#" id = "link6">Informacoes</a>
					</li>
					
					<li class = "nav-item">
						<a class = "nav-link" href = "#" id = "link7">Sobre</a>
					</li>
					
					&nbsp;
					<li class = "nav-item">
						<a class = "nav-link" href = "#" id = "link11">Logout</a>
					</li>
						
				</ul>
				
			</div>
			
		</nav>
<?php
		}else if($_SESSION["permissao"] == "0"){
?>
			<nav class = "navbar navbar-expand-md navbar-light" style="background-color: #4682B4; font-size: 17px;">
		
			<a class = "navbar-brand nav-link" id = "link" href = "#" >MENU</a>
			
			<button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#collapsibleNavbar"> 
				<span class = "navbar-toggler-icon"></span>
			</button>
			
			<div class = "collapse navbar-collapse" id = "collapsibleNavbar">
			
				<ul class = "navbar-nav">
				
					<li class = "nav-item">
						<a class = "nav-link" href = "#" id = "link1">Home</a>
					</li>
						
					<li class = "nav-item">
						<a class = "nav-link" href = "#" id = "link2">Mapa</a>
					</li>
						
					<li class = "nav-item">
						<a class = "nav-link" href = "#" id = "link3">Graficos</a>
					</li>
					
					<li class = "nav-item">
						<a class = "nav-link" href = "#" id = "link4">Ranking</a>
					</li>
					
					<li class = "nav-item">
						<a class = "nav-link" href = "#" id = "link5">Teste</a>
					</li>
					
					<li class = "nav-item">
						<a class = "nav-link" href = "#" id = "link6">Informacoes</a>
					</li>
					
					<li class = "nav-item">
						<a class = "nav-link" href = "#" id = "link7">Sobre</a>
					</li>
					
					<li class = "nav-item">
						<a class = "nav-link" href = "#" id = "link9">Exclusivas</a>
					</li>
					
					<li class = "nav-item">
						<a class = "nav-link" href = "#" id = "link10">Meu_Cadastro</a>
					</li>
					
					&nbsp;
					<li class = "nav-item">
						<a class = "nav-link" href = "#" id = "link11">Logout</a>
					</li>
						
				</ul>
				
			</div>
			
		</nav>
<?php
		}
	}else{
?>
		<nav class = "navbar navbar-expand-md navbar-light" style="background-color: #4682B4; font-size: 19px;">
		
			<a class = "navbar-brand nav-link" id = "link" href = "#" >MENU</a>
			
			<button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#collapsibleNavbar"> 
				<span class = "navbar-toggler-icon"></span>
			</button>
			
			<div class = "collapse navbar-collapse" id = "collapsibleNavbar">
			
				<ul class = "navbar-nav">
				
					<li class = "nav-item">
						<a class = "nav-link" href = "#" id = "link1">Home</a>
					</li>
						
					<li class = "nav-item">
						<a class = "nav-link" href = "#" id = "link2">Mapa</a>
					</li>
						
					<li class = "nav-item">
						<a class = "nav-link" href = "#" id = "link3">Graficos</a>
					</li>
					
					<li class = "nav-item">
						<a class = "nav-link" href = "#" id = "link4">Ranking</a>
					</li>
					
					<li class = "nav-item">
						<a class = "nav-link" href = "#" id = "link5">Teste</a>
					</li>
					
					<li class = "nav-item">
						<a class = "nav-link" href = "#" id = "link6">Informacoes</a>
					</li>
					
					<li class = "nav-item">
						<a class = "nav-link" href = "#" id = "link7">Sobre</a>
					</li>
						
					<li class = "nav-item">
						<a class = "nav-link" href = "#" id = "link8">Login</a>
					</li>
						
				</ul>
				
			</div>
			
		</nav>
<?php
		}
?>