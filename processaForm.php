<?php
	// INFORMAÇÕES DO REGISTRO
	$para= "caiodecarvalho@wheke.net";
	$nome= $_REQUEST['nome'];
	$assunto= $_REQUEST['assunto'];
	$email= $_REQUEST['email'];
	$msg= $_REQUEST['mensagem'];
	//CORPO DO REGISTRO
	$corpo = "<strong>Mensagem de Contato</strong><br><br>"; 
	$corpo .= "<strong>Nome: </strong> $nome";
	$corpo .= "<br><strong>E-mail: </strong> $email";  
	$corpo .= "<br><strong>Assunto: </strong> $assunto"; 
	$corpo .= "<br><strong>Mensagem: </strong> $msg"; 
	//ENVIO DO REGISTRO
	$header= "Content-type: text/html; charset=utf-8\n";
	$header.="From: $email Reply-to: $email\n";
	

	@mail($para,$assunto,$corpo,$header);

	header("location:index.php?msg=enviado");
?>
