<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />


    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<div class="container">

<?php @include 'header.php'; ?>

<section class="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(images/bg2.jpg) no-repeat">
                <div class="content">
                    <h3>Welcome to our Coffee Shop!</h3>
                    <p>Welcome to my coffee shop! Here at JV Brew House, we serve more than just great coffee — we offer delicious snacks, refreshing drinks, and a cozy place to relax or catch up with friends. Every cup and every bite is made with passion to brighten your day. Experience the warm vibe and join our community of coffee and good times lovers!
                    </p>
                    <a href="about.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/bg2.jpg) no-repeat">
                <div class="content">
                    <h3>Welcome to our Coffee Shop!</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium possimus nisi nesciunt consequatur numquam necessitatibus, fuga unde voluptatibus? Consequuntur officiis harum eligendi ad vero repudiandae libero nostrum officia at tempore!</p>
                    <a href="about.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/bg3.jpg) no-repeat">
                <div class="content">
                    <h3>Welcome to our Coffee Shop!</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium possimus nisi nesciunt consequatur numquam necessitatibus, fuga unde voluptatibus? Consequuntur officiis harum eligendi ad vero repudiandae libero nostrum officia at tempore!</p>
                    <a href="about.php" class="btn">discover more</a>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<section class="services">

    <h1 class="heading">our services</h1>
    <div class="swiper service-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <img src="images/services1.jpg" alt="">
                <div class="content">
                    <h3>Menu and Beverage Options</h3>
                    <p>At JV Brew House, our menu offers a delightful variety of beverages and treats to satisfy every craving. From classic coffees and creamy lattes to refreshing teas and specialty drinks, there's something for everyone. Pair your favorite drink with our fresh pastries and snacks for the perfect coffee shop experience. Come taste the flavors crafted with care just for you!</p>
                    <a href="about.php" class="btn">about us</a>
                </div>
            </div>

            <div class="swiper-slide slide">
                <img src="images/services9.jpg" alt="">
                <div class="content">
                    <h3>Takeaway and Online Orders</h3>
                    <p>Enjoy your favorite drinks and treats from JV Brew House anytime, anywhere! We offer convenient takeaways for those on the go and easy online ordering for quick pickup. Simply place your order online, and we’ll have it ready when you arrive. Perfect for busy days or cozy moments at home!</p>
                    <a href="about.php" class="btn">about us</a>
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