<?php
$para= "joao_luiz92@hotmail.com,joaobotanocoracao@gmail.com";
$assunto= "Contato pelo Site";
$nome = $_POST ['inputNome'];
$email = $_POST ['inputMail'];
$empresa = $_POST['inputJob'];
$estado = $_POST['inpEst'];
$tel = $_POST ['inputTel'];
$whats = $_POST ['inputCel'];
$comentario = $_POST ['msg'];
	$corpo= "<strong> Mensagem de Contato</strong> <br><br>";
	$corpo .="<strong> Nome: </strong> $nome ";
	$corpo .="<br><strong> Email: </strong> $email ";
	$corpo .="<br><strong> Empresa: </strong> $empresa";
	$corpo .="<br><strong> Estado: </strong> $estado";
	$corpo .="<br><strong> Celular: </strong> $whats";
	$corpo .="<br><strong> Telefone: </strong> $tel";
	$corpo .="<br><strong> Comentario: </strong> $comentario ";

	$header= "Content-Type: text/html; charset= utf-8\n";
	$header.="From: $email Reply-to: $email\n";
	
	@mail($para,$assunto,$corpo,$header);
	
	header("location:index.php?msm=enviado");
?>