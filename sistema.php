<?php 
session_start();
//print_r($_SESSION);
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) 
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
else {
$logado = $_SESSION['email'];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SISTEMA | GN</title>
    <title>Sistema</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: url('guitar.jpg');
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
           
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    <div class="d-flex">
        <a href="sair.php" class="btn btn-danger me-5">Sair</a>
    </div>
</nav>
<br>
<?php 
print "<h1>Bem vindo $logado </h1>"
?>
  
</body>
</html>