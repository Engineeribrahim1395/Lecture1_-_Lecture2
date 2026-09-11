<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Salary Calculation</title>
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
        .card {
            background: #ffffff;
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
        }
        h1 {
            color: #2c3e50;
        }
        p {
            font-size: 18px;
            color: #34495e;
            margin: 8px 0;
        }
    </style>
</head>
<body>
    <div class="card">
        <?php
        // Test different salary values here
        $salary = 45000;  
        $bonus = 0;
        $threshold = 40000;  // chosen threshold

        if ($salary >= $threshold) {
            $bonus = 5000; // fixed bonus applied
        }

        $finalSalary = $salary + $bonus;

        echo "<h1>Salary Calculation</h1>";
        echo "<p>Original Salary: $" . $salary . "</p>";
        echo "<p>Bonus: $" . $bonus . "</p>";
        echo "<p>Final Salary: $" . $finalSalary . "</p>";
        ?>
    </div>
</body>
</html>
