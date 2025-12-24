<?php
// Include the database configuration file
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process the form data here

    // Retrieve form field values
    $owner = $_POST['owner'];
    $cvv = $_POST['cvv'];
    $cardNumber = $_POST['card_number'];
    $expirationMonth = $_POST['expiration_month'];
    $expirationYear = $_POST['expiration_year'];

    // Perform validation and further processing as needed

    // Proceed with payment confirmation or other actions

    // Insert the payment data into the database
    $query = "INSERT INTO payment_data (owner, cvv, card_number, expiration_month, expiration_year)
              VALUES ('$owner', '$cvv', '$cardNumber', '$expirationMonth', '$expirationYear')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die('Database query failed: ' . mysqli_error($conn));
    }

    // Redirect to a success page or display a success message
    header('Location: success.php');
    exit; // End the script to prevent further execution
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Form</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&family=Rubik&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Confirm Your Payment</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div class="first-row">
                <div class="owner">
                    <h3>Owner</h3>
                    <div class="input-field">
                        <input type="text" name="owner">
                    </div>
                </div>
                <div class="CVV">
                    <h3>CVV</h3>
                    <div class="input-field">
                        <input type="password" name="cvv">
                    </div>
                </div>
            </div>
            <div class="second-row">
                <div class="card-number">
                    <h3>Card Number</h3>
                    <div class="input-field">
                        <input type="text" name="card_number">
                    </div>
                </div>
            </div>
            <div class="third-row">
                <h3>Expiration Date</h3>
                <div class="selection">
                    <div class="date">
                        <select name="expiration_month" id="months">
                            <option value="Jan">Jan</option>
                            <option value="Feb">Feb</option>
                            <option value="Mar">Mar</option>
                            <option value="Apr">Apr</option>
                            <option value="May">May</option>
                            <option value="Jun">Jun</option>
                            <option value="July">July</option>
                            <option value="Aug">Aug</option>
                            <option value="Sep">Sep</option>
                            <option value="Oct">Oct</option>
                            <option value="Nov">Nov</option>
                            <option value="Dec">Dic</option>
                        </select>
                        <select name="expiration_year" id="years">
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                            <option value="2031">2031</option>
                          
                        </select>
                    </div>
                    <div class="cards">
                        <img src="mc.jpg" alt="">
                        <img src="vi.jpg" alt="">
                        <img src="pp.jpg" alt="">
                    </div>
                </div>
            </div>
            <button type="submit">Proceed</button>
        </form>
    </div>
</body>
</html>
