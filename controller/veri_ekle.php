<!DOCTYPE html>
<html>
<head><title>Personel Ekle</title>
    <link rel="stylesheet" href="../view/css/addperson.css">
    <style>

    </style>
</head>
<body>
    <?php include("checklogin.php"); ?>
    <?php include("navbar.php"); ?> <br><br><br>
    <div class="form-container">
        <form method="POST" action="verileri_kaydet.php">
             <center>  <h1>Personel Ekle</h1> </center>
            <div class="form-field">
                <label for="ad">Adı:</label>
                <input type="text" name="ad" id="ad" placeholder="Adı">
            </div>
            <div class="form-field">
                <label for="soyad">Soyadı:</label>
                <input type="text" name="soyad" id="soyad" placeholder="Soyadı">
            </div>
            <div class="form-field">
                <label for="tc">Tc Kimlik Nosu:</label>
                <input type="text" name="tc" id="tc" placeholder="Tc Kimlik Nosu">
            </div>
            <div class="form-field">
                <label for="yas">Yaşı:</label>
                <input type="text" name="yas" id="yas" placeholder="Yaşı">
            </div>
            <div class="form-field">
                <label for="telefon">Telefon:</label>
                <input type="text" name="telefon" id="telefon" placeholder="Telefon">
            </div>
            <div class="form-field">
                <label for="sicil">Sicil:</label>
                <input type="text" name="sicil" id="sicil" placeholder="Sicil">
            </div>
            <div class="form-field">
                <label for="dogumTarihi">Doğum Tarihi:</label>
                <input type="text" name="dogumTarihi" id="dogumTarihi" placeholder="Doğum Tarihi">
            </div>
            <br>
            <button type="submit">Veriyi Gönder</button><br>
            <a href="../controller/liste.php" class="back-btn">Geri Dön</a>
        </form>
    </div>

    <div class="button-container">
        <a href="excel_data_entry.php" class="add-button">Toplu Veri Ekle</a>
        <button class="random-fill-button" onclick="fillRandomly()">Rastgele Doldur</button>
    </div>

    <script>
        function fillRandomly() {
            document.getElementById('ad').value = generateRandomString();
            document.getElementById('soyad').value = generateRandomString();
            document.getElementById('tc').value = generateRandomNumber(11);
            document.getElementById('yas').value = generateRandomNumber(2);
            document.getElementById('telefon').value = generateRandomNumber(10);
            document.getElementById('sicil').value = generateRandomNumber(4);
            document.getElementById('dogumTarihi').value = generateRandomDate();
        }

        function generateRandomString() {
            const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
            let randomString = '';
            for (let i = 0; i < 5; i++) {
                randomString += characters.charAt(Math.floor(Math.random() * characters.length));
            }
            return randomString;
        }

        function generateRandomNumber(length) {
            let randomNumber = '';
            for (let i = 0; i < length; i++) {
                randomNumber += Math.floor(Math.random() * 10);
            }
            return randomNumber;
        }

        function generateRandomDate() {
            const year = Math.floor(Math.random() * (2000 - 1980 + 1)) + 1980;
            const month = Math.floor(Math.random() * 12) + 1;
            const day = Math.floor(Math.random() * 28) + 1; // Assume all months have 28 days for simplicity
            return `${year}-${month < 10 ? '0' + month : month}-${day < 10 ? '0' + day : day}`;
        }
    </script>
</body>
</html>
