<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dairy</title>
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
            <a href="#Dairy & Bakery">Dairy & Bakery</a><br>
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
    <h1 class="heading"><span>dairy & bakery</span></h1>
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
           
            <div class="box" data-category="milk" data-price="32">
                <img src="/dairy/milk.jpg" alt="">
                <h3>milk</h3>
                <h5>500ml bag | amul</h5>
                <div class="price">₹32.00/-</div>
                <a href="#" class="btn">add to cart </a>
            </div>

            <div class="box" data-category="butter" data-price="118">
                <img src="/dairy/butter.jpeg" alt="">
                <h3>butter</h3>
                <h5>200g tub | amul</h5>
                <div class="price">₹118.00/-</div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box" data-category="icecream" data-price="300">
                <img src="/dairy/icecream.jpg" alt="">
                <h3>icecream</h3>
                <h5>1L tub | amul | kesar badam double sundae</h5>
                <div class="price">₹300.00/-</div>
                <a href="#" class="btn">add to cart </a>
            </div>

            <div class="box" data-category="cheese" data-price="599">
                <img src="/dairy/cheese.jpg" alt="">
                <h3>cheese</h3>
                <h5>1kg | amul</h5>
                <div class="price">₹590.00/-</div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box" data-category="lassi" data-price="211">
                <img src="/dairy/lassi.jpg" alt="">
                <h3>lassi</h3>
                <h5>1L | amul | mango lassi</h5>
                <div class="price">₹211.00/-</div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box" data-category="shrikhand" data-price="120">
                <img src="/dairy/shri.webp" alt="">
                <h3>shrikhand</h3>
                <h5>500g cup | amul | kesar</h5>
                <div class="price">₹120.00/-</div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box" data-category="croissants" data-price="499">
                <img src="/dairy/croissant.jpg" alt="">
                <h3>croissants</h3>
                <h5>5 pcs</h5>
                <div class="price">₹499.00/-</div>
                <a href="#" class="btn">add to cart </a>
            </div>

            <div class="box" data-category="cake" data-price="999">
                <img src="/dairy/cake.jpg" alt="">
                <h3>cake</h3>
                <h5>with authentic special seasoning</h5>
                <div class="price">₹999.00/-</div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box" data-category="muffin" data-price="179">
                <img src="/dairy/muffin.jpg" alt="">
                <h3>muffin</h3>
                <h5>200g | pack of 3</h5>
                <div class="price">₹179.00/-</div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box" data-category="buns" data-price="259">
                <img src="/dairy/buns.jpg" alt="">
                <h3>buns</h3>
                <h5>250g | pack of 5</h5>
                <div class="price">₹259.00/-</div>
                <a href="#" class="btn">add to cart </a>
            </div>

            <div class="box" data-category="toast" data-price="111">
                <img src="/dairy/toast.jpg" alt="">
                <h3>toast</h3>
                <h5>273g</h5>
                <div class="price">₹111.00/-</div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box" data-category="bread" data-price="66">
                <img src="/dairy/bread.jpg" alt="">
                <h3>bread</h3>
                <h5>400g pouch</h5>
                <div class="price">₹66.00/-</div>
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
                <a href="#dairy" class="link"> <i class="bi bi-arrow-right"></i>Dairy and Bakery</a>
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
