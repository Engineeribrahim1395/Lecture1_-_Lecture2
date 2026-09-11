<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Number Operations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f9fc;
            padding: 20px;
        }
        h2 {
            color: #2c3e50;
            margin-top: 20px;
        }
        p {
            font-size: 16px;
            color: #34495e;
        }
    </style>
</head>
<body>
    <?php
    // 1. Print numbers 1–20 using while
    echo "<h2>Numbers 1–20 (while loop)</h2>";
    $i = 1;
    while ($i <= 20) {
        echo $i . " ";
        $i++;
    }

    // 2. Print numbers 20–1 using for
    echo "<h2>Numbers 20–1 (for loop)</h2>";
    for ($j = 20; $j >= 1; $j--) {
        echo $j . " ";
    }

    // 3. Print only even numbers (1–20)
    echo "<h2>Even Numbers (1–20)</h2>";
    for ($k = 2; $k <= 20; $k += 2) {
        echo $k . " ";
    }

    // 4. Print only odd numbers (1–20)
    echo "<h2>Odd Numbers (1–20)</h2>";
    for ($m = 1; $m <= 20; $m += 2) {
        echo $m . " ";
    }

    // 5. Calculate sum of numbers 1–100
    echo "<h2>Sum of Numbers 1–100</h2>";
    $sum = 0;
    for ($n = 1; $n <= 100; $n++) {
        $sum += $n;
    }
    echo "<p>Total Sum: " . $sum . "</p>";
    ?>
</body>
</html>
 