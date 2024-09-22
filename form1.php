<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "grocekart";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $pincode = $_POST["pincode"];

    $sql = "INSERT INTO userdata(name, password, email, phone, address, city, pincode)
            VALUES ('$name', '$password', '$email', '$phone', '$address', '$city', $pincode)";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header("Location: grocekart.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
