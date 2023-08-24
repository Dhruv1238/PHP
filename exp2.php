<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <h1>My first PHP page</h1>

    Welcome <?php echo $_POST["name"]; ?> |
   Your email address is <?php echo $_POST["email"]; ?> <br>
   Your Data Is Here

    <?php
    $students = array(
        array("name" => "John", "id" => "1234", "percentage" => "69%"),
        array("name" => "Mary", "id" => "2345", "percentage" => "89%"),
        array("name" => "Peter", "id" => "3456", "percentage" => "95%"),
        array("name" => "Sally", "id" => "4567", "percentage" => "75%")
    );
    // echo "Name: " . $students[3]["name"] . "<br>";

    echo "<table>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>ID</th>";
    echo "<th>Percentage</th>";
    echo "</tr>";
    foreach ($students as $key) {
        echo "<tr>";
        echo "<td>" . $key["name"] . "</td>";
        echo "<td>" . $key["id"] . "</td>";
        echo "<td>" . $key["percentage"] . "</td>";
        echo "</tr>";
    }
    ?>

 
</body>

</html>