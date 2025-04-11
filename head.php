<header class="bg-[#2D8740] text-white w-screen">
  <div class="max-w-7xl mx-auto flex items-center justify-between px-4 py-2">
    <!-- Logo -->
    <a href="#" class="flex block items-center space-x-1 text-white   transition">
      <img src="assets/images/Image.png" alt="Fruitscam" class="h-8" />
      <h2 class="font-[600] group relative text-[20px]">Fruitscam</h2>
    </a>

    <!-- Mobile Menu Button -->
    <button id="mobile-menu-button" class="md:hidden">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
        viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>

    <!-- Desktop Navigation -->
    <nav class="hidden md:flex space-x-6 items-center font-medium">
      <a href="index.php" class="group relative text-white transition">
        Home
        <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-yellow-400 group-hover:w-full transition-all duration-300"></span>
      </a>

      <!-- About Dropdown -->
      <div class="relative group">
        <button class="text-white relative group transition" id="produitsBtn">
          About
          <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-yellow-400 group-hover:w-full transition-all duration-300"></span>
        </button>
        <div
          class="absolute hidden group-hover:block bg-white text-gray-800 rounded-md shadow-md mt-2 w-40 z-50" id="produitsMenu">
          <a href="entreprise.php" class="block px-4 py-2 hover:bg-gray-100">Entreprise</a>
          <a href="partenaires.php" class="block px-4 py-2 hover:bg-gray-100">Partenaires</a>
        </div>
      </div>

      <!-- Produits Dropdown -->
      <div class="relative group">
        <button class="text-white relative group transition" id="aboutBtn">
          Produits
          <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-yellow-400 group-hover:w-full transition-all duration-300"></span>
        </button>
        <div
          class="absolute hidden group-hover:block bg-white text-gray-800 rounded-md shadow-md mt-2 w-40 z-50" id="aboutMenu">
          <a href="produits.php" class="block px-4 py-2 hover:bg-gray-100">Jus</a>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100">Sirop</a>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100">Vin</a>
        </div>
      </div>

      <a href="contact.php" class="group relative text-white transition">
        Contact
        <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-yellow-400 group-hover:w-full transition-all duration-300"></span>
      </a>

      <a href="login.php" class="bg-[#6A664B] text-white px-4 py-2 rounded-md hover:bg-[#27ae60] transition-colors">Connexion</a>
    </nav>
  </div>

  <!-- Mobile Navigation -->
  <div id="mobile-menu"
    class="md:hidden hidden flex-col bg-[#2D8740] space-y-4 px-4 py-4 font-medium">
    <a href="index.php" class="block text-white hover:text-yellow-300">Home</a>
    <a href="entreprise.php" class="block text-white hover:text-yellow-300">Entreprise</a>
    <a href="partenaires.php" class="block text-white hover:text-yellow-300">Partenaires</a>
    <a href="produits.php" class="block text-white hover:text-yellow-300">Produits</a>
    <a href="contact.php" class="block text-white hover:text-yellow-300">Contact</a>
    <a href="login.php" class="block text-white bg-[#6A664B] hover:bg-[#27ae60] py-2 rounded-md text-center">Connexion</a>
  </div>
</header>

<script>
  const button = document.getElementById("mobile-menu-button");
  const menu = document.getElementById("mobile-menu");

  button.addEventListener("click", () => {
    menu.classList.toggle("hidden");
  });
</script>

<script>
  const menus = [{
      button: "aboutBtn",
      menu: "aboutMenu"
    },
    {
      button: "produitsBtn",
      menu: "produitsMenu"
    }
  ];

  menus.forEach(({
    button,
    menu
  }) => {
    const btn = document.getElementById(button);
    const submenu = document.getElementById(menu);

    btn.addEventListener("mouseover", () => {
      submenu.classList.remove("hidden");
    });

    submenu.addEventListener("mouseover", () => {
      submenu.classList.remove("hidden");
    });

    btn.addEventListener("mouseleave", () => {
      setTimeout(() => {
        if (!submenu.matches(":hover")) {
          submenu.classList.add("hidden");
        }
      }, 200);
    });

    submenu.addEventListener("mouseleave", () => {
      setTimeout(() => {
        if (!btn.matches(":hover")) {
          submenu.classList.add("hidden");
        }
      }, 200);
    });
  });
</script>

<?php include_once "script.php"; ?>