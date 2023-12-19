<!DOCTYPE html>
<html lang="fr">

<head>



    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Vous souhaitez organiser un séjour au Parc d'Attractions le Pal à plusieurs, possibilité de louer nos 3 caravanes placées côte à côte.">
    <meta name="google-site-verification" content="TN5Z1jlnBqKrTXXUwTE4EKfAVepwE9MnH218KsAHNB8" />

    <title>Camping Dompierre Sur Besbre Proche Du Pal</title>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


    <link href="../css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="icon" type="image/x-icon" href="../images/logo.ico">



    
</head>
<?php include("header.php") ?>

<?php
// Clé privée reCAPTCHA 
$secretKey = "6Ld72FwnAAAAAOU6O1IpTRr1yVRvmLrv9T0tYZSJ";

if (isset($_POST["message"]) && isset($_POST['g-recaptcha-response'])) {
    // Vérifier le CAPTCHA
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
        $message = "Message envoyé de :\n" .
            "Nom : " . $_POST["firstName"] . "\n" .
            "Prénom : " . $_POST["lastName"] . "\n" .
            "Téléphone : " . $_POST["phoneNumber"] . "\n" .
            "Email : " . $_POST["email"] . "\n" .
            "Objet : " . $_POST["objet"] . "\n" .
            "Message : " . $_POST["message"];

        $retour = mail("postmaster@lescaravanesdelabesbre.fr", $_POST["objet"], $message, "From: contact@Lescaravanesdelabesbre.fr" . "\r\n" . "Reply-to: " . $_POST["email"]);

        if ($retour) {
            // Redirection vers une page de confirmation après la soumission du formulaire
            echo '<script>window.location.replace("confirmationContactResa.php");</script>'; //Obligé de le faire en js car en php, il ne revnvoi pas a la page de confirmation
            exit();
        } else {
            echo "Une erreur est survenue lors de l'envoi du formulaire. Veuillez réessayer.";
        }
    } else {
        // Le CAPTCHA est invalide, affichez un message d'erreur
        echo "CAPTCHA invalide, veuillez réessayer.";
    }
}
?>


<!-- Le reste de votre code HTML -->


<h4 class="m-5 text-center border border-3 rounded text-white p-2 display-6 h4Index" id="contact"><strong>NOUS CONTACTER</strong></h4>

<form class="needs-validation" id="formulaire" novalidate action="#" method="POST">
    <fieldset class="mb-5 ms-2 me-2">

        <div class="row d-flex justify-content-center">
            <div class="col-md-6">

                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">

                    <div class="col">
                        <div class="form-outline">
                            <input name="firstName" type="text" id="firstName" class="form-control" placeholder="Prénom" required />
                            <label for="firstName" class="form-label"></label>
                            <div class="invalid-feedback">
                                Veuillez saisir votre prénom.
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-outline">
                            <input name="lastName" type="text" id="lastName" class="form-control" placeholder="Nom" required />
                            <label for="lastName" class="form-label"></label>
                            <div class="invalid-feedback">
                                Veuillez saisir votre nom.
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-outline">
                            <input name="phoneNumber" type="tel" id="phoneNumber" class="form-control" placeholder="Téléphone" required />
                            <label for="phoneNumber" class="form-label"></label>
                            <div class="invalid-feedback">
                                Veuillez saisir votre téléphone.
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <div class="input-group has-validation">
                        
                        <input name="email" type="email" id="email" class="form-control " placeholder="Email" required />
                    </div>
                    <label for="email" class="form-label"></label>
                    <div class="invalid-feedback">
                        Veuillez saisir votre Email.
                    </div>
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label round" for="objet">Objet :</label>
                    <select class="form-label" name="objet" id="objet">
                        <option>Renseignements</option>
                        <option>Résérvation</option>
                    </select>
                </div>


                <div class="form-floating ">
                    <textarea name="message" class="form-control " id="message" required></textarea>
                    <label for="message">Message</label>
                    <div class="invalid-feedback">
                        Veuillez saisir votre message.
                    </div>
                </div>

                <div class="g-recaptcha m-4" data-sitekey="6Ld72FwnAAAAABXBamvH-_h6-dyX_phTGFlAWCgR"></div>

                <!-- Submit button -->
                <button type="submit" value="Valider" id="send-data" class="btn btn-primary btn-block mb-4 ">
                    Envoyez
                </button>

            </div>
        </div>
    </fieldset>
</form>

<?php include("footer.php") ?>


<script src="https://www.google.com/recaptcha/api.js" async defer></script>
