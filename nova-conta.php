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
<form action ="nova-conta-ok.php" method ="POST">
<div class="container">
  <h2>new account</h2>
  <!--<p>Tabela de contas</p>  -->          
  <table  class="table table-dark" >
    <thead>
      <tr>
        <th width="20%">Nome:</th>
        <th><input type="text"  name="txtNome"></th>
        </tr>

        <tr>
        <th>Saldo:</th>
        <th><input type="text" name="txtSaldo"></th>
        </tr>

      
      
        <th></th>
       
        <th><input type="submit"value="Cadastar"></th>
      </tr>
    </thead>
    </table>
</div>
</form>
</body>