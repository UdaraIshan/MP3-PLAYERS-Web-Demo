<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Creating web applications - payment page" />
  <meta name="keywords" content="HTML, CSS, PHP" />
  <meta name="author" content="Udara Ishan" />
  <link href="pp.css" rel="stylesheet">
  <style>
    /*** Start Left ****/

    .parent .son .left,
    .parent .son .right {
      display: inline-block
    }

    .parent .son .left {
      width: 310px;
      height: 370px;
      overflow: hidden;
      position: relative;
      z-index: 333;
      border-radius: 5px;
      box-shadow: 0px 1px 22px 0px rgba(50, 50, 50, 0.65);
    }

    .parent .son .left .img {
      background-image: url('bg2.webp');
      background-size: cover;
      width: 100%;
      height: 62%;
    }

    .parent .son .left .info {
      width: 100%;
      height: 38%;
      overflow: hidden;
      background-image: linear-gradient(to right, #845ec2, #7464c8, #6169cd, #4b6ed0, #2c73d2);
    }

    .parent .son .left .info ul:first-of-type {
      float: left;
      width: 50%;
      height: 100%;
      color: white;
      font-size: 8px;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 1px;
      padding-top: 40px;
      padding-left: 30px
    }

    .parent .son .left .info ul:first-of-type li {
      margin-bottom: 4px
    }

    .parent .son .left .info ul:first-of-type li:last-of-type {
      font-size: 28px;
      margin-top: 20px
    }

    .parent .son .left .info ul:last-of-type {
      float: right;
      width: 50%;
      height: 100%;
      color: white;
      font-size: 8px;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 1px;
      padding-top: 35px;
      padding-right: 30px;
      text-align: right
    }

    .left .info ul:last-of-type li:nth-of-type(2) {
      margin-bottom: 20px;
    }

    .left .info ul:last-of-type li:nth-of-type(2),
    .left .info ul:last-of-type li:last-of-type {
      font-size: 12px
    }

    .left .info ul:last-of-type li:nth-of-type(3),
    .left .info ul:last-of-type li:first-of-type {
      color: #95a5a6;
      margin-bottom: 4px
    }

    .left .circle1 {
      width: 81px;
      height: 81px;
      position: absolute;
      top: 147px;
      right: 50%;
      transform: translate(50%, 50%);
      background-color: #55338D;
      border-radius: 50%;
      font-size: 12px;
      margin: 0 auto;
      text-align: center;
      padding-top: 5px;
      box-shadow: 0px 1px 25px 0px rgba(50, 50, 50, 0.51);
    }

    .left .circle1 .circle {
      border-right: 3px solid #0081CF;
      border-top: 3px solid #0081CF;
      border-left: 3px solid #fff;
      border-bottom: 3px solid #fff;
      width: 69px;
      height: 70px;
      border-radius: 50%;
      margin: 0 auto;
      padding-top: 16px;
      position: relative;
      top: 0;
      right: 0px
    }

    .left .circle1 .circle span {
      display: block;
      font-size: 7.5px;
      text-transform: uppercase;
      font-weight: bold
    }

    .left .circle1 .circle span:first-child {
      color: #95a5a6
    }

    .left .circle1 .circle span:last-child {
      color: #fff;
      font-size: 14.5px;
      padding: 3px
    }


    /*** End Left ***/

    /*== Start Right ==*/

    .parent .son .right {
      height: auto;
      width: 380px;
      position: relative;
      top: -12px;
      right: 55px;
      /*position: absolute;
    top: 40px;
    right: 140px;*/
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0px 1px 25px 0px rgba(50, 50, 50, 0.91);

    }

    .parent .son .right .up {
      width: 100%;
      height: 43%;
      background-image: linear-gradient(to right top, #ecf0f1, #e7f5f4, #e6faf1, #eefde8, #fefedf);
      padding: 40px 40px 0 80px;
      border-radius: 5px 5px 0 0
    }

    .son .right .up ul:first-of-type li:first-of-type {
      margin-bottom: 15px;
      color: #2A3350;
      font-weight: bold;
      font-size: 23px;
    }

    .son .right .up ul:first-of-type li:not(:first-of-type) {
      color: #34495e;
      font-size: 12.5px;
      letter-spacing: .5px;
      line-height: 20px
    }

    .son .right .up ul:last-of-type li {
      display: inline-block;
      color: #bdc3c7;
      text-transform: uppercase;
      font-size: 11px;
      font-weight: bold;
      padding: 8px 25px;
      transition: all .3s ease-in-out;
      border-bottom: 2px solid transparent;
    }

    .son .right .up ul:last-of-type li+li {
      margin-left: 44px;
      margin-top: 29px;
    }

    .son .right .up ul:last-of-type li:hover,
    .son .right .up ul:last-of-type .activecr {
      border-bottom: 2px solid #2C73D2;
      color: #2c3e50;
    }

    .son .right .down {
      width: 100%;
      height: calc(100% - 43%);
      padding: 30px 0 40px 80px;
    }

    .son .right .down .payment form label {
      display: block;
      color: #bdc3c7;
      font-size: 11px;
      font-weight: bold;
      text-transform: uppercase;
      margin-bottom: 7px
    }

    .son .right .down .payment form input {
      border: 1px solid transparent;
      box-shadow: 0px 0px 17px 0px rgba(50, 50, 50, 0.12);
      padding: 7px;
      margin-bottom: 20px;
      color: #34495e;
      border: 1px solid #ecf0f1;
      border-radius: 3px
    }

    .son .right .down .payment form label {
      transition: all .3s ease-in-out
    }

    .son .right .down .payment form .form-group:hover label

    /*******,
  .son .right .down .payment form .form-group .cardNumber *******/
      {
      color: #2c3e50
    }

    .son .right .down .payment form .form-control1 {
      width: 257px
    }

    .son .right .down .payment form select {
      border: none;
      border-bottom: 1.5px solid #bdc3c7;
      color: #bdc3c7;
      margin-right: 20px;
      font-size: 11px;
      margin-bottom: 20px;
      box-shadow: 0px 0px 22px 0px rgba(50, 50, 50, 0.09);
      padding: 5px
    }

    .son .right .down .payment form .lab {
      width: 190px;
    }

    .son .right .down .payment form .lab,
    .son .right .down .payment form .lab select {
      transition: all .3s ease-in-out
    }


    .son .right .down .payment form .lab:hover label {
      color: #2c3e50;
    }

    .son .right .down .payment form .lab:hover select,
    .son .right .down .payment form .CVV input:hover {
      color: #2c3e50;
      border-bottom: 1.5px solid #2c3e50
    }

    .son .right .down .payment form .form-group1 {
      position: relative
    }

    .son .right .down .payment form .CVV {
      width: 75px;
      position: absolute;
      top: 0px;
      right: 40px;
      height: 100%;
    }

    .son .right .down .payment form .CVV input {
      width: 70px;
      padding: 4px;
      margin-bottom: 0;
      transition: all .3s ease-in-out;
      border-bottom: 1.5px solid transparent
    }

    .btn {
      margin-top: 5px
    }

    .son .right .down .payment form button {
      background-image: linear-gradient(to left, #845ec2, #7464c8, #6169cd, #4b6ed0, #2c73d2);
      border: none;
      padding: 13px;
      width: 256px;
      color: #fff;
      font-size: 18px;
      box-shadow: 0px 0px 22px 0px rgba(50, 50, 50, .4);
      border-radius: 5px;
      cursor: pointer;
      position: relative
    }

    .right .down .payment form button:after {
      content: 'PAY!';
      display: inline-block;
      color: #fff;
      font-size: 18px;
      line-height: 49px;
      width: 256px;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      background-image: linear-gradient(to left bottom, #2c73d2, #6d6fd2, #9869cc, #ba63c1, #d65db1);
      opacity: 0;
      border-radius: 5px;
      cursor: pointer;
      transition: opacity .2s ease-in-out
    }

    .right .down .payment form button:hover:after {
      opacity: 1
    }

    /*== End Right ==*/

    body {
      background: linear-gradient(to right, #7b42f6, #b01eff);
    }

    .payment-box {
      width: 80%;
      margin: 20px auto;
      padding: 20px;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .progress-bar {
      position: fixed;
      left: 0;
      top: 0;
      bottom: 0;
      width: 100px;
      background: rgba(255, 255, 255, 0.2);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .hand-icon {
      width: 50px;
      height: 50px;
      margin-bottom: 20px;
    }

    /* Add some custom fonts and colors */
    @import url('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap');

    :root {
      --primary-color: #2196f3;
      --secondary-color: #f5f5f5;
      --text-color: #333;
    }

    /* Style the body and container elements */
    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      background-color: var(--secondary-color);
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }

    /* Style the product section */
    .product {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }

    .product-image {
      width: 200px;
      height: 200px;
      object-fit: cover;
    }

    .product-details {
      flex: 1;
      margin-left: 20px;
    }

    .product-name {
      font-size: 24px;
      font-weight: 500;
      color: var(--text-color);
      margin: 0;
    }

    .product-price {
      font-size: 18px;
      font-weight: 300;
      color: var(--primary-color);
      margin: 10px 0;
    }

    .product-description {
      font-size: 16px;
      font-weight: 300;
      color: var(--text-color);
      margin: 10px 0;
    }

    /* Style the form section */
    .form {
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }

    .form-title {
      font-size: 24px;
      font-weight: 500;
      color: var(--text-color);
      margin: 0 0 20px 0;
    }

    .form-group {
      margin: 10px 0;
    }

    .form-label {
      display: block;
      font-size: 16px;
      font-weight: 300;
      color: var(--text-color);
      margin-bottom: 5px;
    }

    .form-input {
      display: block;
      width: 100%;
      height: 40px;
      border: 1px solid var(--primary-color);
      border-radius: 5px;
      padding: 10px;
      font-size: 16px;
      font-weight: 300;
      color: var(--text-color);
      outline: none;
    }

    .form-input:focus {
      border-color: var(--primary-color);
      box-shadow: inset 0 0 5px rgba(33, 150, 243, 0.2);
    }

    .form-input::placeholder {
      color: var(--primary-color);
    }

    .form-select {
      display: block;
      width: 100%;
      height: 40px;
      border: 1px solid var(--primary-color);
      border-radius: 5px;
      padding: 10px;
      font-size: 16px;
      font-weight: 300;
      color: var(--text-color);
      outline: none;
      appearance: none;
      background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="%232196f3" viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>') no-repeat right center;
      background-size: 24px 24px;
    }

    .form-select:focus {
      border-color: var(--primary-color);
      box-shadow: inset 0 0 5px rgba(33, 150, 243, 0.2);
    }

    .form-button {
      display: block;
      width: 100%;
      height: 40px;
      border: none;
      border-radius: 5px;
      background-color: var(--primary-color);
      color: #fff;
      font-size: 16px;
      font-weight: 500;
      cursor: pointer;
    }

    .form-button:hover {
      background-color: #1e88e5;
    }

    .form-button:active {
      background-color: #1976d2;
    }

    .form-button:disabled {
      background-color: #90caf9;
      cursor: not-allowed;
    }

    /* Use media queries for responsiveness */
    @media (max-width: 600px) {
      .product {
        flex-direction: column;
      }

      .product-image {
        width: 100%;
        height: auto;
      }

      .product-details {
        margin-left: 0;
        margin-top: 20px;
      }
    }
  </style>
</head>

<body>

  <div class="container">
    <!-- Product section -->
    <div class="product">
      <img src="product.jpg" alt="Product image" class="product-image">
      <div class="product-details">
        <h1 class="product-name">Awesome Product</h1>
        <p class="product-price">$49.99</p>
        <p class="product-description">This is an awesome product that you can buy with your credit card.</p>
      </div>
    </div>

    <div class="progress-bar">
      <!-- Add your progress bar elements here -->
      <img src="hand.png" alt="Hand icon" class="hand-icon">
      <canvas id="bar-graph" width="50" height="200"></canvas>
    </div>

    

    <!-- Form section -->
    <div class="payment-box">

      <div class="form">
        <h2 class="form-title">Payment Form</h2>
        <form action="process_order.php" method="post">
          <!-- Quantity input -->
          <div class="form-group">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" id="quantity" name="quantity" class="form-input" placeholder="1" min="1" max="10"
              required>
          </div>

          <!-- Credit card type select -->
          <div class="form-group">
            <label for="card-type" class="form-label">Credit card type</label>
            <select id="card-type" name="card-type" class="form-select" required>
              <option value="" disabled selected>Select a card type</option>
              <option value="visa">Visa</option>
              <option value="mastercard">Mastercard</option>
              <option value="amex">American Express</option>
            </select>
          </div>

          <!-- Name on card input -->
          <div class="form-group">
            <label for="card-name" class="form-label">Name on card</label>
            <input type="text" id="card-name" name="card-name" class="form-input" placeholder="John Doe" required>
          </div>

          <!-- Credit card number input -->
          <div class="form-group">
            <label for="card-number" class="form-label">Credit card number</label>
            <input type="text" id="card-number" name="card-number" class="form-input" placeholder="1111-2222-3333-4444"
              required>
          </div>

          <!-- Credit card expiry date input -->
          <div class="form-group">
            <label for="card-expiry" class="form-label">Credit card expiry date (mm-yy)</label>
            <input type="text" id="card-expiry" name="card-expiry" class="form-input" placeholder="09-23" required>
          </div>

          <!-- Credit card CVV input -->
          <div class="form-group">
            <label for="card-cvv" class="form-label">Card verification value (CVV)</label>
            <input type="text" id="card-cvv" name="card-cvv" class="form-input" placeholder="352" required>
          </div>

          <!-- Submit button -->
          <div class="form-group">
            <button type="submit" id="form-button" class="form-button">Check Out</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</body>

</html>