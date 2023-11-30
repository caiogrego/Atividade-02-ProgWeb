<?php
  $servidor = "127.0.0.1";
  $usuario = "professor";
  $senha = "123";
  $banco = "db_web";
  try {
    $conn = new PDO(
        "mysql:host=$servidor;dbname=$banco",
        $usuario, $senha);
    // Configura erros
    $conn->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);
    
    // Define SQL para criar uma tabela
    $sql = "
    INSERT INTO usuarios(nome,sobrenome,email)
    VALUES ('Maria','Clara', 'mclara@mail.com');
    ";
    $conn->exec($sql);
    echo "Comando executado com sucesso!";
  } catch (PDOException $e) {
    echo "Erro ao conectar com o banco: " .
        $e->getMessage();
  }
  
?>