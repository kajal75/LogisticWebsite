<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    // Check if the order ID is provided
    if (isset($_GET["order_id"]) && !empty($_GET["order_id"])) {
        $orderId = htmlspecialchars($_GET["order_id"]);

        // For now, let's just display a message with the order ID
        echo "Order ID: " . $orderId . " is being tracked. Your tracking logic goes here.";
    } else {
        // If order ID is not provided, display an error message
        echo "Please enter a valid Order ID.";
    }
} else {
    // If the form is not submitted using the GET method, display an error message
    echo "Invalid request method.";
}
?>
