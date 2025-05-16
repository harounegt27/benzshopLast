<!DOCTYPE html>
<html>
<head><title>Register</title></head>
<body>
<h2>Register</h2>
<form action="/AuthController/registerUser" method="post">
    Nom: <input type="text" name="nom" required><br>
    Email: <input type="email" name="email" required><br>
    Mot de passe: <input type="password" name="motDePasse" required><br>
    <button type="submit">Créer un compte</button>
</form>
<a href="/AuthController/signin">Se connecter</a>
</body>
</html>
