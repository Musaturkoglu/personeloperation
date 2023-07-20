<!DOCTYPE html>
<html>
<head>
  <title>Personel Listesi</title>
  <link rel="stylesheet" href="../view/css/list.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  <style>
    /* Eklenen animasyon kodu */
    @keyframes fadeIn {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }

    /* Eklenen stil kuralları */
    .row {
      animation: fadeIn 0.3s ease-in-out;
    }
  </style>
  <script src="https://cdn.datatables.net/plug-ins/1.11.5/i18n/Turkish.json"></script> <!-- Türkçe dil dosyasını ekleyin -->
</head>
<body>
  <?php include("checklogin.php"); ?>
  <?php include("navbar.php"); ?> <br><br>

  <table id="personelTable"> <!-- Eklendi: ID ile tablo belirtmek -->
    <thead>
      <tr>
        <th>Adı</th>
        <th>Soyadı</th>
        <th>Tc Kimlik Nosu</th>
        <th>Yaşı</th>
        <th>Telefon</th>
        <th>Sicil</th>
        <th>Doğum Tarihi</th>
        <th>İşlemler</th>
      </tr>
    </thead>
    <tbody>
      <?php
      // Veritabanı bağlantısı ve gerekli değişkenleri içe aktarın
      include("dbconnect.php");

      // Kayıt silme işlemi
      if (isset($_POST['sil'])) {
        $tc = $_POST['tc'];

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

          echo "";
        } catch (PDOException $e) {
          echo "Hata: " . $e->getMessage();
        }

        $conn = null; // Bağlantıyı kapat
      }

      try {
        // Veritabanı bağlantısını oluştur
        $conn = new PDO("mysql:host=$servername;dbname=personeloperations", $username, $password);

        // PDO'nun hata modunu ayarla
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Veriyi sorgula
        $sql = "SELECT Adı, Soyadı, Tc, yaşı, Telefon, Sicil, Dogumtarihi FROM personel";
        $stmt = $conn->query($sql);

        if ($stmt->rowCount() > 0) {
          while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr class='row'>"; // Animasyonlu satır ekleme
            echo "<td>" . $row['Adı'] . "</td>";
            echo "<td>" . $row['Soyadı'] . "</td>";
            echo "<td>" . $row['Tc'] . "</td>";
            echo "<td>" . $row['yaşı'] . "</td>";
            echo "<td>" . $row['Telefon'] . "</td>";
            echo "<td>" . $row['Sicil'] . "</td>";
            echo "<td>" . $row['Dogumtarihi'] . "</td>";
            echo '<td>
                    <form method="post">
                      <input type="hidden" name="tc" value="' . $row['Tc'] . '">
                      <button type="submit" name="sil" class="delete-button">Sil</button>
                    </form>
                    <form method="post" action="personelprofil.php">
                      <input type="hidden" name="tc" value="' . $row['Tc'] . '">
                      <button type="submit" name="goruntule" class="view-button">Görüntüle</button>
                    </form>
                  </td>';
            echo "</tr>";
          }
        } else {
          echo "<tr><td colspan='8'>Veritabanında hiç kayıt bulunamadı.</td></tr>";
        }

      } catch (PDOException $e) {
        echo "<tr><td colspan='8'>Hata: " . $e->getMessage() . "</td></tr>";
      }

      $conn = null; // Bağlantıyı kapat
      ?>
    </tbody>
  </table>

  <a href="veri_ekle.php" class="signup-button">Kayıt Ekle</a>

  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script>
    // Document ready function to initialize DataTable
    $(document).ready(function() {
      $('#personelTable').DataTable({
        language: {
        }
      });
    });
  </script>
</body>
</html>
