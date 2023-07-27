<?php include("checklogin.php"); ?>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="../view/css/sitemap.css">  
<head><title>Site Haritası</title></head>
<style>

/* Apply the animation to the navigation list items */
#navlist li {
  animation: fadeIn 1s ease-in-out;
}

</style><?php include("navbar.php"); ?><br><br>

<section class="wrapper">
<!-- Column 1 --->

  <div id="navigation">
    <h1>Ana Sayfa</h1> 
    <ul id="navlist">   
      <li><a href="../controller/home.php">Ana Sayfa</a></li>
      <li><a href="../controller/guncel_haber.php">Güncel Haberler İçin</a></li>
      <li><a href="../controller/bakanbilgi.php">DR. Fahrettin Koca Hakkında Bilgi</a></li>
      <li><a href="../controller/personelhaber.php">Peronsel Duyuru</a></li>
      <li><a href="../controller/yardımcı1.php">Dr. Şuayıp BİRİNCİ</a></li>
      <li><a href="../controller/yardımcı2.php">Doç. Dr. Tolga TOLUNAY</a></li>
      <li><a href="../controller/yardımcı3.php">Huzeyfe YILMAZ</a></li>
      <li><a href="../controller/yardımcı4.php">Hüseyin Kürşat KIRBIYIK</a></li>
    </ul>
  </div>
 <!-- Column 2 ---> 
  <div id="navigation">
    <h1>Personel Listesi</h1>
    <ul id="navlist">
    <li><a href="../controller/liste.php">Personel Listesi</a></li>
    <li><a href="../controller/veri_ekle.php">Kayıt EKle</a></li>
    <li><a href="../controller/excel_data_entry.php">Toplu Veri ekle</a></li>
    </ul>
  </div>
<!-- Column 3 --->  
<div id="navigation">
    <h1>İletişim</h1>
    <ul id="navlist">
    <li><a href="../controller/iletisim.php">İletişim</a></li>
    </ul>
  </div>


<!-- Column 4 --->
<div id="navigation">
    <h1>Profil</h1>
    <ul id="navlist">
    <li><a href="../controller/profil.php">Profil</a></li>
    <li><a href="../controller/edit-profile.php">Profil Düzenle</a></li>
    <li><a href="../controller/logout.php">Çıkış Yap</a></li>
    </ul>
  </div>

</section>
