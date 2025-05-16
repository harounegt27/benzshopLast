<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
<h2>Login</h2>
<form action="/AuthController/loginUser" method="post">
    Email: <input type="email" name="email" required><br>
    Mot de passe: <input type="password" name="motDePasse" required><br>
    <button type="submit">Se connecter</button>
</form>
<a href="AuthController/signup">Créer un compte</a>
</body>
</html>
