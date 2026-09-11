<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f9fc;
            padding: 20px;
        }
        h1 {
            color: #2c3e50;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background: #ffffff;
            margin: 5px 0;
            padding: 10px;
            border-radius: 6px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .count {
            margin-top: 15px;
            font-weight: bold;
            color: #34495e;
        }
    </style>
</head>
<body>
    <?php
    // Array of student names
    $students = ["Ali Ahmad", "Sara Khan", "Omar Farid", "Fatima Rahimi", "Bilal Hussain"];

    echo "<h1>Student List</h1>";
    echo "<ul>";

    // Use foreach to generate list with sequence number
    $seq = 1;
    foreach ($students as $student) {
        echo "<li>" . $seq . ". " . $student . "</li>";
        $seq++;
    }

    echo "</ul>";

    // Display total number of students
    $total = count($students);
    echo "<p class='count'>Total Students: " . $total . "</p>";
    ?>
</body>
</html>

 