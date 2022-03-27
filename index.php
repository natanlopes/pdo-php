<?php
try {
    $conexao = new PDO('mysql:host=localhost;dbname=pdo', "root", "");
} catch (PDOException $e) {
   echo "An error has occurred:". $e->getMessage() . "<br/>";
}

?>