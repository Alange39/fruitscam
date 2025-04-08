<?php

// D'abord, les namespaces et requires pour PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Si vous utilisez Composer
require 'vendor/autoload.php';
// Définir les variables pour stocker les messages d'erreur et de succès
$nameErr = $emailErr = $subjectErr = $messageErr = "";
$successMsg = "";
$errorMsg = "";

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isValid = true;
    
    // Valider le nom
    if (empty($_POST["name"])) {
        $nameErr = "Le nom est requis";
        $isValid = false;
    } else {
        $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    }
    
    // Valider l'email
    if (empty($_POST["email"])) {
        $emailErr = "L'email est requis";
        $isValid = false;
    } else {
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Format d'email invalide";
            $isValid = false;
        }
    }
    
    
    // Valider le message
    if (empty($_POST["message"])) {
        $messageErr = "Le message est requis";
        $isValid = false;
    } else {
        $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
        
    }
    
    // Si toutes les validations sont passées, envoyer l'email
    if ($isValid) {
        $mail = new PHPMailer(true);

        try{
            //configuration du serveur
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com'; 
            $mail->SMTPAuth   = true;
            $mail->Username   = 'francoiseneuillyngahbessala@gmail.com'; //email
            $mail->Password   = 'kctv ywwc ydjl hvph'; //mot de passe d'application
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;
                    // Destinataires
                    $mail->setFrom($email, $name);
                    $mail->addAddress('francoiseneuillyngahbessala@gmail.com'); // Email de destination
                    $mail->addReplyTo($email, $name);
                    
                    // Contenu
                    $mail->isHTML(true);
                    $mail->Subject = "Nouveau message du la page contact fruitscam de $name";           
                    $mail->Body    = "
                    <html>
                    <head>
                        <title>Nouveau message de la page contact de fruitscam</title>
                    </head>
                    <body>
                        <h2>Nouveau message de la page  contact de fruitscam</h2>
                        <p><strong>Nom:</strong> $name</p>
                        <p><strong>Email:</strong> $email</p>
                        <p><strong>Message:</strong></p>
                        <p>" . nl2br($message) . "</p>
                    </body>
                    </html>
                    ";
                    
                    $mail->send();
                    $successMsg = "Votre message a été envoyé avec succès. Nous vous répondrons bientôt !";
                    // Vider les champs du formulaire
                    $_POST = array();
                } catch (Exception $e) {
                    $errorMsg = "Une erreur s'est produite lors de l'envoi du message: " . $mail->ErrorInfo;
                }
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
<?php include 'head.php'; ?>

<?php if (!empty($successMsg)): ?>
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
                    <p><?php echo $successMsg; ?></p>
                </div>
            <?php endif; ?>
            
            <?php if (!empty($errorMsg)): ?>
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6" role="alert">
                    <p><?php echo $errorMsg; ?></p>
                </div>
            <?php endif; ?>

<!-- Debut formulaire contact-->
<section class="w-4/5 max-w-[1200px] mx-auto p-8">
    <div class="flex flex-col md:flex-row bg-white rounded-2xl shadow-md overflow-hidden">
        <div class="flex-1 max-w-full md:max-w-[50%] p-8 flex flex-col">
            <h2 class="mb-6 text-gray-800 text-xl font-bold">Contactez-nous</h2>
            <form class="flex flex-col h-full" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="mb-4">
                    <label for="name" class="block mb-2 font-bold">Nom</label>
                    <input type="text" id="name" name="name" placeholder="Entrez votre nom" required
                        class="w-full p-2 border border-gray-300 rounded-md" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
                        <?php if (!empty($nameErr)): ?>
                            <p class="text-red-500 text-xs mt-1"><?php echo $nameErr; ?></p>
                            <?php endif; ?>
                </div>
                <div class="mb-4">
                    <label for="email" class="block mb-2 font-bold">Email</label>
                    <input type="email" id="email" name="email" placeholder="Entrez votre email" required
                        class="w-full p-2 border border-gray-300 rounded-md"
                        value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                    <?php if (!empty($emailErr)): ?>
                        <p class="text-red-500 text-xs mt-1"><?php echo $emailErr; ?></p>
                    <?php endif; ?>
                </div>
                <div class="mb-4">
                    <label for="message" class="block mb-2 font-bold">Question</label>
                    <textarea id="message" name="message" placeholder="Entrez votre question ou message" required
                        class="w-full p-2 border border-gray-300 rounded-md h-24 resize-y"></textarea>
                        <?php if (!empty($messageErr)): ?>
                        <p class="text-red-500 text-xs mt-1"><?php echo $messageErr; ?></p>
                    <?php endif; ?>   
                </div>
                <button type="submit" class="inline-block bg-[#6A664B] text-white border-none py-2 px-2 cursor-pointer rounded-lg transition-colors duration-300 hover:text-[#45a049] w-[150px]">Envoyer</button>
            </form>
        </div>
        <div class="flex-1 max-w-full md:max-w-[50%] flex">
            <img src="images/notebook-1130742_640.jpg" alt="Contact Image" 
                class="w-full h-full object-cover rounded-md">
        </div>
    </div>
</section>
<!-- Fin formulaire contact-->

<!-- Debut plan de localisation -->
<section class="w-4/5 max-w-[1200px] mx-auto p-8">
    <div class="rounded-2xl shadow-md relative overflow-hidden h-[400px]">
        <img src="images/plan.jpg" alt="Plan de localisation" class="w-full h-full object-cover block">
    </div>
</section>
<!-- Fin plan de localisation -->

<!-- Section contactez-nous -->
<section class="p-8 bg-white">
    <div class="text-left max-w-[800px] mx-auto text-xs">
        <h2 class="text-center mb-6 text-gray-800 text-2xl">Besoin d'aide ? Contactez notre service client</h2>
        <p>Nos horaires d'ouverture: Lundi - Vendredi: 9h00 - 16h00</p>
        <p>Samedi: 9h00 - 12h00 | Dimanche: Fermé</p>
        <p>Téléphone: +237 650 000 000 | Email: Fruitscam@gmail.com</p>
        <p>Nous sommes à votre disposition pour répondre à toutes vos questions.</p>
    </div>
</section>

<?php include 'footer.php'; ?>  
</body>
</html>