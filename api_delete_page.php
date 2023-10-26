<?php
#session_start();

// if (isset($_SESSION['username'])) {

//     header("Location: index.php");
//     exit;
// }

//include_once 'config.php';
/*$username=$pass="";

$nameErr=$passErr=$LoginErr="";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }*/
?>

<!DOCTYPE html>
<html>

<head>
    <title>DELETE</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <script type="text/javascript" src="scripts.js"></script>
</head>

<body>

    <div class="wrapper">
        <h1>DELETE</h1><br>
        <center>
            <H3>New User?<a href="signin1.php" onmouseover="style.color='red'" onmouseout="style.color='black'"> CLICK TO SIGN IN </a></H3>
        </center><br>
        <div id="error_message"></div>
        <form action="api_delete_call.php" method="POST">
            <div class="input_field">
                <label for="username">Username<span class="error">*</label>
                <br>
                <input type="text" name="username" id="username" placeholder="USERNAME">
            </div>
            <br>

            <div class="input_field">
                <label for="password">Password<span class="error">*</label>
                <br>
                <input type="password" name="password" id="password" placeholder="PASSWORD">
            </div>
            <br>
            <div class="btn">
                <button type="submit" onmouseover="style.color='red'" onmouseout="style.color='black'"> DELETE</button>
            </div>
            <br>
            <div class="btn">
                <button type="submit" onmouseover="style.color='red'" onmouseout="style.color='black'"><a href="forgotpass.php">Forgot Password</a></button>
            </div>
        </form>
    </div>
</body>

</html>