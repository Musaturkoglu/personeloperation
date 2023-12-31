<?php include("checklogin.php"); ?>

<link rel="stylesheet" href="../view/css/bakanbilgi.css">
<head>
    <title>Bakanımız Hakkında</title>
    <?php include("navbar.php"); ?>
</head>
<body>
    <br>
    <div class="bilgi">
        <img height=400 src="../view/image/38414,s-bakanimizpng.jpg" alt="">
        <br><br>
        <div class="text">
            <b>Dr. Fahrettin Koca</b><br><br>
            Dr. Fahrettin Koca, 2 Ocak 1965’te Konya’da doğdu. İlk ve orta öğrenimini doğduğu kentte, liseyi Bursa Erkek Lisesi’nde bitirdi. İstanbul Üniversitesi Tıp Fakültesi’ni 1988’de tamamlayarak tıp doktoru unvanını aldı. İhtisasını İstanbul Üniversitesi Cerrahpaşa Tıp Fakültesi Çocuk Sağlığı ve Hastalıkları Ana Bilim Dalı’nda tamamlayarak 1995’te Çocuk Sağlığı ve Hastalıkları Uzmanı oldu. <br><br>

Çeşitli sağlık kurumlarında hekimlik ve medikal direktörlük görevlerinde bulundu. Kurduğu ve başkanlığını yürüttüğü sağlık kurumlarında Türkiye’nin sağlıkta dönüşüm politikaları doğrultusunda önemli atılımlar gerçekleştirdi. Başkanı olduğu Türkiye Eğitim Sağlık ve Araştırma (TESA) Vakfı tarafından 2009 yılında kurulan İstanbul Medipol Üniversitesi’nin Mütevelli Heyeti Başkanlığını yürüttü.<br><br>

Evli ve dört çocuk babası olan Koca’nın Türk Pediatri Kurumu, Pediatrik Metabolizma ve Beslenme Derneği, İstanbul Ticaret Odası (İTO) Sağlık Meslek Komitesi, Özel Hastaneler Sağlık Kuruluşları Derneği (OHSAD) üyelikleri bulunmaktadır. Aynı zamanda Dış Ekonomik İlişkiler Konseyi (DEİK) Eğitim Komitesi İş Konseyi Başkan Yardımcısı, Vakıf Üniversite Hastaneleri Derneği’nin Başkanı ve Hizmet İhracatçıları Birliği Sağlık Hizmetleri Komitesi Başkanıdır.<br><br>
        </div>
    </div>

    <!-- Add the button with the link to an open menu -->
    <div class="open-menu-button" onclick="toggleMenu()">
        <a href="#menu">Yardımcılar</a>
    </div>

    <!-- Add the menu that will be displayed when the button is clicked -->
    <div class="menu" id="menu">
        <!-- Your menu items here -->
        <ul>
            <li><a href="../controller/yardımcı1.php">Dr. Şuayıp BİRİNCİ</a></li>
            <li><a href="../controller/yardımcı2.php">Doç. Dr. Tolga TOLUNAY</a></li>
            <li><a href="../controller/yardımcı3.php">Huzeyfe YILMAZ</a></li>
            <li><a href="../controller/yardımcı4.php">Hüseyin Kürşat KIRBIYIK</a></li>
            <!-- Add more menu items as needed -->
        </ul>
    </div>

    <style>
        /* CSS style for the open menu button */
        .open-menu-button {
            width: 75px;
    position: sticky;
    bottom: 20px;
    right: 20px;
    background-color: #f44336;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
        }

        /* CSS style for the button text */
        .open-menu-button a {
            text-decoration: none;
            color: inherit;
        }

        /* CSS style for the menu */
        .menu {
    width: 197px;
    position: sticky;
    bottom: 60px;
    right: 20px;
    background-color: #ffffff;
    padding: 10px;
    border-radius: 5px;
    display: none;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);s
        }

        /* CSS style for the menu items */
        .menu ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .menu ul li {
            margin-bottom: 5px;
        }

        .menu ul li a {
            text-decoration: none;
            color: #333;
            display: block;
            padding: 5px;
            border-radius: 3px;
        }

        .menu ul li a:hover {
            background-color: #f0f0f0;
        }
    </style>

    <script>
        function toggleMenu() {
            var menu = document.getElementById("menu");
            menu.style.display = menu.style.display === "none" ? "block" : "none";
        }
    </script>
</body>
