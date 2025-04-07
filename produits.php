<?php
include_once "connect_to_bd.php";

// Récupérer les produits stockés dans la BD
try {
    $stmt = $conn->prepare("SELECT * FROM produits");
    $stmt->execute();
} catch (PDOException $e) {
    echo "error" . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collection de Jus</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</head>

<body class="font-sans bg-gray-50 text-gray-800">

    <?php include_once "her.php"; ?>

    <!-- Bannière principale -->
    <section class="bg-[url('./img/Image.png')] bg-cover bg-center h-screen relative">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center text-white text-center px-4">
            <div>
                <h1 class="text-4xl sm:text-5xl font-extrabold mb-4">Découvrez notre collection de saveurs</h1>
                <h3 class="text-lg sm:text-xl font-medium">Alors, laquelle de nos délicieuses saveurs vous fera craquer ?</h3>
            </div>
        </div>
    </section>

    <!-- Section Produits -->
    <section class="px-4 py-10 sm:px-6 md:px-10 lg:px-20">
        <h2 class="text-[#F3C63F] text-2xl text-center font-bold mb-10">Collection de jus</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 place-items-center">
            <?php foreach ($stmt->fetchAll() as $k => $v) { ?>
                <div class="border border-zinc-200 rounded-xl p-4 w-[90%] max-w-[300px] bg-white shadow-md transition hover:shadow-lg">
                    <div class="overflow-hidden rounded-md">
                        <img src="upload/<?= $v["photos"] ?>" alt="<?= $v["noms"] ?>" class="w-full h-[200px] object-cover">
                    </div>
                    <h4 class="text-xl font-bold mt-3"><?= $v["noms"] ?></h4>
                    <h5 class="text-zinc-500 font-light mt-1">Prix : <?= $v["prix"] ?>f</h5>
                    <a href="c_produit.php?id=<?= $v["id"] ?>">
                        <button class="mt-3 w-full border border-zinc-300 text-zinc-700 hover:bg-zinc-100 rounded py-1 transition">Voir plus</button>
                    </a>
                </div>
            <?php } ?>
        </div>
    </section>

    <?php include_once "footer.php"; ?>
</body>

</html>
