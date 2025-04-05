<?php    require "connect_to_bd.php";       ?>

<!DOCTYPE html>
 <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>adamin page</title>
  <style>
    #submenu{
      display:none ;
    }
  </style>

</head>
<body class="bg-[url('assets/images/ananas-large.jpg')]">
<?php include 'head.html';?>

          <div class="ml-[970px] text-black pt-[30px]">
            
          <a href="" class=" text-black underline">Ajouter un produit</a>
          <a href="" class="text-black underline pl-[30px]">Ajouter un administrateur</a>

          </div>

    <h1 class="text-3xl text-blue-800 text-center my-[50px]">BIENVENUE CHER ADMIN (E) <br> DANS LA PAGE D'ADMINISTRATION</h1>


    <?php include_once"tableau.php";?>
<script src="assets/js/ad_menu.js"></script>
</body>

</html>