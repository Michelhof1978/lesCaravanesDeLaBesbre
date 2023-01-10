<?php include("header.php") ?>




<section>
  <!--Main layout-->
  <main class="mt-3">
    <div class="container">
      <!--Section: Content-->
      <section>
        <div class="row">
          <div class="col-md-6 gx-5  pe-5 ">
            <div class="bg-image  ripple shadow-2-strong rounded-5 " data-mdb-ripple-color="light">
              <img src="../images/banner3.png" class="img-fluid h-350 w-250 bg-image hover-zoom" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
          </div>

          <div class="col-md-6 gx-5 mb-4 ">
            <h4 class="pt-4"><strong>Facilis consequatur eligendi</strong></h4>
            <p class="text-muted">
            Goûtez aux plaisirs du Camping sur un site exceptionnel, pleine nature, dans un cadre ombragé, de verdure et de calme situé au bord d’une rivière à Dompierre-sur-Besbre, proche des commerces. A proximité du Parc d'Attraction *le PAL* à moins de 10 minutes. Laissez-vous enchanter par notre ambiance caravane. Celles-ci sont en place du 04/07 au 28/08/2022 prévu pour 4 personnes (2 adultes, 2 enfants) tout confort et toutes équipées. Epicerie de base fournie (café, sucre, sel, poivre, huile, etc..). 
            Isabelle et son équipe se tiennent à votre disposition pour faire de votre séjour un moment inoubliable.
            </p>
            
            
          </div>
        </div>
      </section>
      <!--Section: Content-->

      <section class="embed-responsive embed-responsive-21by9 row ">
<iframe class="embed-responsive-item align-items-center col videoPal1"width="490" height="300" src="https://www.youtube.com/embed/PWIjFCqQw78" title="YouTube video player"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   <h3 class="achatBillet col"> <a class="text-dark" href="https://www.lepal.com/">Billeterie</a></h3>
    <iframe class="embed-responsive-item align-items-center col videoPal2 "width="490" height="300" src="https://www.youtube.com/embed/m7PrIAN_Krs" title="YouTube video player"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</section>


     
      <!--Section: Content-->
      <section class="text-center clear pt-5">
        <h4 class="mb-5"><strong>NOS PROPOSITIONS DE LOGEMENTS</strong></h4>

        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4 ">
            <div class="card ">
              <div class="bg-image hover-overlay ripple " data-mdb-ripple-color="light">
                <img src="../images/caravane1.jpg" class="img-fluid " />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Caravane BIG</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the
                  card's content.
                </p>
                <a href="#!" class="btn btn-primary">Description</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="../images/caravane2.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Caravane FLO</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the
                  card's content.
                </p>
                <a href="#!" class="btn btn-primary">Description</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="../images/caravane3.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Caravane OLI</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the
                  card's content.
                </p>
                <a href="#!" class="btn btn-primary">Description</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Section: Content-->

      <hr class="my-5" />

      <!--Section: Content-->

<!--FormulaireDeContact-->
      <?php 
if (isset($_POST["message"])) {
  $message = "Message envoye de :
  Prénom : ".$_POST["Prénom"]."
  Nom : ".$_POST["nom"]."
  Téléphone : ".$_POST["Téléphone"]."
  Email : ".$_POST["email"]."
  Objet : ".$_POST["objet"]."
  Message : ".$_POST["message"];

$retour = mail("isabelle.deschins@sfr.fr", $_POST["objet"], $message,"From:contact@cvmichel-hoffmann.fr" . "\r\n" . "Reply-to:" . $_POST["email"]);

if ($retour) {
  echo "<p>L'email a bien été envoyé</p>";
}
}
?>

      <form action="#" method="POST">
      <section class="mb-5">
        <h4 class="mb-5 text-center git push --set-upstream origin" id="contact"><strong>NOUS CONTACTER</strong></h4>

       
       
       
        <div class="row d-flex justify-content-center">
          <div class="col-md-6">
          <form>
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row mb-4">

                <div class="col">
                  <div class="form-outline">
                    <input type="text" id="form3Example1" class="form-control"placeholder="Prénom" />
                    <label class="form-label" for="form3Example1"></label>
                  </div>
                </div>

                <div class="col">
                  <div class="form-outline">
                    <input type="text" id="form3Example2" class="form-control"placeholder="Nom" />
                    <label class="form-label" for="form3Example2"></label>
                  </div>
                </div>
