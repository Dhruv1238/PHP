<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (!empty($_POST["username"])) {
        setcookie("username", $_POST["username"], time() + 60); // Store username in cookie for 1 min
        header("Location: exp2.php"); // Redirect to page2.php
        exit();
    }
    ?>

    <form action="" method="post" style="border: 2px solid blue; text-align:center; width: 400px;">
        <p>
            Username: <input name="username" type="text" class="input-field">
        </p>
        <p>
            Password: <input name="password" type="password" class="input-field">
        </p>
        <p>
            <input type="submit" value="Login">
        </p>
    </form>






</body>

</html>