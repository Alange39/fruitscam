

<?php
include_once "connect_to_bd.php";

try {
    $stmt = $conn->prepare("SELECT * FROM produits");
    $stmt->execute();
} catch (PDOException $e) {
    echo "pas cool" . $e->getMessage();
}
?>


    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>

    <div class="overflow-x-auto max-md:w-full max-md:mx-[2px] max-md:inline-block mx-[60px] flex justify-center mb-4">
        <table class="min-w-full bg-white border w-screen border-gray-300  shadow-md rounded-lg">
            <thead>
                <tr class="bg-green-500 text-white">
                    <th class="p-1  border">Nom</th>
                    <th class="p-1  border">Image</th>
                    <th class="p-1  border">Ingrédient</th>
                    <th class="p-1  border">Prix</th>
                    <th class="p-1  border">Description</th>
                    <th class="p-1  border">Quantité</th>
                    <th class="p-1  border">Catégorie</th>
                    <th class="p-1  border">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                  foreach ($stmt->fetchAll() as $k => $v) {
                ?>
                <tr class="border">
                    <td class="p-1  border"><?=$v["noms"]?></td>
                    <td class="p-1  border"><img src="./upload/<?=$v['photos']?>" alt="Produit" class="w-16 h-16 object-cover"></td>
                    <td class="p-1  border"><?=$v['ingredient']?></td>
                    <td class="p-1  border"><?=$v['prix']?></td>
                    <td class="p-1  border"><?=substr(nl2br( $v["descriptions"]),0,30,)?>...</td>
                    <td class="p-1  border"><?=$v["quantites"]?></td>
                    <td class="p-1  border"><?=$v["categoties"]?></td>
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
    <script>
        lucide.createIcons();
    </script>


