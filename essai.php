<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="h-[300px]">
    <header class="bg-[#2D8740] flex justify-between items-center p-[5px]">
      <!-- Logo -->
      <a href="#" class="">
        <img src="" alt="Fruitscam" class="">
      </a>
        <nav class="bg-[#2D8740]">
             <div>
            <!-- Mobile menu button -->
            <button type="button" class="inline-flex items-center p-2 ml-3 text-white md:hidden" id="mobile-menu-button">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
              </svg>
            </button>
            
            <!-- Menu -->
            <div class="hidden absolute rounded-[15px] bg-[#2D8740] right-[10%] md:relative w-[25%] md:flex md:items-center md:w-auto" id="navbar-menu">
              <ul class="flex flex-col mt-4 md:flex-row items-center md:mt-0 md:space-x-6">
                <li>
                  <a href="index.php" class="block py-2 text-white hover:scale-110 transition-transform relative group">
                    Home
                    <span class="absolute w-0 h-px bg-white bottom-0 left-1/2 group-hover:w-full group-hover:left-0 transition-all duration-300 opacity-0 group-hover:opacity-100"></span>
                  </a>
                </li>
                <li class="relative group">
                  <a href="#" class="block py-2 text-white hover:scale-110 transition-transform relative group flex items-center" class="about-dropdown-button">
                    About
                    <span class="absolute w-0 h-px bg-white bottom-0 left-1/2 group-hover:w-full group-hover:left-0 transition-all duration-300 opacity-0 group-hover:opacity-100"></span>
                  </a>
                  <div class="hidden absolute z-10 bg-white rounded-md shadow-lg py-1 mt-1 w-40 group-hover:block">
                    <a href="entreprise.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Entreprise</a>
                    <a href="partenaires.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Partenaires</a>
                  </div>
                </li>
                
                    <li class="relative group">
                        <a href="#" class="block py-2 text-white hover:scale-110 transition-transform relative group flex items-center" class="about-dropdown-button">
                          Produits
                          <span class="absolute w-0 h-px bg-white bottom-0 left-1/2 group-hover:w-full group-hover:left-0 transition-all duration-300 opacity-0 group-hover:opacity-100"></span>
                        </a>
                        <div class="hidden absolute z-10 bg-white rounded-md shadow-lg py-1 mt-1 w-40 group-hover:block">
                          <a href="/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Jus</a>
                          <a href="/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sirop</a>
                          <a href="/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Vin</a>
                        </div>
                      </li>
                      <li>
                  <a href="contact.php" class="block py-2 text-white hover:scale-110 transition-transform relative group">
                    Contact
                    <span class="absolute w-0 h-px bg-white bottom-0 left-1/2 group-hover:w-full group-hover:left-0 transition-all duration-300 opacity-0 group-hover:opacity-100"></span>
                  </a>
                </li>
              </ul>
              <div class="md:ml-6 mt-4 md:mt-0 flex justify-center">
                <a href="/" class="bg-[#6A664B]  hover:text-[#27ae60] text-white px-4 py-2 rounded-md transition-colors">Connexion</a>
              </div>
            </div>
            </div>
         
        </nav>

      </header>
        
      <?php include_once"script.php";?>
      </body>
=======
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
>>>>>>> ee4033aa266c4bba648d6fe7c2ce13dad06abd7c
