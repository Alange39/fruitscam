<?php
session_start();
if (!isset($_SESSION['admin_nom'])) {
    header('location:index.php');
    die;
}
if (isset($_POST['sub'])) {
    
    include_once "connect_to_bd.php";
    if (isset($_FILES['image_file'])) {
        $name = $_FILES['image_file']['name'];
        $tmpname = $_FILES['image_file']['tmp_name'];
    }

    //recuperation des informations a stocker dans la bd

    $nom = $_POST['nom'];
    $prix = $_POST['prix'];
    $descript = $_POST['descriptions'];
    $ingeredient = $_POST['ingredients'];
    $quantite = $_POST['quant'];
    $categ = $_POST['categ'];
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
        $stmt = $conn->prepare("INSERT INTO produits (photos,noms,prix,descriptions,ingredient,quantites,categoties) VALUES (?,?,?,?,?,?,?)");
        $stmt->execute(array($filename, $nom, $prix, $descript, $ingeredient, $quantite, $categ));
    } catch (PDOException $e) {
        echo "error" . $e->getMessage();
    }
}
?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>

    <form action="" method="post" enctype="multipart/form-data">

        <!-- <input type="file" name="image_file" accept="iamge/*" id="" placeholder="phots du produit"><br> -->


        
        <!-- <input type="text" name="nom" id="" placeholder="nom du produit"><br>
        <input type="number" name="prix" id="" placeholder="prix"><br>
        <input type="text" name="descriptions" id="" placeholder="description"><br>
        <input type="text" name="ingredient" id="" placeholder="ingredients"><br>
        <input type="text" name="quant" id="" placeholder="quantite"><br>
        <input type="submit" value="envoyer" name="sub"><br>
        <input type="text" name="categ" id="" placeholder="categorie du produit">
        
        <div class="flex items-center justify-center w-full">
            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                    </svg>
                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                </div>
                <input id="dropzone-file" type="file" name="image_file" accept="image/*" class="hidden" />
            </label>
        </div>

    </form>
</body> -->

