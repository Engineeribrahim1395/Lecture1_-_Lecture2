<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Arithmetic Operations</title>
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
        .container {
            background: #ffffff;
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h1 {
            color: #2c3e50;
            text-align: center;
        }
        p {
            font-size: 18px;
            color: #34495e;
            margin: 8px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Numeric variables
        $num1 = 15;
        $num2 = 4;

        // Calculations
        $sum = $num1 + $num2;
        $difference = $num1 - $num2;
        $product = $num1 * $num2;
        $division = $num1 / $num2;
        $remainder = $num1 % $num2;

        // Display results with labels
        echo "<h1>Arithmetic Results</h1>";
        echo "<p>Sum: " . $sum . "</p>";
        echo "<p>Difference: " . $difference . "</p>";
        echo "<p>Multiplication: " . $product . "</p>";
        echo "<p>Division: " . $division . "</p>";
        echo "<p>Remainder: " . $remainder . "</p>";
        ?>
    </div>
</body>
</html>
