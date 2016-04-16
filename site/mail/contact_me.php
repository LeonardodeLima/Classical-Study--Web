<?php

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
?>