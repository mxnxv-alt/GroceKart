<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks</title>
    <link rel="stylesheet" href=
    "https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <link rel="stylesheet" href=
"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
 
    <link rel="stylesheet" href=
"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
<link rel="stylesheet" href="categorie.css">
    <link rel="stylesheet" href="style.css">
    <style>

.sort-buttons {
    padding-right: 100px;
    display: flex;
    justify-content: flex-end; /* Align buttons to the right */
}

.sort-button[data-sort="lowToHigh"] {
    background-color: #3498db;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-left: 10px;
}

.sort-button[data-sort="lowToHigh"]:hover {
    background-color: #2980b9;
}

.sort-button[data-sort="highToLow"] {
    background-color: #e74c3c;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-left: 10px;
}

.sort-button[data-sort="highToLow"]:hover {
    background-color: #c0392b;
}

    </style>
    
</head>
<body>
    <header class="header">
        <img class="logo" src="groce3.jpg" onclick="" alt="Grocekartlogo" width="160">
        <nav class="navbar">
            <a href="grocekart.php">home</a><br>
            <a href="vegetables.php">vegetables</a><br>
            <a href="fruits.php">fruits</a><br>
            <a href="dairy.php">Dairy & Bakery</a><br>
            <a href="beverages.php">Beverages</a><br>
            <a href="#Snacks">Snacks</a><br>
        </nav>

        <div class="icons">
            <label class="bi bi-menu-button" id="menu-btn"></label>
            <label class="bi-search" id="search-btn"></label>
            <label class="bi-cart" id="cart-btn"></label>
        </div>

        <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="find here...">
        <label for="search-box" class="bi-search"></label>
        </form><div class="shopping-cart">
        <h2>Shopping Cart</h2>
        <ul id="cart-items">
        </ul>
        <p>Total: ₹<span id="total-amount">0.00</span>/-</p>
        <a href="#" class="btn1" onclick="paymentFunction()">check out</a>
    </div>

    </header>
    <br><br><br><br><br><br><br><br><br>
    <h1 class="heading"><span>snacks</span></h1>
    <div class="filter-sort-container">
        <div class="filter-buttons">
        </div>
        <div class="sort-buttons">
            <button class="sort-button" data-sort="lowToHigh">Price: Low to High</button>
            <button class="sort-button" data-sort="highToLow">Price: High to Low</button>
        </div>
    </div>

    <section class="allc" id="allc">
        
        <div class="box-container">
           
            <div class="box" data-category="cornflakes" data-price="467">
                <img src="/snacks/cornflakes.jpg" alt="">
                <h3>cornflakes</h3>
                <h5>1kg | honey flavour</h5>
                <div class="price">₹467.00/-</div>
                <a href="#" class="btn">add to cart </a>
            </div>

            <div class="box" data-category="cup noodles" data-price="79">
                <img src="/snacks/cup.jpg" alt="">
                <h3>cup noodles</h3>
                <h5>99g | spicy ramen</h5>
                <div class="price">₹79.00/-</div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box" data-category="ketchup" data-price="112">
                <img src="/snacks/ketchup.jpg" alt="">
                <h3>ketchup</h3>
                <h5>760g | tomato</h5>
                <div class="price">₹112.00/-</div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box" data-category="lays" data-price="15">
                <img src="/snacks/lays.jpg" alt="">
                <h3>lays</h3>
                <h5>indian masala</h5>
                <div class="price">₹15.00/-</div>
                <a href="#" class="btn">add to cart </a>
            </div>

            <div class="box" data-category="maggie" data-price="15">
                <img src="/snacks/maggi.jpg" alt="">
                <h3>maggie</h3>
                <h5>70g</h5>
                <div class="price">₹15.00/-</div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box" data-category="apple" data-price="181">
                <img src="/snacks/mayo.jpg" alt="">
                <h3>mayonnaise</h3>
                <h5>250g | veg. garlic</h5>
                <div class="price">₹200.00/-</div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box" data-category="oreo" data-price="79">
                <img src="/snacks/oreo.jpg" alt="">
                <h3>oreo</h3>
                <h5>jumbo pack</h5>
                <div class="price">₹79.00/-</div>
                <a href="#" class="btn">add to cart </a>
            </div>

            <div class="box" data-category="peanut butter" data-price="302">
                <img src="/snacks/peanut.jpg" alt="">
                <h3>peanut butter</h3>
                <h5>900g</h5>
                <div class="price">₹302.00/-</div>
                <a href="#" class="btn">add to cart</a>
            </div>           

        </div>
    </section>
    <br><br><br>
    <section class="footer">
        <div class="box-container">

            <div class="box1">
                <img src="groce2.jpg.png" alt="Grocekart" width="90">      
                <div class="share">
                    <a href="https://www.instagram.com" class="bi bi-instagram"></a>
                    <a href="https://www.facebook.com" class="bi bi-facebook"></a>
                    <a href="http://www.twitter.com" class="bi bi-twitter"></a>
                </div>
            </div>

            <div class="box1">
                <h3> contact info</h3>
                <a href="#" class="link"> <i class="bi bi-telephone"></i>+91-1234567890</a>
                <a href="#" class="link"> <i class="bi bi-telephone"></i>+91-1223334444</a>
                <a href="https://www.gmail.com" class="link"> <i class="bi bi-envelope"></i>info@grocekart.com</a>
                <a href="https://www.gmail.com" class="link"> <i class="bi bi-envelope"></i>customerreview@grocekart.com</a>
                <a href="#" class="link"> <i class="bi bi-map"></i>Ahmedabad, India - 380008</a>
            </div>

            <div class="box1">
                <h3> quick links</h3>
                <a href="grocekart.php" class="link"> <i class="bi bi-arrow-right"></i>Home</a>
                <a href="vegetables.php" class="link"> <i class="bi bi-arrow-right"></i>Vegetables</a>
                <a href="fruits.php" class="link"> <i class="bi bi-arrow-right"></i>Fruits</a>
                <a href="dairy.php" class="link"> <i class="bi bi-arrow-right"></i>Dairy and Bakery</a>
                <a href="beverages.php" class="link"> <i class="bi bi-arrow-right"></i>Beverages</a>
                <a href="#snacks" class="link"> <i class="bi bi-arrow-right"></i>Snacks</a>
            </div>

            <div class="box1">
                <h3> @copyright-all rights resrved</h3><br><br><br>
                <a href="aboutus.php" class="link"> <i class="bi bi-people"></i>ABOUT US</a>
            </div>

        </div>
    </section>
    <script src="new.js"></script>
    

</body>
</html>