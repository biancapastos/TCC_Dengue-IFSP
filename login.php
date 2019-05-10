<?php
include("cabecalho.php");
?>

<div id = "login">

<center>
		<div id = "esconde_login">
		<hr />	
			<h3>Area de Login</h3>
		<hr />
	
		E-mail: 
		<input type = "email" name = "login" id = "email_login" placeholder = "usuario@email.com" />
		<br />
		
		Senha: 
		<input type = "password" name = "senha" id = "senha_login" placeholder = "********" />
		<br />
		
		<button class = "btn_login">Logar</button>
		<br />
		
		<p class = "esconde_cadastro">
			Ainda nao e cadastrado?<button id = "cadastrar">Cadastre-se</button>
		</p>
		
		</div>
		
		<div id = "cadastro">
		
			<hr />
				<h4>Cadastre-se no site e receba informações e dicas exclusivas:</h4>
			<hr />
			
			Nome: &nbsp;&nbsp;
			<input type = "text" name = "nome" id = "nome" class = "cadast" placeholder = "Harry Potter" />
			<br />
			
			Idade: &nbsp;&nbsp;
			<input type = "number" name = "idade" id = "idade" min = "1" max = "110" class = "cadast" placeholder = "25" />
			<br />
			
			Sexo: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type = "radio" name = "sexo" class = "sexo" value = "F">Feminino
			<input type = "radio" name = "sexo" class = "sexo" value = "M">Masculino
			<br />
			
			E-mail: &nbsp;&nbsp;
			<input type = "email" name = "email" id = "email" class = "cadast" placeholder = "usuario@email.com" />
			<br />
			
			Senha: &nbsp;&nbsp;
			<input type = "password" name = "senha" id = "senha" class = "cadast" placeholder = "********" />
			<br /><br />
			
			<button class = "btn_cadastro" style = "display: inline-block;">Cadastrar</button> 
			
			<button class = "voltar_login" style = "display: inline-block;">Voltar</button> 

		</div>
	
</center>

</div>

<?php
include("rodape.php");
?>