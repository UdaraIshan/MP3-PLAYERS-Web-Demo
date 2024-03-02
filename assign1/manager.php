<?php
// Start or resume a session
session_start();

// Check if the user is authenticated
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    // If not authenticated, redirect to the login page
    header("Location: login.php");
    exit();
}

include('settings.php');

// Fetch data from the database
$sql = "SELECT order_id, order_date, product_name, cost, first_name, last_name, order_status FROM orders";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Creating web applications - payment page" />
    <meta name="keywords" content="HTML, CSS, PHP" />
    <meta name="author" content="Udara Ishan" />
    <link href="manager.css" rel="stylesheet">
    <title>Order Management</title>
    <!-- jQuery library for AJAX -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

<?php include('topnav.php'); ?>

<h1>Order Management</h1>

<!-- Form for Query Options -->
<form action="" method="get">
    <label for="query">Select Query:</label>
    <select name="query" id="query">
        <option value="all">All Orders</option>
        <option value="customer">Orders for a Customer</option>
        <option value="product">Orders for a Product</option>
        <option value="pending">Pending Orders</option>
        <option value="sorted">Orders Sorted by Total Cost</option>
    </select>
    <input type="submit" value="Submit">
</form>

<!-- Display Query Results -->
<table id="orderTable">
    <tr>
        <th>Order Number</th>
        <th>Order Date</th>
        <th>Product Details</th>
        <th>Customer Name</th>
        <th>Order Status</th>
        <th>Action</th>
    </tr>

    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$row['order_id']}</td>";
            echo "<td>{$row['order_date']}</td>";
            echo "<td>Product Name: {$row['product_name']}<br>Cost: \${$row['cost']}</td>";
            echo "<td>{$row['first_name']} {$row['last_name']}</td>";
            echo "<td>{$row['order_status']}</td>";
            echo "<td>";
            echo "<button onclick=\"updateStatus('{$row['order_id']}')\">Update Status</button>";
            echo "<button onclick=\"cancelOrder('{$row['order_id']}')\">Cancel Order</button>";
            echo "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No orders found</td></tr>";
    }

    $conn->close();
    ?>
</table>

<!-- JavaScript function for handling order status updates and cancellations -->
<script>
    function updateStatus(orderId) {
        // Implement the logic to update the order status (AJAX request or form submission)
        alert("Updating status for order " + orderId);
    }

    function cancelOrder(orderId) {
        // Implement the logic to cancel the order (AJAX request or form submission)
        $.ajax({
            type: "POST",
            url: "cancel_order.php", // Replace with the actual PHP file for canceling orders
            data: { order_id: orderId },
            success: function (response) {
                alert("Order canceled successfully");
                // Update the table with the updated data (you may need to fetch the updated data from the server)
                $("#orderTable").html(response);
            },
            error: function () {
                alert("Error cancelling order");
            }
        });
    }
</script>

</body>

</html>
