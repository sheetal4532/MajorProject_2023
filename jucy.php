<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">


    <!-- custom css file link -->
    <link rel="stylesheet" href="jucy.css">

    <!-- custom js file link -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">


    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</head>

<body>
    <header class="header">
        <a href="#" class="logo">Veggies <i class="fa-solid fa-seedling"></i></a>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="index.php">Categories</a>
            <a href="tracking.php">Delivery</a>
            <a href="index.php">Reviews</a>
            <a href="portfolio.php">Portfolio</a>
            <a href="index.php">About</a>
        </nav>

        <div class="box">
            <div class="cart-count">0</div>
            <ion-icon name="cart" id="cart-icon"></ion-icon>
        </div>
        <div class="cart">
            <div class="cart-title">Cart Items</div>
            <div class="cart-content">
                <!--
      <div class="cart-box">
        <img src="images/97.jpg" class="cart-img">
        <div class="detail-box">
          <div class="cart-food-title">Special Dosai</div>
          <div class="price-box">
            <div class="cart-price">Rs.72</div>
             <div class="cart-amt">Rs.72</div>
         </div>
          <input type="number" value="1" class="cart-quantity"> <span> /kg </span>
        </div>
        <ion-icon name="trash" class="cart-remove"></ion-icon>
      </div>

      <div class="cart-box">
        <img src="images/97.jpg" class="cart-img">
        <div class="detail-box">
          <div class="cart-food-title">Special Dosai</div>
          <div class="price-box">
            <div class="cart-price">Rs.72</div>
             <div class="cart-amt">Rs.72</div>
         </div>
          <input type="number" value="1" class="cart-quantity"> <span> /kg </span>
        </div>
        <ion-icon name="trash" class="cart-remove"></ion-icon>
      </div>
    -->
            </div>

            <div class="total">
                <div class="total-title">Total</div>
                <div class="total-price">Rs.0</div>
            </div>

            <!-- discount code part -->
            <div class="discount_code mt-3 shadow">
                <div class="card">
                    <div class="card-body">
                        <a class="d-flex justify-content-between" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
