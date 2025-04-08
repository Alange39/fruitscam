
<?php
session_start();

if (!isset($_SESSION['admin_nom'])) {
header('location:index.php');
die;
}
include_once "connect_to_bd.php";

$id = $_GET["id"];
try {
    $stmt = $conn->prepare("SELECT * FROM produits WHERE id=$id");
    $stmt->execute();
} catch (PDOException $e) {
    echo "error";
}

if (isset($_POST['sub'])) {
    try {
        $stm = $conn->prepare("DELETE FROM produits WHERE id=?");
        $stm->execute(array($id));
    } catch (PDOException $e) {
        echo "error" . $e->getMessage();
    }
}
 if (isset($_POST["res"])) {
    header("location: tableau.php");
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
          <?php include_once"head.php";?>
    <?php
    foreach ($stmt->fetchAll() as $k => $v) {
        # code...
    }
    ?>
    <div class="border-[1.5px] border-solid border-zinc-100 inline-block rounded-[10px] p-2">
        <p class="text-red-500">voulez vous vraiment supprimer ce produit?</p>
        <div>
            <img src="./upload/<?= $v["photos"] ?>" alt="" class="w-[300px] h-[300px]">
        </div>
        <h4 class="text-xl font-700"><?= $v["noms"] ?></h4>
        <h5 class="text-zinc-500 font-200">prix: 1500f</h5>
        <form action="" method="post" class="flex justify-around">
            <input type="submit" name="sub" class=" border-1 border-solid border-zinc-200 text-zinc-500 mx-2 rounded-[5px]" value="supprimer">
            <input type="submit" name="res" class="border-1 border-solid border-zinc-200 text-zinc-500 mx-2 rounded-[5px]" value="annuler">
        </form>
    </div>
</body>

</html>