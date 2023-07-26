<head><title>Admin Profil</title></head>

    <?php
    include("checklogin.php");
    include("navbar.php");

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "personeloperations";

    try {
        $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Yönetici tablosundan profil bilgilerini getir
        $query = "SELECT * FROM admin";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $profile = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        echo "Bağlantı hatası: " . $e->getMessage();
    }

    // Profil bilgilerini veritabanında güncellemek için fonksiyon
    function profilGuncelle($ad, $eposta, $sifre, $resimVerisi, $db) {
        try {
            $sorgu = "UPDATE admin SET Adi = :ad, eposta = :eposta";
            if (!empty($sifre)) {
                $sorgu .= ", sifre = :sifre";
            }
            if (!empty($resimVerisi)) {
                $sorgu .= ", profil_resmi = :resimVerisi";
            }
            $stmt = $db->prepare($sorgu);
            $stmt->bindParam(':ad', $ad);
            $stmt->bindParam(':eposta', $eposta);
            if (!empty($sifre)) {
                $stmt->bindParam(':sifre', $sifre);
            }
            if (!empty($resimVerisi)) {
                $stmt->bindParam(':resimVerisi', $resimVerisi, PDO::PARAM_LOB);
            }
            $stmt->execute();
        } catch(PDOException $e) {
            echo "Güncelleme hatası: " . $e->getMessage();
        }
    }

    // Form gönderildiğinde çalışacak kodlar
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['ad']) && isset($_POST['eposta'] )) {
            $yeniAd = $_POST['ad'];
            $yeniEposta = $_POST['eposta'];
            $yeniSifre = $_POST['sifre'];
            $yeniResimVerisi = null;

            if (isset($_FILES['resim']['tmp_name']) && !empty($_FILES['resim']['tmp_name'])) {
                $yeniResimVerisi = base64_encode(file_get_contents($_FILES['resim']['tmp_name']));
            }

            profilGuncelle($yeniAd, $yeniEposta, $yeniSifre, $yeniResimVerisi, $db);

            // Güncelleme yapıldıktan sonra profil sayfasına yönlendir
            header("Location: profil.php"); // "profil.php" kısmını gerçek profil sayfasının URL'siyle değiştirin
            exit;
        }
    }
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Profil Düzenle</title>
        <link rel="stylesheet" href="../view/css/profil.css">
        <style>

        </style>
    </head>
    <body><br>
        <div class="form-container">
            <form method="POST" enctype="multipart/form-data">
                <table>
                <center><h1>Admin Profil Düzenleme</h1> </center>
                    <tr>
                        <th>Adı</th>
                        <td><input type="text" name="ad" value="<?php echo $profile['Adi']; ?>"></td>
                    </tr>
                    <tr>
                        <th>E-Posta</th>
                        <td><input type="email" name="eposta" value="<?php echo $profile['eposta']; ?>"></td>
                    </tr>
                    <tr>
                        <th>Şifre</th>
                        <td><input type="password" name="sifre"></td>
                    </tr>
                    <tr>
                    <th>Resim:</th>
                    <td><input type="file" name="resim"></td>
                </tr>
                </table>
                <br>
                <input type="submit" name="kaydet" value="Kaydet">
                <a href='profil.php' class='back-button'>Geri Dön</a>
            </form>
        </div>
    </body>
    </html>
