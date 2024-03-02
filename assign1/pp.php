<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Creating web applications - payment page" />
    <meta name="keywords" content="HTML, CSS, PHP" />
    <meta name="author" content="Udara Ishan" />
    <link href="pp.css" rel="stylesheet">
</head>

<body>
    <?php include('topnav.php'); ?>

<?php
function getAvailableQuantity($product) {
    // Replace with your logic to get the available quantity for the selected product
    // Example: Assuming the available quantity is stored in a database
    $availableQuantities = [
        'product1' => 10,
        'product2' => 5,
        'product3' => 8,
        'product4' => 15,
        'product5' => 20,
        'product6' => 12,
    ];

    return isset($availableQuantities[$product]) ? $availableQuantities[$product] : 0;
}

function calculateDeliveryTime($product, $quantity) {
    // Replace with your logic to calculate the estimated delivery time
    // Example: Assuming a constant delivery time for all products
    $baseDeliveryTime = 3;
    return $baseDeliveryTime + intval(($quantity - 1) / 10);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];
}
?>

    <div class="parent">
        <div class="son">
            <div class="container">
                <div class="left">
                    <div class="img"></div>
                    <div class="info">
                        <ul>
                            <li>You are ready to</li>
                            <li>Save...</li>
                            <li>$500</li>
                        </ul>
                        <ul>
                            <li>Time left</li>
                            <li>17:32:28</li>
                            <li>Maximum discount amount</li>
                            <li>$24000</li>
                        </ul>
                    </div>
                    <div class="circle1">
                        <div class="circle">
                            <span>Saved</span>
                            <span>31.8%</span>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="up">
                        <ul>
                            <li>
                                <h3>It's almost done!</h3>
                            </li>
                            <li>Fill in the fields below and click "Pay Now!" to complete the order.</li>
                        </ul>
                        <ul>
                            <li class="activecr">Credit Card</li>
                        </ul>
                    </div>
                    <div class="down">
                        <div class="payment">
                            <form action="process_order.php" method="POST">
                                <div class="form-group">
                                    <label for="first-name">First Name:</label>
                                    <input type="text" id="first-name" name="first-name" required>

                                    <label for="last-name">Last Name:</label>
                                    <input type="text" id="last-name" name="last-name" required>

                                    <label for="email">Email:</label>
                                    <input type="email" id="email" name="email" required>

                                    <form action="process_order.php" method="POST">
                                    <label for="product">Select Product</label>
                                    <select id="product" name="product" required>
                                        <option value="product1"> XY7Z - Gen 01
                                            <?php if (isset($product) && $product === 'product1') : ?>
                                                <?php $availableQuantity = getAvailableQuantity($product); ?>
                                                <span id="available-quantity">
                                                    Available Quantity: <?php echo $availableQuantity; ?>
                                                </span>
                                            <?php endif; ?>
                                        </option>
                                        <option value="product2"> AN 4 - Global
                                            <?php if (isset($product) && $product === 'product2') : ?>
                                                <?php $availableQuantity = getAvailableQuantity($product); ?>
                                                <span id="available-quantity">
                                                    Available Quantity: <?php echo $availableQuantity; ?>
                                                </span>
                                            <?php endif; ?>
                                        </option>
                                        <option value="product3"> XY7R - LK ver.
                                            <?php if (isset($product) && $product === 'product3') : ?>
                                                <?php $availableQuantity = getAvailableQuantity($product); ?>
                                                <span id="available-quantity">
                                                    Available Quantity: <?php echo $availableQuantity; ?>
                                                </span>
                                            <?php endif; ?>
                                        </option>
                                        <option value="product4"> Taple Classic
                                            <?php if (isset($product) && $product === 'product4') : ?>
                                                <?php $availableQuantity = getAvailableQuantity($product); ?>
                                                <span id="available-quantity">
                                                    Available Quantity: <?php echo $availableQuantity; ?>
                                                </span>
                                            <?php endif; ?>
                                        </option>
                                        <option value="product5"> Taple Gen Z's
                                            <?php if (isset($product) && $product === 'product5') : ?>
                                                <?php $availableQuantity = getAvailableQuantity($product); ?>
                                                <span id="available-quantity">
                                                Available Quantity: <?php echo $availableQuantity; ?>
                                                </span>
                                            <?php endif; ?>
                                        </option>
                                    </select>
                                </div>

                                        <!-- Display available quantity -->
                                        <span class="available-quantity">
                                            <?php echo isset($product) ? 'Available Quantity: ' . getAvailableQuantity($product) : ''; ?>
                                        </span>

                                        <!-- Display delivery time -->
                                        <span class="delivery-time">
                                        <?php echo isset($product) && isset($quantity) ? 'Estimated Delivery Time: ' . calculateDeliveryTime($product, $quantity) . ' days' : ''; ?>
                                        </span>

                                        <div class="form-group">
                                            <label for="quantity">Quantity</label>
                                            <input type="number" id="quantity" name="quantity" min="1" value="1" required pattern="\d+"
                                                oninvalid="this.setCustomValidity('Please enter a valid quantity')"
                                                oninput="this.setCustomValidity('')">
                                        </div>
                                <div class="form-group cardType" id="card-type-selection">
                                    <label for="card-payment"> PAY WITH CARD </label> <br>
                                    <div class="card-images">
                                        <label for="visa" class="card-label">
                                            <input type="radio" id="visa" name="card-type" class="card-input"
                                                value="visa">
                                            <img src="visa.jpeg" alt="Visa">
                                        </label>
                                        <label for="mastercard" class="card-label">
                                            <input type="radio" id="mastercard" name="card-type" class="card-input"
                                                value="mastercard">
                                            <img src="master1.jpeg" alt="MasterCard">
                                        </label>
                                        <label for="amex" class="card-label">
                                            <input type="radio" id="amex" name="card-type" class="card-input"
                                                value="amex">
                                            <img src="amex.jpeg" alt="American Express">
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="cardNumber">Card Number</label>
                                    <input type="number" class="form-control1" name="card-number" required>
                                </div>
                                <div class="form-group1" id="expiration-date">
                                    <div class="lab">
                                        <label>Expiration Date</label>
                                        <select name="expiry-month" required>
                                            <option value="01">January</option>
                                            <option value="02">February</option>
                                            <option value="03">March</option>
                                            <option value="04">April</option>
                                            <option value="05">May</option>
                                            <option value="06">June</option>
                                            <option value="07">July</option>
                                            <option value="08">August</option>
                                            <option value="09">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                        <select name="expiry-day" required>
                                            <?php for ($i = 1; $i <= 31; $i++) : ?>
                                                <option value="<?php echo sprintf("%02d", $i); ?>"><?php echo $i; ?>
                                                </option>
                                            <?php endfor; ?>
                                        </select>
                                    </div>
                                    <div class="form-group CVV">
                                        <label for="cvv">CVV</label>
                                        <input type="number" class="form-control" name="cvv" required>
                                    </div>
                                </div>
                                <div class="form-group btn" id="pay-now">
                                    <button type="submit" class="btn btn-default" id="confirm-purchase">Pay
                                        Now!</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <br><br>
                <button onclick="location.href = 'enquiry.html'" type="submit" class="button"
                    style="vertical-align:middle"><span> More Information </span></button>
            </div>
        </div>
        <div class="summary">
            <h2>Product Prices</h2><br>
            <div class="summary-details">
                <ul>
                    <li> XY7Z - Gen 01 - Rs. 1600.00 </li>
                    <li> AN 4 - Global - Rs. 5600.00 </li>
                    <li> XY7R - LK ver. - Rs. 2000.00 </li>
                    <li> Taple Classic - Rs. 5000.00 </li>
                    <li> Taple Gen Z's - Rs. 1100.00 </li>
                    <li> Taple NW-02 - Rs. 4500.00 </li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
