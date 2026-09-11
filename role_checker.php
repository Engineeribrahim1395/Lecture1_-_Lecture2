<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Role-Based Dashboard</title>
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
        // Change this value to test different roles
        $role = "teacher";

        echo "<h1>Dashboard</h1>";

        switch ($role) {
            case "admin":
                echo "<p>Welcome Admin! You have full control over the system.</p>";
                break;
            case "teacher":
                echo "<p>Welcome Teacher! You can manage classes and assignments.</p>";
                break;
            case "student":
                echo "<p>Welcome Student! You can view your courses and grades.</p>";
                break;
            case "guest":
                echo "<p>Welcome Guest! You have limited access to the system.</p>";
                break;
            default:
                echo "<p>Unknown role. Please contact support.</p>";
        }
        ?>
    </div>
</body>
</html>
