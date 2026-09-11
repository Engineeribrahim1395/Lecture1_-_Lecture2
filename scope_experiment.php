<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Global Variable Demo</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f7f9fc; padding: 20px; }
        h2 { color: #2c3e50; margin-top: 20px; }
        p { font-size: 16px; color: #34495e; }
    </style>
</head>
<body>
    <?php
    // Global variable
    $number = 10;

    echo "<h2>Attempt to access directly inside function</h2>";
    function directAccess() {
        // This will NOT work as expected because $number is not in local scope
        return isset($number) ? $number : "Undefined inside function";
    }
    echo "<p>Result: " . directAccess() . "</p>";

    echo "<h2>Access using 'global'</h2>";
    function useGlobal() {
        global $number; // explicitly bring global variable into local scope
        return $number;
    }
    echo "<p>Result: " . useGlobal() . "</p>";

    echo "<h2>Access by passing as parameter</h2>";
    function useParameter($num) {
        return $num;
    }
    echo "<p>Result: " . useParameter($number) . "</p>";
    ?>
</body>
</html>
