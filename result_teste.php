<?php

	/*$select = "SELECT grave FROM teste ORDER BY id_teste DESC LIMIT 1";
	$result = mysqli_query($link,$select) or die("erro");
	
	while($row = $result->fetch_assoc()){
		$grave = $row["grave"];
	}
	*/
	if(isset($_SESSION["grave"])){
		$situacao = $_SESSION["grave"];
		if($situacao == "sim"){
			echo "<center><p> 
					De acordo com as respostas fornecidas voce possui sintomas que representam sinais de alarme
					e pode estar dentro do grupo de casos classificados como <span style = 'color: red;'><b>GRAVES</b></span>. <br />
					Recomendamos que procure atendimento médico o mais rapido possivel, seja em um posto de saude mais proximo
					ou em um hospital com ajuda especializada.
				  </p>
				  <button class = 'voltar'>Voltar</button>
				  </center>";
				  
		}else if($situacao == "atencao"){
			echo "<center><p> 
					De acordo com as respostas fornecidas voce pode estar dentro
					do grupo de casos classificados com <span style = 'color: yellow;'><b>ATENCAO</b></span>. <br />
					Recomendamos que procure atendimento médico em algum posto de saude ou hospital, 
					<span style = 'text-decoration: underline;'><b>beba bastante agua</b></span>,
					procure ficar de repouso e <span style = 'color: red;'>NÃO</span> se medique por conta propria.
				  </p>
				  <button class = 'voltar'>Voltar</button>
				  </center>";
		}else if($situacao == "nao"){
			echo "<center><p> 
					De acordo com as respostas fornecidas voce pode estar dentro
					do grupo de casos classificados como <span style = 'color: green;'>FORA DE ALTOS RISCOS</span>. <br />
					Recomendamos que procure ficar de repouso alem de se manter bem hidratado. <br />
					Evite se medicar sem prescricao medica e qualquer mudança dos sintomas 
					procure atendimento especializado em um posto de saude mais proximo.
				  </p>
				  <button class = 'voltar'>Voltar</button>
				  </center>";
		}
		
		session_destroy();
		
	}else{
		
		echo "
			<span style = 'text-align: justify;'>
			  <ul>
				<li>Aqui você tem a possibidade de fazer um teste para verificar os sintomas que está sentindo.</li>
				<li>Este teste teve como base informações obtidas através de cartilhas informativas sobre a doença
				realizadas por profissionais e disponibilizadas por órgãos governamentais como 
				SESA (Secretaria de Estado da Saude do Espirito Santo), Secretaria da Saúde, 
				CVE (Centro de Vigilância Epidemiológica 'Prof. Alexandre Vranjac'), CCD (Coordenadoria de Controle de Doenças).</li>
				<li>Lembrando sempre a importância de se hidratar em qualquer sinal de suspeita de dengue e de procurar 
				um posto de saúde para realização de exames e atendimento especializado.</li>
			  </ul>
			</span>
			
			  <hr />
				<center> 
				<p> <b>EM TODO CASO, PROCURE ATENDIMENTO MEDICO!!!!</b> </p> 
				<button id = 'btn_faz_teste'>Fazer Teste</button>
				</center>	
		";
	}
	
 ?>