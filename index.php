<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Accueil</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<?php @include 'head.php'; ?>

<body class="bg-gray-100">



  <header class="relative w-full h-[570px] overflow-hidden">
    <div id="carousel" class="w-full h-full flex transition-transform duration-1000 ease-in-out">

      <!-- Slide 1 -->
      <div class="min-w-full h-full relative">
        <img src="./image/Image 1.png" alt="jus  naturel" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-center px-4">
          <h2 class="text-[#ACA9AC] text-2xl sm:text-3xl font-bold mb-4">Réveillez vos sens avec nos jus naturels,</h2>
          <h2 class="text-[#ACA9AC] text-2xl sm:text-3xl font-bold mb-5">un véritable festival de saveurs!</h2>
          <p class="text-[#ACA9AC] mb-10">Sirotez la nature, goûtez à la vie!</p>
        </div>
        <!-- Boutons en bas de l'image avec décalage de 75px -->
        <div class="absolute bottom-[75px] w-full flex justify-center space-x-3">
          <button onclick="goToSlide(0)" class="w-4 h-4 bg-black rounded-full focus:outline-none"></button>
          <button onclick="goToSlide(1)" class="w-4 h-4 bg-gray-300 rounded-full focus:outline-none"></button>
          <button onclick="goToSlide(2)" class="w-4 h-4 bg-gray-300 rounded-full focus:outline-none"></button>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="min-w-full h-full relative">
        <img src="assets/images/image1.jpg" alt="jus  naturel" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-center px-4">
          <h2 class="text-[#ACA9AC] text-2xl sm:text-3xl font-bold mb-4">Découvrez notre collection de saveurs</h2>
          <p class="text-[#ACA9AC] mb-10">Alors, laquelle de nos délicieuses saveurs vous fera craquer?</p>
        </div>
        <!-- Boutons en bas de l'image avec décalage de 75px -->
        <div class="absolute bottom-[75px] w-full flex justify-center space-x-3">
          <button onclick="goToSlide(0)" class="w-4 h-4 bg-gray-300 rounded-full focus:outline-none"></button>
          <button onclick="goToSlide(1)" class="w-4 h-4 bg-black rounded-full focus:outline-none"></button>
          <button onclick="goToSlide(2)" class="w-4 h-4 bg-gray-300 rounded-full focus:outline-none"></button>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="min-w-full h-full relative">
        <img src="assets/images/ravitaillement.webp" alt="jus  naturel" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-center px-4">
          <h2 class="text-[#ACA9AC] text-2xl sm:text-3xl font-bold mb-4">Nos moyens de transport de nos matières premières</h2>
          <h2 class="text-[#ACA9AC] text-2xl sm:text-3xl font-bold mb-4">sont adaptés et d’une propreté sans reproche,</h2>
          <h2 class="text-[#ACA9AC] text-2xl sm:text-3xl font-bold mb-5">préservant la qualité</h2>
        </div>
        <!-- Boutons en bas de l'image avec décalage de 75px -->
        <div class="absolute bottom-[75px] w-full flex justify-center space-x-3">
          <button onclick="goToSlide(0)" class="w-4 h-4 bg-gray-300 rounded-full focus:outline-none"></button>
          <button onclick="goToSlide(1)" class="w-4 h-4 bg-gray-300 rounded-full focus:outline-none"></button>
          <button onclick="goToSlide(2)" class="w-4 h-4 bg-black rounded-full focus:outline-none"></button>
        </div>
      </div>

    </div>
  </header>
  <main class="px-4 sm:px-6 lg:px-16">

    <section class="py-10">
      <h1 class="text-[#F3C63F] text-2xl text-center pb-10">Nos produits</h1>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Produit 1 -->
        <div class="border border-zinc-100 rounded-[10px] p-4 bg-white">
          <img src="./image/image6.png" alt="jus d'orange" class="w-full h-[300px] object-cover" />
          <h4 class="text-xl font-bold mt-2">Jus d'orange</h4>
          <h5 class="text-zinc-500">Prix : 1500f</h5>
          <button class="w-full border border-zinc-200 text-zinc-500 rounded-[5px] mt-2">Voir plus</button>
        </div>
        <!-- Produit 2 -->
        <div class="border border-zinc-100 rounded-[10px] p-4 bg-white">
          <img src="./image/image4.png" alt="jus de pomme" class="w-full h-[300px] object-cover" />
          <h4 class="text-xl font-bold mt-2">Jus de pomme</h4>
          <h5 class="text-zinc-500">Prix : 1500f</h5>
          <button class="w-full border border-zinc-200 text-zinc-500 rounded-[5px] mt-2">Voir plus</button>
        </div>
        <!-- Produit 3 -->
        <div class="border border-zinc-100 rounded-[10px] p-4 bg-white">
          <img src="./image/image5.png" alt="" class="w-full h-[300px] object-cover" />
          <h4 class="text-xl font-bold mt-2">Jus de mangue</h4>
          <h5 class="text-zinc-500">Prix : 1500f</h5>
          <button class="w-full border border-zinc-200 text-zinc-500 rounded-[5px] mt-2">Voir plus</button>
        </div>
      </div>
    </section>

    <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 py-6">
      <!-- Même contenu répété -->
      <!-- Tu peux ajouter ici plus de produits comme ci-dessus si nécessaire -->
    </section>
    <section class="py-10">


      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Produit 1 -->
        <div class="border border-zinc-100 rounded-[10px] p-4 bg-white">
          <img src="./image/image6.png" alt="" class="w-full h-[300px] object-cover" />
          <h4 class="text-xl font-bold mt-2">Jus d'orange</h4>
          <h5 class="text-zinc-500">Prix : 1500f</h5>
          <button class="w-full border border-zinc-200 text-zinc-500 rounded-[5px] mt-2">Voir plus</button>
        </div>
        <!-- Produit 2 -->
        <div class="border border-zinc-100 rounded-[10px] p-4 bg-white">
          <img src="./image/image4.png" alt="" class="w-full h-[300px] object-cover" />
          <h4 class="text-xl font-bold mt-2">Jus de pomme</h4>
          <h5 class="text-zinc-500">Prix : 1500f</h5>
          <button class="w-full border border-zinc-200 text-zinc-500 rounded-[5px] mt-2">Voir plus</button>
        </div>
        <!-- Produit 3 -->
        <div class="border border-zinc-100 rounded-[10px] p-4 bg-white">
          <img src="./image/image5.png" alt="" class="w-full h-[300px] object-cover" />
          <h4 class="text-xl font-bold mt-2">Jus de mangue</h4>
          <h5 class="text-zinc-500">Prix : 1500f</h5>
          <button class="w-full border border-zinc-200 text-zinc-500 rounded-[5px] mt-2">Voir plus</button>
        </div>
      </div>
    </section>

    <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 py-6">
      <!-- Même contenu répété -->
      <!-- Tu peux ajouter ici plus de produits comme ci-dessus si nécessaire -->
    </section>
    <section class="py-10">


      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Produit 1 -->
        <div class="border border-zinc-100 rounded-[10px] p-4 bg-white">
          <img src="./image/image6.png" alt="" class="w-full h-[300px] object-cover" />
          <h4 class="text-xl font-bold mt-2">Jus d'orange</h4>
          <h5 class="text-zinc-500">Prix : 1500f</h5>
          <button class="w-full border border-zinc-200 text-zinc-500 rounded-[5px] mt-2">Voir plus</button>
        </div>
        <!-- Produit 2 -->
        <div class="border border-zinc-100 rounded-[10px] p-4 bg-white">
          <img src="./image/image4.png" alt="" class="w-full h-[300px] object-cover" />
          <h4 class="text-xl font-bold mt-2">Jus de pomme</h4>
          <h5 class="text-zinc-500">Prix : 1500f</h5>
          <button class="w-full border border-zinc-200 text-zinc-500 rounded-[5px] mt-2">Voir plus</button>
        </div>
        <!-- Produit 3 -->
        <div class="border border-zinc-100 rounded-[10px] p-4 bg-white">
          <img src="./image/image5.png" alt="" class="w-full h-[300px] object-cover" />
          <h4 class="text-xl font-bold mt-2">Jus de mangue</h4>
          <h5 class="text-zinc-500">Prix : 1500f</h5>
          <button class="w-full border border-zinc-200 text-zinc-500 rounded-[5px] mt-2">Voir plus</button>
        </div>
      </div>
    </section>

    <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 py-6">
      <!-- Même contenu répété -->
      <!-- Tu peux ajouter ici plus de produits comme ci-dessus si nécessaire -->
    </section>

    <section class="flex flex-col lg:flex-row justify-center items-center gap-6  mb-10">
      <div class="bg-[#F4DBDB] p-6 rounded-lg">
        <h1 class="text-[#2D8740] text-2xl font-semibold">Astuce santé</h1>
        <h2 class="text-[#2D8740] text-xl mt-2">Vertus du Noni</h2>
        <p class="mt-3">Le Noni, souvent appelé "Fruit de la santé", offre plusieurs bienfaits :</p>
        <ul class="list-disc ml-6 mt-2 text-[#2D8740]">
          <li>Renforce le système immunitaire</li>
          <li>Anti-inflammatoire</li>
          <li>Améliore la digestion</li>
          <li>Soutient la santé cardiaque</li>
        </ul>
      </div>
      <img src="./image/noni.png" alt="Noni" class="w-full max-w-[500px] h-auto rounded-lg" />
    </section>

    <h2 class="text-[#F3C63F] text-center font-semibold text-2xl mb-5">Nos produits sont</h2>

    <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-4 text-center">
      <div class="flex flex-col items-center">
        <img src="./image/Vector.png" alt="" class="w-[50px] h-[50px]" />
        <p>Certifié ANOR</p>
      </div>
      <div class="flex flex-col items-center">
        <img src="./image/Vector1.png" alt="" class="w-[50px] h-[50px]" />
        <p>De 1ère qualité</p>
      </div>
      <div class="flex flex-col items-center">
        <img src="./image/Vector2.png" alt="" class="w-[50px] h-[50px]" />
        <p>100% naturels</p>
      </div>
    </section>

  </main>

  <?php require_once 'footer.php'; ?>
  <?php include_once "script.php"; ?>

  <script>
    let index = 0;
    const slides = document.querySelectorAll("#carousel > div");
    const totalSlides = slides.length;
    const carousel = document.getElementById("carousel");

    function goToSlide(slideIndex) {
      index = slideIndex;
      carousel.style.transform = `translateX(-${index * 100}%)`;
    }

    function showNextSlide() {
      index = (index + 1) % totalSlides;
      carousel.style.transform = `translateX(-${index * 100}%)`;
    }

    setInterval(showNextSlide, 5000);
  </script>
</body>

</html>