<!DOCTYPE HTML>
<html>

<head>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>
    <?php
    ?>
    <?php
    $nameErr = $emailErr = $genderErr = $websiteErr = "*";
    $name  = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $gender = $comment = $website = "";

    if ($_POST["name"]) {
        $_POST["name"] = trim($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $_POST["name"])) {
            $nameErr = "Only letters and white space allowed";
            $_POST["name"] = "";
        }
    } else {
        $nameErr = "Name is required";
    }

    if ($_POST['$email']) {
        $_POST['$email'] = trim($_POST['$email']);
        if (!filter_var($_POST['$email'], FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            $_POST['$email'] = "";
        }
    } elseif (empty($_POST["email"])) {
        $emailErr = "Email ID is mandatory";
    }

    if ($_POST["website"]) {
        // $_POST["website"] = trim($_POST["website"]);
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $_POST["website"])) {
            $websiteErr = "Invalid URL";
            $_POST["website"] = "";
        }
    } else {
        $websiteErr = "Website is required";
    }

    if (!$_POST['gender']) {
        $genderErr = "Please Select A gender";
        $_POST['gender'] = "";
    }
    ?>

    <h2>PHP Form Validation</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name"> <span class="error"><?php echo $nameErr; ?></span>
        <br><br>
        Email: <input type="email" name="email"> <span class="error"><?php echo $emailErr; ?></span>
        <br><br>
        Comment : <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        Website: <input type="text" name="website"> <span class="error"><?php echo $websiteErr; ?></span>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span class="error"><?php echo $genderErr; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">

    </form>

    <?php
    // header("Location: /PHP/exp2.php");
    // header("Location: /PHP/exp2.php?name=" . urlencode($_POST['name']));
    ?>

    <?php
    if ($nameErr == "*" && $emailErr == "*" && $websiteErr == "*" && $genderErr == "*") {
        echo "<h2>Your Input:</h2>";
        echo $_POST['name'];
        echo "<br>";
        echo $_POST['email'];
        echo "<br>";
        echo $_POST['website'];
        echo "<br>";
        echo $_POST['comment'];
        echo "<br>";
        echo $_POST["gender"];;
    } else {
        echo "<h2>Invalid Input</h2>";
    }
    ?>

</body>

</html>