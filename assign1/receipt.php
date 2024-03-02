<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation Page</title>
</head>

<body>
    <h2>The receipt</h2>

    <?php
    include "settings2.php";

    if (isset($_GET['order_id'])) {
        // Fetch order details from the database using $_GET['order_id']
        $orderDetails = getOrderDetails($_GET['order_id']); // Implement this function

        echo "<h1>Order Receipt</h1>";
        echo "<p><strong>Order ID:</strong> " . $orderDetails['order_id'] . "</p>";
        echo "<p><strong>Customer Name:</strong> " . $orderDetails['customer_name'] . "</p>";
        echo "<p><strong>Email:</strong> " . $orderDetails['email'] . "</p>";
        // Display other order details as needed

        echo "<h2>Order Items:</h2>";
        $htmlTable = "<table>
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Total Price</th>
                            </tr>
                        </thead>
                        <tbody>";

        foreach ($orderDetails['items'] as $item) {
            $htmlTable .= "<tr>
                                <td>{$item['product_name']}</td>
                                <td>{$item['quantity']}</td>
                                <td>{$item['unit_price']}</td>
                                <td>{$item['total_price']}</td>
                            </tr>";
        }

        $htmlTable .= "</tbody></table>";

        echo $htmlTable;

        echo "<p><strong>Total Cost:</strong> " . $orderDetails['order_cost'] . "</p>";
        echo "<p><strong>Order Status:</strong> " . $orderDetails['order_status'] . "</p>";
        // Display other order details as needed
    }

    function getOrderItems($orderId, $conn)
    {
        // Fetch order items from the database
        $query = "SELECT * FROM order_items WHERE order_id = $orderId";
        $result = mysqli_query($conn, $query);

        $orderItems = array();

        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $orderItems[] = $row;
            }
        }

        return $orderItems;
    }
    ?>
</body>

</html>
