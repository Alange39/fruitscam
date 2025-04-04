<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
   <link rel="stylesheet" href="assets/js/Script.js">
       <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
   <script src="https://cdn.tailwindcss.com"></script>
  <title>Document</title>
</head>
<body>
  


    <header>
        <nav class="bg-[#2D8740] px-4 py-2">
          <div class=" flex justify-between items-center p-[5px]">
            <!-- Logo -->
            <a href="#" class="flex items-start">
              <img src="" alt="Fruitscam" class="">
            </a>
            
             <div>
            <!-- Mobile menu button -->
            <button type="button" class="inline-flex items-center p-2 ml-3 text-white md:hidden" id="mobile-menu-button">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
              </svg>
            </button>
            
            <!-- Menu -->
            <div class="hidden absolute pb-[20px] rounded-[15px] bg-[#2D8740] right-[10%] md:relative h-[30px] w-[25%] md:flex md:items-center md:w-auto" id="navbar-menu">
              <ul class="flex flex-col mt-4 md:flex-row items-center md:mt-0 md:space-x-6">
                <li>
                  <a href="index.php" class="block py-2 text-white hover:scale-110 transition-transform relative group">
                    Home
                    <span class="absolute w-0 h-px bg-white bottom-0 left-1/2 group-hover:w-full group-hover:left-0 transition-all duration-300 opacity-0 group-hover:opacity-100"></span>
                  </a>
                </li>
                <li class="relative group">
                  <a href="#" class="block py-2 text-white hover:scale-110 transition-transform relative group flex items-center" id="about-dropdown-button">
                    About
                    <span class="absolute w-0 h-px bg-white bottom-0 left-1/2 group-hover:w-full group-hover:left-0 transition-all duration-300 opacity-0 group-hover:opacity-100"></span>
                  </a>
                  <div class="hidden absolute z-10 bg-white rounded-md shadow-lg py-1 mt-1 w-40 group-hover:block">
                    <a href="entreprise.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Entreprise</a>
                    <a href="partenaires.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Partenaires</a>
                  </div>
                </li>
                
                    <li class="relative group">
                        <a href="#" class="block py-2 text-white hover:scale-110 transition-transform relative group flex items-center" id="about-dropdown-button">
                          Produits
                          <span class="absolute w-0 h-px bg-white bottom-0 left-1/2 group-hover:w-full group-hover:left-0 transition-all duration-300 opacity-0 group-hover:opacity-100"></span>
                        </a>
                        <div class="hidden absolute z-10 bg-white rounded-md shadow-lg py-1 mt-1 w-40 group-hover:block">
                          <a href="produits.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Jus</a>
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
          </div>
        </nav>

      </header>
</body>


      
      
      
