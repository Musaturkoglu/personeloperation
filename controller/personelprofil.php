<!DOCTYPE html>
<html>
<head>
  <title>Personel Profili</title>
  <link rel="stylesheet" href="../view/css/personelprofil.css">
  <style>
    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }

    form {
      animation: fadeIn 1s ease-in-out;
    }
  </style>
  <?php include("navbar.php"); ?> <br><br>
</head>
<body>
  <?php
  // Veritabanı bağlantısı ve gerekli değişkenleri içe aktarın
  include("dbconnect.php");

  // TC kimlik numarasını al
  $tc = $_POST['tc'];

  // Güncelleme işlemi sonrası mesaj değişkeni
  $message = "";

  try {
    // Veritabanı bağlantısını oluştur
    $conn = new PDO("mysql:host=$servername;dbname=personeloperations", $username, $password);

    // PDO'nun hata modunu ayarla
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['submit'])) {
      // Form verilerini al
      $ad = $_POST['ad'];
      $soyad = $_POST['soyad'];
      $tc = $_POST['tc'];
      $yas = $_POST['yas'];
      $telefon = $_POST['telefon'];
      $sicil = $_POST['sicil'];
      $dogum_tarihi = $_POST['dogum_tarihi'];

      // Resmi yükleme işlemi
      if (!empty($_FILES['resim']['tmp_name'])) {
        $resim = file_get_contents($_FILES['resim']['tmp_name']); // Resmi dosya yolundan oku
        $resimData = base64_encode($resim); // Resmi base64'e dönüştür
      } else {
        // No new image uploaded, keep the existing image
        $sql = "SELECT Resim FROM personel WHERE Tc = :tc";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':tc', $tc);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $resimData = $row["Resim"];
      }

      // Veriyi güncelle
      $sql = "UPDATE personel SET Adı = :ad, Soyadı = :soyad, yaşı = :yas, Telefon = :telefon, Sicil = :sicil, Dogumtarihi = :dogum_tarihi, Resim = :resim WHERE Tc = :tc";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':ad', $ad);
      $stmt->bindParam(':soyad', $soyad);
      $stmt->bindParam(':yas', $yas);
      $stmt->bindParam(':telefon', $telefon);
      $stmt->bindParam(':sicil', $sicil);
      $stmt->bindParam(':dogum_tarihi', $dogum_tarihi);
      $stmt->bindParam(':resim', $resimData); // Base64 kodlu resim verisi
      $stmt->bindParam(':tc', $tc);
      $stmt->execute();

      $message = "Profil güncellendi.";
    }

    // Veriyi sorgula
    $sql = "SELECT Adı, Soyadı, Tc, yaşı, Telefon, Sicil, Dogumtarihi, Resim FROM personel WHERE Tc = :tc";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':tc', $tc);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      $resimData = $row["Resim"];

      if (!isset($_POST['edit'])) {
        // Düzenleme modunda değilse, görüntüleme formunu göster
        ?>
        <form method='post' enctype="multipart/form-data">
          <div class="per-img">
            <img src='data:image/webp;base64, <?php echo $resimData; ?>' />
          </div>
          <table>
            <h1>Personel Profil</h1>
            <tr><th>Adı:</th><td><?php echo $row['Adı']; ?></td></tr>
            <tr><th>Soyadı:</th><td><?php echo $row['Soyadı']; ?></td></tr>
            <tr><th>Tc Kimlik No:</th><td><?php echo $row['Tc']; ?></td></tr>
            <tr><th>Yaşı:</th><td><?php echo $row['yaşı']; ?></td></tr>
            <tr><th>Telefon:</th><td><?php echo $row['Telefon']; ?></td></tr>
            <tr><th>Sicil:</th><td><?php echo $row['Sicil']; ?></td></tr>
            <tr><th>Doğum Tarihi:</th><td><?php echo $row['Dogumtarihi']; ?></td></tr>
          </table>
          <input type='hidden' name='tc' value='<?php echo $row['Tc']; ?>'>
          <input type='submit' name='edit' value='Düzenle'>
          <a href='liste.php' class='back-button'>Geri Dön</a>
        </form>
        <?php
      } else {
        // Düzenleme modunda ise, düzenleme formunu göster
        ?>
        <form method='post' enctype="multipart/form-data">
          <table>
            <h1>Personel Profil Düzenleme</h1>
            <tr><th>Adı:</th><td><input type='text' name='ad' value='<?php echo $row['Adı']; ?>'></td></tr>
            <tr><th>Soyadı:</th><td><input type='text' name='soyad' value='<?php echo $row['Soyadı']; ?>'></td></tr>
            <tr><th>Tc Kimlik No:</th><td><input type='text' name='tc' value='<?php echo $row['Tc']; ?>'></td></tr>
            <tr><th>Yaşı:</th><td><input type='text' name='yas' value='<?php echo $row['yaşı']; ?>'></td></tr>
            <tr><th>Telefon:</th><td><input type='text' name='telefon' value='<?php echo $row['Telefon']; ?>'></td></tr>
            <tr><th>Sicil:</th><td><input type='text' name='sicil' value='<?php echo $row['Sicil']; ?>'></td></tr>
            <tr><th>Doğum Tarihi:</th><td><input type='text' name='dogum_tarihi' value='<?php echo $row['Dogumtarihi']; ?>'></td></tr>
            <tr><th>Resim:</th><td><input type="file" name="resim"></td></tr>
          </table>
          <input type='hidden' name='tc' value='<?php echo $row['Tc']; ?>'>
          <input type='submit' name='submit' value='Güncelle'>
          <a href='liste.php' class='back-button'>Geri Dön</a>
        </form>
        <?php
      }

      // Mesajı göster
      echo "<p>" . $message . "</p>";

    } else {
      echo "Kişi bulunamadı.";
    }
  } catch (PDOException $e) {
    echo "Hata: " . $e->getMessage();
  }

  $conn = null; // Bağlantıyı kapat
  ?>
</body>
</html>
