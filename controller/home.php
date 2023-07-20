<?php include("checklogin.php"); ?>
<link rel="stylesheet" href="../view/css/home.css">
<!DOCTYPE html>
<html>
<head>
    <title>Haberler</title>
    <style>
    </style>
</head>
<body>
<?php include("navbar.php"); ?><br><br>
    <div id="slider">
        <ul>
            <li><img height="500" width="1500" src="../view/image/69555,1jpg.jpg" alt="Resim 1"></li>
            <li><img height="500" width="1500" src="../view/image/69662,1jpg.jpg" alt="Resim 2"></li>
            <li><img height="500" width="1500" src="../view/image/70160,1jpg.jpg" alt="Resim 4"></li>

            <!-- İstenilen sayıda resim ekleyebilirsiniz -->
        </ul>
        <div class="slider-button slider-button-left" onclick="sliderPrev()">&lt;</div>
        <div class="slider-button slider-button-right" onclick="sliderNext()">&gt;</div>
    </div>
    <div class="ust_bilgi">


    </div>
    <footer>
  <div class="rounded-social-buttons">
                    <a class="social-button facebook" href="https://www.facebook.com/yozgatilsaglik/?locale=tr_TR" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="social-button twitter" href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="social-button linkedin" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a class="social-button youtube" href="https://www.youtube.com/@yozgatilsaglik" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a class="social-button instagram" href="https://www.instagram.com/yozgatilsaglik/" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
</footer>
    <script>
        var slideIndex = 0;
        showSlide(slideIndex);

        setInterval(function() {
            sliderNext();
        }, 4000); // 4  saniyede bir otomatik geçiş

        function sliderNext() {
            slideIndex++;
            showSlide(slideIndex);
        }
        
        function sliderPrev() {
            slideIndex--;
            showSlide(slideIndex);
        }
        
        function showSlide(n) {
            var slides = document.querySelectorAll('#slider ul li');
            var buttons = document.querySelectorAll('.slider-button');
            
            if (n >= slides.length) {
                slideIndex = 0;
            }
            if (n < 0) {
                slideIndex = slides.length - 1;
            }
            
            for (var i = 0; i < slides.length; i++) {
                slides[i].style.transform = 'translateX(-' + (slideIndex * 100) + '%)';
            }
        }
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>

</body>
</html>
