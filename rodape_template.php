     <nav>	
	  <center>
	
		<p> <a href ="menu_teste3.php"> <img width="80px" height="80px" src="home.png" id = "i_men" title= "Home"/> </a> </p>
		<p> <a href ="mapa.php"> <img width="80px" height="80px" src="mapa.jpg" id = "i_map" title= "Mapa"/> </a> </p>
		<p> <a href ="ranking.php"> <img width="80px" height="80px" src="ranking1.jpg" id = "i_ran" title= "Ranking"/> </a> </p>
		<p> <a href ="graficos.php"> <img width="80px" height="80px" src="charts.jpg" id = "i_gra" title= "Graficos"/> </a> </p>
		<p> <a href ="teste.php"> <img width="80px" height="80px" src="teste1.jpg" id = "i_tes" title= "Teste"/> </a> </p>
		<p> <a href ="inf_gerais.php"> <img width="90px" height="90px" src="info1.png" id = "i_inf" title= "Informacoes Gerais"/> </a> </p>
		<p> <a href ="banner2.php"> <img width="85px" height="85px" src="sistema.jpg" id = "nav_sist" title= "Como navegar no sistema"/> </a> </p>
		<?php if(isset($_SESSION["autenticacao"])){
			?>
			
				<p> <a href ="ver_meu_cadastro.php"> <img width="80px" height="80px" src="ver_meu_cadastro.jpg" id = "i_ver_cadastro" title= "Ver Meu Cadastro"/> </a> </p>
				<p> <a href ="cadastro_endereco.php"> <img width="80px" height="80px" src="marcar_ponto.jpg" id = "i_marcar_ponto" title= "Cadastrar Ponto"/> </a> </p>
				<p> <a href ="logout.php"> <img width="80px" height="80px" src="logout.jpg" id = "i_logout" title= "Logout"/> </a> </p>
				
		<?php
		}else{ ?>
		<p> <a href ="login.php"> <img width="80px" height="80px" src="login.png" id = "i_log" title= "Cadastro"/> </a> </p>
		<?php } ?>
		<p style = "margin-top: 10px;"> <a href ="sobre.php"> <img width="65px" height="65px" src="sobre2.png" id = "i_sob" title= "Sobre"/> </a> </p>
		
	  </center>
	 </nav>
		
	</div>
	
</body>