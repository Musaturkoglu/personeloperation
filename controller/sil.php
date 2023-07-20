<?php
include("dbconnect.php");

if (isset($_GET['id'])) {
  try {
    $conn = new PDO("mysql:host=$servername;dbname=personeloperations", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Silme işlemini gerçekleştir
    $id = $_GET['id'];
    $sql = "DELETE FROM personel WHERE ID = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    // Ana sayfaya yönlendir
    header("Location: ana_sayfa.php");
    exit();
  } catch (PDOException $e) {
    echo "<p>Hata: " . $e->getMessage() . "</p>";
  }
}
?>
