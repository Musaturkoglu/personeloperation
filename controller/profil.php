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

    // Fetch profile information from the admin table
    $query = "SELECT * FROM admin";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $profiles = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Function to update profile information in the database
function updateProfile($name, $email, $imageData, $db) {
    try {
        $query = "UPDATE admin SET Adi = :name, eposta = :email, profil_resmi = :imageData";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':imageData', $imageData, PDO::PARAM_LOB);
        $stmt->execute();
    } catch(PDOException $e) {
        echo "Update failed: " . $e->getMessage();
    }
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_FILES['image']['tmp_name'])) {
        $newName = $_POST['name'];
        $newEmail = $_POST['email'];
        $newImageData = base64_encode(file_get_contents($_FILES['image']['tmp_name']));

        updateProfile($newName, $newEmail, $newImageData, $db);
        
        // Redirect back to the profile page after updating
        header("Location: edit-profile.php"); // Replace "profil.php" with the actual profile page URL
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Profil</title>
    <link rel="stylesheet" href="../view/css/profil.css">
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .form-container {
            animation: fadeIn 1s ease-in-out;
        }

        table {
            margin-top: 20px;
            margin-bottom: 50px;
        }
    </style>
</head>
<body><br>
    <div class="form-container">
        <div class="oval-image-container">
            <?php foreach ($profiles as $profile) { ?>
                <img class="oval-image" src="data:image/jpeg;base64,<?php echo $profile['profil_resmi']; ?>" alt="Admin Image">
            <?php } ?>
        </div>
        <table>
        <center><h1>Admin Profil</h1> </center>
            <tr>
                <th>Adı:</th>
                <td><?php echo $profile['Adi']; ?></td>
            </tr>
            <tr>
                <th>Mail Adresi:</th>
                <td><?php echo $profile['eposta']; ?></td>
            </tr>
            <tr>
                <td colspan="2"> <a href="edit-profile.php" class="my-btn">Düzenle</a></td>
            </tr>
        </table>


    </div>
</body>
</html>
