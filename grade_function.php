<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f9fc;
            padding: 20px;
        }
        table {
            border-collapse: collapse;
            width: 600px;
            margin: auto;
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
        .passed {
            color: green;
            font-weight: bold;
        }
        .failed {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    // Functions
    function getGrade($marks) {
        if ($marks >= 80) return "A (Excellent)";
        elseif ($marks >= 70) return "B (Good)";
        elseif ($marks >= 60) return "C (Average)";
        elseif ($marks >= 50) return "D (Needs Improvement)";
        else return "F (Fail)";
    }

    function isPassed($marks) {
        return $marks >= 50 ? "Passed" : "Failed";
    }

    // Array of students with marks
    $students = [
        ["name" => "Ali Ahmad", "marks" => 85],
        ["name" => "Sara Khan", "marks" => 72],
        ["name" => "Omar Farid", "marks" => 58],
        ["name" => "Fatima Rahimi", "marks" => 49],
        ["name" => "Bilal Hussain", "marks" => 90]
    ];

    echo "<h1 style='text-align:center;'>Student Results</h1>";
    echo "<table>";
    echo "<tr><th>Seq</th><th>Name</th><th>Marks</th><th>Grade</th><th>Result</th></tr>";

    $seq = 1;
    foreach ($students as $student) {
        $grade = getGrade($student["marks"]);
        $result = isPassed($student["marks"]);
        $class = ($result == "Passed") ? "passed" : "failed";

        echo "<tr>";
        echo "<td>" . $seq . "</td>";
        echo "<td>" . $student["name"] . "</td>";
        echo "<td>" . $student["marks"] . "</td>";
        echo "<td>" . $grade . "</td>";
        echo "<td class='" . $class . "'>" . $result . "</td>";
        echo "</tr>";

        $seq++;
    }

    echo "</table>";
    ?>
</body>
</html>
