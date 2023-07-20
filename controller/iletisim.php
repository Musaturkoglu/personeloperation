<?php include("checklogin.php"); ?>
<?php
// Veritabanı bağlantısı ve gerekli değişkenleri içe aktarın
include("dbconnect.php"); 

// Form gönderildiğinde çalışacak kod
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $position = $_POST['position'];
  $message = $_POST['message'];

  try {
    // Veritabanı bağlantısını oluştur
    $conn = new PDO("mysql:host=$servername;dbname=personeloperations", $username, $password);
  
    // PDO'nun hata modunu ayarla
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Veriyi kaydet
    $sql = "INSERT INTO iletisim (Adı, Eposta, Mesajı) VALUES (:name, :email, :message)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':message', $message);
    $stmt->execute();
    
    echo "<p>Mesajınız başarıyla gönderildi. Size en kısa sürede geri dönüş yapacağız.</p>";
  } catch (PDOException $e) {
    echo "Hata: " . $e->getMessage();
  }

  $conn = null; // Bağlantıyı kapat
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>İletişim</title>
  <link rel="stylesheet" href="../view/css/iletisim.css">
  <style>
    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }

    .container {
      animation: fadeIn 1s ease-in-out;
    }
  </style>
</head>
<body>
  <?php include("navbar.php"); ?>
  <br><br>
  <div class="container">
    <h2>İletişim</h2>
    <p>Sorun, istek ve  geri dönüşlerinizi yapabilirsiniz.</p>

    <form method="POST">
      <div class="form-group">
        <label for="name">Adınız:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">E-posta Adresiniz:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="message">Mesajınız:</label>
        <textarea id="message" name="message" required></textarea>
      </div>
      <button type="submit" class="submit-button">Gönder</button>
    </form>
  </div>
</body>
</html>
