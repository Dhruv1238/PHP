<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    try {
        $connection = new PDO('mysql:host=localhost;dbname=TEST', 'root', '');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected Successfully";
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    try {
        // $Id=5;
        $query = "SELECT * FROM users ";
        $statement = $connection->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        echo "<pre>";
        foreach ($result as $row) {
            $ID = $row['ID'];
            echo $row['ID'] . " " . $row['UserName'] . " " . $row['UserNumber'] . " " . $row['BirthDate'] .
                "
            <form action='./Practice/pdo.php' method= 'post'>
            Delete: <input type='submit' name='Delete' value=$ID>
            </form>
            ";
        }
        echo "</pre>";
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    ?>
    <form action="./Practice/pdo.php" method="post">
        <input type="number" name="Id" placeholder="Enter ID">
        <input type="text" name="UserName" placeholder="Enter Name">
        <input type="text" name="UserNumber" placeholder="Enter Number">
        <input type="date" name="BirthDate" placeholder="Enter Date">
        <!-- <input type="submit" name="submit" value="Submit"> -->
        <button name="insert" type="submit">Insert</button>
    </form>
</body>

</html>