<!DOCTYPE html>
<html>
<head>
  <title>Sign-up Now</title>
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
    <h1>Sign-up</h1>
    <form action="form1.php" method="post">
      <input type="text" name="name" placeholder="Name">
      <input type="password" name="password" placeholder="Password">
      <input type="email" name="email" placeholder="Email Address">
      <input type="tel" name="phone" placeholder="Phone Number">
      <input type="text" name="address" placeholder="Address">
      <input type="text" name="city" placeholder="City">
      <input type="number" name="pincode" placeholder="Pincode">
      <button type="submit" id="signupButton">Sign-up</button>
      <h5>alreay have an account?</h5>
      <a href="login.php">Log In</a>
      <script>
      document.getElementById("signupButton").addEventListener("click", function() {
      window.location.href = "grocekart.php";
      });
  </script>
  </form>

  </div>
 
</body>
</html>