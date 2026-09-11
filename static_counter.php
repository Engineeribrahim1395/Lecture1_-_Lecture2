<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Local vs Static Counter</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f7f9fc; padding: 20px; }
        h2 { color: #2c3e50; margin-top: 20px; }
        p { font-size: 16px; color: #34495e; }
    </style>
</head>
<body>
    <?php
    echo "<h2>Normal Local Counter</h2>";
    function normalCounter() {
        $count = 0; // reinitialized every time
        $count++;
        return $count;
    }

    echo "<p>Call 1: " . normalCounter() . "</p>";
    echo "<p>Call 2: " . normalCounter() . "</p>";
    echo "<p>Call 3: " . normalCounter() . "</p>";

    echo "<h2>Static Counter</h2>";
    function staticCounter() {
        static $count = 0; // initialized only once
        $count++;
        return $count;
    }

    echo "<p>Call 1: " . staticCounter() . "</p>";
    echo "<p>Call 2: " . staticCounter() . "</p>";
    echo "<p>Call 3: " . staticCounter() . "</p>";
    ?>
</body>
</html>