A
                <div class="col">
                  <div class="form-outline">
                    <input type="tel" id="form3Example3" class="form-control" placeholder="Télèphone" />
                    <label class="form-label" for="form3Example3"></label>
                  </div>
                </div>
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" id="form3Example4" class="form-control " placeholder="Email" />
                <label class="form-label" for="form3Example4"></label>
              </div>

              
              
             
              <div class="form-outline mb-4">
              <input type="objet" id="form3Example4" class="form-control p-9" placeholder="Objet" />
              <label class="form-label" for="form3Example4">Objet:</label>
                   <select clas name="objet" id="objet">
                     <option>Renseignements</option>
                    <option>Résérvation</option>
             </div>
             

              <div class="form-floating ">
                <textarea class="form-control " placeholder="Leave a comment here" id="floatingTextarea"></textarea>
               <label for="floatingTextarea">Message</label>
            </div>

              

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4 mt-5">
                Envoyez
              </button>

              
            </form>
          </div>
        </div>
        <!--EndFormulaireDeContact-->

      </section>
      <!--Section: Content-->
    </div>
  </main>
  <!--Main layout-->
  </section>
   
<!--
<section class="offre">
    <h2>NOS OFFRES</h2>
    <div class="wrapper">
        <article style="background-image: url(../images/caravane1.jpg); background-size: 100% 100%;
        background-repeat: no-repeat;background-position: 140px ">
            <div class="overlay">
                <h4>Caravanes 1</h4>
                <p><small> commerce et Parc d’Attraction et Animalier le PAL, les caravanes sont proposées avec le auvent et toutes équipées, épicerie de base fournis ( huile , sel , poivre , café , papier WC etc).</small></p>
                <a href="#" class="button2">Réservez !</a>
            </div>
            
        </article>

        <article style="background-image: url(../images/caravane2.jpg);background-size: 100% 100%;
        background-repeat: no-repeat; background-position: 150px">
            <div class="overlay">
                <h4>Caravanes 2</h4>
                <p><small> commerce et Parc d’Attraction et Animalier le PAL, les caravanes sont proposées avec le auvent et toutes équipées, épicerie de base fournis ( huile , sel , poivre , café , papier WC etc).</small></p>
                <a href="#" class="button2">Réservez !</a>
            </div>
            
        </article>

        <article style="background-image: url(../images/caravane3.jpg);background-size: 100% 100%;
       background-position: 50px ">
            <div class="overlay">
                <h4>Caravanes 3</h4>
                <p><small> commerce et Parc d’Attraction et Animalier le PAL, les caravanes sont proposées avec le auvent et toutes équipées, épicerie de base fournis ( huile , sel , poivre , café , papier WC etc).</small></p>
                <a href="#" class="button2">Réservez !</a>
            </div>
            
            
        </article>

        
    </div>-->

<section class="">
<p class="campagne">VENEZ DECOUVRIR LA BEAUTE DE LA CAMPAGNE</p>

<span id="sl_play" class="sl_command"></span>
<span id="sl_pause" class="sl_command"></span>
 
<span id="sl_i1" class="sl_command sl_i"></span>
<span id="sl_i2" class="sl_command sl_i"></span>
<span id="sl_i3" class="sl_command sl_i"></span>
<span id="sl_i4" class="sl_command sl_i"></span>
<section id="slideshow">

    <a class="play_commands pause" href="#sl_pause" title="Maintain paused">Pause</a>
    <a class="play_commands play" href="#sl_play" title="Play the animation">Play</a>

   
	<div class="container">
		<div class="c_slider"></div>
		<div class="slider">
			<figure>
				<img src="../images/oies.jpg" alt="" width="640" height="310" />
				<figcaption>Ballades au bord des étangs</figcaption>

			</figure><!--
			--><figure>
				<img src="../images/tournesol.jpg" alt="" width="640" height="310" />
				<figcaption>Champs de tournesols</figcaption>
			</figure><!--
			--><figure>
				<img src="../images/poule.jpg" alt="" width="640" height="310" />
				<figcaption>Fermes Pédagogiques</figcaption>

			</figure><!--
			--><figure>
				<img src="../images/nature.jpg" alt="" width="640" height="310" />
				<figcaption>Se promener dans la nature</figcaption>
			</figure>
		</div>
	</div>
		
	<span id="timeline"></span>

    <ul class="dots_commands"><!--
	--><li><a title="Afficher la slide 1" href="#sl_i1">Slide 1</a></li><!--
	--><li><a title="Afficher la slide 2" href="#sl_i2">Slide 2</a></li><!--
	--><li><a title="Afficher la slide 3" href="#sl_i3">Slide 3</a></li><!--
	--><li><a title="Afficher la slide 4" href="#sl_i4">Slide 4</a></li>
</ul>

</section>

<?php include("footer.php") ?>

