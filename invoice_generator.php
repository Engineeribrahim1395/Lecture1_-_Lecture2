<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice</title>
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
    // Products and prices arrays
    $products = ["Laptop", "Mouse", "Keyboard", "Monitor", "Headphones"];
    $prices   = [800, 25, 45, 200, 60];
    $quantities = [1, 2, 1, 1, 3];

    // Functions
    function calculateLineTotal($price, $quantity) {
        return $price * $quantity;
    }

    function calculateDiscount($total, $rate) {
        return $total * ($rate / 100);
    }

    function calculateFinalPayable($total, $discount) {
        return $total - $discount;
    }

    // Invoice calculations
    $grandTotal = 0;
    echo "<h1>Invoice</h1>";
    echo "<table>";
    echo "<tr><th>Seq</th><th>Product</th><th>Price</th><th>Quantity</th><th>Line Total</th></tr>";

    for ($i = 0; $i < count($products); $i++) {
        $lineTotal = calculateLineTotal($prices[$i], $quantities[$i]);
        $grandTotal += $lineTotal;

        echo "<tr>";
        echo "<td>" . ($i+1) . "</td>";
        echo "<td>" . $products[$i] . "</td>";
        echo "<td>$" . $prices[$i] . "</td>";
        echo "<td>" . $quantities[$i] . "</td>";
        echo "<td>$" . $lineTotal . "</td>";
        echo "</tr>";
    }

    echo "<tr class='total-row'><td colspan='4'>Grand Total</td><td>$" . $grandTotal . "</td></tr>";

    // Discount eligibility
    $discountRate = 10; // 10%
    $discount = 0;
    if ($grandTotal >= 500) {
        $discount = calculateDiscount($grandTotal, $discountRate);
        echo "<tr><td colspan='4'>Discount (" . $discountRate . "%)</td><td class='discount'>-$" . $discount . "</td></tr>";
    } else {
        echo "<tr><td colspan='4'>Discount</td><td class='no-discount'>Not Eligible</td></tr>";
    }

    $finalPayable = calculateFinalPayable($grandTotal, $discount);
    echo "<tr class='total-row'><td colspan='4'>Final Payable</td><td>$" . $finalPayable . "</td></tr>";

    echo "</table>";
    ?>
</body>
</html>
