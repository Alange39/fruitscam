<?php
@include 'BD.php';
session_start();

$error = '';

if (isset($_POST['submit'])) {
    if (!$conn) {
        die("Erreur de connexion : " . mysqli_connect_error());
    }

    $numero = mysqli_real_escape_string($conn, $_POST['numeros'] ?? '');
    $pass = $_POST['passwords'] ?? ''; 

    if (!empty($numero) && !empty($pass)) {
        
        $query = "SELECT * FROM personel WHERE numeros = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "s", $numero);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) { 
            if (password_verify($pass, $row['passwords'])) { 
                $_SESSION['admin_nom'] = $row['nom'];
                header('location:admin.php');
                exit();
            } else {
                $error = 'Mot de passe incorrect !';
            }
        } else {
            $error = 'Numéro non trouvé !';
        }
        
        mysqli_stmt_close($stmt);
    } else {
        $error = 'Veuillez remplir tous les champs !';
    }
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">


    <div class="w-full max-w-sm p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center text-gray-700">Connexion</h2>

        <?php if ($error): ?>
            <p class="text-red-500 text-center mt-2"><?= $error ?></p>
        <?php endif; ?>

        <form action="" method="POST" class="mt-4">
            <div>
                <label for="numeros" class="block text-sm font-medium text-gray-600">Numéro de téléphone</label>
                <input type="tel" id="numeros" name="numeros" required 
                    class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div class="mt-4">
                <label for="password" class="block text-sm font-medium text-gray-600">Mot de passe</label>
                <input type="text" id="password" name="passwords" required  
                    class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <button type="submit" name="submit" class="w-full px-4 py-2 mt-6 font-bold text-white bg-green-500 rounded-lg hover:bg-green-600">
                Se connecter
            </button>
        </form>
    </div>
</body>
</html>
