<?php
  $nome = $_POST['nome'];
  $email= $_POST['email'];
  $mensagem= $_POST['mensagem'];
  $to = "leonardo.glima@live.com";
  $assunto = "Mensagem de ".$email.com
  mail($to,$assunto,$mensagem);
?>
