<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $payment_method = $_POST['payment-method'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "grocekart";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($payment_method === "upi") {
        $upi_id = $_POST['upi-id'];

        $sql = "INSERT INTO payment_data (payment_method, upi_id) VALUES ('$payment_method', '$upi_id')";
    } elseif ($payment_method === "netbanking") {
        $bank_name = $_POST['bank-name'];
        $account_number = $_POST['account-number'];

        $sql = "INSERT INTO payment_data (payment_method, bank_name, account_number) VALUES ('$payment_method', '$bank_name', '$account_number')";
    } elseif ($payment_method === "card") {
        $card_number = $_POST['card-number'];
        $expiry_date = $_POST['expiry-date'];
        $cvv = $_POST['cvv'];

        $sql = "INSERT INTO payment_data (payment_method, card_number, expiry_date, cvv) VALUES ('$payment_method', '$card_number', '$expiry_date', '$cvv')";
    } else {
        $sql = "INSERT INTO payment_data (payment_method) VALUES ('$payment_method')";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Payment data saved successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
