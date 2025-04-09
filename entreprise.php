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
  <title>Entreprise</title>
</head>

<body class="bg-gray-100">

  <?php include_once "head.php"; ?>

  <header class="relative w-full h-[570px] overflow-hidden">
    <div id="carousel" class="w-full h-full flex transition-transform duration-1000 ease-in-out">

      <!-- Slide 1 -->
      <div class="min-w-full h-full  relative">
         <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-center  px-4">
          <p class="text-[#ACA9AC] text-3xl sm:text-3xl  font-bold mb-4">Fruitscam est une entreprise innovante spécialisée dans la fabrication de jus de fruit naturels de haute qualité.
          </p>
          <p class="text-[#ACA9AC] text-2xl sm:text-2xl  font-bold mb-4"> Nos valeurs d’authenticité et de durabilité guident   </p>
          <p class="text-[#ACA9AC] text-2xl sm:text-2xl  font-bold mb-4">notre vision, avec un fort engagement envers la satisfaction client. </p>
        </div>
        <img src="assets/images/jus-fruits.jpg" alt="Image de la DG" class="w-full h-full object-cover opacity-10%" />
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
           <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-center  px-4">
          <p class="text-[#ACA9AC] text-2xl sm:text-3xl  font-bold mb-4">Authenticite:
          </p>
          <p class="text-[#ACA9AC] text-2xl sm:text-2xl  font-bold mb-4">Chaque bouteille de jus reflète notre engagement envers des ingrédients naturels et locaux. Nous travaillons avec des agriculteurs pour assurer que nos fruits sont cueillis à maturité, préservant ainsi leurs saveurs et leurs nutriments.  </p>
        </div>
        <img src="assets/images/gingembre.jpg" alt="Image de jus de gingembre" class="w-full h-full object-cover opacity-10%" />
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
          <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-center  px-4">
          <p class="text-[#ACA9AC] text-2xl sm:text-3xl  font-bold mb-4">Durabilite:
          </p>
          <p class="text-[#ACA9AC] text-2xl sm:text-2xl  font-bold mb-4">Fruitscam s'engage à réduire son impact environnemental en adoptant des pratiques de production écoresponsables et en utilisant des emballages recyclables. Chaque geste compte pour protéger notre planète. </p>
        </div>
        <img src="assets/images/WhatsApp Image 2025-03-28 à 17.52.32_f84f300d.jpg" alt="Image de bouteilles" class="w-full h-full object-cover" />
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
        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-center  px-4">
          <p class="text-[#ACA9AC] text-2xl sm:text-3xl  font-bold mb-4">Satisfaction du client:
          </p>
          <p class="text-[#ACA9AC] text-2xl sm:text-2xl  font-bold mb-4">Notre priorité est de répondre aux besoins de nos clients. Nous prenons en compte leurs retours pour améliorer constamment nos recettes et offrir un service client exceptionnel.</p>
        </div>
        <img src="image/bouteilles.jpg" alt="images de bouteilles de jus" class="w-full h-full object-cover" />
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

    <div class="max-md:mx-[15px]  mx-[185px] pb-[40px] pt-[30px] max-md:text-sm text-justify">
      <p class="inline-block">
        Depuis son lancement en 1996 par sa promotrice Madame Bayemi Francoise, l'entreprise Fruitscam a connu une évolution remarquable grâce à l'innovation et au dévouement de son équipe majoritairement constituée de femmes. Celles-ci mettent en avant leurs compétences pour valoriser les valeurs authentiques des fruits de leurs régions.
      </p>
    </div>
  </div>

  <!-- presentation des differents services -->
  <section class="bg-white">

  <p class="text-center pt-[80px] text-3xl max-md:text-2xl">Nos Services d'Expertise en Fabrication de Jus</p>

  <!-- premier service -->
  <section class="pt-[60px] max-md:block max-md:px-[10px] flex gap-[100px] justify-center">
    <div>
      <img src="assets/images/ravitaillement.webp" alt="image" class="h-[320px] w-[400px] max-md:w-full max-md:h-auto">
    </div>
    <div class="pt-[40px] max-md:px-[10px]">
      <p class="text-yellow-400 text-xl max-md:text-lg text-center">LE SERVICE D'APPROVISIONNEMENT</p>
      <p class="w-[500px] max-md:w-full text-justify  max-md:text-sm pt-[30px]">
        Notre service d’approvisionnement choisit soigneusement des fournisseurs réputés pour garantir des fruits de première qualité et de saison. Nous privilégions des producteurs engagés dans des pratiques durables, assurant ainsi fraîcheur et goût.

Nos moyens de transport, adaptés et impeccables, préservent la qualité des fruits jusqu’à leur arrivée. Cette approche professionnelle nous permet de créer des jus savoureux et de haute qualité.
      </p>
    </div>
  </section>

  <!-- Deuxième service -->
  <section class="pt-[60px] max-md:block max-md:px-[10px] flex gap-[100px] justify-center">
    <div class="pt-[40px] max-md:px-[10px]">
      <p class="text-yellow-400 text-xl max-md:text-lg text-center">LE SERVICE DE PRODUCTION</p>
      <p class="w-[500px] max-md:w-full text-justify  max-md:text-sm pt-[30px]">
     Notre service de production utilise des techniques semi-industrielles pour garantir des jus de qualité supérieure. Équipés de machines modernes telles que la broyeuse, la tamiseuse, le séchoir, l’encapsuleur, l’appertiseur et le pasteurisateur, nous optimisons chaque étape du processus.

