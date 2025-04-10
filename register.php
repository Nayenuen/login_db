<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>LogIn</title>
</head>
<body>
    <form action="registration.php" method="post" name="signup-form">
        <div class="form-element">
        <label>Usuario</label>
        <input type="text" name="username" pattern="[a-zA-Z0-9]+" maxlength="10" required><br><br>
        </div>

        <div class="form-element">
        <label>Email</label>
        <input type="text" name="email" maxlength="30" required><br><br>
        </div>

        <div class="form-element">
        <label>Password</label>
        <input type="password" name="password" pattern="[a-zA-Z0-9]+" maxlength="10" required><br><br>
        </div>

        <button type="submit" name="register" value="register">Enviar</button>

</form>

</body>
</html>