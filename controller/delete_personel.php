<?php
// Veritabanı bağlantısı ve gerekli değişkenleri içe aktarın
include("dbconnect.php");

if(isset($_GET['tc'])) {
  $tc = $_GET['tc'];

  try {
    // Veritabanı bağlantısını oluştur
    $conn = new PDO("mysql:host=$servername;dbname=personeloperations", $username, $password);
    
    // PDO'nun hata modunu ayarla
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Veriyi sil
    $sql = "DELETE FROM personel WHERE Tc = :tc";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':tc', $tc);
    $stmt->execute();

    // Silme işlemi başarılıysa ana sayfaya yönlendir
    header("Location: index.php");
    exit();
    
  } catch (PDOException $e) {
    echo "<p>Hata: " . $e->getMessage() . "</p>";
  }

  $conn = null; // Bağlantıyı kapat
}
?>