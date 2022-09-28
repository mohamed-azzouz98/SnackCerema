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
    <title>Connexion</title>
</head>
<body>
    <main>
    <section>
            <section>
                <form action="" method="post">

                    <label for="mailLogin">Mail : </label>
                    <input type="text" name="mailLogin" id="mailLogin">

                    <label for="passwordLogin">Password : </label>
                    <input type="password" name="passwordLogin" id="passwordLogin">

                    <br>

                    <input type="submit" value="Login" name="login" class = 'registerButton'>

                </form>
            </section>
    </section>
    </main>
    
</body>
</html>