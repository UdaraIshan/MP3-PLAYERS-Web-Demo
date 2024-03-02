<?php

function getStockCount($product)
{
    // Replace this with your actual logic to fetch stock count from your data source (e.g., database)
    // For demonstration purposes, using a simple associative array as a placeholder
    $stockData = [
        'product1' => 50,
        'product2' => 37,
        'product3' => 20,
        'product4' => 44,
        'product5' => 11,
        'product6' => 04,
        // Add more products as needed
    ];

    // Return the stock count for the selected product, default to 0 if not found
    return isset($stockData[$product]) ? $stockData[$product] : 0;
}

function calculateDeliveryDaysFunction($quantity)
{
    // Replace this with your actual logic to calculate delivery days based on quantity
    // For demonstration purposes, using a simple linear relationship
    $deliveryDays = 4;

    return $deliveryDays;
}
?>
