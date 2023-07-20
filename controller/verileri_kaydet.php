<!DOCTYPE html>
<html>
<head>
  <title>Veri Kaydetme</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f7f7f7;
      padding: 20px;
    }
    
    .logo {
      text-align: center;
      margin-bottom: 20px;
    }

    .logo img {
      width: 200px;
      height: auto;
    }
    
    .message-container {
      text-align: center;
      margin-top: 20px;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      animation: fadeIn 1s ease-in-out;
    }

    .success-message {
      color: #4CAF50;
      font-weight: bold;
    }

    .error-message {
      color: #F44336;
      font-weight: bold;
    }

    .back-button {
      display: inline-block;
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      border-radius: 4px;
      font-size: 16px;
      border: none;
      cursor: pointer;
      margin-top: 20px;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }
  </style>
</head>
<body>
  <div class="message-container">
    <div class="logo">
      <img src="../view/image/saglık.jpg" alt="Logo">
    </div>

    <?php
    // Veritabanı bağlantısı ve gerekli değişkenleri içe aktarın
    include("dbconnect.php");

    // Formdan gönderilen verileri alın
    $ad = $_POST["ad"];
    $soyad = $_POST["soyad"];
    $tc = $_POST["tc"];
    $yas = $_POST["yas"];
    $telefon = $_POST["telefon"];
    $sicil = $_POST["sicil"];
    $dogumTarihi = $_POST["dogumTarihi"];

    // Eksik bilgi kontrolü
    $requiredFields = [$ad, $soyad, $tc, $yas, $telefon, $sicil, $dogumTarihi];
    if (in_array("", $requiredFields)) {
      echo '<p class="error-message">Eksik bilgi, giriş yapılamaz.</p>';
      echo '<a href="liste.php" class="back-button">Liste sayfasına geri dön</a>';
    } else {
      try {
        // Veritabanı bağlantısını oluştur
        $conn = new PDO("mysql:host=$servername;dbname=personeloperations", $username, $password);
        
        // PDO'nun hata modunu ayarla
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // TC kimlik numarasının daha önce kaydedilip kaydedilmediğini kontrol et
        $checkQuery = "SELECT COUNT(*) FROM personel WHERE Tc = ?";
        $checkStmt = $conn->prepare($checkQuery);
        $checkStmt->execute([$tc]);
        $existingCount = $checkStmt->fetchColumn();

        if ($existingCount > 0) {
          echo '<p class="error-message">Bu TC kimlik numarası zaten kaydedilmiş.</p>';
          echo '<a href="liste.php" class="back-button">Liste sayfasına geri dön</a>';
        } else {
          // TC kimlik numarası daha önce kaydedilmemişse veriyi veritabanına ekle
          $sql = "INSERT INTO personel (Adı, Soyadı, Tc, yaşı, Telefon, Sicil, Dogumtarihi) VALUES (?, ?, ?, ?, ?, ?, ?)";
          $stmt = $conn->prepare($sql);
          $stmt->execute([$ad, $soyad, $tc, $yas, $telefon, $sicil, $dogumTarihi]);

          echo '<p class="success-message">Veri başarıyla kaydedildi.</p>';
          echo '<a href="liste.php" class="back-button">Liste sayfasına geri dön</a>';
        }

      } catch (PDOException $e) {
        echo '<p class="error-message">Hata: ' . $e->getMessage() . '</p>';
      }

      $conn = null; // Bağlantıyı kapat
    }
    ?>
  </div>
</body>
</html>
