<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>gallery</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.8.3/lightgallery.min.js">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />


    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<div class="container">

<?php @include 'header.php'; ?>

<section class="gallery">

    <h1 class="heading">our gallery</h1>

    <div class="gallery-container">

        <a href="images/gal-img-1.jpg" class="box">
            <div class="image">
                <img src="images/gal-img-1.jpg" alt="">
            </div>
            <h3>coffee</h3>
        </a>

        <a href="images/gal-img-2.jpg" class="box">
            <div class="image">
                <img src="images/gal-img-2.jpg" alt="">
            </div>
            <h3>Soda</h3>
        </a>

        <a href="images/gal-img-3.jpg" class="box">
            <div class="image">
                <img src="images/gal-img-3.jpg" alt="">
            </div>
            <h3>Burger</h3>
        </a>

        <a href="images/gal-img-4.jpg" class="box">
            <div class="image">
                <img src="images/gal-img-4.jpg" alt="">
            </div>
            <h3>Burger</h3>
        </a>

        <a href="images/gal-img-5.jpg" class="box">
            <div class="image">
                <img src="images/gal-img-5.jpg" alt="">
            </div>
            <h3>Cake</h3>
        </a>

        <a href="images/gal-img-6.jpg" class="box">
            <div class="image">
                <img src="images/gal-img-6.jpg" alt="">
            </div>
            <h3>Ice Cream</h3>
        </a>

    </div>

</section>

<?php @include 'footer.php'; ?>


</div>










<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.8.3/lightgallery.min.js"></script>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

lightGallery(document.querySelector('.gallery .portfolio-container'));

</script>

</body>
</html>