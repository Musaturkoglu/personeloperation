<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["your_name"];
    $pass = $_POST["your_pass"];

    // Veritabanı bağlantısını yapın
    include("dbconnect.php");

    // Şifre doğrulama işlemlerini gerçekleştirin
    $query = $db->prepare("SELECT * FROM admin WHERE Adi=:name AND Sifre=:pass");
    $query->bindParam(":name", $name);
    $query->bindParam(":pass", $pass);
    $query->execute();
    $result = $query->rowCount();

    if ($result) {
        // Şifre doğru ise yönlendirme yapın
        $adminInfo = $query->fetch(PDO::FETCH_ASSOC);
        $id = $adminInfo["id"];
        $name = $adminInfo["Adi"];
        $_SESSION["login"] = 1;
        $_SESSION["name"] = $name;
        $_SESSION["id"] = $id;
        
        header("Location: home.php");
        exit;
    } else {
        // Şifre yanlış ise hata mesajı gösterin ve yönlendirme yapın
        $error_message = "Şifre boş veya hatalı girildi.";
        $_SESSION["error_message"] = $error_message;
        header("Location: ../view/giris.php");
        exit;
    }
}
