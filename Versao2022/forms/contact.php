<?php
  //Configuração de envio de email  
  //====================================================
  $from = "site@mdfusinagem.com.br";
  $to = "brunomartello10@gmail.com";
  //====================================================
  
  //Dados do FORM
  //====================================================
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  //====================================================
  
  //Monta o Corpo da Mensagem
  //====================================================
  $headers = "From:" . $from;
  $email_conteudo = "Nome: $name \n"; 
  $email_conteudo .= "\n";
  $email_conteudo .= "Email para resposta: $email \n"; 
  $email_conteudo .= "\n";
  $email_conteudo .= "Assunto: $subject \n"; 
  $email_conteudo .= "\n";
  $email_conteudo .= "Mensagem: $message \n";
  //====================================================
  
  //Enviando o email
  //====================================================
  if (mail($to,$subject,$email_conteudo, $headers)){
    echo "OK";
  }
  else{ 
    echo "Error";
  }
  //====================================================
?>