<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit Card Checkout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 400px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="number"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #C8A1E0;
        }
        .error {
            color: red;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Credit Card Checkout</h2>
        <?php if(isset($error)) { echo "<div class='error'>$error</div>"; } ?>
        <form action="process_payment.php" method="POST">
            <label for="card_number">Card Number</label>
            <input type="text" id="card_number" name="card_number" required maxlength="16" pattern="\d{16}" title="Please enter a 16-digit card number.">

            <label for="expiry_date">Expiry Date (MM/YY)</label>
            <input type="text" id="expiry_date" name="expiry_date" required pattern="\d{2}/\d{2}" title="Please enter a valid expiry date in MM/YY format.">

            <label for="cvv">CVV</label>
            <input type="number" id="cvv" name="cvv" required maxlength="3" pattern="\d{3}" title="Please enter the 3-digit CVV.">

            <label for="card_name">Name on Card</label>
            <input type="text" id="card_name" name="card_name" required>

            <input type="submit" value="Submit Payment">
        </form>
    </div>
</body>
</html>
