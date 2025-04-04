<?php
require ("connect_to_bd.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="font-[Roboto]">
          <?php include_once"head.php";?>
   <?php
   include_once "head.php";
   ?>
    <section class="mt-[50px] ">
        <div class="flex justify-center gap-[12rem] items-center max-lg:flex-col">
            <div>


                <img src="./img/image1.png" alt="jus d'orange" class="w-[50hv] h-screen">


            </div>

            <div>
                <h1 class="text-[#F3C63F] text-5xl my-[50px]">Jus d'orange</h1>

                <h2 class="text-2xl font-[800] mb-[15px]">description :</h2>

                <p class="text-[#565E6C] mb-[15px]">
                    Plongez dans l’authenticité de notre jus d’orange 100% pur,<br>
                    un véritable concentré de soeil et de fraicheur. <br>
                    Chaque gorgée révèle un équilibre parfait entre douceur <br>
                    et acidité, offrant une explosion d’agrumes en bouche.
                </p>

                <h2 class="text-2xl font-[800] mb-[15px]">Ingredients</h2>
                <p class="text-[#565E6C] mb-[15px]">
                    Oranges soigneusement sélectionnées, <br>
                    sans additifs ni conservateurs.
                </p>

                <h2 class="text-2xl font-[800] mb-[15px]">
                    valeurs nutritionnelles (pour 100ml)
                </h2>

                <p class="text-[#565E6C] mb-[15px]">
                <ul class="text-[#565E6C] list-disc ml-[20px]">
                    <li>Calories : 45</li>
                    <li>Glucides : 10g</li>
                    <li>Vitamine C : 50% des AJR</li>
                </ul>

                </p>
            </div>
        </div>

        <div class="flex justify-center gap-12 items-center">

            <div class="flex w-[50%] gap-[90px] mt-2">

                <div class=" inline-block text-center">
                    <img src="./img/orange pte.png" alt="" class="w-[70px] h-[70px] border-1 border-solid border-black">
                    <h5>33cl</h5>
                    <h4>650Fcfa</h4>
                </div>

                <div class=" inline-block text-center">
                    <img src="./img/grande orange.png" alt="" class="w-[70px] h-[70px] border-1 border-solid border-black">
                    <h5>1L</h5>
                    <h4>650Fcfa</h4>
                </div>

                <div class=" inline-block text-center">
                    <img src="./img/orange pte.png" alt="" class="w-[70px] h-[70px] border-1 border-solid border-black">
                    <h5>5L</h5>
                    <h4>650Fcfa</h4>
                </div>

            </div>
            <button class="p-2 bg-[#2D8740] inline-block rounded-[10px]">Commander</button>

        </div>
    </section>

    <section class="p-4">
        <h2 class="text-[#F3C63F] text-2xl text-center pb-10">
            Collection de jus
        </h2>
        <!-- presentation des produits -->

        <div class="flex justify-around">

            <div class="border-[1.5px] border-solid border-zinc-100 inline-block rounded-[10px] p-2">
                <div>
                    <img src="./img/Image1.png" alt="" class="w-[300px] h-[300px]">
                </div>
                <h4 class="text-xl font-700">jus d'orange</h4>
                <h5 class="text-zinc-500 font-200">prix: 1500f</h5>
                <button class="w-[95%] border-1 border-solid border-zinc-200 text-zinc-500 mx-2 rounded-[5px]">Voir plus</button>
            </div>

            <div class="border-[1.5px] border-solid border-zinc-100 inline-block rounded-[10px]  p-2">
                <div>
                    <img src="./img/Image 20 (2).png" alt="" class="w-[300px] h-[300px]">
                </div>
                <h4 class="text-xl font-700">jus de pomme</h4>
                <h5 class="text-zinc-500 font-200">prix: 1500f</h5>
                <button class="w-[95%] border-1 border-solid border-zinc-200 text-zinc-500 mx-2 rounded-[5px]">Voir plus</button>
            </div>

            <div class="border-[1.5px] border-solid border-zinc-100 inline-block rounded-[10px] p-2">
                <div>
                    <img src="./img/Image 20 (1).png" alt="" class="w-[300px] h-[300px]">
                </div>
                <h4 class="text-xl font-700">jus de mangue</h4>
                <h5 class="text-zinc-500 font-200">prix: 1500f</h5>
                <button class="w-[95%] border-1 border-solid border-zinc-200 text-zinc-500 mx-2 rounded-[5px]">Voir plus</button>
            </div>

        </div>

    </section>

    <?php
       include_once "footer.php" ;
       include_once "script.php";
    ?>
</body>
</html>