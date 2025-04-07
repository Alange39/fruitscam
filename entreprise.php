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

<body class="bg-gray-100">

  <?php include_once "head.php"; ?>

  <header class="relative w-full h-[570px] overflow-hidden">
    <div id="carousel" class="w-full h-full flex transition-transform duration-1000 ease-in-out">

      <!-- Slide 1 -->
      <div class="min-w-full h-full relative">
        <img src="assets/images/jus-fruits.jpg" alt="Image 1" class="w-full h-full object-cover" />
        <!-- Boutons en bas de l'image avec décalage de 75px -->
        <div class="absolute bottom-[75px] w-full flex justify-center space-x-3" id="buttons1">
          <button onclick="goToSlide(0)" class="w-4 h-4 bg-black rounded-full focus:outline-none"></button>
          <button onclick="goToSlide(1)" class="w-4 h-4 bg-gray-300 rounded-full focus:outline-none"></button>
          <button onclick="goToSlide(2)" class="w-4 h-4 bg-gray-300 rounded-full focus:outline-none"></button>
          <button onclick="goToSlide(3)" class="w-4 h-4 bg-gray-300 rounded-full focus:outline-none"></button>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="min-w-full h-full relative">
        <img src="assets/images/gingembre.jpg" alt="Image 2" class="w-full h-full object-cover" />
        <!-- Boutons en bas de l'image avec décalage de 75px -->
        <div class="absolute bottom-[75px] w-full flex justify-center space-x-3" id="buttons2">
          <button onclick="goToSlide(0)" class="w-4 h-4 bg-gray-300 rounded-full focus:outline-none"></button>
          <button onclick="goToSlide(1)" class="w-4 h-4 bg-black rounded-full focus:outline-none"></button>
          <button onclick="goToSlide(2)" class="w-4 h-4 bg-gray-300 rounded-full focus:outline-none"></button>
          <button onclick="goToSlide(3)" class="w-4 h-4 bg-gray-300 rounded-full focus:outline-none"></button>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="min-w-full h-full relative">
        <img src="assets/images/WhatsApp Image 2025-03-28 à 17.52.32_f84f300d.jpg" alt="Image 3" class="w-full h-full object-cover" />
        <!-- Boutons en bas de l'image avec décalage de 75px -->
        <div class="absolute bottom-[75px] w-full flex justify-center space-x-3" id="buttons3">
          <button onclick="goToSlide(0)" class="w-4 h-4 bg-gray-300 rounded-full focus:outline-none"></button>
          <button onclick="goToSlide(1)" class="w-4 h-4 bg-gray-300 rounded-full focus:outline-none"></button>
          <button onclick="goToSlide(2)" class="w-4 h-4 bg-black rounded-full focus:outline-none"></button>
          <button onclick="goToSlide(3)" class="w-4 h-4 bg-gray-300 rounded-full focus:outline-none"></button>
        </div>
      </div>

      <!-- Slide 4 -->
      <div class="min-w-full h-full relative">
        <img src="assets/images/WhatsApp Image 2025-04-04 à 10.57.24_abde390d.jpg" alt="Image 4" class="w-full h-full object-cover" />
        <!-- Boutons en bas de l'image avec décalage de 75px -->
        <div class="absolute bottom-[75px] w-full flex justify-center space-x-3" id="buttons4">
          <button onclick="goToSlide(0)" class="w-4 h-4 bg-gray-300 rounded-full focus:outline-none"></button>
          <button onclick="goToSlide(1)" class="w-4 h-4 bg-gray-300 rounded-full focus:outline-none"></button>
          <button onclick="goToSlide(2)" class="w-4 h-4 bg-gray-300 rounded-full focus:outline-none"></button>
          <button onclick="goToSlide(3)" class="w-4 h-4 bg-black rounded-full focus:outline-none"></button>
        </div>
      </div>

    </div>
  </header>

  <div class="bg-gray-100 pt-[30px]">
    <h1 class="text-center text-3xl max-md:text-lg pt-[30px]">Entre Savoir-Faire Et Traditions</h1>

    <div class="max-w-4xl mx-auto text-center pt-[30px] max-md:text-sm">
      <p>
        Depuis son lancement en 1996 par sa promotrice Madame Bayemi Francoise, l'entreprise Fruitscam a connu une évolution remarquable grâce à l'innovation et au dévouement de son équipe majoritairement constituée de femmes. Celles-ci mettent en avant leurs compétences pour valoriser les valeurs authentiques des fruits de leurs régions.
      </p>
    </div>
  </div>

  <!-- Nos Services -->
  <p class="text-center pt-[80px] text-3xl max-md:text-2xl">Nos Services d'Expertise en Fabrication de Jus</p>

  <!-- premier service -->
  <section class="pt-[60px] max-md:block max-md:px-[10px] flex gap-[100px] justify-center">
    <div>
      <img src="assets/images/ravitaillement.webp" alt="" class="h-[320px] w-[400px] max-md:w-full max-md:h-auto">
    </div>
    <div class="pt-[40px] max-md:px-[10px]">
      <p class="text-yellow-400 text-xl max-md:text-lg">LE SERVICE D'APPROVISIONNEMENT</p>
      <p class="w-[500px] max-md:w-full max-md:text-sm pt-[30px]">
        Notre service d’approvisionnement sélectionne avec soin des fournisseurs réputés, garantissant des fruits de première qualité et de saison. Nous privilégions des producteurs engagés dans des pratiques durables pour assurer fraîcheur et goût.
      </p>
    </div>
  </section>

  <!-- Deuxième service -->
  <section class="pt-[60px] max-md:block max-md:px-[10px] flex gap-[100px] justify-center">
    <div class="pt-[40px] max-md:px-[10px]">
      <p class="text-yellow-400 text-xl max-md:text-lg">LE SERVICE DE PRODUCTION</p>
      <p class="w-[500px] max-md:w-full max-md:text-sm pt-[30px]">
        Notre service des production utilise des techniques semi-industrielles pour garantir des jus de qualité supérieure. Equipé de machines modernes telles que la broyeuse, la tamiseuse, le séchoir, et autres.
      </p>
    </div>
    <div>
      <img src="assets/images/Usine-fruits.png" alt="" class="h-[320px] w-[400px] max-md:w-full max-md:h-auto">
    </div>
  </section>

  <!-- Troisième service -->
  <section class="pt-[60px] max-md:block max-md:px-[10px] flex gap-[100px] justify-center">
    <div>
      <img src="assets/images/controle.png" alt="" class="h-[320px] w-[400px] max-md:w-full max-md:h-auto">
    </div>
    <div class="pt-[40px] max-md:px-[10px]">
      <p class="text-yellow-400 text-xl max-md:text-lg">LE SERVICE DE CONTROLE QUALITE</p>
      <p class="w-[500px] max-md:w-full max-md:text-sm pt-[30px]">
        Notre service de Contrôle Qualité veille à la conformité de chaque étape du processus de production. Nous inspectons la qualité des matières premières et surveillons la fabrication des jus pour garantir des produits sûrs et de haute qualité.
      </p>
    </div>
  </section>

  <!-- Nos Valeurs -->
  <p class="text-center pt-[80px] text-3xl max-md:text-2xl">Nos Valeurs</p>

  <section class="flex flex-wrap gap-[40px] justify-center pt-[40px] max-md:px-[10px]">
    <div class="text-center">
      <img src="assets/images/Vector (1).png" alt="" class="h-[20px] w-[20px] mx-auto">
      <p class="pt-[10px] font-bold">Création des Richesses</p>
      <p class="text-xs pt-[16px] w-[165px] mx-auto">Chez Fruitscam, nous croyons que créer des richesses dépasse la simple génération de profits. Notre engagement va au-delà des résultats financiers.</p>
    </div>

    <div class="text-center">
      <img src="assets/images/heart (1) 1.png" alt="" class="h-[20px] w-[20px] mx-auto">
      <p class="pt-[10px] font-bold">Passion</p>
      <p class="text-xs pt-[16px] w-[215px] mx-auto">Cette passion pour le jus naturel ne se limite pas seulement à la production; elle se ressent également dans l'interaction avec nos clients. Chaque gorgée reflète notre travail d'équipe et notre vision commune.</p>
    </div>

    <div class="text-center">
      <img src="assets/images/Group.png" alt="" class="h-[20px] w-[20px] mx-auto">
      <p class="pt-[10px] font-bold">Respect</p>
      <p class="text-xs pt-[16px] w-[215px] mx-auto">Le respect est une valeur fondamentale chez Fruitscam, garantissant un environnement de travail harmonieux et productif.</p>
    </div>
  </section>

  <section class="bg-gray-100 mt-[40px] pb-[80px] text-center max-md:px-[10px]">
    <p class="text-xl text-yellow-400 underline">Notre Vision</p>
    <p class="text-sm pt-[30px] max-w-[700px] mx-auto">Notre vision est de devenir le leader du marché camerounais des jus naturels frais de haute qualité, tout en restant fidèles à nos valeurs écoresponsables et sociales.</p>
  </section>

  <section class="bg-green-600 text-white text-center ">
    <img src="assets/images/DG.jpg" alt="" class="h-[180px] w-[160px] rounded-full mx-auto mt-[-75px] relative top-[-80px] mt-[50px]">
    <p>
      Bienvenue chez Fruitscam ! <br>

      Chez Fruitscam, nous croyons en l'importance de l'innovation et de la durabilité. Notre mission est de fournir des produits de qualité tout en respectant notre environnement. Nous nous engageons à adopter des pratiques écoresponsables et à soutenir les communautés locales. Notre équipe, passionnée et dévouée, travaille chaque jour pour garantir que nos clients reçoivent le meilleur. En valorisant le respect et la collaboration, nous créons un environnement de travail positif et dynamique.
      Nous vous invitons à explorer notre univers et à rejoindre notre parcours vers un avenir plus durable. Merci de faire partie de notre aventure ! <br>
      Cordialement, <br> BAYEMI Francoise <br> Fruitscam
    </p>
  </section>
  <script>
    let index = 0;
    const slides = document.querySelectorAll("#carousel > div");
    const totalSlides = slides.length;
    const carousel = document.getElementById("carousel");

    // Fonction pour mettre à jour l'état des boutons
    function updateButtons() {
      // Boucle à travers tous les slides pour mettre à jour les boutons
      for (let i = 0; i < totalSlides; i++) {
        const buttons = document.querySelector(`#buttons${i + 1}`).children;
        for (let j = 0; j < buttons.length; j++) {
          if (j === index) {
            buttons[j].classList.add('bg-black');
            buttons[j].classList.remove('bg-gray-300');
          } else {
            buttons[j].classList.add('bg-gray-300');
            buttons[j].classList.remove('bg-black');
          }
        }
      }
    }

    // Fonction pour aller à un slide spécifique
    function goToSlide(slideIndex) {
      index = slideIndex;
      carousel.style.transform = `translateX(-${index * 100}%)`;
      updateButtons();
    }

    // Fonction pour passer au slide suivant
    function showNextSlide() {
      index = (index + 1) % totalSlides;
      carousel.style.transform = `translateX(-${index * 100}%)`;
      updateButtons();
    }

    setInterval(showNextSlide, 5000);
    updateButtons(); // Initialiser les boutons au chargement
  </script>


  <?php include_once "footer.php"; ?>

</body>

</html>