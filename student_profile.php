<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f3;
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
        // Variables
        $name = "Muhammad Ibrahim";
        $age = 29;
        $semester = "5th Semester";
        $department = "Computer Science";

        // Display using string concatenation
        echo "<h1>Student Profile</h1>";
        echo "<p>Name: " . $name . "</p>";
        echo "<p>Age: " . $age . "</p>";
        echo "<p>Semester: " . $semester . "</p>";
        echo "<p>Department: " . $department . "</p>";
        ?>
    </div>
</body>
</html>
