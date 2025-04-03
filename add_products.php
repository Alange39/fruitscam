<?php
include_once "connect_to_bd.php" ;
if (isset($_FILES['image_file'])) {
    $name=$_FILES['image_file']['name'];
    $tmpname=$_FILES['image_file']['tmp_name'];
}
if (isset($_POST['sub'])) {

  //recuperation des informations a stocker dans la bd

    $nom =$_POST['nom'];
    $prix=$_POST['prix'];
    $descript=$_POST['descriptions'];
    $ingeredient=$_POST['ingredient'];
    $quantite = $_POST['quant'];
    $categ = $_POST['categ'];
    $tabextention=explode('.',$name);
    $extention= strtolower(end($tabextention));
    
    //extention utilisé
    $extentionutilise=['jpg','png','jpeg','gif'] ;
    
    //verivier si le fichier est une image
    
    if (in_array($extention,$extentionutilise)) {
        $uniqname=uniqid("",true);
        $filename=$uniqname.'.'.$extention;
        
        //envoyer la photo charger dans le dossier upload
        move_uploaded_file($tmpname,'./upload/'.$filename);
    }
 
    //insertion des information dans la bd
    try {
        $stmt= $conn->prepare("INSERT INTO produits (photos,noms,prix,descriptions,ingredient,quantites,categories) VALUES (?,?,?,?,?,?,?)");
        $stmt->execute(array($filename,$nom,$prix,$descript,$ingeredient,$quantite,$categ));
    } catch (PDOException $e) {
        echo "error". $e->getMessage();
    }
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
    <form action="" method="post" enctype="multipart/form-data">

        <input type="file" name="image_file" accept="iamge/*" id="" placeholder="phots du produit"><br>
        <input type="text" name="nom" id="" placeholder="nom du produit"><br>
        <input type="number" name="prix" id="" placeholder="prix"><br>
        <input type="text" name="descriptions" id="" placeholder="description"><br>
        <input type="text" name="ingredient" id="" placeholder="ingredients"><br>
        <input type="text" name="quant" id="" placeholder="quantite"><br>
        <input type="submit" value="envoyer" name="sub"><br>
        <input type="text" name="categ" id="" placeholder="categorie du produit">

    </form>
</body>

</html>