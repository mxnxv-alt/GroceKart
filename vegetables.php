<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vegetables</title>
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
            <a href="#vegetables">vegetables</a><br>
            <a href="fruits.php">fruits</a><br>
            <a href="dairy.php">Dairy & Bakery</a><br>
            <a href="beverages.php">Beverages</a><br>
            <a href="snacks.php">Snacks</a><br>
        </nav>

        <div class="icons">
            <label class="bi bi-menu-button" id="menu-btn"></label>
            <label class="bi-search" id="search-btn"></label>
            <label class="bi-cart" id="cart-btn"></label>
        </div>

        <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="find here...">
        <label for="search-box" class="bi-search"></label>
        </form>
        <div class="shopping-cart">
        <h2>Shopping Cart</h2>
        <ul id="cart-items">
        </ul>
        <p>Total: ₹<span id="total-amount">0.00</span>/-</p>
        <a href="#" class="btn1" onclick="paymentFunction()">check out</a>
    </div>

    </header>
    <br><br><br><br><br><br>
    <br><br><br>
    <h1 class="heading"><span>vegetables</span></h1>
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
           
            <div class="box" data-category="potato" data-price="33">
                <img src="/vegetables/potato.jpg" alt="">
                <h3>potato</h3>
                <h5>1kg</h5>
                <div class="price">₹33.00/-</div>
                <a href="#" class="btn">add to cart </a>
            </div>

            <div class="box" data-category="tomato" data-price="24">
                <img src="/vegetables/tomato.jpg" alt="">
                <h3>tomato</h3>
                <h5>1kg</h5>
                <div class="price">₹24.00/-</div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box" data-category="chilli" data-price="67">
                <img src="/vegetables/chilli.jpg" alt="">
                <h3>Chilli</h3>
                <h5>500g</h5>
                <div class="price">₹67.00/-</div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box" data-category="carrot" data-price="86">
                <img src="/vegetables/carrot.jpg" alt="">
                <h3>carrot</h3>
                <h5>1kg</h5>
                <div class="price">₹86.00/-</div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box" data-category="cauliflower" data-price="49">
                <img src="/vegetables/cauliflower.jpg" alt="">
                <h3>cauliflower</h3>
                <h5>1 pc - approx 400g-500g</h5>
                <div class="price">₹49.00/-</div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box" data-category="bellpeppers" data-price="90">
                <img src="/vegetables/bellpeppers.jpg" alt="">
                <h3>bellpeppers</h3>
                <h5>₹45/- per count</h5>
                <div class="price">₹90.00/-</div>
                <a href="#" class="btn">add to cart </a>
            </div>

            <div class="box" data-category="zucchinis" data-price="102">
                <img src="/vegetables/zucchinis.jpg" alt="">
                <h3>zucchinis</h3>
                <h5>2pc - approx 300g-400g</h5>
                <div class="price">₹102.00/-</div>
                <a href="#" class="btn">add to cart </a>
            </div>

            <div class="box" data-category="brocoli" data-price="35">
                <img src="/vegetables/broccoli.jpg" alt="">
                <h3>broccoli</h3>
                <h5>1pc - approx 250g-450g</h5>
                <div class="price">₹35.00/-</div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box" data-category="eggplant" data-price="81">
                <img src="/vegetables/eggplant.jpg" alt="">
                <h3>eggplant</h3>
                <h5>1kg</h5>
                <div class="price">₹81.00/-</div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box" data-category="mushroom" data-price="64">
                <img src="/vegetables/mushroom.jpg" alt="">
                <h3>mushroom</h3>
                <h5>200g</h5>
                <div class="price">₹64.00/-</div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box" data-category="peas" data-price="199">
                <img src="/vegetables/peas.jpg" alt="">
                <h3>peas</h3>
                <h5>1kg pouch</h5>
                <div class="price">₹199.00/-</div>
                <a href="#" class="btn">add to cart </a>
            </div>

            <div class="box" data-category="corn" data-price="56">
                <img src="/vegetables/corn.jpg" alt="">
                <h3>corn</h3>
                <h5>2pc</h5>
                <div class="price">₹56.00/-</div>
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
                <a href="#vegetables" class="link"> <i class="bi bi-arrow-right"></i>Vegetables</a>
                <a href="fruits.php" class="link"> <i class="bi bi-arrow-right"></i>Fruits</a>
                <a href="dairy.php" class="link"> <i class="bi bi-arrow-right"></i>Dairy and Bakery</a>
                <a href="beverages.php" class="link"> <i class="bi bi-arrow-right"></i>Beverages</a>
                <a href="snacks.php" class="link"> <i class="bi bi-arrow-right"></i>Snacks</a>
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