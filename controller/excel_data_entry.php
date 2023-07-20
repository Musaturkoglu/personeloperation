<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../view/css/excel_data_entry.css">
  <title>Excel Dosyası Yükleme</title>
  <style>

  </style>
</head>
<?php include("navbar.php"); ?> <br><br>
<body>
<div class="form-container">
  <h1>Personel Ekle</h1>
  <form method="POST" enctype="multipart/form-data">
    <b>Excel Dosyasını Seçiniz:</b><br>
    <input type="file" name="excelFile"><br>
    <button type="submit" name="upload">Dosyayı Yükle</button>
    <a href="../controller/veri_ekle.php" class="back-btn">Geri Dön</a><br>
    <a href="veritabanı.xlsx" download="veritabanı.xlsx">Excel Dosyasını İndir</a>
  </form>
</div>
</body>
</html>
