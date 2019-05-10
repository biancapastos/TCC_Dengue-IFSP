<?php
session_start();
include("conexao.php");
?>
<!DOCTYPE html>

<html lang="pt-BR">

	<head>
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<script src="js/jquery-3.3.1.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css_codigo.css"/>
		<title>Home</title>
		
		<script src="js/bootstrap.min.js"></script>
		
		<script>
		
		$(document).ready(function(){

			$("#link").click(function(){
				location.href = "home.php";
			});
			
			$("#link1").click(function(){
				location.href = "home.php";
			});
			
			$("#link2").click(function(){
				location.href = "mapa.php";
			});
			
			$("#link3").click(function(){
				location.href = "graficos.php";
			});
			
			$("#link4").click(function(){
				location.href = "ranking.php";
			});
			
			$("#link5").click(function(){
				location.href = "teste.php";
			});
			
			$("#link6").click(function(){
				location.href = "inf_gerais.php";
			});
			
			$("#link7").click(function(){
				location.href = "sobre.php";
			});
			
			$("#link8").click(function(){
				location.href = "login.php";
			});
			
			$("#link9").click(function(){
				location.href = "inf_exclusivas.php";
			});
			
			$("#link10").click(function(){
				location.href = "ver_meu_cadastro.php";
			});
			
			$("#link11").click(function(){
				location.href = "logout.php";
			});
	
		});
		
///////////////////////////////////////TESTE//////////////////////////////////////////////////////

		$(document).on('click', '.faz_teste', function() {
			
			$("#perguntas_teste").fadeIn();
			$(".faz_teste").hide();

		});
		
	///////////////////////////////
	
		$(document).on('click', '.btnteste', function() {
			
			p1 = $(".p1:checked").val();
			p2 = $(".p2:checked").val();
			p3 = $(".p3:checked").val();
			p4 = $(".p4:checked").val();
			p5 = $(".p5:checked").val();
			p6 = $(".p6:checked").val();
			p7 = $(".p7:checked").val();
			p8 = $(".p8:checked").val();
			p9 = $(".p9:checked").val();
			p10 = $(".p10:checked").val();
			
			$.ajax({ 
			
				url : "registra_teste.php", 
				type : 'post', 
				data : { 
				
					p1 : p1,
					p2 : p2,
					p3 : p3,
					p4 : p4,
					p5 : p5,
					p6 : p6,
					p7 : p7,
					p8 : p8,
					p9 : p9,
					p10 : p10
				
				},
				
				beforeSend : function(){ 
				
					$("#status").html("CADASTRANDO...");
				
				}					
			})
			
			.done(function(msg){
				
				alert("O resultado do seu teste eh " + msg + " de 100");
			
			})
			
			.fail(function(jqXHR, textStatus, msg){
			
				alert(msg);
			
			});
			
		});
		
///////////////////////////////////////CADASTRO//////////////////////////////////////////////////////

		$(document).on('click', '#cadastrar', function() {
				
			$("#cadastro").fadeIn();
			$("#cadastrar").hide();
			$(".esconde_msg_cadastro").hide();
			$("#esconde_login").hide();
			
		});
		
	///////////////////////////////
	
		$(document).on('click', '.btn_cadastro', function() {
					
			sexo = $(".sexo:checked").val();
			$.ajax({ 
			
				url : "registra_cadastro.php", 
				type : 'post', 
				data : { 
				
					nome : $("#nome").val(),
					idade : $("#idade").val(),
					sexo : sexo,
					email : $("#email").val(),
					senha : $("#senha").val(),
				
				},
				
				beforeSend : function(){ 
				
					$("#status").html("CADASTRANDO...");
				
				}					
			})
			
			.done(function(msg){
				
					location.href = "login.php";

			})
			
			.fail(function(jqXHR, textStatus, msg){
			
				alert(msg);
			
			});
			
		});
		
		$(document).on('click', '.voltar_login', function() {
					
			$("#cadastro").hide();
			$("#cadastrar").fadeIn();
			$(".esconde_cadastro").fadeIn();
			$("#esconde_login").fadeIn();
			
		});
		
///////////////////////////////////////LOGIN//////////////////////////////////////////////////////
		
		$(document).on('click', '.btn_login', function() {
				
			$.ajax({ 
			
				url : "autenticacao.php", 
				type : 'post', 
				data : { 
				
					login : $("#email_login").val(),
					senha : $("#senha_login").val()
				
				},
				
				beforeSend : function(){ 
				
					$("#status").html("AUTENTICANDO...");
				
				}					
			})
			
			.done(function(msg){
				if(msg == 1){
					location.href = "home.php";
					
				}else{
					alert("Login ou senha invalidos")
				}
			
			})
			
			.fail(function(jqXHR, textStatus, msg){
			
				alert(msg);
			
			});
			
		});

///////////////////////////////////////ALTERAR CADASTRO//////////////////////////////////////////////////////
		
		$(document).on('click', '.alterar_cadastro', function() {
					
			location.href = "alterando_cadastro.php";
			
		});
		
	//////////////////////////////////
		
		$(document).on('click', '.alt_cadastro', function() {
			
			var nome = $("#alt_nome").val();
			var idade = $("#alt_idade").val();
			var sexo = $(".alt_sexo:checked").val();
			var email = $("#alt_email").val();
			var senha = $("#alt_senha").val();
			
			$.ajax({ 
			
				url : "altera_cadastro.php",
				type : 'post', 
				data : { 
				
					nome: nome,
					idade : idade,
					sexo : sexo,
					email: email,
					senha: senha
				
				},
				
				beforeSend : function(){ 
				
				}					
			})
			
			.done(function(msg){
				
					alert("Cadastro alterado com sucesso!");
					location.href = "ver_meu_cadastro.php";
					
			
			})
			
			.fail(function(jqXHR, textStatus, msg){
			
				alert(msg);
			
			});
			
		});
		
///////////////////////////////////////EXCLUIR CADASTRO//////////////////////////////////////////////////////

		$(document).on('click', '.excluir_cadastro', function() {

			location.href = "excluir.php";
			
		});
		
///////////////////////////////////////ALTERAR SENHA//////////////////////////////////////////////////////
/*
		$(document).on('click', '.alt_senha', function() {
					
			location.href = "alterando_senha.php";
			
		});
		
	//////////////////////////////////
	
	$(document).on('click', '.alter_senha', function() {
			
			var senha = $("#alte_senha").val();
			
			$.ajax({ 
			
				url : "altera_senha.php",
				type : 'post', 
				data : { 
				
					senha: senha
				
				},
				
				beforeSend : function(){ 
				
				}					
			})
			
			.done(function(msg){
				
					alert("Senha alterada com sucesso!");
					location.href = "ver_meu_cadastro.php";

			})
			
			.fail(function(jqXHR, textStatus, msg){
			
				alert(msg);
			
			});
			
		});
		*/
		
		</script>
		
	</head>
	<body style = "background-color: #f0f9fd;">
<?php
include("navbars.php");
?>