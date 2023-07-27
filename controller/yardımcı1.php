<?php include("checklogin.php"); ?>

<link rel="stylesheet" href="../view/css/bakanbilgi.css">
<head>
    <title>Bakan Yardımcısı</title>
    <?php include("navbar.php"); ?>
</head>
<body>
    <br>
    <div class="bilgi">
        <img center height=400 src="../view/image/yardımcı1.jpg" alt="">
        <br><br><div class=text>
       <b>Dr. Şuayıp BİRİNCİ</b>
       Dr. Şuayıp BİRİNCİ, 1973 yılında Rize’de doğdu. İlk ve orta öğrenimini Rize ve Trabzon’da, üniversite eğitimini, Ondokuz Mayıs Üniversitesi Tıp Fakültesi’nde tamamladı. Tıp doktoru olduktan sonra; “Liderlik ve Küresel Girişimcilik” te yüksek lisans, “Sağlık Kurumları Yönetimi” alanında yüksek lisans ve doktora yaptı.<br><br>
        1998 yılında meslek hayatına başlayan Dr.Birinci memleketi Rize ve İstanbul’da çeşitli kamu kurumlarında hekimlik yaptı. Ümraniye EA Hastanesi’nde başhekim yardımcılığı (2005-2009), İstanbul İl Sağlık Müdürlüğü’nde müdür yardımcılığı (2009-2012) ve TKHK İstanbul Anadolu Kuzey Bölgesi’nde genel sekreterlik (2012-2014) görevlerinde bulundu.<br><br>
        Sağlık Bakanlığı Merkez Teşkilatı’nda, müsteşar yardımcılığı (2014-2018) ve Ağustos 2018’de Sağlık Bakanlığı Bakan Yardımcılığı görevine atanmış ve halen görevini sürdürmektedir. Bakanlıkta çalıştığı süreçte, strateji ve hedefleri belirleme, planlama, regülasyon ve koordinasyon görevlerini sürdürdü.
    </div>
    <div class=text>
        
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
            width: 93px;    position: sticky;
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