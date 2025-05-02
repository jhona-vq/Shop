<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>pricing</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />


    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<div class="container">

<?php @include 'header.php'; ?>

<section class="pricing">

    <h1 class="heading">our pricing</h1>

    <div class="box-container">

    <div class="box">
        <h3>coffee menu</h3>
        <div class="price">$1.79</div>
        <div class="list">
            <p> <i class="fas fa-check"></i>Espresso</p>
            <p> <i class="fas fa-check"></i>Cappuccino</p>
            <p> <i class="fas fa-check"></i>Caffe Latte</p>
            <p> <i class="fas fa-check"></i>Mocha</p>
            <p> <i class="fas fa-check"></i>Americano</p>
        </div>
        <a href="contact.php" class="btn">choose now</a>
    </div>

    <div class="box">
        <h3>dessert menu</h3>
        <div class="price">$1.79</div>
        <div class="list">
            <p> <i class="fas fa-check"></i>cakes</p>
            <p> <i class="fas fa-check"></i>chocolate brownies</p>
            <p> <i class="fas fa-check"></i>cheese cake</p>
            <p> <i class="fas fa-check"></i>pastries</p>
            <p> <i class="fas fa-check"></i>ice cream</p>
        </div>
        <a href="contact.php" class="btn">choose now</a>
    </div>

    <div class="box">
        <h3>bread menu</h3>
        <div class="price">$1.79</div>
        <div class="list">
            <p> <i class="fas fa-check"></i>bagel</p>
            <p> <i class="fas fa-check"></i>croiisant</p>
            <p> <i class="fas fa-check"></i>white bread</p>
            <p> <i class="fas fa-check"></i>cheese bread</p>
            <p> <i class="fas fa-check"></i>baguette</p>
        </div>
        <a href="contact.php" class="btn">choose now</a>
    </div>

    </div>

</section>

<section class="reviews">

    <h1 class="heading">customers</h1>

        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <img src="images/pic-1.jpg" alt="">
                    <h3>Mike</h3>
                    <p>The atmosphere here is so cozy and inviting! The coffee was rich and flavorful — definitely my new favorite spot to unwind.</p>
                    <div class="stars">
                        <i class="fas-fa-star"></i>
                        <i class="fas-fa-star"></i>
                        <i class="fas-fa-star"></i>
                        <i class="fas-fa-star"></i>
                        <i class="fas-fa-star"></i>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <img src="images/pic-2.jpg" alt="">
                    <h3>Will</h3>
                    <p>Exceptional service and amazing drinks! I loved their unique blends and the tasty pastries. Highly recommended</p>
                    <div class="stars">
                        <i class="fas-fa-star"></i>
                        <i class="fas-fa-star"></i>
                        <i class="fas-fa-star"></i>
                        <i class="fas-fa-star"></i>
                        <i class="fas-fa-star"></i>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <img src="images/pic-3.jpg" alt="">
                    <h3>Ash</h3>
                    <p>A perfect place to catch up with friends or get some work done. The staff are friendly and the coffee is top-notch.</p>
                    <div class="stars">
                        <i class="fas-fa-star"></i>
                        <i class="fas-fa-star"></i>
                        <i class="fas-fa-star"></i>
                        <i class="fas-fa-star"></i>
                        <i class="fas-fa-star"></i>
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <img src="images/pic-4.jpg" alt="">
                    <h3>Billie</h3>
                    <p>Great vibes, delicious treats, and excellent coffee. This coffee shop has become my go-to place for relaxation and recharge.</p>
                    <div class="stars">
                        <i class="fas-fa-star"></i>
                        <i class="fas-fa-star"></i>
                        <i class="fas-fa-star"></i>
                        <i class="fas-fa-star"></i>
                        <i class="fas-fa-star"></i>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

</section>


<?php @include 'footer.php'; ?>


</div>












<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>