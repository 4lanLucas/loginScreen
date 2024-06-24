<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="../css/registerStyle.css">
    
</head>
<body>
    <div class="form-div">
        <form method="POST">
            <ul style="list-style-type: none">
                <li>Nome: <input type="text" name="username" class="txtField" id="txtNameField"></li>
                <li>Senha: <input type="password" name="password1" class="txtField" id="passField1"></li>
                <li>Repita: <input type="password" name="password2" class="txtField" id="passField2"></li>
                <li>
                    <div class="btn-box">
                        <input type="submit" name="submitBtn" value="enviar" class="btn" id="submitBtn">
                        <input type="submit" name="return" value="return" class="btn" id="returnBtn">
                    </div>
                </li>
                <li></li>
            </ul>
            <label id="serverAlert">-</label>
        </form>
    </div>
    <script src="../jQuery/jquery-3.7.1.min.js"></script>
    <script src="../js/registerScript.js"></script>
</body>
</html>