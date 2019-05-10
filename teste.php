<?php
include("cabecalho.php");
?>

<div id = "teste">

	<h4>Teste de Sintomas</h4>
<hr />
<p>
	<ul>
		<li>Aqui você tem a possibidade de fazer um teste de sintomas para ver a possibilidade de estar com dengue.</li>
		<li>Este teste teve como base as informações disponibilizadas pelo Ministério da Saude.</li>
		(disponivel em: http://portalms.saude.gov.br/saude-de-a-z/dengue)
		<li>Nenhum profissional da saúde teve influencia sobre o teste, sendo o mesmo coletado pelas desenvolvedoras do sistema.</li>
	</ul>
<hr /> 
	<p><b>EM TODO CASO PROCURE ATENDIMENTO MEDICO!!!!</b></p>
</p>
<hr />

<center>

	<button class = "faz_teste">Fazer Teste!</button>
	
	<br />
	<div id = "perguntas_teste">

		<p>As questoes a seguir medirao a intensidade dos sintomas da dengue,
		sugerindo se voce está ou não com suspeita da doença pela soma dos sintomas apresentados</p>

		<hr />

		<label><b>Dor abdominal intensa e contínua, ou dor à palpação do abdomen:</b></label> &nbsp;&nbsp; 
		<br/><br/>
		<input type = "radio" name = "nivel1" value = "1" class = "p1"/>1
		<input type = "radio" name = "nivel1" value = "2" class = "p1"/>2 
		<input type = "radio" name = "nivel1" value = "3" class = "p1"/>3
		<input type = "radio" name = "nivel1" value = "4" class = "p1"/>4
		<input type = "radio" name = "nivel1" value = "5" class = "p1"/>5
		<input type = "radio" name = "nivel1" value = "6" class = "p1"/>6
		<input type = "radio" name = "nivel1" value = "7" class = "p1"/>7
		<input type = "radio" name = "nivel1" value = "8" class = "p1"/>8
		<input type = "radio" name = "nivel1" value = "9" class = "p1"/>9
		<input type = "radio" name = "nivel1" value = "10"class = "p1"/>10
		<br/><br/>

		<label><b>Vômitos persistentes.</b></label> &nbsp;&nbsp; 
		<br/><br/>
		<input type = "radio" name = "nivel2" value = "1" class = "p2"/>1
		<input type = "radio" name = "nivel2" value = "2" class = "p2"/>2 
		<input type = "radio" name = "nivel2" value = "3" class = "p2"/>3
		<input type = "radio" name = "nivel2" value = "4" class = "p2"/>4
		<input type = "radio" name = "nivel2" value = "5" class = "p2"/>5
		<input type = "radio" name = "nivel2" value = "6" class = "p2"/>6
		<input type = "radio" name = "nivel2" value = "7" class = "p2"/>7
		<input type = "radio" name = "nivel2" value = "8" class = "p2"/>8
		<input type = "radio" name = "nivel2" value = "9" class = "p2"/>9
		<input type = "radio" name = "nivel2" value = "10"class = "p2"/>10
		<br/><br/>

		<label><b>Acumulação de líquidos (ascites, derrame pleural, derrame pericárdico).</b></label> &nbsp;&nbsp; 
		<br/><br/>
		<input type = "radio" name = "nivel3" value = "1" class = "p3"/>1
		<input type = "radio" name = "nivel3" value = "2" class = "p3"/>2 
		<input type = "radio" name = "nivel3" value = "3" class = "p3"/>3
		<input type = "radio" name = "nivel3" value = "4" class = "p3"/>4
		<input type = "radio" name = "nivel3" value = "5" class = "p3"/>5
		<input type = "radio" name = "nivel3" value = "6" class = "p3"/>6
		<input type = "radio" name = "nivel3" value = "7" class = "p3"/>7
		<input type = "radio" name = "nivel3" value = "8" class = "p3"/>8
		<input type = "radio" name = "nivel3" value = "9" class = "p3"/>9
		<input type = "radio" name = "nivel3" value = "10"class = "p3"/>10
		<br/><br/>

		<label><b>Sangramento de mucosa ou outra hemorragia.</b></label> &nbsp;&nbsp; 
		<br/><br/>
		<input type = "radio" name = "nivel4" value = "1" class = "p4"/>1
		<input type = "radio" name = "nivel4" value = "2" class = "p4"/>2 
		<input type = "radio" name = "nivel4" value = "3" class = "p4"/>3
		<input type = "radio" name = "nivel4" value = "4" class = "p4"/>4
		<input type = "radio" name = "nivel4" value = "5" class = "p4"/>5
		<input type = "radio" name = "nivel4" value = "6" class = "p4"/>6
		<input type = "radio" name = "nivel4" value = "7" class = "p4"/>7
		<input type = "radio" name = "nivel4" value = "8" class = "p4"/>8
		<input type = "radio" name = "nivel4" value = "9" class = "p4"/>9
		<input type = "radio" name = "nivel4" value = "10"class = "p4"/>10
		<br/><br/>

		<label><b>Dor ao movimentar os olhos.</b></label> &nbsp;&nbsp; 
		<br/><br/>
		<input type = "radio" name = "nivel5" value = "1" class = "p5"/>1
		<input type = "radio" name = "nivel5" value = "2" class = "p5"/>2 
		<input type = "radio" name = "nivel5" value = "3" class = "p5"/>3
		<input type = "radio" name = "nivel5" value = "4" class = "p5"/>4
		<input type = "radio" name = "nivel5" value = "5" class = "p5"/>5
		<input type = "radio" name = "nivel5" value = "6" class = "p5"/>6
		<input type = "radio" name = "nivel5" value = "7" class = "p5"/>7
		<input type = "radio" name = "nivel5" value = "8" class = "p5"/>8
		<input type = "radio" name = "nivel5" value = "9" class = "p5"/>9
		<input type = "radio" name = "nivel5" value = "10"class = "p5"/>10
		<br/><br/>

		<label><b>Febre alta (maior que 38.5ºC).</b></label> &nbsp;&nbsp; 
		<br/><br/>
		<input type = "radio" name = "nivel6" value = "1" class = "p6"/>1
		<input type = "radio" name = "nivel6" value = "2" class = "p6"/>2 
		<input type = "radio" name = "nivel6" value = "3" class = "p6"/>3
		<input type = "radio" name = "nivel6" value = "4" class = "p6"/>4
		<input type = "radio" name = "nivel6" value = "5" class = "p6"/>5
		<input type = "radio" name = "nivel6" value = "6" class = "p6"/>6
		<input type = "radio" name = "nivel6" value = "7" class = "p6"/>7
		<input type = "radio" name = "nivel6" value = "8" class = "p6"/>8
		<input type = "radio" name = "nivel6" value = "9" class = "p6"/>9
		<input type = "radio" name = "nivel6" value = "10"class = "p6"/>10
		<br/><br/>	

		<label><b>Manchas vermelhas no corpo.</b></label> &nbsp;&nbsp; 
		<br/><br/>
		<input type = "radio" name = "nivel7" value = "1" class = "p7"/>1
		<input type = "radio" name = "nivel7" value = "2" class = "p7"/>2 
		<input type = "radio" name = "nivel7" value = "3" class = "p7"/>3
		<input type = "radio" name = "nivel7" value = "4" class = "p7"/>4
		<input type = "radio" name = "nivel7" value = "5" class = "p7"/>5
		<input type = "radio" name = "nivel7" value = "6" class = "p7"/>6
		<input type = "radio" name = "nivel7" value = "7" class = "p7"/>7
		<input type = "radio" name = "nivel7" value = "8" class = "p7"/>8
		<input type = "radio" name = "nivel7" value = "9" class = "p7"/>9
		<input type = "radio" name = "nivel7" value = "10"class = "p7"/>10
		<br/><br/>	

		<label><b>Dor de cabeça frequente.</b></label> &nbsp;&nbsp; 
		<br/><br/>
		<input type = "radio" name = "nivel8" value = "1" class = "p8"/>1
		<input type = "radio" name = "nivel8" value = "2" class = "p8"/>2 
		<input type = "radio" name = "nivel8" value = "3" class = "p8"/>3
		<input type = "radio" name = "nivel8" value = "4" class = "p8"/>4
		<input type = "radio" name = "nivel8" value = "5" class = "p8"/>5
		<input type = "radio" name = "nivel8" value = "6" class = "p8"/>6
		<input type = "radio" name = "nivel8" value = "7" class = "p8"/>7
		<input type = "radio" name = "nivel8" value = "8" class = "p8"/>8
		<input type = "radio" name = "nivel8" value = "9" class = "p8"/>9
		<input type = "radio" name = "nivel8" value = "10"class = "p8"/>10
		<br/><br/>

		<label><b>Dores musculares intensas.</b></label> &nbsp;&nbsp; 
		<br/><br/>
		<input type = "radio" name = "nivel9" value = "1" class = "p9"/>1
		<input type = "radio" name = "nivel9" value = "2" class = "p9"/>2 
		<input type = "radio" name = "nivel9" value = "3" class = "p9"/>3
		<input type = "radio" name = "nivel9" value = "4" class = "p9"/>4
		<input type = "radio" name = "nivel9" value = "5" class = "p9"/>5
		<input type = "radio" name = "nivel9" value = "6" class = "p9"/>6
		<input type = "radio" name = "nivel9" value = "7" class = "p9"/>7
		<input type = "radio" name = "nivel9" value = "8" class = "p9"/>8
		<input type = "radio" name = "nivel9" value = "9" class = "p9"/>9
		<input type = "radio" name = "nivel9" value = "10"class = "p9"/>10
		<br/><br/>

		<label><b>Falta de apetite.</b></label> &nbsp;&nbsp; 
		<br/><br/>
		<input type = "radio" name = "nivel10" value = "1" class = "p10"/>1
		<input type = "radio" name = "nivel10" value = "2" class = "p10"/>2 
		<input type = "radio" name = "nivel10" value = "3" class = "p10"/>3
		<input type = "radio" name = "nivel10" value = "4" class = "p10"/>4
		<input type = "radio" name = "nivel10" value = "5" class = "p10"/>5
		<input type = "radio" name = "nivel10" value = "6" class = "p10"/>6
		<input type = "radio" name = "nivel10" value = "7" class = "p10"/>7
		<input type = "radio" name = "nivel10" value = "8" class = "p10"/>8
		<input type = "radio" name = "nivel10" value = "9" class = "p10"/>9
		<input type = "radio" name = "nivel10" value = "10"class = "p10"/>10
		<br/><br/>

		<button class = "btnteste"> Enviar </button>

	</div>
	
</center>

</div>

<?php
include("rodape.php");
?>