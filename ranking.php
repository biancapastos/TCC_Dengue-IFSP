<?php include("cabecalho_template.php"); ?>
<style>
			table {
			  border-collapse: collapse;
			  width: 70%;
			}

			th, td {
			  padding: 10px;
			  border-bottom: 1px solid #ddd;
			  text-align:center;
			}
			tr:hover{
				background-color: #B0C4DE;
			}
			
			th {
			  background-color: #064f77;
			  color: white;
			}
			.rowselected:hover{
				BACKGROUND-COLOR: #8B0000;
			}
			
			.rowselected2:hover{
				BACKGROUND-COLOR: #B22222;
			}
			
			.rowselected3:hover{
				BACKGROUND-COLOR: #A52A2A;
			}
			
			.rowselected4:hover{
				BACKGROUND-COLOR: #A80000;
			}
			
			.rowselected5:hover{
				BACKGROUND-COLOR: #C10000;
			}
			
			.rowselected6:hover{
				BACKGROUND-COLOR: #CE0000;
			}
			
			.rowselected7:hover{
				BACKGROUND-COLOR: #E10000;
			}
			.rowselected8:hover{
				BACKGROUND-COLOR: #FF4A4A;
			}
			.rowselected9:hover{
				BACKGROUND-COLOR: #FF6A6A;
			}
			.rowselected10:hover{
				BACKGROUND-COLOR: #FF8484;
			}

		</style>

</head>

<body>

	<div id = "main">
    
	 <article  style = "font-family: verdana; font-size: 18px;">	
	  <center>
		
		<h2>Ranking</h2>
		
		<div style = "padding: 5px 80px;">
			<span style = "font-size: 18px; color: dark-grey; padding: 10px;"> 
			Acompanhe os bairros com maior incidência de casos de dengue e veja a evolução do seu próprio bairro! 
			</span>
			<hr />
		</div>
		
		<h5> 
		<span style = " font-family: verdana; font-weight: bold; font-size: 22px; text-decoration: underline;">Top 10</span> 
		<br /> <span style = "padding: 10px; font-size: 16px;" >Bairros mais afetados de Araraquara</span>
		</h5>		
	<table>
	
		  <tr>
			<th>Colocacao</th>
			<th>Nome do Bairro</th>
			<th>Quantidade de Casos</th>
		  </tr>
		  
		  <tr onmouseover="this.className = 'rowselected';">
			<td>1</td>
			<td>Bairro 1</td>
			<td>10</td>
		  </tr>
		  
		  <tr onmouseover="this.className = 'rowselected2';">
			<td>2</td>
			<td>Bairro 2</td>
			<td>09</td>
		  </tr>
		  
		  <tr onmouseover="this.className = 'rowselected3';">
			<td>3</td>
			<td>Bairro 3</td>
			<td>08</td>
		  </tr>
		  
		  <tr onmouseover="this.className = 'rowselected4';">
			<td>4</td>
			<td>Bairro 4</td>
			<td>07</td>
		  </tr>  
		  <tr onmouseover="this.className = 'rowselected5';">
			<td>5</td>
			<td>Bairro 5</td>
			<td>06</td>
		  </tr>  
		  <tr onmouseover="this.className = 'rowselected6';">
			<td>6</td>
			<td>Bairro 6</td>
			<td>05</td>
		  </tr>  
		  <tr onmouseover="this.className = 'rowselected7';">
			<td>7</td>
			<td>Bairro 7</td>
			<td>04</td>
		  </tr>  
		  <tr onmouseover="this.className = 'rowselected8';">
			<td>8</td>
			<td>Bairro 8</td>
			<td>03</td>
		  </tr>  
		  <tr onmouseover="this.className = 'rowselected9';">
			<td>9</td>
			<td>Bairro 9</td>
			<td>02</td>
		  </tr>  
		  <tr onmouseover="this.className = 'rowselected10';">
			<td>10</td>
			<td>Bairro 10</td>
			<td>01</td>
		  </tr>
		  
	</table>
	  </center>
	 </article>

<?php include("rodape_template.php"); ?>