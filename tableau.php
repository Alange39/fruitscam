<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des Produits</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="p-10">
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300 shadow-md rounded-lg">
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
                <tr class="border">
                    <td class="py-2 px-4 border">Produit 1</td>
                    <td class="py-2 px-4 border"><img src="image.jpg" alt="Produit" class="w-16 h-16 object-cover"></td>
                    <td class="py-2 px-4 border">Ingrédient 1, 2</td>
                    <td class="py-2 px-4 border">10€</td>
                    <td class="py-2 px-4 border">Description du produit</td>
                    <td class="py-2 px-4 border">5</td>
                    <td class="py-2 px-4 border">Catégorie 1</td>
                    <td class="py-2 px-4  flex gap-2 jutify-center items-center">

                        <a href="" class="text-blue-500 hover:text-blue-700">
                            <i data-lucide="edit" class="w-5 h-5"></i>
                        </a> 
                        <a href="" class="text-red-500 hover:text-red-700">
                            <i data-lucide="trash-2" class="w-5 h-5"></i>
                        </a>
                    </td>
                    
                </tr>
            </tbody>
        </table>
    </div>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>
