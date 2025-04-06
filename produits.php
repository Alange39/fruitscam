<?php
include_once "connect_to_bd.php";

 //recuperer les produits stocker dans la bd
try {
    $stmt = $conn->prepare("SELECT * FROM produits") ;
    $stmt->execute();
    echo "cool" ;
} catch (PDOException $e) {
    echo "error" . $e->getMessage() ;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>

<body class="font-Roboto">

           <?php include_once"head.php";?>


    <section class="bg-[url(./img/Image.png)] h-screen ">
        <div class="h-screen bg-black/30 flex flex-col justify-center text-[#FFF] items-center">
            <div class="text-center bg-black/30">
                <h1 class="text-5xl font-1000 ">
                    Decouvrez notre collection de saveurs
                </h1>
                <h3 class="text-xl font-500">Alors, laquelle de nos delicieuses saveurs vous feras craquer?</h3>
            </div>
        </div>

    </section>

    <section class="p-4">
        <h2 class="text-[#F3C63F] text-2xl text-center pb-10">
            Collection de jus
        </h2>
        <!-- presentation des produits -->

        <div class="flex justify-around">

               <!-- afficher les produits recuperer -->
                  <?php
                        foreach ($stmt->fetchAll() as $k => $v) {    
                  ?>
            <div class="border-[1.5px] border-solid border-zinc-100 inline-block rounded-[10px] p-2">
                <div>
                    <img src="upload/<?=$v["photos"]?>" alt="" class="w-[300px] h-[300px]">
                </div>
                <h4 class="text-xl font-700"><?=$v["noms"]?></h4>
                <h5 class="text-zinc-500 font-200">prix: <?=$v["prix"]?>f</h5>
                <a href="c_produit.php?id=<?=$v["id"]?>">
                    <button class="w-[95%] border-1 border-solid border-zinc-200 text-zinc-500 mx-2 rounded-[5px]">Voir plus</button>
                </a>
                    
            </div>
                 <?php
                        }
                 ?>

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
            </div> -->

        </div>

    </section>
     <?php include_once"footer.php";?>
     <!-- ange ajoute le script en bas du body pour voir une modif -->
     
</body>

</html>