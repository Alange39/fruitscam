<?php
include_once "connect_to_bd.php";

try {
    $stmt = $conn->prepare("SELECT * FROM produits");
    $stmt->execute();
} catch (PDOException $e) {
    echo "pas cool" . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des Produits</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="p-10 ">
    <div class="overflow-x-auto w-[1300px] ml-[110px]">
        <table class="min-w-full bg-white border w-[1000px] border-gray-300 shadow-md rounded-lg">
            <thead>
                <tr class="bg-green-500 text-white">
                    <th class="py-2 px-4 border">Nom</th>
                    <th class="py-2 px-4 border">Image</th>
                    <th class="py-2 px-4 border">Ingrédient</th>
                    <th class="py-2 px-4 border">Prix</th>
                    <th class="py-2 px-4 border">Description</th>
                    <th class="py-2 px-4 border">Quantité</th>
                    <th class="py-2 px-4 border">Catégorie</th>
                    <th class="py-2 px-4 border">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                  foreach ($stmt->fetchAll() as $k => $v) {
                ?>
                <tr class="border">
                    <td class="py-2 px-4 border"><?=$v["noms"]?></td>
                    <td class="py-2 px-4 border"><img src="./upload/<?=$v['photos']?>" alt="Produit" class="w-16 h-16 object-cover"></td>
                    <td class="py-2 px-4 border"><?=$v['ingredient']?></td>
                    <td class="py-2 px-4 border"><?=$v['prix']?></td>
                    <td class="py-2 px-4 border"><?=$v["descriptions"]?></td>
                    <td class="py-2 px-4 border"><?=$v["quantites"]?></td>
                    <td class="py-2 px-4 border"><?=$v["categoties"]?></td>
                    <td class="py-1 px-4   gap-2 jutify-center items-center">

                        <a href="edit_product.php?id=<?=$v["id"]?>" class="text-blue-500 hover:text-blue-700 flex">
                            <i data-lucide="edit" class="w-5 h-5"></i>modifier
                        </a> <br>
                        <a href="delete_product.php?id=<?=$v['id']?>" class="text-red-500 hover:text-red-700 flex">
                            <i data-lucide="trash-2" class="w-5 h-5"></i>supprimer
                        </a>
                    </td>
                    
                </tr>
                <?php
                  }
                ?>
            </tbody>
        </table>
    </div>
     <?php include_once"head.php";?>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>
