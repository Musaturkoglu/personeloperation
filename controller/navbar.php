
<!DOCTYPE html>
<html>
<head>
    
    <link rel="stylesheet" href="../view/css/navbar.css">
    <link rel="stylesheet" href="../view/css/base.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="../view/js/navbar.js"></script>
    <script>
        // document.addEventListener('DOMContentLoaded', function() {
        //     var dropdownTrigger = document.querySelector('.dropdown-trigger');
        //     var dropdownContent = document.querySelector('.dropdown-content');

        //     dropdownTrigger.addEventListener('hover', function(event) {
        //         event.preventDefault();
        //         dropdownContent.style.display = (dropdownContent.style.display === 'block') ? 'none' : 'block';
        //     });

        //     document.addEventListener('hover', function(event) {
        //         var target = event.target;
        //         if (!target.closest('.dropdown')) {
        //             dropdownContent.style.display = 'none';
        //         }
        //     });
        // });
            
    </script>
</head>

<body>
    <div class="navbar">
        <div class="logo">
            <a href="home.php"><img src="../view/image/saglık.jpg" alt="Logo"></a>
        </div>
        <div class="nav-links">
            
            <a href="home.php">Ana Sayfa</a>
            <a href="liste.php">Personel Listesi</a>
            <a href="iletisim.php">İletişim</a>
            <div class="dropdown">
                <a class="dropdown-trigger" href="#">
                    <?php      
                    include("dbconnect.php");
                    if (!isset($_SESSION)) session_start();
                    if (isset($_SESSION["name"])) {
                        echo $_SESSION["name"];
                        try {
                            $db = new PDO("mysql:host=$servername;dbname=personeloperations", $username, $password);
                            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                            $query = "SELECT profil_resmi FROM admin WHERE id = :id";
                            $statement = $db->prepare($query);
                            $id = 1; // Replace with the appropriate ID value
                            $statement->bindParam(':id', $id);
                            $statement->execute();

                            $row = $statement->fetch(PDO::FETCH_ASSOC);
                            $imageData = $row['profil_resmi'];

                            echo '<img class="profile-image" src="data:image/jpeg;base64,' . $imageData . '" alt="Profil Resmi"/>';
                        } catch(PDOException $e) {
                            echo "Bağlantı hatası: " . $e->getMessage();
                        }
                    }
                    ?>
                </a>
                <div class="dropdown-content">
                    <a href="profil.php">Profil</a>
                    <a href="logout.php">Çıkış Yap</a>
                    
                </div>
            </div>
        </div>
    </div>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <?php include("yukarı.php"); ?>
</body>

</html>