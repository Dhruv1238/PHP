<?php
    if(isset($_POST["username"]) || isset($_POST["password"]) || isset($_POST["cookie3"])){
    setcookie("username", $_POST["username"], time() + 60); // Store username in cookie for 1 min
    setcookie("password", $_POST["password"], time() + 60); // Store username in cookie for 1 min
    setcookie("cookie3", $POST["cookie3"], time() +60);
    header("Location: exp2.php"); // Redirect to page2.php
    }
    elseif(empty($_POST["username"])){
        echo "Please Proivde Username";
    }
    elseif(empty($_POST["password"])){
        echo "Please Proivde Password";
    }
    elseif(empty($_POST['cookie3'])){
        echo "Please Proivde Date";
    }
    else{
        echo "Please Proivde All Details";
    }
?>

