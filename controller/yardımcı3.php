<?php include("checklogin.php"); ?>

<link rel="stylesheet" href="../view/css/bakanbilgi.css">
<head>
    <title>Bakan Yardımcısı</title>
    <?php include("navbar.php"); ?>
</head>
<body>
    <br>
    <div class="bilgi">
        <img height=400 width="665"src="../view/image/yardımcı3.webp" alt="">
        <br><br><div class=text>
       <b> Huzeyfe YILMAZ</b>  <br> </b> <br>
       Huzeyfe Yılmaz,1977 Bolu Yeniçağa’da doğdu. Eğitim hayatına Bolu’da başladı. Ankara Tevfik İleri İmam Hatip Lisesi'ni bitirdikten sonra Kocaeli Üniversitesi Elektronik Haberleşme mühendisliğinden mezun oldu. Yüksek lisansını Gazi Üniversitesi Elektrik Elektronik Mühendisliği bölümünde yaptı. <br><br>

İş hayatına, 2001 yılında Ankara Büyükşehir Belediyesinde mühendis olarak başladı ve teknik işler müdür yardımcısı pozisyonuna yükseldi. 2005 yılında Türksat'ta göreve başladı ve sırasıyla Ankara İl Müdürlüğü, Teknik İşletme Müdürlüğü ve Kocaeli İl Müdürlüğü görevlerini icra etti. 2014 yılı mart ayında Gençlik ve Spor Bakanlığı'nda Bilgi İşlem Daire Başkanı olarak göreve başladı ve 2017 yılında aynı kurumda Eğitim, Kültür ve Araştırma Genel Müdürü oldu.<br><br> 2018 Aralık ayında Türkiye Tarım Kredi Kooperatifleri'nin iştiraki olan Teknoloji şirketi Tarnet A.Ş.'de Genel Müdür ve Yönetim Kurulu üyesi olarak görev aldı. Ankara Bilim Üniversitesinde 2020 yılından beri misafir öğretim üyesi olan Huzeyfe Yılmaz 2022 yılından beri ATO'da Bilişim Komitesi Başkanlığı görevini sürdürmektedir. <br><br>

Kariyeri boyunca, Kredi Yurtlar Kurumu Dijital Dönüşüm Projesi, Gençlik Bilgi Sistemi, NUSRAT, Tarım Kredi Kurumsal Kaynak Planlama Sistemi, ZİHA (zirai insansız hava aracı), Tır Cepte, ATS (akıllı traktör sistemleri) gibi pek çok teknoloji projesine ve bilişim altyapısına imza atan Huzeyfe Yılmaz iyi derecede İngilizce ve Arapça bilmektedir. Huzeyfe Yılmaz evli ve iki çocuk babasıdır. <br>
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