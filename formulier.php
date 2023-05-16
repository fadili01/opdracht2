<?php
 if(isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    echo $username;
    echo $password;
 }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Formulier</title>
</head>
<body>
    <form method="post">
        <label for="username">Gebruikersnaam:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Wachtwoord:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" name= "submit" value="submit">
    </form>

</body>
</html>
