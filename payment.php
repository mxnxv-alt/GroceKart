<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Methods</title>
    <link rel="stylesheet" href=
    "https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  

    <link rel="stylesheet" href=
"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
 
    <link rel="stylesheet" href=
"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
<link rel="stylesheet" href="style.css">
       
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
        padding: 10px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px 0 rgba(0, 0, 0, 0.7), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        width: 300px;
    }

    h1 {
        color: #333;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    input{
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
     
    }

    input[type="text"] {
        margin: 10px 0;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 100%;
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

    a {
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

    h2 {
        color: #333;
    }
</style>


<body>
    <header class="header">
        <img class="logo" src="groce3.jpg" alt="grocekartlogo" width="160">
    </header>
    <br><br><br><br><br><br><br><br><br><br>
    <div class="container">
        <h2>Select Payment Method</h2>

        <form action="payment_db.php" method="post" id="payment-form">
            <div class="payment-option">
                <label>
                    <input type="radio" name="payment-method" value="upi" required checked> UPI
                </label>
            </div>
            <div class="payment-option">
                <label>
                    <input type="radio" name="payment-method" value="netbanking" required> Netbanking
                </label>
            </div>
            <div class="payment-option">
                <label>
                    <input type="radio" name="payment-method" value="card" required> Credit/Debit Card
                </label>
            </div>
            <div class="payment-option">
                <label>
                    <input type="radio" name="payment-method" value="cod" required> Cash on Delivery
                </label>
            </div>

            <div id="upi-elements" class="payment-elements">
                <input type="text" name="upi-id" placeholder="UPI ID" required>
            </div>

            <div id="netbanking-elements" class="payment-elements">
                <input type="text" name="bank-name" placeholder="Bank Name" required>
                <input type="text" name="account-number" placeholder="Account Number" required>
            </div>

            <div id="card-elements" class="payment-elements">
                <input type="text" name="card-number" placeholder="Card Number" required>
                <input type="text" name="expiry-date" placeholder="Expiry Date (MM/YY)" required>
                <input type="text" name="cvv" placeholder="CVV" required>
            </div>
            
            <div id="cod-elements" class="payment-elements">
            </div>

            <button type="submit" name="submit" onclick="doneFunction()">Pay</button>
        </form>
        <br><br><br>
    </div>
    
    
    <script>
        const paymentForm = document.getElementById('payment-form');
        const upiElements = document.getElementById('upi-elements');
        const netbankingElements = document.getElementById('netbanking-elements');
        const cardElements = document.getElementById('card-elements');
        const codElements = document.getElementById('cod-elements');

        netbankingElements.style.display = 'none';
        cardElements.style.display = 'none';
        codElements.style.display = 'none';

        paymentForm.addEventListener('change', function () {
            const selectedPaymentMethod = document.querySelector('input[name="payment-method"]:checked').value;

            upiElements.style.display = 'none';
            netbankingElements.style.display = 'none';
            cardElements.style.display = 'none';
            codElements.style.display = 'none';

            if (selectedPaymentMethod === 'upi') {
                upiElements.style.display = 'block';
            } else if (selectedPaymentMethod === 'netbanking') {
                netbankingElements.style.display = 'block';
            } else if (selectedPaymentMethod === 'card') {
                cardElements.style.display = 'block';
            } else if (selectedPaymentMethod === 'cod') {
                codElements.style.display = 'block';
            }
        });
        function doneFunction()
        {
            window.location.href="done.php";
        }

</script>
</body>
</html>
