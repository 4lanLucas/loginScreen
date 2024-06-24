<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/loginStyle.css">
    
</head>
<body>
    <div class="form-div">
        <form method="POST">
            <ul style="list-style-type: none">
                <li>Nome: <input type="text" name="username" class="txtField" id="txtNameField"></li>
                <li>Senha: <input type="password" name="password" class="txtField" id="txtPassField"></li>
                <li>
                    <div class="btn-box">
                        <input type="submit" name="submitBtn" value="enviar" class="btn" id="submitBtn">
                        <input type="submit" name="registerBtn" value="register" class="btn" id="registerBtn">
                    </div>
                </li>
            </ul>
            <label id="serverAlert" class ="response">-</label>
        </form>
    </div>
    <script src="jQuery/jquery-3.7.1.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>