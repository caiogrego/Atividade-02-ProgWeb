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
    SELECT nome, sobrenome FROM usuarios";
    $dado = $conn->query($sql)->fetchAll();

    // Percorre dados e exibe
    foreach($dado as $item) {
      echo "Nome: {$item['nome']},
      Sobrenome: {$item['sobrenome']} <br>";
    }
    echo "Comando executado com sucesso!";
  } catch (PDOException $e) {
    echo "Erro ao conectar com o banco: " .
        $e->getMessage();
  }
  
?>