Add a discount code 
<span><i class="fas fa-chevron-down pt-1"></i></span>
</a>
                        <div class="collapse" id="collapseExample">
                            <div class="mt-3">
                                <input type="text" name="" id="discount_code1" class="form-control font-weight-bold" placeholder="Enter the discount code">
                                <small id="error_trw" class="text-dark mt-3">code is sheetal</small>
                            </div>
                            <button class="btn btn-primary btn-sm mt-3" onclick="discount_code()">Apply</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-3 shadow p-3 bg-white">
                <div class="pt-4">
                    <h5 class="mb-4">Expected delivery date</h5>
                    <p>May 27th 2023 - May 29th 2023</p>
                </div>
            </div>


            <a href="payment gateway/index.php"> <button class="btn-buy">Place Order</button></a>

            <ion-icon name="close" id="cart-close"></ion-icon>

        </div>
        </div>

    </header>

    <!-- product section start -->

    <section class="product" id="product">
        <h1 class="heading"> Fresh <span>Juice</span></h1>

        <div class="shop-content">


            <div class="food-box">
                <div class="pic">
                    <img src="juice/apple.jpeg" class="food-img">
                </div>
                <h2 class="food-title">Apple</h2>
                <span class="food-price">Rs.10</span>
                <ion-icon name="cart" class="add-cart"></ion-icon>
            </div>


            <div class="food-box">
                <div class="pic"><img src="juice/beetroot-juice.jpeg" class="food-img"></div>
                <h2 class="food-title">Beetroot</h2>
                <span class="food-price">Rs.25</span>
                <ion-icon name="cart" class="add-cart"></ion-icon>
            </div>

            <div class="food-box">
                <div class="pic"><img src="juice/avocado.jpeg" class="food-img"></div>
                <h2 class="food-title">Avocado</h2>
                <span class="food-price">Rs.30</span>
                <ion-icon name="cart" class="add-cart"></ion-icon>
            </div>

            <div class="food-box">
                <div class="pic"><img src="juice/carrot-juice.jpeg" class="food-img"></div>
                <h2 class="food-title">Carrot</h2>
                <span class="food-price">Rs.15</span>
                <ion-icon name="cart" class="add-cart"></ion-icon>
            </div>

            <div class="food-box">
                <div class="pic"><img src="juice/coco.jpeg" class="food-img"></div>
                <h2 class="food-title">Coco</h2>
                <span class="food-price">Rs.25</span>
                <ion-icon name="cart" class="add-cart"></ion-icon>
            </div>

            <div class="food-box">
                <div class="pic"><img src="juice/dragon.jpeg" class="food-img"></div>
                <h2 class="food-title">Dragon</h2>
                <span class="food-price">Rs.15</span>
                <ion-icon name="cart" class="add-cart"></ion-icon>
            </div>


            <div class="food-box">
                <div class="pic"><img src="juice/fresh-amla-juice.jpeg" class="food-img"></div>
                <h2 class="food-title">Amla</h2>
                <span class="food-price">Rs.15</span>
                <ion-icon name="cart" class="add-cart"></ion-icon>
            </div>


            <div class="food-box">
                <div class="pic"><img src="juice/fresh-mango-juice-glass-bottle-260nw-1690518976.webp" class="food-img"></div>
                <h2 class="food-title">Mango</h2>
                <span class="food-price">Rs.20</span>
                <ion-icon name="cart" class="add-cart"></ion-icon>
            </div>

            <div class="food-box">
                <div class="pic"><img src="juice/fresh-pineapple-juice.jpeg" class="food-img"></div>
                <h2 class="food-title">Pinapple</h2>
                <span class="food-price">Rs.20</span>
                <ion-icon name="cart" class="add-cart"></ion-icon>
            </div>

            <div class="food-box">
                <div class="pic"><img src="juice/kiwi.jpeg" class="food-img"></div>
                <h2 class="food-title">Kiwi</h2>
                <span class="food-price">Rs.15</span>
                <ion-icon name="cart" class="add-cart"></ion-icon>
            </div>

            <div class="food-box">
                <div class="pic"><img src="juice/orange.jpeg" class="food-img"></div>
                <h2 class="food-title">Orange</h2>
                <span class="food-price">Rs.20</span>
                <ion-icon name="cart" class="add-cart"></ion-icon>
            </div>

            <div class="food-box">
                <div class="pic"><img src="juice/papaya-juice.jpeg" class="food-img"></div>
                <h2 class="food-title">Papaya</h2>
                <span class="food-price">Rs.20</span>
                <ion-icon name="cart" class="add-cart"></ion-icon>
            </div>

            <div class="food-box">
                <div class="pic"><img src="juice/pinapple.jpeg" class="food-img"></div>
                <h2 class="food-title">Pinapple</h2>
                <span class="food-price">Rs.10</span>
                <ion-icon name="cart" class="add-cart"></ion-icon>
            </div>

            <div class="food-box">
                <div class="pic"><img src="juice/stwaberry.jpeg" class="food-img"></div>
                <h2 class="food-title">Strawberry</h2>
                <span class="food-price">Rs.20</span>
                <ion-icon name="cart" class="add-cart"></ion-icon>
            </div>

            <div class="food-box">
                <div class="pic"><img src="juice/sugarcane.jpeg" class="food-img"></div>
                <h2 class="food-title">Sugarcane</h2>
                <span class="food-price">Rs.20</span>
                <ion-icon name="cart" class="add-cart"></ion-icon>
            </div>

            <div class="food-box">
                <div class="pic"><img src="juice/wattermellon.jpeg" class="food-img"></div>
                <h2 class="food-title">Watermellon</h2>
                <span class="food-price">Rs.20</span>
                <ion-icon name="cart" class="add-cart"></ion-icon>
            </div>






        </div>

    </section>

    <!-- product section end -->


    <script src="productSec.js"></script>
</body>

</html>