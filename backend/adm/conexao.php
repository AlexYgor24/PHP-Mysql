<?php
try {
  $conn = new PDO('mysql:host=localhost;dbname=escola2022', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo 'Conexão Sucesso!!!!!';
} catch(PDOException $e) {
    echo 'Falha na conexão' . $e->getMessage();
}
?>