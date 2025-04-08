<?php
session_start();
?>

<?php
require_once 'BD.php';

$message = ""; 

if(isset($_POST['submit'])){
    $nom = trim($_POST['nom']);
    $numeros = trim($_POST['numeros']);
    $password = $_POST['passwords'];
    $cpassword = $_POST['cpassword'];

   
    $select = $conn->prepare("SELECT passwords FROM personel WHERE numeros = ?");
    $select->bind_param("s", $numeros);
    $select->execute();
    $result = $select->get_result();

    if ($result->num_rows > 0) {
        $message = "<p class='text-red-600 text-center mt-2'>Ce numéro existe déjà !</p>";
    } else {
        if ($password !== $cpassword) {
            $message = "<p class='text-red-600 text-center mt-2'>Les mots de passe ne correspondent pas !</p>";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $insert = $conn->prepare("INSERT INTO personel (nom, numeros, passwords) VALUES (?, ?, ?)");
            $insert->bind_param("sss", $nom, $numeros, $hashed_password);

            if ($insert->execute()) {
                $message = "<p class='text-green-600 text-center mt-2'>Personnel ajouté avec succès !</p>";
                header("Location: admin.php");
                exit();
            } else {
                $message = "<p class='text-red-600 text-center mt-2'>Erreur lors de l'ajout !</p>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout de Personnel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
       
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold mb-2 text-center">Ajout de Personnel</h2>
        
        
        <?php if (!empty($message)) echo $message; ?>
        
        <form action="" method="post" class="space-y-4 mt-2">
            <div>
                <label for="nom" class="block font-medium">Nom :</label>
                <input type="text" id="nom" name="nom" required class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-green-500">
            </div>
            <div>
                <label for="numeros" class="block font-medium">Numéro :</label>
                <input type="tel" id="numeros" name="numeros" required class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-green-500">
            </div>
            <div>
                <label for="passwords" class="block font-medium">Mot de passe :</label>
                <input type="password" id="passwords" name="passwords" required class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-green-500">
            </div>
            <div>
                <label for="password" class="block font-medium">Confirme Mot de passe :</label>
                <input type="password" id="cpassword" name="cpassword" required class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-green-500">
            </div>
            <button type="submit" name="submit" class="w-full bg-green-600 text-white p-2 rounded-lg hover:bg-green-700">Ajouter</button>
        </form>
    </div>
</body>
</html>
