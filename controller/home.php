<?php include("checklogin.php"); ?>
<link rel="stylesheet" href="../view/css/home.css">
<!DOCTYPE html>
<html>
<head>
    <title>Ana Sayfa</title>
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
    </div> <br> <br> 
         <div class="row">
         <div class="column1" style="background-color:#fff;">
        <ul class="acilir-liste">
          <h2 class="text1"><b> Duyurular</h2> </b>
          <li><a href="https://sgb.saglik.gov.tr/TR,96609/il-ozel-idarelerine-aktarilan-yatirim-odeneklerinin-2023-yili-ii-donemnisan-mayis-haziran-harcama-veri-girisi.html">İl Özel İdarelerine Aktarılan Yatırım Ödeneklerinin 2023 yılı II. Dönem(Nisan, Mayıs, Haziran) Harcama Veri Girişi</a></li>
         <li><a href="https://shgm.saglik.gov.tr/TR,96518/uremeye-yardimci-tedavi-uyte-kliniklaboratuvar-uygulamalari-sertifikali-egitim-programi-2023-yili-2-donem-yeni-egitim-ve-tazeleme-egitim-basvurulari.html">Üremeye Yardımcı Tedavi (ÜYTE) Klinik/Laboratuvar Uygulamaları Sertifikalı Eğitim Programı 2023 Yılı 2. Dönem Yeni Eğitim ve Tazeleme Eğitim Başvuruları</a></li>
         <li><a href="https://www.saglik.gov.tr/TR,96517/sihhat-2-projesi-kapsaminda-raporlama-uzmani-istihdam-edilecektir.html">SIHHAT-2 Projesi Kapsamında Raporlama Uzmanı İstihdam Edilecektir</a></li>
         <li><a href="https://sgb.saglik.gov.tr/TR,96512/genel-yonetim-muhasebe-yonetmeligi-geregi-saglik-bakanligi-2023mayis-donemi-mali-tablolari-yayimlanmistir.html">Genel Yönetim Muhasebe Yönetmeliği Gereği Sağlık Bakanlığı 2023/Mayıs Dönemi Mali Tabloları Yayımlanmıştır.</a></li>
         <li><a href="https://www.saglik.gov.tr/TR,96694/bakan-kocadan-hepatit-a-asilarina-iliskin-aciklama.html">Bakan Koca'dan “Hepatit A” Aşılarına İlişkin Açıklama</a></li>
         <li><a href="https://www.saglik.gov.tr/TR,96517/sihhat-2-projesi-kapsaminda-raporlama-uzmani-istihdam-edilecektir.html">SIHHAT-2 Projesi Kapsamında Raporlama Uzmanı İstihdam Edilecektir.</a></li>
         <br>
         <a href="../controller/guncel_haber.php" class="butonguncel">Güncel Haberler için</a>
        </ul>
     </div>

         <div class="column" style="background-color:#fff; position: relative;">
         <img height="380" width="470" src="../view/image/38414,s-bakanimizpng.jpg">
         <a href="bakanbilgi.php" class="overlay button">Bakanımız DR. Fahrettin Koca hakkında bilgi edinin </a>
        </div>
     </div><br>
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
</body>
</html>
