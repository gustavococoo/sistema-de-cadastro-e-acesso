<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body{
            background-color: black;
        }
        div{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
        }
        input{
            padding: 15px;
            width: 300px;
            border: none;
            border-radius: 8px;
            outline: none;
            font-size: 15px;
            letter-spacing: 0.5px;
            color: white;
            background-color: #555;
            font-weight: bold   
        }
        .inputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
        h3{
            padding: 10px;
            text-align: center;
            letter-spacing: 0.5px;
            margin: auto;
        }
        p {
            text-align: center;
            color: white;
            margin-top: 20px;
            position: fixed; 
            bottom: 0; 
            width: 100%; 
        }
        .centered-image {
            width: 10%; 
            position: absolute;
            top: 12%;
            left: 45%;
        }
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <img class="centered-image" src="logo_cest.png" alt="">
    <div>
        <h3>Seja bem-vindo!</h3>
        <form action="testLogin.php" method="POST">
            
            <input type="text" name="cpf" id="cpf" placeholder="CPF" minlength="11" maxlength="11" required oninput="formatarCPF(this)">
            <br><br>

            <input type="text" name="nome" placeholder="Nome Completo"> 
            <br><br>

            <input type="text" name="email" placeholder="Email"> 
            <br><br>

            <input type="tel" name="telefone" id="telefone" placeholder="Telefone" minlength="11" maxlength="11" required oninput="formatarTelefone(this)">
            <br><br>
            
            <input class="inputSubmit" type="submit" name="submit" value="Entrar">
        </form>
    </div>
    <p>Internet exclusiva para uso de alunos e visitantes da Faculdade Santa Terezinha - CEST.</p>

    <script>
        function formatarCPF(campo) {
            var valor = campo.value.replace(/\D/g, '');
            valor = valor.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
            campo.value = valor;
        }

        function formatarTelefone(campo) {
            var valor = campo.value.replace(/\D/g, '');
            valor = valor.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
            campo.value = valor;
        }
    </script>
</body>
</html>