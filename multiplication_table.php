<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Multiplication Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f9fc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        table {
            border-collapse: collapse;
            width: 400px;
            background: #ffffff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #2c3e50;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #2c3e50;
            color: #ecf0f1;
        }
        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div>
        <?php
        // Number variable
        $number = 7;

        echo "<h1>Multiplication Table for $number</h1>";
        echo "<table>";
        echo "<tr><th>Expression</th><th>Result</th></tr>";

        // Generate multiplication table using for loop
        for ($i = 1; $i <= 10; $i++) {
            $result = $number * $i;
            echo "<tr><td>$number × $i</td><td>$result</td></tr>";
        }

        echo "</table>";
        ?>
    </div>
</body>
</html>
 