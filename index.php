<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>CONTAS</h2>
  <p></p>            
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Cliente</th>
        <th>Saldo</th>
        <th>Transeferir</th>
        <th>Apagar</th>
        <th>Editar</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  


<?php
	try{
		$conexao = new PDO('mysql:host=localhost;dbname=pdo', "root", "");

		$sql = "SELECT id, nome, saldo FROM contas ORDER BY id ASC";

		foreach($conexao->query($sql) as $row){
            echo "<thead>";
			echo "<tr>";
			echo "<th>".$row["id"]."</th>";
			echo "<th>".$row["nome"]."</th>";
			echo "<th>".$row["saldo"]."</th>";
			echo "<th><a href='transeferir.php?id=".$row["id"]."'>Transferir Valor</th>";
			echo "<th><a href='apagar-conta.php?id=".$row["id"]."'>X</th>";
			echo "<th><a href='editar-conta.php?id=".$row["id"]."'>OK</th>";
			echo "</tr>";
            echo "</thead>";
		}

	} catch (PDOException $e){
		echo "Ocorreu um erro: ".$e->getMessage();	
	}
?>


</table>
<a href="nova-conta.php">Cadastrar</a>
</div>

</body>
</html>
