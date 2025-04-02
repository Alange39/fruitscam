<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://cdn.tailwindcss.com"></script>
    <title>Bannière Slider</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .slider {
            /* position: relative;
            width: 100%;
            max-width: 800px;
            margin: auto; */
            overflow: hidden;
        }
        .slides {
            display: flex;
            transition: transform 0.5s ease;
            width: 100%;
        }
        .slide {
            min-width: 100%;
            position: relative;
        }
        .slide img {
           background-size: coveer;
        }
        .text {
            position: absolute;
            bottom: 20px;
            left: 20px;
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
        }
        @media (max-width: 600px) {
            .text {
                font-size: 14px;
                padding: 5px;
            }
        }
    </style>
</head>
<body>

<div class="slider">
    <div class="slides">
        <div class="slide">
            <img src="assets/images/bou.png" alt="">
            <div class="text">texte 1</div>
        </div>
        <div class="slide">
            <img src="assets/images/Usine-fruits.png" alt="">
            <div class="text">texte 2</div>
        </div>
        <div class="slide">
            <img src="assets/images/ravitaillement.webp" alt="">
            <div class="text">texte 3</div>
        </div>
    </div>
</div>

<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;

    function showSlide(index) {
        const offset = index * -100;
        document.querySelector('.slides').style.transform = `translateX(${offset}%)`;
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
    }

    setInterval(nextSlide, 4000); // Change slide every 3 seconds
</script>

</body>
</html>