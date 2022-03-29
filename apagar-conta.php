<?php
	if (isset($_GET["id"])){
		
		$conexao = new PDO('mysql:host=localhost;dbname=pdo', "root", "");

		$sql = "DELETE FROM contas WHERE id = :Id";

		$pstmQuery = $conexao->prepare($sql);

		$pstmQuery->bindParam(":Id", $_GET["id"], PDO::PARAM_INT);

		$pstmQuery->execute();

		if ($pstmQuery->rowCount() > 0){
				echo "Conta apagada com sucesso!";
		}
	}
?>
<div class="container">
<a href="http://localhost/pdo-php/" button type="button" class="btnbtn btn-primary">Home Page</button>
   
  </div>