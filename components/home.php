<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conoveralla</title>
    <link rel="stylesheet" href="assets/css/Home.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=The+Nautigal:wght@400;700&family=Tienne:wght@400;700;900&family=Tilt+Prism&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Truculenta:opsz,wght@12..72,100..900&display=swap" rel="stylesheet">

</head>
<body>

    <?php include __DIR__ . '/../views/header.php'; ?>


    <main>
        <div class="container">
            <div class="section-background">
                <h1 class="section-1-welcome">Welcome to</h1>
                <h1 class="section-1-title">CONOVERELLA</h1>
                <div class="section-1-description">
                    <p class="description-part-1">Discover a world of luxury fashion at your fingertips. At Conoverella, we bring you premium, stylish, and effortlessly chic clothing designed for those who want to dress fast and shine instantly. Whether you're looking for timeless elegance or modern sophistication, we have the perfect pieces to elevate your wardrobe.
                    </p>
                    <p class="description-part-2">Shop now and become the best version of yourself!</p>
                </div>
                <button class="shop-now">SHOP NOW!</button>
            </div>
            <div class="shipping-policies"> 
                <div class="shipping-policy">
                    <img src="assets/images/header-pics/delivery.png">
                    <div class="policy-text">
                        <h2 class="policy-title">FREE SHIPPING</h2>
                        <p class="policy-description">FREE SHIPPING TO ALL PH ORDER OR ORDER ABOVE $150</p>
                    </div>
                </div>
                <div class="shipping-policy">
                    <img src="assets/images/home-pics/return.png">
                    <div class="policy-text">
                        <h2 class="policy-title">30 DAYS RETURN</h2>
                        <p class="policy-description">SIMPLY RETURN IT WITHIN 30 DAYS FOR AN EXCHANGE</p>
                    </div>
                </div>
                <div class="shipping-policy" id="policy-payment-secure">
                    <img src="assets/images/home-pics/padlock.png">
                    <div class="policy-text">
                        <h2 class="policy-title">100% PAYMENT SECURITY</h2>
                        <p class="policy-description">We guarantee safe transactions, secure checkout, and fraud protection, giving you peace of mind while you shop.</p>
                    </div>
                </div>
            </div>
            <div class="slideshow-container">
                <div class="slides-wrapper">
        
                    <!-- Slide 1 -->
                    <div class="slide">
                        <div class="left-column">
                            <img src="assets/images/slide-pics/women shoe 1.png" alt="Left Top 1">
                            <img src="assets/images/slide-pics/sunglasses women.jpg" alt="Left Bottom 1">
                        </div>
                        <div class="right-column">
                            <img src="assets/images/slide-pics/menswear 1.png" alt="Right 1">
                        </div>
                    </div>
        
                    <!-- Slide 2 -->
                    <div class="slide">
                        <div class="left-column">
                            <img src="assets/images/slide-pics/men watch 1.png" alt="Left Top 2">
                            <img src="assets/images/slide-pics/men shoe.jpg" alt="Left Bottom 2">
                        </div>
                        <div class="right-column">
                            <img src="assets/images/slide-pics/men suit.jpg" alt="Right 2">
                        </div>
                    </div>
        
                    <!-- Slide 3 -->
                    <div class="slide">
                        <div class="left-column">
                            <img src="assets/images/slide-pics/perfume.jpg" alt="Left Top 3">
                            <img src="../image3b.jpg" alt="Left Bottom 3">
                        </div>
                        <div class="right-column">
                            <img src="assets/images/slide-pics/ring.jpg" alt="Right 3">
                        </div>
                    </div>
        
                </div>
        
                <!-- Navigation Arrows -->
                <div class="prev" onclick="moveSlide(-1)">&#10094;</div>
                <div class="next" onclick="moveSlide(1)">&#10095;</div>
        
                <!-- Dots -->
                <div class="dots-container">
                    <span class="dot" onclick="currentSlide(0)"></span>
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                </div>
            </div>
    </main>

    <?php include __DIR__ . '/../views/footer.php'; ?>

</body>

<script src="assets/js/header.js"></script>
<script>
    let slideIndex = 0;

    function showSlides(index) {
    const slidesWrapper = document.querySelector('.slides-wrapper');
    const dots = document.querySelectorAll('.dot');
    const totalSlides = document.querySelectorAll('.slide').length;

    if (index >= totalSlides) slideIndex = 0;
    if (index < 0) slideIndex = totalSlides - 1;

    slidesWrapper.style.transform = `translateX(-${slideIndex * 100}%)`;

    dots.forEach(dot => dot.classList.remove('active'));
    dots[slideIndex].classList.add('active');
}

function moveSlide(step) {
    slideIndex += step;
    showSlides(slideIndex);
}

function currentSlide(index) {
    slideIndex = index;
    showSlides(slideIndex);
}

// Auto-slide every 5 seconds
setInterval(() => moveSlide(1), 5000);

// Initialize the slideshow
showSlides(slideIndex);


    </script>
</html>
