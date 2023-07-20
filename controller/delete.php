<?php
// Veritabanı bağlantısı ve gerekli değişkenleri içe aktarın
include("dbconnect.php");

if (isset($_GET['tc'])) {
  $tc = $_GET['tc'];

  try {
    // Veritabanı bağlantısını oluştur
    $conn = new PDO("mysql:host=$servername;dbname=personeloperations", $username, $password);
    
    // PDO'nun hata modunu ayarla
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Kaydı sil
    $sql = "DELETE FROM personel WHERE Tc = :tc";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':tc', $tc);
    $stmt->execute();

    echo "Kayıt başarıyla silindi.";

  } catch (PDOException $e) {
    echo "Hata: " . $e->getMessage();
  }

  $conn = null; // Bağlantıyı kapat
}
else {
  echo "Geçersiz parametre.";
}
?>
