<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handling Form</title>
</head>
<body>
    <h1>Handling Form</h1>
    <!--
    
    variable global/superglobal
    variable system
    1. POST
    2. GET
    3. REQUEST
    4. SESSION
    5. COOKIE
    6. SERVER

    -->
    <form action="" method="POST">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br><br>
        <input type="submit" value="Submit">
    </form>
    <?php
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        echo "email yang anda masukkan adalah: $email <br>";
        echo "password yang anda masukkan adalah: $password <br>";
    }
    ?>
</body>
</html>