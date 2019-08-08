<?php
	session_start();
	include("conexao.php");
	
	if(isset($_POST["p1"])){
		$_SESSION["p1"] = $_POST["p1"];
	}
	
	if(isset($_POST["p2"])){
		$_SESSION["p2"] = $_POST["p2"];
	}
	
	if(isset($_POST["p3"])){
		$_SESSION["p3"] = $_POST["p3"];
	}
	
	if(isset($_POST["p4"])){
		$_SESSION["p4"] = $_POST["p4"];
	}
	
	if(isset($_POST["p5"])){
		$_SESSION["p5"] = $_POST["p5"];
	}
	
	if(isset($_POST["p6"])){
		$_SESSION["p6"] = $_POST["p6"];
	}
	
	if(isset($_POST["p7"])){
		$_SESSION["p7"] = $_POST["p7"];
	}
	
	if(isset($_POST["p8"])){
		$_SESSION["p8"] = $_POST["p8"];
	}
	
	if(isset($_POST["p9"])){
		$_SESSION["p9"] = $_POST["p9"];
	}
	
	if(isset($_POST["p10"])){
		$_SESSION["p10"] = $_POST["p10"];
	}
	
	$p1 = $_SESSION["p1"];
	$p2 = $_SESSION["p2"];
	$p3 = $_SESSION["p3"];
	$p4 = $_SESSION["p4"];
	$p5 = $_SESSION["p5"];
	$p6 = $_SESSION["p6"];
	$p7 = $_SESSION["p7"];
	$p8 = $_SESSION["p8"];
	$p9 = $_SESSION["p9"];
	$p10 = $_SESSION["p10"];
	
	if(isset($p1) && isset($p2) && isset($p3) && isset($p4) && isset($p5) && isset($p6)
		&& isset($p7) && isset($p8) && isset($p9) && isset($p10)){

			if($p6 == "sim" && $p7 == "sim" && $p8 == "sim" && $p10 == "sim"){
				$grave = "sim";
			}else if($p6 == "sim" || $p7 == "sim" || $p8 == "sim" || $p10 == "sim"){
				$grave = "atencao";
			}else{
				$grave = "nao";
			}
	
			$insert = "INSERT INTO teste(p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, grave) 
			VALUES ('$p1', '$p2', '$p3', '$p4', '$p5', '$p6', '$p7', '$p8', '$p9', '$p10', '$grave') ";
			mysqli_query($link,$insert) or die("erro");
			
			$_SESSION["grave"] = $grave;
		}
?>