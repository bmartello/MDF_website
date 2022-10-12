<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta content="Solicite seu orçamento por meio de desenhos e amostras, envie email ou telefone." name="description"></meta>
		<meta content="usinagem, mdf, usinagem mdf, usinagem de pecas, usinagem de precisao, metalurgica, aco, ferro, prestacao de serviços, torno automatico, torno cnc, torno" name="keywords"></meta>
		<meta content="metalurgica, usinagem, usinagem de pecas, precisao, servicos de usinagens, torno, cnc" name="classification"></meta>
		
		<meta content="Bruno Sole Martello" name="author"  >
		<meta content="pt-br" http-equiv="content-language" >
		<meta content="usinagem" name="Page-Topic" >
		<meta content="width=device-width" name="viewport"></meta>
		
		<title>MDF - Contato | Usinagem MDF </title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
	</head>
<?php
if (isset($_POST['BTEnvia'])){
 
  //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
  //====================================================
  $email_remetente = "comercial@mdfusinagem.com.br"; // deve ser um email do dominio
  //====================================================
 
 
  //Configurações do email, ajustar conforme necessidade
  //====================================================
  $email_destinatario = "mdfind@ig.com.br"; // qualquer email pode receber os dados
  $email_reply = "$email";
  $email_assunto = "Contato pelo Site";
  //====================================================
 
 
  //Variaveis de POST, Alterar somente se necessário
  //====================================================
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = "oi";
  $mensagem = $_POST['mensagem'];
  //====================================================
 
  //Monta o Corpo da Mensagem
  //====================================================
  $email_conteudo = "<b>Nome:</b> $nome \n"; 
  $email_conteudo .= "\n";
  $email_conteudo .= "<b>Email:</b> $email \n"; 
  $email_conteudo .= "\n";
  $email_conteudo .= "<b>Mensagem\n</b>\n $mensagem \n";
  //====================================================
 
  //Seta os Headers (Alerar somente caso necessario)
  //====================================================
  $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Subject: $email_assunto","Return-Path:  $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
  //====================================================
 
 
   
  //Enviando o email
  //====================================================
  if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){
    echo "<script type=\"text/javascript\">alert('Email enviado com sucesso!');</script>";
 
  }
    else{
           echo "<script type=\"text/javascript\">alert('Erro ao enviar, preencha novamente e clique em enviar.');</script>";
  }
  //====================================================
}
?>
	
	<body>
		<div id="corpo">
			<div id="topo" class="shadow">
				<div id="cabecalho">
					<a href="index.html"><div id="logo"></div></a>
					<div id="mdf"> <p>MDF INDÚSTRIA COMÉRCIO E PRESTAÇÃO DE SERVIÇOS LTDA </p></div>
				</div>
			</div>
			<div id="menu">
					<ul id="navigation">
						<li >
							<a href="index.html">HOME</a>
						</li><div id="linha"></div>
						<li>
							<a href="aempresa.html">A EMPRESA</a>
						</li><div id="linha"></div>
						<li>
							<a href="servicos.html">SERVIÇOS</a>
						</li><div id="linha"></div>
						<li>
							<a href="produtos.html">PRODUTOS</a>
						</li><div id="linha"></div>
						<li>
							<a href="localizacao.html">LOCALIZAÇÃO</a>
						</li ><div id="linha"></div>
						<li class="selected">
							<a href="contato.php">CONTATO</a>
						</li>
					</ul>
				</div>
			<div id="conteudo" class="shadow1">
				<div id="content">
				<div id="texto">
					<h3 class="txtcontato">TELEFONES</h3>
					<hr>
					<div id="phone"></div><p class="fone"><b>(11) 2062-7755</b></p>
					<p class="fone"><b>(11) 2062-7879</b></p>
					<br>
					<h3 class="txtcontato">E-MAILS</h3>
					<hr>
					<div id="email"></div><p class="fone"><b>Comercial: comercial@mdfusinagem.com.br</b></p>
					<p class="fone"><b>Compras: compras@mdfusinagem.com.br</b></p>
	<p class="fone"><b>Financeiro: financeiro@mdfusinagem.com.br</b></p>
				</div>
				</div>
				<div id="container">
					<h3 class="txtcontato">ORÇAMENTO</h3>
					<hr>
					  	<form id="contact" action="contato.php" method="post">
			              <div class="form_settings">
			                <p class="fone">Nome</p>
			                <p><input class="contact" type="text" name="nome" value=" " /></p>
			                <p></p>
			                <p class="fone">Email</p>
			                <p><input class="contact" type="text" name="email" value= " " /></p>
			                <p></p>
			                <p class="fone">Mensagem</p>
			                <div id="textarea"><p><textarea class="contact" rows="4" cols="50" name="mensagem" value = " ">
			                </textarea></p></div>
			               	<br>	                
			                <p><input class="submit" type="submit" name="BTEnvia" value="Enviar." /></p>

			              </div>
			          	</form>
				</div>
				<div id="textocontato">
					<p class="italic"></p>
				</div>
			</div>
			<div id="rodape" class="shadow">
				<div id="info">
					<hr>
					<p>Rua Arcipreste de Ezequias, 187 - Vila São José - 04271-060 - São Paulo - SP</p>
					<p><b>TEL:(11) 2062-7879 / (11) 2062-7755</b></p>
					<p>E-mail: comercial@mdfusinagem.com.br</p>
					<p>MDF INDÚSTRIAS COMÉRCIO E PRESTAÇÃO DE SERVIÇOS LTDA. </p>
				</div>
			</div>
			
		</div>
		
		
	
	</body>
</html>