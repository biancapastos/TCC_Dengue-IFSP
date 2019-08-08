<?php
	include("conexao.php");

$check_sql = "SELECT id, logradouro, numero, bairro, municipio, uf, latitude, longitude FROM formulario";

$resultado = mysqli_query($link,$check_sql);

$linha=mysqli_fetch_assoc($resultado);
   

// preenchendo os parametros que vão servir para montar a url de chamada da api.

$logradouro = $linha["logradouro"];
$numero = $linha["numero"];
$bairro = $linha["bairro"];
$municipio = $linha["municipio"];
$uf = $linha["uf"];



   $endereco_espaco = $logradouro." ".$numero." ".$bairro." ".$municipio." ".$uf;
  
   $endereco_url = str_replace(" ","+",$endereco_espaco);
   
   // chamada da url do googleapi.
   $url = "https://www.google.com.br/maps/place/".$endereco_url;
      
   // chamada da url do googleapi.
   $geo = file_get_contents($url);



   $array = explode($endereco_espaco, $geo);
		

	     
   $array2 = explode('null' , $array[1]);
   
   	 //print_r($array2[3]);


	 
   $array3 = explode(']' , $array2[0]);

      //print_r($array3[0]);


   $array4 = explode('[' , $array3[0]);
	  

    
   $array5 = explode(",", $array4[2]); 


	$latitude = $array5[1];
	$longitude = $array5[2];

	$update = "UPDATE formulario SET lat='$latitude', $long='$longitude' WHERE id=''";
   
?>
