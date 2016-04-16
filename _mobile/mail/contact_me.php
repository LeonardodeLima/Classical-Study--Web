<?php
/* Check for empty fields
if(empty($_POST['nome'])  		||
   empty($_POST['email']) 		||
   empty($_POST['telefone']) 		||
   empty($_POST['mensagem'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
  */
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];


//PEGA OS DADOS ENVIADOS PELO FORMULÁRIO  
//Pegando os valores do formulário!


//controladores de saida de arquivos
$rand = rand();
// define o timezone
date_default_timezone_set('America/Sao_Paulo');
 
// define o locale para pt-br
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
 
// exibe a data em pt-br
$data = strftime('%A, %d de %B de %Y %H:%M');
$id = strftime('%A-%d-%b');

//Agora atribuímos tudo para uma variável só.

$documento = "nome: $name 

              Email: $email_address
              Data: $data

Mensagem: 
 $message";

//Aqui você coloca o nome do arquivo que será gravado

$arquivo = $id."_id-".$rand.".txt";
echo $arquivo;

//Abrimos o arquivo que será gravado.

$abrir = fopen($arquivo, "a");

//Gravamos no arquivo

$gravar = fwrite($abrir, $documento);

//Testa se foi gravado

if($gravar){
echo"Gravados com sucesso!";
}else{
echo"Não gravado!";
}
 




/*
 Create the email and send the message
$to = 'contato@filmedodia.freeiz.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Contato do Website:  $name";
$email_body = "Você recebeu uma nova mensagem deu seu website, formulário de contatp.\n\n"."Aqui os detalhes:\n\nNome: $name\n\nEmail: $email_address\n\nTelefone: $phone\n\nMessagem:\n$message";
$headers = "From: noreply@ilmedodia.freeiz.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;


function sendMail($to,$email_subject,$email_body,$headers){
    require_once('phpmailer/class.phpmailer.php');
    $mail = new PHPMailer(true);

    $mail->IsSMTP();
    try {
      $mail->SMTPAuth   = true;                 
      $mail->Host       = 'mx.000webhost.com';     
     // $mail->SMTPSecure = "tls";                #remova se nao usar gmail
     //$mail->Port       = 587;                  #remova se nao usar gmail
      $mail->Username   = 'contato@filmedodia.freeiz.com'; 
      $mail->Password   = 'winchester1010';
      $mail->AddAddress($to);
     $mail->AddReplyTo($headers);
      $mail->SetFrom($headers);
      $mail->Subject = $email_subject;
      $mail->MsgHTML($email_body);
      $mail->Send();     
      $envio = true;
    } catch (phpmailerException $e) {
      $envio = false;
    } catch (Exception $e) {
      $envio = false;
    }
    return $envio;
}		*/	
?>