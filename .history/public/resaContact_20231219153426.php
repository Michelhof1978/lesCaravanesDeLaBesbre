<!DOCTYPE html>
<html lang="fr">

<head>
<?php include("head.php") ?>
    <meta name="description" content="Vous souhaitez organiser un séjour au Parc d'Attractions le Pal à plusieurs, possibilité de louer nos 3 caravanes placées côte à côte.">
    <title>Camping Dompierre Sur Besbre Proche Du Pal</title>  
</head>

<?php include("header.php") ?>

<?php include_once('../config/config.php') ?>

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

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-M3CJ6F224B"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-M3CJ6F224B');
    </script>
    <!-- Google tag (gtag.js) -->



    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-59DVV3P');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Google Analytics -->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', '32-930029-2', 'auto'); //Id du site par rapport à google analytics, bien mettre à ce format
        ga('send', 'pageview');
    </script>

    <script>
        window.ga = window.ga || function() {
            (ga.q = ga.q || []).push(arguments)
        };
        ga.l = +new Date;
        ga('create', '32-930029-2', 'auto'); //id du site par rapport à google, toujours le mettre à ce format 
        ga('send', 'pageview');
    </script>

    <script async src='https://www.google-analytics.com/analytics.js'></script>

    <!-- End Google Analytics -->

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-59DVV3P');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Google Analytics -->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', '32-930029-2', 'auto'); //Id du site par rapport à google analytics, bien mettre à ce format
        ga('send', 'pageview');
    </script>

    <script>
        window.ga = window.ga || function() {
            (ga.q = ga.q || []).push(arguments)
        };
        ga.l = +new Date;
        ga('create', '32-930029-2', 'auto'); //id du site par rapport à google, toujours le mettre à ce format 
        ga('send', 'pageview');
    </script>

    <script async src='https://www.google-analytics.com/analytics.js'></script>

    <!-- End Google Analytics -->

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-59DVV3P');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Google Analytics -->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', '32-930029-2', 'auto'); //Id du site par rapport à google analytics, bien mettre à ce format
        ga('send', 'pageview');
    </script>

    <script>
        window.ga = window.ga || function() {
            (ga.q = ga.q || []).push(arguments)
        };
        ga.l = +new Date;
        ga('create', '32-930029-2', 'auto'); //id du site par rapport à google, toujours le mettre à ce format 
        ga('send', 'pageview');
    </script>

    <script async src='https://www.google-analytics.com/analytics.js'></script>

    <!-- End Google Analytics -->

    <!-- Balisage JSON-LD généré par l'outil d'aide au balisage de données structurées de Google -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "LocalBusiness",
            "name": "Les Caravanes De La Besbre .",
            "image": "https://lescaravanesdelabesbre.fr/images/banner3.png",
            "telephone": "06 86 41 31 71"
        }
    </script>

    <!-- Google tag (gtag.js) -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-69SWVM55LB"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-69SWVM55LB');
    </script>
