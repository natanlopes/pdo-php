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
  <h2> Contas</h2>
  <!--<p>Tabela de contas</p>  -->          
  <table class="table table-dark">
    <thead>
      <tr>
        <th>ID</th>
        <th>Cliente</th>
        <th>Saldo</th>
        <th>Transferir</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      
    </tbody>
 
<?php



try {
    $conexao = new PDO('mysql:host=localhost;dbname=pdo', "root", "");
     $sql = "SELECT * FROM contas ORDER BY id ASC";
    foreach ($conexao->query($sql) as $row) {
        echo "<thead>";
        echo "<tr>";
        echo "<tbody>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["nome"]."</td>";
        echo "<td>".$row["saldo"]."</td>";
        echo "<td><a href='transeferir.php'>Transferir Valor</td>";
        echo "</tr>";
        echo "</thead>";
        echo "</tbody>";
        
        
    }
} catch (PDOException $e) {
   echo "An error has occurred:". $e->getMessage() . "<br/>";
}

?>
 </table>
</div>

</body>
</html>
