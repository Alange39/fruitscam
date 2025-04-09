 <?php
    require("connect_to_bd.php");

    try {
        $id = $_GET['id'];
        $stmt = $conn->prepare("SELECT * FROM produits WHERE id=?");
        $stmt->execute(array("$id"));
    } catch (PDOException $e) {
        echo "error" . $e->getMessage();
    }

    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
     <script src="https://cdn.tailwindcss.com"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>

 <body class="font-[Roboto]">


     <?php
        include_once "head.php";

        foreach ($stmt->fetchAll() as $k => $v) {
        }

        try {
            $req = $conn->prepare("SELECT * FROM produits WHERE noms=?");
            $req->execute(array($v["noms"]));
        } catch (\Throwable $th) {
            echo "error";
            exit;
        }
        ?>
     <section class="mt-[50px] ">
         <div class="flex justify-center gap-[12rem] items-center max-md:flex-col">
             <div>


                 <img src="upload/<?= $v['photos'] ?>" alt="<?=$v["noms"]?>" class="w-[50hv]  h-full">


             </div>

             <div>
                 <h1 class="text-[#F3C63F] text-5xl my-[50px]"><?php
                                                                $nom = strtoupper($v["noms"]);
                                                                echo $nom;
                                                                ?>
                 </h1>

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
                 <?php
                    foreach ($req as $a => $b) {
                    ?>
                     <a href="c_produit.php?id=<?= $b["id"] ?>">
                         <div class=" inline-block text-center">
                             <img src="upload/<?= $b['photos'] ?>" alt="" class="w-[70px] h-[70px] border-1 border-solid border-black">
                             <h5 class="text-black"><?= $b['quantites'] ?></h5>
                             <h4 class="text-black"><?= $b["prix"] ?>F</h4>
                         </div>
                     </a>
                 <?php
                    }
                    ?>



             </div>
             <a href="https://wa.me/237" target="_blank">
                 <button class="p-2 bg-[#2D8740] inline-block rounded-[10px] text-black">Commander</button>
             </a>

         </div>
     </section>

     <section class="p-4">
         <h2 class="text-[#F3C63F] text-2xl text-center pb-10">
             Collection de <?=$v['categoties']?>
         </h2>

         <?php
            try {
                $select = $conn->prepare("SELECT * FROM produits WHERE categoties=? AND id <> ? LIMIT 3;");
                 $select->execute(array($v['categoties'],$v['id']));
            } catch (PDOException $e) {
                echo "error";
            }
            ?>
            <div class="flex justify-around flex-wrap">
                <?php

            foreach ($select->fetchAll() as $key => $val) {
            ?>
             <!-- presentation des produits -->


                 <div class="border border-zinc-200 rounded-xl p-5 w-full max-w-[350px] md:w-[60%] bg-white shadow-md transition hover:shadow-lg">
                     <div class="overflow-hidden rounded-md">
                         <img src="upload/<?= $val["photos"] ?>" alt="<?= $v["noms"] ?>" class="w-full h-[250px] object-cover rounded-md">
                     </div>
                     <h4 class="text-xl font-bold mt-3"><?= $val["noms"] ?></h4>
                     <h5 class="text-zinc-500 font-light mt-1">Prix : <?= $v["prix"] ?>f</h5>
                     <a href="c_produit.php?id=<?= $val["id"] ?>">
                         <button class="mt-3 w-full border border-zinc-300 text-zinc-700 hover:bg-zinc-100 rounded py-1 transition">Voir plus</button>
                     </a>
                 </div>
                     <?php
            }
            ?>
            </div>

             <!-- <div class="border-[1.5px] border-solid border-zinc-100 inline-block rounded-[10px]  p-2">
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
            </div>-->

             </div>

     </section>

     <?php
        include_once "footer.php";

        include_once "script.php";
        ?>
 </body>

 </html>