<?php
  // $receiving_email_address = 'brunomartello10@gmail.com';

  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];

  // // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  // /*
  // $contact->smtp = array(
  //   'host' => 'example.com',
  //   'username' => 'example',
  //   'password' => 'pass',
  //   'port' => '587'
  // );
  // */

  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // echo $contact->send();
 
    //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
    //====================================================
    $email_remetente = "comercial@mdfusinagem.com.br"; // deve ser um email do dominio
    //====================================================
   
   
    //Configurações do email, ajustar conforme necessidade
    //====================================================
    $email_destinatario = "brunomartello10@gmail.com"; // qualquer email pode receber os dados
    $email_reply = "$email";
    $email_assunto = "Contato pelo Site";
    //====================================================
   
   
    //Variaveis de POST, Alterar somente se necessário
    //====================================================
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = "";
    $mensagem = $_POST['message'];
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
?>