Nous respectons strictement les normes en vigueur pour assurer la qualité et la sécurité de nos produits. Cette approche nous permet de créer des jus savoureux, tout en préservant leur fraîcheur et leurs bienfaits naturels.
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
      <p class="text-yellow-400 text-xl max-md:text-lg text-center">LE SERVICE DE CONTROLE QUALITE</p>
      <p class="w-[500px] max-md:w-full text-justify max-md:text-sm pt-[30px]">
       Notre service de Contrôle Qualité veille à la conformité de chaque étape du processus de production.

Nous inspectons la qualité des matières premières, assurons un nettoyage rigoureux et surveillons attentivement la fabrication des jus.

Chaque bouteille est également contrôlée avant sa mise en vente.

Cette vigilance constante garantit des produits sûrs et de haute qualité, offrant ainsi à nos clients des jus savoureux et fiables.
      </p>
    </div>
  </section>
  </section>

  <!-- Nos Valeurs -->
   <section class="bg-white pt-[60px] pb-[80px]">
  <p class="text-center pt-[80px] text-3xl max-md:text-2xl">Nos Valeurs</p>

  <section class="flex flex-wrap max-md:gap-[30px] gap-[130px] justify-center pt-[40px] max-md:px-[10px]">

  <div class="justify-center text-justify ">
      <img src="assets/images/heart (1) 1.png" alt="" class="h-[20px] w-[20px] mx-auto">
      <p class="pt-[10px] font-bold text-center">Passion</p>
      <p class="text-xs pt-[8px] w-[220px] mx-auto">
        Cette passion pour le jus naturel ne se limite pas seulement à la production ; elle se ressent également dans l'interaction avec nos clients, à qui ils transmettent leur amour du produit. Pour nous, chaque gorgée est le reflet d'un travail d'équipe, d'une vision commune et d'une volonté de partager le meilleur de la nature.
      </p>
    </div>


    <div class="text-justify justify-center">
      <img src="assets/images/Vector (1).png" alt="" class="h-[20px] w-[20px] mx-auto">
      <p class="pt-[10px] font-bold text-center">Création des Richesses</p>
      <p class="text-xs pt-[8px] w-[165px] mx-auto"> Chez Fruitscam, nous croyons 
 que créer des richesses dépasse la simple génération de profits.
 Notre engagement va au-delà des résultats financiers.</p>
    </div>


    <div class="justify-center text-justify ">
      <img src="assets/images/Group.png" alt="" class="h-[20px] w-[20px] mx-auto">
      <p class="pt-[10px] font-bold text-center">Respect</p>
      <p class="text-xs pt-[8px] w-[220px] mx-auto">
        Le respectLe respect est une valeur fondamentale au sein de l'entreprise Fruitscam. Il constitue un outil essentiel pour garantir un environnement de travail harmonieux et productif. En cultivant le respect entre collègues, nous favorisons une communication ouverte et une collaboration efficace. 
    </div>
  </section>
  </section>

  <!-- Partie presentant les missions et visions -->

  <section class="flex gap-[170px] max-md:gap-[50px] justify-center mt-[50px]">
  <section class="bg-gray-100 mt-[40px] pb-[10px] inline-block max-md:px-[10px] w-[350px]">
    <p class="text-xl text-yellow-400 underline text-center">Notre Vision</p>
    <p class="text-sm pt-[20px] text-justify max-w-[700px] mx-auto">
      Nous aspirons à devenir le leader des jus naturels frais de haute qualité au Cameroun, en respectant nos valeurs écoresponsables et sociales. Nous adoptons un modèle écoresponsable axé sur les enjeux sociaux, en recrutant des jeunes mères et des femmes en difficulté. Nous croyons en leur potentiel et, en investissant dans leur avenir, nous favorisons leur bien-être et contribuons à une société plus juste.
    </p>
  </section>

   <section class="bg-gray-100 mt-[40px] pb-[10px] w-[350px] inline-block max-md:px-[10px]">
    <p class="text-xl text-yellow-400 underline text-center">Nos Missions</p>
    <p class="text-sm pt-[20px] max-w-[700px] text-justify mx-auto">
     FRUITSCAM propose des jus naturels de qualité, fabriqués par une équipe dynamique de jeunes femmes, diplômées ou non, travaillant dans de bonnes conditions. L'entreprise se consacre à des initiatives écoresponsables, notamment le recyclage et des projets innovants, afin de réduire son empreinte écologique. En inspirant clients et partenaires à adopter des pratiques durables, FRUITSCAM contribue à un avenir plus vert et à l'amélioration du bien-être des consommateurs.
    </p>
  </section>

  </section>

  <!-- partie du speech de la DG -->

  <div class="flex justify-center max-md:pt-[20px] max-md:pb-[35px]  ">
    <img src="image/photo-DG.jpg" alt="" class="max-md:h-[230px] h-[188px] max-md:w-[190px]  w-[170px] max-md:rounded-none rounded-full  relative top-[100px]">
  </div>
  <section class="bg-green-600 text-white text-center text-justify justify-center px-[100px] pt-[100px] pb-[80px]">
    <p class="mt-[20px]">  Bienvenue chez Fruitscam ! </p>
<p>
Chez Fruitscam, nous croyons en l'importance de l'innovation et de la durabilité. Notre mission est de fournir des produits de qualité tout en respectant notre environnement. Nous nous engageons à adopter des pratiques écoresponsables et à soutenir les communautés locales.   Notre équipe, passionnée et dévouée, travaille chaque jour pour garantir que nos clients reçoivent le meilleur. En valorisant le respect et la collaboration, nous créons un environnement de travail positif et dynamique.
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