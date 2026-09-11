<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Calculation</title>
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
            width: 420px;
            text-align: center;
        }
        h1 {
            color: #2c3e50;
            margin-bottom: 15px;
        }
        p {
            font-size: 16px;
            margin: 6px 0;
            color: #34495e;
        }
    </style>
</head>
<body>
    <div class="card">
        <?php
        // Functions
        function calculateTotal($price, $quantity) {
            return $price * $quantity;
        }

        function calculateDiscount($total, $rate) {
            return $total * ($rate / 100);
        }

        function calculatePayable($total, $discount) {
            return $total - $discount;
        }

        // Example values (change to test)
        $price = 120;
        $quantity = 3;
        $rate = 10; // discount rate in %

        // Calculations
        $total = calculateTotal($price, $quantity);
        $discount = calculateDiscount($total, $rate);
        $payable = calculatePayable($total, $discount);

        // Display results
        echo "<h1>Payment Calculation</h1>";
        echo "<p>Price per item: $" . $price . "</p>";
        echo "<p>Quantity: " . $quantity . "</p>";
        echo "<p>Total: $" . $total . "</p>";
        echo "<p>Discount (" . $rate . "%): $" . $discount . "</p>";
        echo "<p><strong>Final Payable: $" . $payable . "</strong></p>";
        ?>
    </div>
</body>
</html>
