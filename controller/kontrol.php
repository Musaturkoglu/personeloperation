<?php
include("dbconnect.php");

$query = $db->prepare("SELECT * FROM admin WHERE Adi=:name AND Sifre=:pass");
    $query->bindParam(":name", $name);
    $query->bindParam(":pass", $pass);
    $query->execute();
    $result = $query->rowCount();

session_start();

// Giriş formu gönderildiyse işle
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kullanici_adi = $_POST['kullanici_adi'];
    $sifre = $_POST['sifre'];
    
    // Kullanıcı kimlik doğrulama işlemleri
    if ($kullanici_adi === 'Adi' && $sifre === 'sifre') {
        $_SESSION['giris_yapildi'] = true;
        header("Location: index.php");
        exit;
    } else {
        $hata_mesaji = 'Geçersiz kullanıcı adı veya şifre!';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Giriş Yap</title>
</head>
<body>
    <h1>Giriş Yap</h1>
    <?php if (isset($hata_mesaji)) { ?>
        <p><?php echo $hata_mesaji; ?></p>
    <?php } ?>
    <form method="POST" action="">
        <input type="text" name="kullanici_adi" placeholder="Kullanıcı Adı" required><br>
        <input type="password" name="sifre" placeholder="Şifre" required><br>
        <button type="submit">Giriş</button>
    </form>
</body>
</html>
