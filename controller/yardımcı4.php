<?php include("checklogin.php"); ?>

<link rel="stylesheet" href="../view/css/bakanbilgi.css">
<head>
    <title>Bakan Yardımcısı</title>
    <?php include("navbar.php"); ?>
</head>
<body>
    <br>
    <div class="bilgi">
        <img height=400 width="660" src="../view/image/yardımcı4.webp" alt="">
        <br><br><div class=text>
       <b>Hüseyin Kürşat KIRBIYIK</b><br><br>
       Rize'nin Güneysu ve Karaman'ın Kazımkarabekir ilçelerinde Kaymakam vekilliği görevlerinde bulundu. Londra'da 6 ay yabancı dil eğitimi alan Kırbıyık, sırasıyla Burdur Altınyayla, Kahramanmaraş Nurhak ilçelerinde Kaymakamlık, Kahramanmaraş Vali Yardımcılığı ve Burdur Gölhisar Kaymakamlığı görevlerinden sonra 2013 yılında Mülkiye Müfettişliğine atandı.<br><br>

İçişleri Bakanlığı bünyesinde 2018-2020 yılları arasında Strateji Geliştirme Başkanı, 2020-2022 yılları arasında İller İdaresi Genel Müdürü olarak görev yaptıktan sonra 2022/209 sayılı Cumhurbaşkanlığı Kararı ile Edirne Valisi olarak atanmıştır.<br><br>

22 Haziran 2023 tarih ve 2023/308 sayılı Cumhurbaşkanı Kararıyla Sağlık Bakanlığı Bakan Yardımcısı olarak atanan Hüseyin Kürşat KIRBIYIK evli ve iki çocuk babasıdır.<br>
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
            width: 93px;
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