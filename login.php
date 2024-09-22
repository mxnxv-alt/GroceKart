<?php
session_start();

$host = "localhost";
$username = "root";
$password = "";
$database = "grocekart";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT email, name, password FROM userdata WHERE email = ?";

    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    if ($stmt->bind_param("s", $email)) {
        if ($stmt->execute()) {
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $stored_password = $row["password"];

                if ($password === $stored_password) {
                    $_SESSION["user_id"] = $row["email"];
                    $_SESSION["user_name"] = $row["name"];
                    $stmt->close();
                    $conn->close();
                    header("Location: grocekart.php");
                    exit;
                } else {
                    echo "Incorrect email or password. Please try again.";
                }
            } else {
                echo "User not found. Please sign up first.";
            }
        } else {
            echo "Execute failed: " . $stmt->error;
        }
    } else {
        echo "Bind param failed: " . $stmt->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>

body {
font-family: Arial, sans-serif;
background-color: rgba(253, 70, 70, 0.4);
background: url(fruits1.jpg) no-repeat center fixed; 
background-size: cover;
margin: 0;
padding: 0;
display: flex;
justify-content: center;
align-items: center;
height: 100vh;
}

.container {
z-index: 10;
background-color: #fff;
padding: 15px;
border-radius: 8px;
box-shadow: 0px 0px 10px 0 rgba(0, 0, 0, 0.7), 0 6px 20px 0 rgba(0, 0, 0, 0.19); 
width: 300px;
text-align: center;
}

h1 {
color: #333;
}

form {
display: flex;
flex-direction: column;
}

input {
margin: 10px 0;
padding: 8px;
border: 1px solid #ccc;
border-radius: 4px;
}

button {
background-color: white;
color: #000000;
padding: 10px;
border: 2px solid rgb(253, 70, 70);
border-radius: 4px;
cursor: pointer;
}

button:hover {
background-color: rgb(253, 70, 70);
color: white;
transition: 0.3s;
}

a{
background-color: white;
color: #000000;
padding: 10px;
border: 2px solid rgb(253, 70, 70);
border-radius: 4px;
cursor: pointer;
}

a:hover {
background-color: rgb(253, 70, 70);
color: white;
transition: 0.3s;
}


h1 {
color: #333;
}


</style>

</head>
<body>
<div class="container">
    <img class="logo" src="groces.jpg" alt="grocekartlogo" width="150">
    <h1>Log In</h1>
    <form action="login.php" method="post">
        <input type="email" name="email" placeholder="Email Address">
        <input type="password" name="password" placeholder="Password">
        <button type="submit" class="btn">Log In</button>
        <h5>don't have an account?</h5>
        <a href="signup.php" class="btn">Sign-up</a>
    </form>
</div>
</body>
</html>
