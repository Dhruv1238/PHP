<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    try{
        $connection = new PDO('mysql:host=localhost;dbname=TEST', 'root', '');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected Successfully";
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    try{
        // $Id=5;
        $query = "SELECT * FROM users WHERE ID=5";
        $statement = $connection->prepare($query);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        echo "<pre>";
        print_r($result);
        echo "</pre>";
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    ?>
</body>
</html>