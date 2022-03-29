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
<form action ="transferir-ok.php" method ="POST">
<div class="container">
  <h2> Transeferir</h2>
  <!--<p>Tabela de contas</p>  -->          
  <table  class="table table-dark" >
    <thead>
      <tr>
        <th width="20%">ID Remetente:</th>
        <th><input type="text" value="<?php echo $_GET["id"]?>" name="txtIDR"></th>
        
      </tr>
        <tr>
        <th width="20%">ID Destinatario:</th>
        <th><input type="text" name="txtIDD"></th>
        </tr>
        <tr>
        <th>Valor:</th>
        <th><input type="text" name="txtValor"></th>
        </tr>
        <th>
        </th>
       
        <th><input type="submit"value="Transferir"></th>
      </tr>
    </thead>
    </table>
    <?php echo "<a href='http://localhost/pdo-php/'>Home Page</a>"; ?>

</div>
</form>
</body>
</html>