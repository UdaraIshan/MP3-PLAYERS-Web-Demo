<?php
include('settings.php');
//include('functions.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cardType = $_POST["card-type"];
    $nameOnCard = $_POST["name-on-card"];
    $cardNumber = $_POST["card-number"];
    $expiryMonth = $_POST["expiry-month"];
    $expiryDay = $_POST["expiry-day"];
    $cvv = $_POST["cvv"];
    $selectedProduct = $_POST['product'];
    $enteredQuantity = $_POST['quantity'];

    // Fetch stock count and calculate delivery days
    $stockCount = getStockCount($selectedProduct);
    $deliveryDays = calculateDeliveryDaysFunction($enteredQuantity);

    function getStockCount($product)
{
    $stockData = [
        'product1' => 50,
        'product2' => 37,
        'product3' => 20,
        'product4' => 44,
        'product5' => 11,
        'product6' => 04,
    ];

    return isset($stockData[$product]) ? $stockData[$product] : 0;
}

function calculateDeliveryDaysFunction($quantity)
{
    $deliveryDays = 4;

    return $deliveryDays;
}

    // Validate credit card number based on card type
    switch ($cardType) {
        case 'visa':
            $isValidCard = preg_match('/^4\d{15}$/', $cardNumber);
            break;
        case 'mastercard':
            $isValidCard = preg_match('/^5[1-5]\d{14}$/', $cardNumber);
            break;
        case 'amex':
            $isValidCard = preg_match('/^3[47]\d{13}$/', $cardNumber);
            break;
        default:
            $isValidCard = false;
    }

    if ($isValidCard) {
        // Concatenate expiry date components
        $expiryDate = $expiryMonth . '/' . $expiryDay;

        $stmt = $conn->prepare("INSERT INTO orders (card_type, name_on_card, card_number, expiry_date, cvv) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $cardType, $nameOnCard, $cardNumber, $expiryDate, $cvv);

        if ($stmt->execute()) {
            header("Location: manager.php");
            exit(); 
        } else {
            echo "Error: Failed to execute database query. Please try again later.";
        }

        $stmt->close();
    } else {
        echo "Invalid credit card details";
    }

    $conn->close();
}
?>
