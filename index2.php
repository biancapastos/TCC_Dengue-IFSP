<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/jquery-3.3.1.min.js"></script>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<title>Login</title>
	
	<!-- coisas do modal -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
	<style type="text/css" media="screen">
	 	* {
		   box-sizing: border-box; 
		  }
		  body {
		    margin: 0;
		  }
		  #i_map, #i_ran, #i_gra, #i_tes, #i_log{
		    border-radius: 50%;
			border: 5px double #646df0;
		  }
		  #main {
		    display: flex;
		    min-height:100vh;
		  }
		  #main > article {
		    flex: 1;
		  }
		  #main > nav {
		    flex: 0 0 3vw;
		    background: #ADD8E6;
		  }
		  #main > aside {
			flex: 0 0 10vw;
		    background: #ADD8E6;
		  }
		  #main > nav {
		    order: -1;
		  }
		  header, footer, article, nav, aside {
		    padding: 1em;
		  }
		  header, footer {
		    background: #ADD8E6	;
		  }
		  header {
			height: 0vh;
		  }
		  footer{
			height: 0vh;
		  }
	</style>
	
	<style>
		input{
			padding: 10px 80px;
			margin: 8px;
			text-align: center;
			border: 1px solid #4682B4;
		}
		.imagem{
			padding: 10px 80px;
			margin: 8px;
			text-align: center;
			border: none;
		}
		button{
			margin: 5px;
			display: inline-block;
		}
		<!--div{
			display: inline-block;
		}-->
		p{
			margin: 5px;
		}
		table.borda td{
			
            border-width: 2px 10px 4px 20px ;
			border-style: double;
			border-color: #4682B4;
	
		}
		table.borda th{
			
            border-width: 2px 10px 4px 20px ;
			border-style: double;
			border-color: #4682B4;

		}
	</style>
	</head>
	<body>
  <div id="main">
	
	<article>	
	<center>
	<h2>Area de cadastro de imagens</h2>
		<hr />
		<br />
		
		<p style = "font-size: 17px;">
			Cadastre as imagens no  site e defina as dicas e informações exclusivas, que serão mostradas para os usuarios.
		</p>
		
	
		<h3>Selecione um novo arquivo de imagem</h3>
		  
		<form enctype="multipart/form-data" action="upload.php" method="post">
		
		
		
			<div>NOME
			<br />
			
			<input name="nome_evento" type="text"/></div>
			
			<br />
			
			<div>DESCRIÇÃO
			
			<br />
			
			<input name="descricao_evento" type="textarea"/>
			
			</div>
			
			<br />
			
			<input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
			
			<br />
			
			<div>
			<input name="imagem" class = "imagem" type="file"/>
			</div>
				
			<br />
				
			<div>
			<input type="submit" value="Salvar"/>
			</div>

		
		</form>
		<br />
		<table class= "borda">
			<tr>
			<th align="center">
				Código
			</th>
			<th align="center">
				Nome
			</th>
			<th align="center">
				Descrição
			</th>
			<th align="center">
				Nome da imagem
			</th>
			<th align="center">
				Tamanho
			</th>
			<th align="center">
				Visualizar imagem
			</th>
			
			<th align="center">
				Excluir imagem
			</th>
			<th align="center">
				Selecionar imagem
			</th>
		</tr>
		<?php
	  require("conecta.php");

		$querySelecao = "SELECT codigo, evento, descricao, nome_imagem, tamanho_imagem, imagem FROM tabela_imagens";
		$resultado = mysql_query($querySelecao);
	  
		while ($arquivos = mysql_fetch_array($resultado)) { ?>
		
		<tr>
		
		<td align="center">
			<?php echo $arquivos['codigo']; ?>
		</td>
		
		<td align="center">
			<?php echo $arquivos['evento']; ?>
		</td>
		
		<td align="center">
			<?php echo $arquivos['descricao']; ?>
		</td>
		
		<td align="center">
			<?php echo $arquivos['nome_imagem']; ?>
		</td>
		
		<td align="center">
			<?php echo $arquivos['tamanho_imagem']; ?>
		</td>
		
		<td align="center">
			<?php echo '<a href="ver_imagem.php?id='.$arquivos['codigo'].'">Imagem '.$arquivos['codigo'].'</a>'; ?>
		</td>
		
		<td align="center">
			<?php echo '<a href="excluir_imagem.php?id='.$arquivos['codigo'].'">Imagem '.$arquivos['codigo'].'</a>'; ?>
		</td>
		
		<td align="center">
		
		<input type="checkbox" name="dica[]" class="ecolhidas" value="<?php='.$arquivos['codigo'].'?>"/>
		
		</td>
		
		</tr>
		
		<br />
		<?php } ?>
		</table>	
		<center>
	
		</article>		
	
	
	
	
<?php include("rodape_template.php"); ?>
