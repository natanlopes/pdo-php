

<?php
	if (isset($_POST["txtNome"])){
		
		$conexao = new PDO('mysql:host=localhost;dbname=pdo', "root", "");

		$sql = "INSERT INTO contas (nome, saldo) VALUES (:Nome, :Saldo)";

		$pstmQuery = $conexao->prepare($sql);

		$pstmQuery->bindParam(":Nome", $_POST["txtNome"], PDO::PARAM_STR);

		$pstmQuery->bindParam(":Saldo", $_POST["txtSaldo"], PDO::PARAM_STR);

		$pstmQuery->execute();

		if ($pstmQuery->rowCount() > 0){
				echo "Conta criada com sucesso!"."<br>";
				
		}
	}
?>

<?php echo "<a href='http://localhost/pdo-php/'>Home Page</a>"; ?>

