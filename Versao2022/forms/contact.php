<?php 
  // //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
  // //====================================================
  // $email_remetente = "comercial@mdfusinagem.com.br"; // deve ser um email do dominio
  // //====================================================
 
 
  // //Configurações do email, ajustar conforme necessidade
  // //====================================================
  // $email_destinatario = "brunomartello10@gmail.com"; // qualquer email pode receber os dados
  // $email_reply = $_POST['email'];
  // $email_assunto = $_POST['subject'];
  // //====================================================
 
 
  // //Variaveis de POST, Alterar somente se necessário
  // //====================================================
  // $nome = $_POST['name'];
  // $email = $_POST['email'];
  // $mensagem = $_POST['message'];
  // //====================================================
 
  // //Monta o Corpo da Mensagem
  // //====================================================
  // $email_conteudo = "<b>Nome:</b> $nome \n"; 
  // $email_conteudo .= "\n";
  // $email_conteudo .= "<b>Email:</b> $email \n"; 
  // $email_conteudo .= "\n";
  // $email_conteudo .= "<b>Mensagem\n</b>\n $message \n";
  // //====================================================
 
  // //Seta os Headers (Alerar somente caso necessario)
  // //====================================================
  // $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Subject: $email_assunto","Return-Path:  $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
  // //====================================================
 
 
  // //Enviando o email
  // //====================================================
  // if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){
  //   echo "<script type=\"text/javascript\">alert('Email enviado com sucesso!');</script>";
  // }
  // else{
  //    echo "<script type=\"text/javascript\">alert('Erro ao enviar, preencha novamente e clique em enviar.');</script>";
  // }
  // //====================================================
  

  $from = "site@mdfusinagem.com.br";
  $to = "brunomartello10@gmail.com";
  $subject = 'Contato pelo Site';
  $message = $_POST['message'];
  $headers = "From:" . $from;
  mail($to,$subject,$message, $headers);
  echo "OK";

?>