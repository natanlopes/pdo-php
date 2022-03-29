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
    
<form action ="editar-conta-ok.php" method ="POST">
<?php
		$conexao = new PDO('mysql:host=localhost;dbname=pdo', "root", "");

		$sql = "SELECT id, nome, saldo FROM contas WHERE id = :Id";
		$prepareQuery = $conexao->prepare($sql);
		$prepareQuery->bindParam(":Id", $_GET["id"], PDO::PARAM_INT);
		$prepareQuery->execute();

		if ($row = $prepareQuery->fetch(PDO::FETCH_ASSOC)){
?>
<div class="container">
  <h2>Edit account</h2>
  <!--<p>Tabela de contas</p>  -->          
  <table  class="table table-dark" >
    <thead>
    <tr>
        <th width="20%">ID:</th>
        <th><input type="text" readonly="readonly" name="txtID" value="<?php echo $row["id"];?>"></th>
        </tr>
      <tr>
        <th width="20%">Nome:</th>
        <th><input type="text"  name="txtNome" value="<?php echo $row["nome"];?>"></th>
        </tr>

        <tr>
        <th>Saldo:</th>
        <th><input type="text"name="txtSaldo" value="<?php echo $row["saldo"];?>"></th>
        </tr>

      
      
        <th></th>
       
        <th><input type="submit"value="Editar"></th>
      </tr>
    </thead>
    </table>
</div>
</form>
<?php } ?>
<div class="container">
<a href="http://localhost/pdo-php/" button type="button" class="btnbtn btn-primary">Home Page</button>
   
  </div>
</body>