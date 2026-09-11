<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Marks Evaluation</title>
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
        }
    </style>
</head>
<body>
    <div class="card">
        <?php
        // Change this value to test boundaries
        $marks = 79;

        echo "<h1>Marks Evaluation</h1>";

        if ($marks >= 80) {
            echo "<p>Excellent</p>";
        } elseif ($marks >= 60) {
            echo "<p>Good</p>";
        } elseif ($marks >= 50) {
            echo "<p>Passed</p>";
        } else {
            echo "<p>Failed</p>";
        }
        ?>
    </div>
</body>
</html>
