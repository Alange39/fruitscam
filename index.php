
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <header class="relative w-full h-[570px] overflow-hidden">
        <div id="carousel" class="w-full h-full flex transition-transform duration-1000 ease-in-out">
            <!-- Slide 1 -->
            <div class="min-w-full h-full relative">
                <img src="./image/Image 1.png " alt="Image 1" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center">
                    <div class="">
                        <h2 class="text-[#ACA9AC] text-3xl font-bold mb-4">Reveillez vos sens avec nos jus naturels,</h2>
                        <h2 class="ml-6 text-center text-[#ACA9AC] text-3xl font-bold mb-5">un veritable festival de saveurs!</h2>
                         <p class="text-[#ACA9AC] text-center mb-10 ">Sirotez la nature, goutez a la vie!</p>
                        
                    </div>
                    <div class="flex space-x-3 mb-2">
                        <button onclick="goToSlide(0)" class="w-4 h-4 bg-black rounded-full focus:outline-none"></button>
                        <button onclick="goToSlide(1)" class="w-4 h-4 bg-gray-300 rounded-full focus:outline-none"></button>
                        <button onclick="goToSlide(2)" class="w-4 h-4 bg-gray-300 rounded-full focus:outline-none"></button>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="min-w-full h-full relative">
                <img src="assets/images/image1.jpg " alt="Image 2" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center">
                    <h2 class="text-[#ACA9AC] text-3xl font-bold mb-4">Decouvrez notre collection de saveurs</h2>
					<p class="text-[#ACA9AC] text-center mb-10 ">Alors, laquelle de nos delicieuses faveurs vous fera craquer?</p>

                    <div class="flex space-x-3">
                        <button onclick="goToSlide(0)" class="w-4 h-4 bg-gray-300 rounded-full focus:outline-none"></button>
                        <button onclick="goToSlide(1)" class="w-4 h-4 bg-black rounded-full focus:outline-none"></button>
                        <button onclick="goToSlide(2)" class="w-4 h-4 bg-gray-300 rounded-full focus:outline-none"></button>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="min-w-full h-full relative">
                <img src="assets/images/ravitaillement.webp " alt="Image 3" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center">
                    <h2 class="text-[#ACA9AC] text-3xl font-bold mb-4">Nos moyens de transport de nos matieres premières  </h2>
					<h2 class="ml-6 text-center text-[#ACA9AC] text-3xl font-bold mb-5">sont adaptés  et d’une propreté sans reproche, </h2>
					<h2 class="ml-6 text-center text-[#ACA9AC] text-3xl font-bold mb-5">préservant la qualité </h2>
					<div class="flex space-x-3">
                        <button onclick="goToSlide(0)" class="w-4 h-4 bg-gray-300 rounded-full focus:outline-none"></button>
                        <button onclick="goToSlide(1)" class="w-4 h-4 bg-gray-300 rounded-full focus:outline-none"></button>
                        <button onclick="goToSlide(2)" class="w-4 h-4 bg-black rounded-full focus:outline-none"></button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="p-4">
        <h1 class="text-[#F3C63F] text-2xl text-center pb-10">
        Nos produits
        </h1>
        <!-- presentation des produits -->

        <div class="flex justify-around">

            <div class="border-[1.5px] border-sulid border-zinc-100 inline-block rounded-[10px] p-2">
                <div>
                    <img src="./image/image6.png" alt="" class="w-[300px] h-[300px]">
                </div>
                <h4 class="text-xl font-700">jus d'orange</h4>
                <h5 class="text-zinc-500 font-200">prix: 1500f</h5>
                <button class="w-[95%] border-2 border-sulid border-zinc-200 text-zinc-500 mx-2 rounded-[5px]">Voir plus</button>
            </div>

            <div class="border-[1.5px] border-sulid border-zinc-100 inline-block rounded-[10px]  p-2">
                <div>
                    <img src="./image/image4.png" alt="" class="w-[300px] h-[300px]">
                </div>
                <h4 class="text-xl font-700">jus de pomme</h4>
                <h5 class="text-zinc-500 font-200">prix: 1500f</h5>
                <button class="w-[95%] border-2 border-sulid border-zinc-200 text-zinc-500 mx-2 rounded-[5px]">Voir plus</button>
            </div>

            <div class="border-[1.5px] border-sulid border-zinc-100 inline-block rounded-[10px] p-2">
                <div>
                    <img src="./image/image5.png" alt="" class="w-[300px] h-[300px]">
                </div>
                <h4 class="text-xl font-700">jus de mangue</h4>
                <h5 class="text-zinc-500 font-200">prix: 1500f</h5>
                <button class="w-[95%] border-2 border-sulid border-zinc-200 text-zinc-500 mx-2 rounded-[5px]">Voir plus</button>
            </div>

        </div>

     </section>
     <section class="p-4">
        
        <div class="flex justify-around">

            <div class="border-[1.5px] border-sulid border-zinc-100 inline-block rounded-[10px] p-2">
                <div>
                    <img src="./image/image6.png" alt="" class="w-[300px] h-[300px]">
                </div>
                <h4 class="text-xl font-700">jus d'orange</h4>
                <h5 class="text-zinc-500 font-200">prix: 1500f</h5>
                <button class="w-[95%] border-2 border-sulid border-zinc-200 text-zinc-500 mx-2 rounded-[5px]">Voir plus</button>
            </div>

            <div class="border-[1.5px] border-sulid border-zinc-100 inline-block rounded-[10px]  p-2">
                <div>
                    <img src="./image/image4.png" alt="" class="w-[300px] h-[300px]">
                </div>
                <h4 class="text-xl font-700">jus de pomme</h4>
                <h5 class="text-zinc-500 font-200">prix: 1500f</h5>
                <button class="w-[95%] border-2 border-sulid border-zinc-200 text-zinc-500 mx-2 rounded-[5px]">Voir plus</button>
            </div>

            <div class="border-[1.5px] border-sulid border-zinc-100 inline-block rounded-[10px] p-2">
                <div>
                    <img src="./image/image5.png" alt="" class="w-[300px] h-[300px]">
                </div>
                <h4 class="text-xl font-700">jus de mangue</h4>
                <h5 class="text-zinc-500 font-200">prix: 1500f</h5>
                <button class="w-[95%] border-2 border-sulid border-zinc-200 text-zinc-500 mx-2 rounded-[5px]">Voir plus</button>
            </div>

        </div>

     </section>
     

     <section class="flex justify-center items-center mt-10 mb-10">
             <div class="bg-[#F4DBDB]">
                   <h1 class="text-[#2D8740] text-2xl ml-5 font-Roboto font-[600] text-[25]">Astuce sante</h1>
                   <h1 class="text-[#2D8740] text-xl ml-5 font-Roboto font-[5px]">Vertus du Noni</h1>
                   <p class="ml-6 mt-3 mb-1 mr-4">Le Noni,souvent appele "Fruit de la sante",offre plusieurs bienfaits:</p>
                   <ul  class="ml-10 list-disc mb-5 ">
                     <li>Renforce le systeme immunitaire;</li>
                     <li>Anti-inflammatoire;</li>
                     <li>Ameliore la digestion;</li>
                     <li>Soutient la sante cardiaque</li>
                   </ul>
             </div>
             <img src="./image/noni.png" alt="" class="w-[400px] h-[215px] ">


     </section>


          <h2 class="text-[#F3C63F] text-center font-Roboto font-[600] mb-5 ">Nos produits sont</h2>

          <section class="flex justify-around ">
            <div class="ml-5 flex items-center flex-col">
                <img src="./image/Vector.png" alt=""class="w-[50px] h-[50px]" >
                <p>Certifie ANOR</p>
            </div>
            <div class="ml-5 flex items-center flex-col ">
                <img src="./image/Vector1.png" alt="" class="w-[50px] h-[50px]">
                <p class="">De 1ere qualite</p>
            </div>
            <div class="ml-5 flex items-center flex-col">
                <img src="./image/Vector2.png" alt="" class="w-[50px] h-[50px]">
                <p>100% naturels</p>
            </div>
          </section>
		  
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

