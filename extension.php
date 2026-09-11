<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice with Tax</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f9fc;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #2c3e50;
        }
        table {
            border-collapse: collapse;
            width: 700px;
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
        .total-row {
            font-weight: bold;
            background-color: #ecf0f1;
        }
        .discount {
            color: green;
        }
        .no-discount {
            color: red;
        }
    </style>
</head>
<body>
    <?php
    // Arrays for products, prices, and quantities
    $products   = ["Laptop", "Mouse", "Keyboard", "Monitor", "Headphones"];
    $prices     = [800, 25, 45, 200, 60];
    $quantities = [1, 2, 1, 1, 3];

    // Constant tax rate
    define("TAX_RATE", 8); // 8%

    // Functions
    function calculateLineTotal($price, $quantity) {
        return $price * $quantity;
    }

    function calculateDiscount($subtotal, $rate) {
        return $subtotal * ($rate / 100);
    }

    function calculateTax($amount) {
        return $amount * (TAX_RATE / 100);
    }

    function calculateFinalPayable($subtotal, $discount, $tax) {
        return $subtotal - $discount + $tax;
    }

    // Invoice calculations
    $subtotal = 0;
    echo "<h1>Invoice</h1>";
    echo "<table>";
    echo "<tr><th>Seq</th><th>Product</th><th>Price</th><th>Quantity</th><th>Line Total</th></tr>";

    for ($i = 0; $i < count($products); $i++) {
        $lineTotal = calculateLineTotal($prices[$i], $quantities[$i]);
        $subtotal += $lineTotal;

        echo "<tr>";
        echo "<td>" . ($i+1) . "</td>";
        echo "<td>" . $products[$i] . "</td>";
        echo "<td>$" . $prices[$i] . "</td>";
        echo "<td>" . $quantities[$i] . "</td>";
        echo "<td>$" . $lineTotal . "</td>";
        echo "</tr>";
    }

    echo "<tr class='total-row'><td colspan='4'>Subtotal</td><td>$" . $subtotal . "</td></tr>";

    // Discount eligibility
    $discountRate = 10; // 10%
    $discount = 0;
    if ($subtotal >= 500) {
        $discount = calculateDiscount($subtotal, $discountRate);
        echo "<tr><td colspan='4'>Discount (" . $discountRate . "%)</td><td class='discount'>-$" . $discount . "</td></tr>";
    } else {
        echo "<tr><td colspan='4'>Discount</td><td class='no-discount'>Not Eligible</td></tr>";
    }

    // Tax calculation
    $tax = calculateTax($subtotal - $discount);
    echo "<tr><td colspan='4'>Tax (" . TAX_RATE . "%)</td><td>$" . $tax . "</td></tr>";

    // Final payable
    $finalPayable = calculateFinalPayable($subtotal, $discount, $tax);
    echo "<tr class='total-row'><td colspan='4'>Final Payable</td><td>$" . $finalPayable . "</td></tr>";

    echo "</table>";
    ?>
</body>
</html>
