<?php
session_start();

if (!isset($_SESSION['cpf'])) {
    header('Location: login.php');
}

$cpfLogado = $_SESSION['cpf'];  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <style>
        body{
            background-image: linear-gradient(to right, rgb(20, 150, 200), rgb(17, 50, 70));
            color: white;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <a href="sair.php" class="btn btn-danger me-5">Sair</a>
    </div>
    <h1>Acessou o sistema</h1>
    <p>CPF logado: <?php echo $cpfLogado; ?></p>
</body>
</html>
