<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Creating web applications - payment page" />
    <meta name="keywords" content="HTML, CSS, PHP" />
    <meta name="author" content="Udara Ishan" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="payment.css" rel="stylesheet">
</head>

<body>
<?php include('topnav.php'); ?>

    <div class="parent">
        <div class="son">
            <div class="left">
                <ul>
                    <p class="title" id="activecr"> Payment Details </p>
                </ul>
                <br>
                <div class="payment">
                    <form action="process_order.php" method="POST">
                        <div class="form-group">
                            <label for="first-name">First Name:</label>
                            <input type="text" id="first-name" name="first-name" required>

                            <label for="last-name">Last Name:</label>
                            <input type="text" id="last-name" name="last-name" required>

                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                            <label for="product">Select Product</label>
                            <select id="product" name="product" required>
                                <option value="product1"> XY7Z - Gen 01 </option>
                                <option value="product2"> AN 4 - Global </option>
                                <option value="product3"> XY7R - LK ver. </option>
                                <option value="product4"> Taple Classic </option>
                                <option value="product5"> Taple Gen Z's </option>
                                <option value="product6"> Taple NW-02 </option>
                            </select>
                            <p>Available Stock: <span><?= $stockCount ?></span></p>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="number" id="quantity" name="quantity" min="1" value="1" required>
                            <p>Estimated Delivery in <span><?= $deliveryDays ?></span> days</p>
                        </div>
                        <br>
                        <div class="form-group cardType" id="card-type-selection">
                            <label for="card-payment"> PAY WITH CARD </label> <br>
                            <div class="card-images">
                                <label for="visa" class="card-label">
                                    <input type="radio" id="visa" name="card-type" class="card-input" value="visa">
                                    <img src="visa.jpeg" alt="Visa">
                                </label>
                                <label for="mastercard" class="card-label">
                                    <input type="radio" id="mastercard" name="card-type" class="card-input"
                                        value="mastercard">
                                    <img src="master1.jpeg" alt="MasterCard">
                                </label>
                                <label for="amex" class="card-label">
                                    <input type="radio" id="amex" name="card-type" class="card-input" value="amex">
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
                                    <option value="1">November</option>
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
                            <button type="submit" class="button" id="btn" style="vertical-align:middle"> 
                                <span> Pay Now! </span>
                            </button>
                            <button onclick="location.href = 'enquiry.php'" type="submit" class="button"
                                style="vertical-align:middle">
                                <span> More Information </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="right">
        <div class="one">
            <ul>
                <li class="promo">You are ready to</li>
                <li class="promo">Save...</li>
                <li id="pro-price">$500</li>
            </ul>
            <br>
            <ul>
                <li>Time left</li>
                <li>17:32:28 hours</li>
                <br>
                <li class="promo">Maximum discount amount</li>
                <li id="pro-price1">$24000</li>
            </ul>
        </div>

        <div class="two">
            <p id="title1"> Product Prices </p>
            <br><br>
            <ol>
                <li> XY7Z - Gen 01  -  Rs. 1600.00 </li> <br>
                <li> AN 4 - Global  -  Rs. 5600.00 </li> <br>
                <li> XY7R - LK ver. -  Rs. 2000.00 </li> <br>
                <li> Taple Classic  -  Rs. 5000.00 </li> <br>
                <li> Taple Gen Z's  -  Rs. 1100.00 </li> <br>
                <li> Taple NW-02    -  Rs. 4500.00 </li> <br>
            </ol>
        </div>
    </div>

</body>

</html>
