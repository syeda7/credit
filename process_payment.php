<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $card_number = $_POST['card_number'];
    $expiry_date = $_POST['expiry_date'];
    $cvv = $_POST['cvv'];
    $card_name = $_POST['card_name'];

    // Basic validation
    if (!preg_match('/^\d{16}$/', $card_number)) {
        $error = "Invalid card number.";
    } elseif (!preg_match('/^\d{2}\/\d{2}$/', $expiry_date)) {
        $error = "Invalid expiry date format.";
    } elseif (!preg_match('/^\d{3}$/', $cvv)) {
        $error = "Invalid CVV.";
    } elseif (empty($card_name)) {
        $error = "Cardholder name is required.";
    }

    // If no errors, process the payment
    if (!isset($error)) {
        // Here you would integrate with a payment gateway like Stripe or PayPal
        // For demonstration purposes, we'll just redirect to a success page
        header("Location: success.php");
        exit();
    } else {
        include 'checkout_form.php';
    }
} else {
    header("Location: checkout_form.php");
    exit();
}
?>
