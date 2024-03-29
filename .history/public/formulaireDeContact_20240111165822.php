<?php include("head.php") ?>
    <meta name="description" content="Vous souhaitez organiser un séjour au Parc d'Attractions le Pal à plusieurs, possibilité de louer nos 3 caravanes placées côte à côte.">
    <title>Réservation hébergements - Le Pal</title>
</head>

<?php include("header.php") ?>

<?php
// Clé privée reCAPTCHA 
$config = include('./config/config.php');

// Utiliser la clé secrète reCAPTCHA
$secretKey = $config['recaptcha_secret_key'];

// Initialiser le message d'erreur
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifier que tous les champs sont remplis
    if (
        isset($_POST["firstName"]) &&
        isset($_POST["lastName"]) &&
        isset($_POST["phoneNumber"]) &&
        isset($_POST["email"]) &&
        isset($_POST["message"]) &&
        isset($_POST['g-recaptcha-response'])
    ) {
        // Validation du CAPTCHA
        $captchaResponse = $_POST['g-recaptcha-response'];
        $ip = $_SERVER['REMOTE_ADDR'];
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = array(
            'secret' => $secretKey,
            'response' => $captchaResponse,
            'remoteip' => $ip
        );
        $options = array(
            'http' => array(
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
            )
        );
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $response = json_decode($result, true);

        if ($response['success']) {
            // Le CAPTCHA est valide = traitement du formulaire
            $message = "Réservation de caravanes au Parc d'Attractions Le Pal :\n" .
                "Nom : " . htmlspecialchars($_POST["firstName"]) . "\n" .
                "Prénom : " . htmlspecialchars($_POST["lastName"]) . "\n" .
                "Téléphone : " . htmlspecialchars($_POST["phoneNumber"]) . "\n" .
                "Email : " . htmlspecialchars($_POST["email"]) . "\n" .
                "Message : " . htmlspecialchars($_POST["message"]);
               
                $object = "Vous avez un nouveau Message d'un client";
                //$retour = mail("postmaster@lescaravanesdelabesbre.fr", "Nouveau Message", $message, "From: contact@Lescaravanesdelabesbre.fr" . "\r\n" . "Reply-to: " . htmlspecialchars($_POST["email"]));
                $retour = mail("michel.hof@hotmail.fr", "Nouveau Message", $message, "From: contact@Lescaravanesdelabesbre.fr" . "\r\n" . "Reply-to: " . htmlspecialchars($_POST["email"]));

            if ($retour) {
                // Redirection vers une page de confirmation après la soumission du formulaire
                echo '<script>window.location.replace("confirmationContactRenseignements.php");</script>';
                exit();
            } else {
                $error_message = "Une erreur est survenue lors de l'envoi du formulaire. Veuillez réessayer.";
            }
        } else {
            // Le CAPTCHA est invalide, affichez un message d'erreur
            $error_message = "CAPTCHA invalide, veuillez réessayer.";
        }
    } else {
        // Les champs sont manquants, afficher un message d'erreur
        $error_message = "Veuillez remplir tous les champs du formulaire.";
    }
}
?>

    
 
<!-- HTML -->
<h4 class="m-5 text-center border border-3 rounded text-white p-2 display-6 h4Index" id="contact"><strong>NOUS CONTACTER</strong></h4>

<form class="needs-validation" id="myForm" onsubmit="return validateForm()" novalidate action="#" method="POST">
    <fieldset class="mb-5 ms-2 me-2">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label for="firstName" class="form-label">Prénom</label>
                            <input name="firstName" type="text" id="firstName" class="form-control" placeholder="Prénom" required>
                            <div class="invalid-feedback">
                                Veuillez saisir votre prénom.
                            </div>
                        </div>
                    </div>
                    <div class="col">
    <div class="form-outline mb-4">
        <label for="phoneNumber" class="form-label">Numéro de Téléphone</label>
        <input name="phoneNumber" type="tel" id="phoneNumber" class="form-control" placeholder="Téléphone" pattern="[0-9]{15,}" required>
        <div class="invalid-feedback">
            Veuillez saisir un numéro de téléphone valide (au moins 10 chiffres).
        </div>
    </div>
</div>
                    
                <div class="form-outline mb-4">
                    <label for="email" class="form-label">Adresse Email</label>
                    <div class="input-group has-validation">
                        <input name="email" type="email" id="email" class="form-control" placeholder="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                        <div class="invalid-feedback">
                            Veuillez saisir une adresse email valide.
                        </div>
                    </div>
                </div>
                <div class="form-floating">
                    <textarea name="message" class="form-control" id="message" required></textarea>
                    <label for="message">Message</label>
                    <div class="invalid-feedback">
                        Veuillez saisir votre message.
                    </div>
                </div>
                  <!-- Case à cocher RGPD -->
    <div class="form-check mb-4 mt-3">
        <input class="form-check-input" type="checkbox" id="rgpdCheckbox">
        <label class="form-check-label" for="rgpdCheckbox">
            J'accepte que mes données personnelles soient traitées conformément à la politique de confidentialité.
        </label>
        <div class="invalid-feedback" id="rgpdError" style="display: none;">
            Vous devez accepter la politique de confidentialité.
        </div>
    </div>
                <div class="g-recaptcha m-4" data-sitekey="6Ld72FwnAAAAABXBamvH-_h6-dyX_phTGFlAWCgR"></div>
                <div id="error-message" class="text-center text-danger mb-4"></div>
                
                <button type="submit" id="send-data" class="btn btn-primary btn-block mb-4">
    Envoyer
</button>


            </div>
        </div>
    </fieldset>
</form>



    <?php include("footer.php") ?>

</body>

</html>