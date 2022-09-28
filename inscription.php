<?php

// require_once('config_db.php');

// $pdo_options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
// $db = new PDO(DSN, DB_USER, DB_PASS, $pdo_options);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>

<body>
    <main>
        <section class="containerForm">
            <section class="formRegister">
                <form action="index.php" method="post">

                    <label for="nom">Nom : </label>
                    <input type="text" name="nomRegister" id="nomRegister" pattern="[A-Za-z0-9]{5,20}" required>

                    <br>

                    <label for="email">Email : </label>
                    <input type="text" name="emailRegister" id="emailRegister" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>

                    <br>

                    <label for="phoneNumber">Téléphone : </label>
                    <input type="tel" id="phone" name="phoneRegister" required>

                    <br>

                    <label for="password">Password : </label>
                    <input type="password" name="passwordRegister" id="passwordRegister" minlength="8" required>

                    <br>

                    <label for="confirmPassword">Confirm Password : </label>
                    <input type="password" name="confirmPasswordRegister" id="confirmPasswordRegister" minlength="8" required>

                    <br>

                    <input type="submit" value="Register" name="register" class="registerButton">

                </form>
                <a href="connexion.php">J'ai déja un compte</a>
            </section>
    </main>

</body>

</html>