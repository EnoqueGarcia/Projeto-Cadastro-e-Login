<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: url('guitar.jpg');
    text-align: center;
color: white;
}

.box {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(0, 0, 0, 0.836);
    padding: 30px;
    border-radius: 10px;
}
        
a {
    text-decoration: none;
    color: white;
    border: 2px solid rgb(255, 255, 255);
    border-radius: 10px;
    padding: 10px;
}

a:hover {
    background-color: rgb(160, 151, 151);   
}
    </style>
</head>
<body>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastre-se</a>
    </div>
</body>
</html>