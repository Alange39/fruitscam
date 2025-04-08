<?php
session_start();
if (!isset($_SESSION['admin_nom'])) {
    header('location:index.php');
    die;
}
include_once "connect_to_bd.php";
if (isset($_FILES['image_file'])) {
    $name = $_FILES['image_file']['name'];
    $tmpname = $_FILES['image_file']['tmp_name'];
}
if (isset($_POST['sub'])) {

    //recuperation des informations a stocker dans la bd

    $nom = $_POST['nom'];
    $prix = $_POST['prix'];
    $descript = $_POST['descriptions'];
    $ingeredient = $_POST['ingredients'];
    $quantite = $_POST['quant'];
    $categ = $_POST['categ'];
    $id = $_GET['id'];
    $tabextention = explode('.', $name);
    $extention = strtolower(end($tabextention));

    //extention utilisé
    $extentionutilise = ['jpg', 'png', 'jpeg', 'gif'];

    //verivier si le fichier est une image

    if (in_array($extention, $extentionutilise)) {
        $uniqname = uniqid("", true);
        $filename = $uniqname . '.' . $extention;

        //envoyer la photo charger dans le dossier upload
        move_uploaded_file($tmpname, './upload/' . $filename);
    }

    //insertion des information dans la bd
    try {
        $stmt = $conn->prepare("UPDATE   produits  SET photos=:pho, noms=:nom, prix=:prix, descriptions=:descr, ingredient=:ingr, quantites=:quant, categoties=:cat WHERE id=:id");
        $stmt->bindparam(":pho", $filename);
        $stmt->bindparam("nom", $nom);
        $stmt->bindparam("prix", $prix);
        $stmt->bindparam('descr', $descript);
        $stmt->bindparam('ingr', $ingeredient);
        $stmt->bindparam('quant', $quantite);
        $stmt->bindparam('cat', $categ);
        $stmt->bindparam('id', $id);
        $stmt->execute();
        header("location:admin.php");
    } catch (PDOException $e) {
        echo "error" . $e->getMessage();
    }
}

try {
    $select = $conn->prepare("SELECT * FROM produits WHERE id=?");
    $select->execute(array($_GET['id']));
} catch (PDOException $e) {
    echo "errreeue";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    foreach ($select->fetchAll() as $k => $v) {
        # code...
    }
    ?>
    <?php include 'head.php'; ?>
    <!-- Debut formulaire de création de produit -->
    <section class="w-4/5 max-w-[1200px] mx-auto p-8">
        <div class="bg-white rounded-2xl shadow-md overflow-hidden p-8">
            <div class="bg-[#2D8740] rounded-xl px-0.5 py-2">
                <h2 class="mb-6 text-gray-800 text-3xl font-bold text-center">Créer un Produit</h2>
            </div>
            <form class="flex flex-col p-6" action="" method="post" enctype="multipart/form-data">

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- Nom du produit -->
                    <div class="mb-4 mr-4">
                        <label for="nom" class="block mb-2 font-bold">Nom du produit</label>
                        <input type="text" id="productName" name="nom" placeholder="Entrez le nom du produit" required
                            class="w-full p-2 border border-gray-300 rounded-md" value="<?= $v["noms"] ?>">
                    </div>
                    <!-- Format -->
                    <div class="mb-4">
                        <label for="format" class="block mb-2 font-bold">Format</label>
                        <input type="text" id="format" name="quant" placeholder="Ex: 250ml, 500ml, 1L..." required
                            class="w-full p-2 border border-gray-300 rounded-md" value="<?= $v["quantites"] ?>">
                    </div>
                    <!-- Prix -->
                    <div class="mb-4">
                        <label for="price" class="block mb-2 font-bold">Prix</label>
                        <input type="number" id="price" name="prix" placeholder="Entrez le prix" required
                            class="w-full p-2 border border-gray-300 rounded-md" value="<?= $v['prix'] ?>">
                    </div>

                </div>
                <!-- Catégorie - Menu déroulant -->
                <div class="mb-4">
                    <label for="category" class="block mb-2 font-bold">Catégorie</label>
                    <select id="category" name="categ" required
                        class="w-full p-2 border border-gray-300 rounded-md bg-white">
                        <option value="" disabled selected>Sélectionner une catégorie</option>
                        <option value="jus">Jus</option>
                        <option value="sirop">Sirop</option>
                        <option value="liqueur">Liqueur</option>
                    </select>
                </div>




                <!-- Description -->
                <div class="mb-4">
                    <label for="description" class="block mb-2 font-bold">Description</label>
                    <textarea id="description" name="descriptions" placeholder="Entrez la description du produit" required
                        class="w-full p-2 border border-gray-300 rounded-md h-24 resize-y"><?= $v['descriptions'] ?></textarea>
                </div>

                <!-- Ingrédients -->
                <div class="mb-4">
                    <label for="ingredients" class="block mb-2 font-bold">Ingrédients</label>
                    <textarea id="ingredients" name="ingredients" placeholder="Listez les ingrédients du produit" required
                        class="w-full p-2 border border-gray-300 rounded-md h-24 resize-y"><?= $v['ingredient'] ?></textarea>
                </div>

                <!-- Photo -->
                <div class="mb-4">
                    <label class="block mb-2 font-bold">Photo</label>
                    <div class="flex items-center justify-center w-full">
                        <label for="mainPhoto" class="flex flex-col items-center justify-center w-full h-40 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 relative overflow-hidden">
                            <div class="main-photo-preview flex flex-col items-center justify-center pt-5 pb-6 z-10 w-full h-full">
                                <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>
                                <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Cliquez pour télécharger</span> ou glissez-déposez</p>
                                <p class="text-xs text-gray-500">PNG, JPG ou JPEG</p>
                            </div>
                            <img id="mainPhotoPreview" class="absolute inset-0 w-full h-full object-contain hidden" src="./upload/<?=$v['photos']?>"/>
                            <input id="mainPhoto" type="file" class="hidden" name="image_file" accept="image/*" onchange="previewMainImage(this)" />
                        </label>
                    </div>
                </div>

                <!-- Bouton Commander -->
                <div class="flex justify-center mt-6">
                    <button type="submit" name="sub" class="bg-[#6A664B] text-white font-bold py-3 px-6 rounded-lg transition-colors duration-300 hover:text-[#45a049] w-full md:w-[200px]">Modifier</button>
                </div>
            </form>
        </div>
    </section>

    <script>
        // Fonction pour prévisualiser l'image principale
        function previewMainImage(input) {
            const preview = document.getElementById('mainPhotoPreview');
            const uploadContainer = input.parentElement.querySelector('.main-photo-preview');

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                    uploadContainer.classList.add('hidden');
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        // Fonction pour prévisualiser les images de format
        function previewFormatImage(input, previewId) {
            const preview = document.getElementById(previewId);
            const uploadContainer = input.parentElement.querySelector('.format-preview');

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                    uploadContainer.classList.add('hidden');
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <!-- Fin formulaire de création de produit -->
</body>

</html>