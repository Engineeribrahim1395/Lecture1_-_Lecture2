<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Result Card</title>
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
            width: 400px;
            text-align: center;
        }
        h1 {
            color: #2c3e50;
            margin-bottom: 10px;
        }
        p {
            font-size: 16px;
            color: #34495e;
            margin: 6px 0;
        }
        .status {
            font-weight: bold;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="card">
        <?php
        // Student variables (change these to test different records)
        $name = "Muhammad Ibrahim";
        $id = "CS2026-15";
        $subject = "Web Development II";
        $marks = 79;

        // Grade calculation
        if ($marks >= 80) {
            $grade = "A";
            $status = "Excellent performance!";
        } elseif ($marks >= 60) {
            $grade = "B";
            $status = "Good job, keep improving!";
        } elseif ($marks >= 50) {
            $grade = "C";
            $status = "You passed, but study harder.";
        } else {
            $grade = "F";
            $status = "Failed. Needs serious improvement.";
        }

        // Passed/Failed
        $result = ($marks >= 50) ? "Passed" : "Failed";

        // Display result card
        echo "<h1>Student Result Card</h1>";
        echo "<p><strong>Name:</strong> " . $name . "</p>";
        echo "<p><strong>ID:</strong> " . $id . "</p>";
        echo "<p><strong>Subject:</strong> " . $subject . "</p>";
        echo "<p><strong>Marks:</strong> " . $marks . "</p>";
        echo "<p><strong>Grade:</strong> " . $grade . "</p>";
        echo "<p><strong>Result:</strong> " . $result . "</p>";
        echo "<p class='status'>" . $status . "</p>";
        ?>
    </div>
</body>
</html>
