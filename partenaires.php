<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partenaires - FruitsCam</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <?php include_once "head.php"; ?>

    <header class="text-center bg-white py-8">
        <h1 class="text-4xl font-semibold text-green-600">Partenaires</h1>
    </header>

    <main class="max-w-6xl mx-auto p-8">
        <section class="flex items-center bg-white p-6 mb-8 rounded-lg shadow-lg">
            <img src="assets/images/jagora.jpg" alt="Logo Jagora University" class="w-36 mr-8">
            <p class="text-lg text-gray-800 leading-relaxed">
                L’Université Jagora est un établissement d’enseignement supérieur spécialisé en informatique et technologies numériques. Elle accompagne Fruitscam depuis bientôt 3 ans.
            </p>
        </section>

        <section class="flex items-center bg-white p-6 mb-8 rounded-lg shadow-lg">
            <img src="assets/images/eclee.jpg" alt="Logo ECLEE" class="w-36 mr-8">
            <p class="text-lg text-gray-800 leading-relaxed">
                ECLEE est un centre de formation Européen basé aux États-Unis et en France spécialisé dans l’écriture de programmes professionnels et académiques.
            </p>
        </section>

        <section class="flex items-center bg-white p-6 mb-8 rounded-lg shadow-lg">
            <img src="assets/images/fadev.jpg" alt="Logo FADEV" class="w-36 mr-8">
            <p class="text-lg text-gray-800 leading-relaxed">
                L’entreprise FADEV est une société d’investissement basée à Montreuil en France, celle-ci a contribué au développement de la société Fruitscam.
            </p>
        </section>
    </main>

    <?php require_once 'footer.php'; ?>

    <?php include_once "script.php"; ?>
</body>

</html>
