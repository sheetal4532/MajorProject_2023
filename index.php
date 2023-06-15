<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veggies</title>

    <!-- swiper from CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="styles.css">

    <!-- sweet alert link -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>

    <!-- header section starts -->
    <header class="header">
        <a href="#" class="logo">Veggies <i class="fa-solid fa-seedling"></i></a>

        <nav class="navbar">
            <a href="#Home">Home</a>
            <a href="#Categories">Categories</a>
            <a href="tracking.php">Delivery</a>
            <a href="#review">Reviews</a>
            <a href="portfolio.php">Portfolio</a>
            <a href="#footer">About</a>
        </nav>

        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn" title="search"></div>
            <!-- <div class="fas fa-map-marker-alt" id="map-marker-alt-btn"></div> -->
            <div class="fas fa-shopping-cart" id="cart-btn" title="mycart"></div>
            <!-- <div class="material-icons" id="cart-btn" title="mycart"></div> -->
            <!-- <div class="fa fa-slideshare" id="cart-btn" title="mycart" style="font-size:24px"></div> -->
    
            <div class="fas fa-user" id="login-btn" title="login now"></div>
        </div>

        <form action="" class="search-form">
            <input type="search" id="search-box" placeholder="search here....">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <!-- <div class="shopping_cart">
            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="Veg_images\sweet_potato.jpeg" alt="">
                <div class="content">
                    <h3>Sweet-Potato</h3>
                    <h3>शकरकंद</h3>
                    <span class="price">40/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="Veg_images\broccali.jpeg" alt="">
                <div class="content">
                    <h3>Broccali</h3>
                    <h3>हरी फूलगोभी</h3>
                    <span class="price">50/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="Veg_images\carrot.jpeg" alt="">
                <div class="content">
                    <h3>Carrot</h3>
                    <h3>गाजर</h3>
                    <span class="price">30/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="Veg_images\cauliflower.jpeg" alt="">
                <div class="content">
                    <h3>Cauliflower</h3>
                    <h3>फूलगोभी</h3>
                    <span class="price">30/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
             </div> 
            <div class="total">Total : 80rs/- </div>
            <a href="#" class="btn">Check Out</a>
        </div> -->

        <!-- 
            <div class="box">
                <div class="cart-count">0</div>
                <ion-icon name="cart" id="cart-icon"></ion-icon>
            </div> 

            <div class="cart">
                <div class="cart-title">Cart Items</div>
                <div class="cart-content">
            </div>

            <div class="total">
                <div class="total-title">Total</div>
                <div class="total-price">Rs.0</div>
            </div>

        <button class="btn-buy">Place Order</button>

        <ion-icon name="close" id="cart-close"></ion-icon> -->

        <div class="shopping_cart">
            <div class="box">
                <!-- <i class="fas fa-trash"></i> -->
                <div class="cart">
                    <div class="cart-title">Cart Items</div>
                    <div class="cart-content">
                        <!--
          <div class="cart-box">
            <img src="Veg_images/carrot.jpeg" class="cart-img">
            <div class="detail-box">
              <div class="cart-food-title">Carrot</div>
              <div class="price-box">
                <div class="cart-price">Rs.30</div>
                 <div class="cart-amt">Rs.30</div>
             </div>
              <input type="number" value="1" class="cart-quantity">
            </div>
            <ion-icon name="trash" class="cart-remove"></ion-icon>
          </div>

          <div class="cart-box">
            <img src="Veg_images/broccali.jpeg" class="cart-img">
            <div class="detail-box">
              <div class="cart-food-title">broccali</div>
              <div class="price-box">
                <div class="cart-price">Rs.20</div>
                 <div class="cart-amt">Rs.20</div>
             </div>
              <input type="number" value="1" class="cart-quantity">
            </div>
            <ion-icon name="trash" class="cart-remove"></ion-icon>
          </div>
        -->
                    </div>

                    <div class="total">
                        <div class="total-title">Total</div>
                        <div class="total-price">Rs.0</div>
                    </div>

                    <button class="btn-buy">Place Order</button>

                    <ion-icon name="close" id="cart-close"></ion-icon>
                </div>
            </div>
        </div>





        <form action="login.php" class="login-form" method="post">
            <h3>Login now</h3>
            <input type="text" id="user" name="user" placeholder="your email" class="box">
            <input type="password" id="pass" name="pass" placeholder="your password" class="box">
            <p>forget your password <a href="myotp/forgot.php">click here</a></p>
            <p>don't have an account <a href="Signup_otp/signup-user.php">create now</a></p>
            <input type="submit" placeholder="login now" class="btn" id="btn" name="submit">
            <!-- <button type="submit" class="btn" onclick="openPopup()">Submit</button> -->


            <?php
                 include("conn.php");
                ?>

        </form>

    </header>
    <!-- header section end -->

    <!-- Home section start  -->
    <section class="Home" id="Home">
        <div class="content">
            <h3>fresh and <span> organic </span> products for you</h3>
            <p>We sell fresh vegetables, fruits & delicious puddings.
                <a href="Chatbot\chatbot-master\index.html" class="btn">shop now</a>
            </p>
        </div>
    </section>
    <!-- Home section end -->

    <!-- banner section start -->

    <section class="banner-container">

        <div class="banner">
            <img src="Veg_images\banner1.jpeg" alt="">
            <div class="content">
                <h3>special offer</h3>
                <p>upto 45% off</p>
                <a href="#" class="btn">check out</a>
            </div>
        </div>

        <div class="banner">
            <img src="Veg_images\banner4.jpeg" alt="">
            <div class="content">
                <h3>limited offer</h3>
                <p>upto 30% off</p>
                <a href="#" class="btn">check out</a>
            </div>
        </div>

        <div class="banner">
            <img src="Veg_images\banner12.jpeg" alt="">
            <div class="content">
                <h3>combo offer</h3>
                <p>upto 35% off</p>
                <a href="#" class="btn">check out</a>
            </div>
        </div>
    </section>

    <!-- banner section end -->

    <!-- Categories section start -->
    <section class="Categories" id="Categories">
        <h1 class="heading">Our <span>Categories</span></h1>

        <div class="box-container">

            <div class="box">
                <img src="Veg_images\CategVeg.jpeg" alt="">
                <h3>Fresh Vegetables</h3>
                <p>A jewel of health, hidden in a veggies.</p>
                <a href="productSec.php" class="btn">shop now</a>
            </div>

            <div class="box">
                <img src="Veg_images\Categfruit1.jpeg" alt="">
                <h3>Fresh Fruits</h3>
                <p>A jewel of health, hidden in a fruits.</p>
                <a href="fruit.php" class="btn">shop now</a>
            </div>

            <div class="box">
                <img src="juice/juice1.jpeg" alt="">
                <h3>Fresh juice</h3>
                <p>A jewel of health, hidden in a juice.</p>
                <a href="jucy.php" class="btn">shop now</a>
            </div>

            <div class="box">
                <img src="seedss\homepg.jpeg" alt="">
                <h3> seeds </h3>
                <p> seeds of happiness. </p>
                <a href="seeds.php" class="btn">shop now</a>
            </div>

            <!-- <div class="box">
                <img src="Veg_images\CategSeasonalfruit.jpeg" alt="">
                <h3>Seassonal Fruits</h3>
                <p> A jewel of health, hidden in a fruits.</p>
                <a href="#" class="btn">shop now</a>
            </div> -->

        </div>
    </section>

    <!-- Categories section end -->

    <!-- Deal section start -->
    <section class="deal" id="deal">
        <div class="content">
            <h3 class="title">Deal of the Day</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis atque labore pariatur unde molestias architecto?</p>

            <div class="count-down">
                <div class="box">
                    <h3 id="day">00</h3>
                    <span>day</span>
                </div>
                <div class="box">
                    <h3 id="hour">00</h3>
                    <span>hour</span>
                </div>
                <div class="box">
                    <h3 id="minute">00</h3>
                    <span>minute</span>
                </div>
                <div class="box">
                    <h3 id="second">00</h3>
                    <span>second</span>
                </div>
            </div>
            <a href="#" class="btn">check the deal</a>
        </div>

    </section>
    <!-- Deal section end -->

    <!-- review section start -->
    <section class="review" id="review">
        <h1 class="heading"> customer's <span>review</span></h1>

        <div class="swiper review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="sheetal/s1.jpeg" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat hic reiciendis tempora et perferendis. Sit ducimus accusantium quis in sapiente.</p>
                    <h3>sheetal sharma</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="sheetal/s2.jpeg" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat hic reiciendis tempora et perferendis. Sit ducimus accusantium quis in sapiente.</p>
                    <h3>priyal nemar</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="sheetal/s3.jpeg" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat hic reiciendis tempora et perferendis. Sit ducimus accusantium quis in sapiente.</p>
                    <h3>ishika patidar</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="sheetal/s4.jpeg" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat hic reiciendis tempora et perferendis. Sit ducimus accusantium quis in sapiente.</p>
                    <h3>rashi patel</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="sheetal/s5.jpeg" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat hic reiciendis tempora et perferendis. Sit ducimus accusantium quis in sapiente.</p>
                    <h3>labhita kashi</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="sheetal/ss2.jpeg" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat hic reiciendis tempora et perferendis. Sit ducimus accusantium quis in sapiente.</p>
                    <h3>sheetal prajapati</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- review section end -->

    <!-- newsletter section starts -->
    <section class="newsletter">

        <h3>subscribe us for latest updates</h3>

        <form action="">
            <input class="box" type="email" placeholder="enter your email">
            <!-- <input type="submit" value="subscribe" class="btn"> -->
            <a href="E-Boxxx\index.php" type="submit" value="subscribe" class="btn">Subscribe</a>
        </form>

    </section>
    <!-- newsletter section end -->

    <!-- footer section start -->
    <section class="footer" id="footer">
        <div class="box-container">
            <div class="box">
                <h3>Veggies <i class="fa-solid fa-seedling"></i></h3>
                <p>"Adopting a new healthier lifestyle can involve changing diet to include more fresh fruits and vegetables. as well as increasing level of exercise ."</p>
                <div class="share">
                    <a href="#" class="btn fab fa-facebook"></a>
                    <a href="#" class="btn fab fa-twitter"></a>
                    <a href="#" class="btn fab fa-instagram"></a>
                    <a href="#" class="btn fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <h3>keep in touch</h3>
                <a href="#" class="links"><i class="fas fa-phone"></i>+919876543210</a>
                <a href="#" class="links"><i class="fas fa-home"></i>S-12 Silicon City Rau, Indore</a>
                <a href="#" class="links"><i class="fas fa-envelope"></i>sheetalprajapati20@gmail.com</a>
                <a href="#" class="links"><i class="fas fa-map-marker-alt"></i>Indore, India - 452012</a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#" class="links"><i class="fas fa-arrow-right"></i>home</a>
                <a href="#" class="links"><i class="fas fa-arrow-right"></i>Categories</a>
                <a href="#" class="links"><i class="fas fa-arrow-right"></i>delivery</a>
                <a href="#" class="links"><i class="fas fa-arrow-right"></i>reviews</a>
                <a href="#" class="links"><i class="fas fa-arrow-right"></i>blogs</a>
                <a href="#" class="links"><i class="fas fa-arrow-right"></i>about</a>
            </div>

            <div class="box">
                <h3>Any Queries</h3>
                <form action="">
                    <textarea placeholder="write your Queries...." name="" id="" cols="30" rows="10"></textarea>
                    <input type="submit" value="send message" class="btn">
                </form>
            </div>
        </div>



        <h1 class="credit"> created by <span> miss. sheetal prajapati </span>| all rights reserved! </h1>


        </div>
    </section>
    <!-- footer section end -->

    <!-- swiper link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="scripts.js"></script>
</body>

</html>