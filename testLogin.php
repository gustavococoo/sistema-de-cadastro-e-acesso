<?php

  session_start();

    if(isset($_POST['submit']))
    {
    include_once('config.php');

      $cpf = preg_replace("/[^0-9]/", "", $_POST['cpf']);
      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $telefone = preg_replace("/[^0-9]/", "", $_POST['telefone']);

      $stmt = $conexao->prepare("INSERT INTO cadastros(cpf, nome, email, telefone) VALUES (?, ?, ?, ?)");
      $stmt->bind_param("ssss", $cpf, $nome, $email, $telefone);
  
      if ($stmt->execute()) {
        $_SESSION['cpf'] = $cpf;
        header('Location: sistema.php');
          exit();
      } else {
          // Tratar erro no cadastro, se necessário
        echo "Erro no cadastro: " . $stmt->error;
      }
  }
    

?>