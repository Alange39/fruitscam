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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Connexion</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Font Awesome pour les icônes -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body class="bg-gray-100">

<section class="min-h-screen bg-white flex items-center justify-center">
  <div class="w-full max-w-5xl bg-white rounded-xl shadow-xl overflow-hidden flex flex-col md:flex-row">
    
    <!-- Formulaire à gauche -->
    <div class="md:w-1/2 w-full p-8 lg:p-12 flex flex-col justify-center">
      <div class="mb-6 flex items-center gap-3">
        <i class="fas fa-cubes text-3xl text-[#ff6219]"></i>
        <h1 class="text-3xl font-bold text-gray-800">Logo</h1>
      </div>

      <h2 class="text-xl font-semibold mb-6 text-gray-700">Connectez-vous à votre compte</h2>
      <?php if ($error): ?>
            <p class="text-red-500 text-center mt-2"><?= $error ?></p>
        <?php endif; ?>

      <form>
        <!-- Email -->
        <div class="mb-4">
          <label for="numeros" class="block text-sm font-medium text-gray-600 mb-1">Numeros</label>
          <div class="relative">
            <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
              <i class="fas fa-envelope"></i>
            </span>
            <input type="numeros" id="numeros" placeholder="XXX-XXX-XXX"
                   class="pl-10 pr-4 py-3 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#9A616D]"/>
          </div>
        </div>

        <!-- Mot de passe -->
        <div class="mb-6">
          <label for="passwords" class="block text-sm font-medium text-gray-600 mb-1">Mot de passe</label>
          <div class="relative">
            <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
              <i class="fas fa-lock"></i>
            </span>
            <input type="passwords" id="passwords" placeholder="••••••••"
                   class="pl-10 pr-4 py-3 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#9A616D]"/>
          </div>
        </div>

        <!-- Bouton de connexion -->
        <button type="submit"
                class="w-full py-3 bg-green-500 text-white font-semibold rounded-lg hover:bg-green-600 transition">
          Se connecter
        </button>

        <!-- Liens supplémentaires -->
        <div class="flex flex-col sm:flex-row justify-between items-center mt-4 text-sm text-gray-600 gap-2">
         
        </div>

        <div class="mt-4 text-xs text-gray-500 flex flex-wrap gap-4">
          
        </div>
      </form>
    </div>

    <!-- Image à droite -->
    <div class="md:w-1/2 hidden md:block">
      <img src="assets/images/notebook-1130742_640.png"
           alt="formulaire" class="w-full h-full object-cover"/>
    </div>

  </div>
</section>

</body>
</html>
