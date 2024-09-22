<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GroceKart</title>
    <link rel="stylesheet" href=
    "https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  
    <link rel="stylesheet" href=
"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
 
    <link rel="stylesheet" href=
"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <img class="logo" src="groce3.jpg" onclick="" alt="Grocekartlogo" width="160">
        <nav class="navbar">
            <a href="#home">Home</a><br>
            <a href="#features">Features</a><br>
            <a href="#topseller">Topseller</a><br>
            <a href="#categories">Categories</a><br>
            <a href="#blogs">Reviews</a><br>
        </nav>

        <div class="icons">
            <label class="bi bi-menu-button" id="menu-btn"></label>
            <label class="bi-search" id="search-btn"></label>
            <label class="bi-cart" id="cart-btn"></label>
            <label class="bi bi-person" id="login-btn" onclick="loginFunction()"></label>
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

    <section class="home" id="home">

        <div class="content">
            <div class="tagline">
            <h3 id="tagline">QUALITY<span> PRODUCTS </span>AT AMAZING PRICES!</h3>
            </div>
            <p> YOUR ONE STEP DESTINATION FOR ALL YOUR GROCERY NEEDS...</p>
            <a href="#topseller" class="btn2">Buy Now</a>
        </div>

    </section>

    <section class="features" id="features">

        <h1 class="heading"> OUR <span>FEATURES </span></h1>
        <div class="box-container">

            <div class="box">
                <img src="organic.jpg" alt="">
                <h3>Organic products</h3>
                <p>WE DELIVER THE BEST OF THE AUTHENTIC PRODUCTS.</p>
            </div>

            <div class="box">
                <img src="dilivery.jpeg" alt=""><br><br><br><br><br>
                <h3>Free delivery</h3>
                <p>FREE DELIVERY AVAILABLE FOR PURCHASES ABOVE ₹500/-.</p>
            </div>

            <div class="box">
                <img src="cheap.jpg" alt=""><br><br>
                <h3>Cheap pricing</h3>
                <p>PRICING IS MORE CONVENIENT THAN REST OF THE MARKET.</p> 
            </div>

        </div>
    </section>

    <section class="topseller" id="topseller">

        <h1 class="heading"> OUR <span>topsellers</span></h1>

        <div class="swiper product-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box" data-category="oreos" data-price="79">
                    <img src="/snacks/oreo.jpg" alt=""><br><br>
                    <h3>oreos</h3>
                    <h5>jumbo pack</h5>
                    <div class="price">₹79.00/-</div>
                    <div class="stars">
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="swiper-slide box" data-category="bellpeppers" data-price="90">
                    <img src="/vegetables/bellpeppers.jpg" alt=""><br><br>
                    <h3>bell peppers</h3>
                    <h5>₹45/- per count</h5>
                    <div class="price">₹90.00/-</div>
                    <div class="stars">
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="swiper-slide box" data-category="coca cola" data-price="71">
                    <img src="/beverages/coke.jpg" alt=""><br><br>
                    <h3>coca cola</h3>
                    <h5>2.25 L</h5>
                    <div class="price">₹71.00/-</div>
                    <div class="stars">
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="swiper-slide box" data-category="croissants" data-price="499">
                    <img src="/dairy/croissant.jpg" alt=""><br><br>
                    <h3>croissants</h3>
                    <h5>5 pcs</h5>
                    <div class="price">₹499.00/-</div>
                    <div class="stars">
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="swiper-slide box" data-category="mayonnaise" data-price="200">
                    <img src="/snacks/mayo.jpg" alt=""><br><br>
                    <h3>mayonnaise</h3>
                    <h5>250g</h5>
                    <div class="price">₹200.00/-</div>
                    <div class="stars">
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="swiper-slide box" data-category="berry mix salad" data-price="349">
                    <img src="/fruits/berrieslunchbox.jpg" alt=""><br><br>
                    <h3>berry mix salad</h3>
                    <h5>includes 5 different berry types</h5>
                    <div class="price">₹349.00/-</div>
                    <div class="stars">
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="swiper-slide box" data-category="chocolate cake" data-price="999">
                    <img src="/dairy/cake.jpg" alt=""><br><br>
                    <h3>chocolate cake</h3>
                    <h5>with authentic special seasoning</h5>
                    <div class="price">₹999.00/-</div>
                    <div class="stars">
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="swiper-slide box" data-category="coffee" data-price="607">
                    <img src="/beverages/coffee.jpg" alt=""><br><br>
                    <h3>coffee</h3>
                    <h5>195g</h5>
                    <div class="price">₹607.00/-</div>
                    <div class="stars">
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="swiper-slide box" data-category="cheese" data-price="590">
                    <img src="/dairy/cheese.jpg" alt=""><br><br>
                    <h3>cheese</h3>
                    <h5>1kg</h5>
                    <div class="price">₹590.00/-</div>
                    <div class="stars">
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="swiper-slide box" data-category="dragon fruit" data-price="149">
                    <img src="/fruits/dragonfruit.jpg" alt=""><br><br>
                    <h3>dragon fruit</h3>
                    <h5>per count</h5>
                    <div class="price">₹149.00/-</div>
                    <div class="stars">
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>

            </div>

        </div>

    </section>

    <section class="categories" id="categories">
        <h1 class="heading"> PRODUCT <span> Categories</span>

        </h1>
        <div class="swiper categories-slider">

            <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="/vegetables/vegetables.jpg" alt="FRESH Vegetables"><br><br>
                <h3>Vegetables</h3>
                <p>upto 40% off</p>
                <a href="vegetables.php" class="btn">Buy Now</a>
            </div>

            <div class="swiper-slide box">
                <img src="/fruits/fruits.jpg" alt="FRESH Fruits"><br><br>
                <h3>Fruits</h3>
                <p>upto 35% off</p>
                <a href="fruits.php" class="btn">Buy Now</a>
            </div>

            <div class="swiper-slide box">
                <img src="/dairy/dairy.jpg" alt="QUALITY Dairy"><br><br>
                <h3>Dairy & Bakery</h3>
                <p>upto 15% off</p>
                <a href="dairy.php" class="btn">Buy Now</a>
            </div>

            <div class="swiper-slide box">
                <img src="/beverages/beverages.jpg" alt="Beverages"><br><br>
                <h3>Beverages</h3>
                <p>upto 10% off</p>
                <a href="beverages.php" class="btn">Buy Now</a>
            </div>

            <div class="swiper-slide box">
                <img src="/snacks/snacks.jpg" alt="TASTY Snacks"><br><br>
                <h3>Snacks</h3>
                <p>upto 18% off</p>
                <a href="snacks.php" class="btn">Buy Now</a>
            </div>
            </div>
        </div>
    </section>

    <section class="blogs" id="blogs">

        <h1 class="heading"> CUSTOMER <span>reviews</span></h1>

        <div class="box-container">
            
            <div class="box">
                <img src="person1.jpg" alt="">
                <div class="content">
                    <div class="icons">
                        <i class="bi bi-person">By sam</i>
                        <a href="#"><i class="bi bi-calendar"></i></a>
                    </div>
                    <h3>amazing experience</h3>
                    <p>quality of the products i bought here were awesome and
                        that too at fantastistic rates.</p>
                </div>
            </div>

            <div class="box">
                <img src="person3.jpg" alt="">
                <div class="content">
                    <div class="icons">
                        <i class="bi bi-person">By haley</i>
                        <a href="#"><i class="bi bi-calendar"></i></a>
                    </div>
                    <h3>fresh fruits</h3>
                    <p>i ordered some fruits last week from grocekart and the freshness and the
                        quality of it was really good.</p>
                </div>
            </div>

            <div class="box">
                <img src="person2.jpg" alt="">
                <div class="content">
                    <div class="icons">
                        <i class="bi bi-person">By max</i>
                        <a href="#"><i class="bi bi-calendar"></i></a>
                    </div>
                    <h3>awesome prices</h3>
                    <p>i am a big foodie so i need snacks in whatever im doing,
                         so i always use grocekart to buy snacks because the delivery is amazingly fast.</p>
                </div>
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
                <a href="#home" class="link"> <i class="bi bi-arrow-right"></i>Home</a>
                <a href="#features" class="link"> <i class="bi bi-arrow-right"></i>Features</a>
                <a href="#topseller" class="link"> <i class="bi bi-arrow-right"></i>Topseller</a>
                <a href="#categories" class="link"> <i class="bi bi-arrow-right"></i>Categories</a>
                <a href="#blogs" class="link"> <i class="bi bi-arrow-right"></i>Reviews</a>
            </div>

            <div class="box1">
                <h3> @copyright-all rights resrved</h3><br><br><br>
                <a href="aboutus.php" class="link"> <i class="bi bi-people"></i>ABOUT US</a>
            </div>

        </div>
    </section>

    <script src="new.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".product-slider", {
    loop:true,
    spaceBetween: 20,
    autoplay: {
        delay: 1500,
        disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    centeredSlides: true,
    breakpoints: {
      0: {
        slidesPerView: 4,
        
      },
      
    },
  });
  var swiper = new Swiper(".categories-slider", {
    loop:true,
    spaceBetween: 20,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    centeredSlides: true,
    breakpoints: {
      0: {
        slidesPerView: 3,
        
      },
      
    },
  });
        function loginFunction()
        {
            window.location.href="signup.php";
        }
        
        function paymentFunction()
        {
            window.location.href="payment";
        }
    </script>
</body>
</html> 