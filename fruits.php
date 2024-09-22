<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruits</title>
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
    justify-content: flex-end;
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
            <a href="#fruits">fruits</a><br>
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
       
        <a href="payment.php" class="btn1" id="checkout-button">check out</a>
    </div>

    </header>
    <br><br><br><br><br><br>
    <br><br><br>
    <h1 class="heading"><span>fruits</span></h1>
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

            <div class="box" data-category="apple" data-price="181">
                <img src="/fruits/apple.jpg" alt="">
                <h3>apple</h3>
                <h5>450g-500g | pack of 4</h5>
                <div class="price">₹181.00/-</div>
                <a href="#" class="btn">add to cart </a>>
            </div>

            <div class="box"  data-category="banana" data-price="81">
                <img src="/fruits/banana.jpg" alt="">
                <h3>banana</h3>
                <h5>1kg</h5>
                <div class="price">₹81.00/-</div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box" data-category="kiwi" data-price="147">
                <img src="/fruits/kiwi.jpg" alt="">
                <h3>kiwi</h3>
                <h5>3 pcs</h5>
                <div class="price">₹147.00/-</div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box" data-category="blueberry" data-price="320">
                <img src="/fruits/blueberry.jpg" alt="">
                <h3>blueberry</h3>
                <h5>125g</h5>
                <div class="price">₹320.00/-</div>
                <a href="#" class="btn">add to cart </a>
            </div>

            <div class="box" data-category="berry mix salad" data-price="349">
                <img src="/fruits/berrieslunchbox.jpg" alt="">
                <h5>special</h5>
                <h3>berry mix salad</h3>
                <h5>includes 5 different berry types</h5>
                <div class="price">₹349.00/-</div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box" data-category="strawberry" data-price="429">
                <img src="/fruits/strawberry.jpg" alt="">
                <h3>strawberry</h3>
                <h5>1kg</h5>
                <div class="price">₹429.00/-</div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box" data-category="dragonfruit" data-price="89">
                <img src="/fruits/dragonfruit.jpg" alt="">
                <h3>dragonfruit</h3>
                <h5>1pc | 250g-350g</h5>
                <div class="price">₹89.00/-</div>
                <a href="#" class="btn">add to cart </a>
            </div>

            <div class="box"data-category="avocado" data-price="323">
                <img src="/fruits/avocado.jpg" alt="">
                <h3>avocado</h3>
                <h5>1kg</h5>
                <div class="price">₹323.00/-</div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box" data-category="peach" data-price="235">
                <img src="/fruits/peach.jpg" alt="">
                <h3>peach</h3>
                <h5>500g | pack of 1</h5>
                <div class="price">₹235.00/-</div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box" data-category="greenapple" data-price="220">
                <img src="/fruits/greenapple.jpg" alt="">
                <h3>greenapple</h3>
                <h5>1kg</h5>
                <div class="price">₹220.00/-</div>
                <a href="#" class="btn">add to cart </a>
            </div>

            <div class="box" data-category="orange" data-price="145">
                <img src="/fruits/orange.jpg" alt="">
                <h3>orange</h3>
                <h5>1kg</h5>
                <div class="price">₹145.00/-</div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box" data-category="mango" data-price="199">
                <img src="/fruits/mango.jpg" alt="">
                <h3>mango</h3>
                <h5>1kg | kesar mango</h5>
                <div class="price">₹199.00/-</div>
                <a href="#" class="btn">add to cart</a>
            </div>

        </div>

    </section>

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
                <a href="#fruits" class="link"> <i class="bi bi-arrow-right"></i>Fruits</a>
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