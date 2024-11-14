<?php

/* Template Name: Contact */
?>

<?php
    get_header(); // Inclure l'en-tête de votre site WordPress
?>

<div class="contact-page">
<h1 class="h1-Contact">Nous rejoindre</h1>

<div class="separation-contact">

<div class="contact-courriel">
  <h class="h2-Contact">Par courriel</h>
  <h3 class="h3-Contact">Envoyez-nous vos questions ou vos intérogations</h3>
  <form class="form-contact">
 
    <div class="inputBox">
      <span> Prénom</span>
      <input type="text" name="Prénom" required="required">
    </div>
    <div class="inputBox">
      <span> Nom</span>
      <input type="text" name="Nom" required="required">
    </div>
    <div class="inputBox">
      <span> Téléphone</span>
      <input type="text" name="Téléphone" required="required">
    </div>
    <div class="inputBox">
      <span> Courriel</span>
      <input type="text" name="Courriel" required="required">
    </div>
    <div class="inputBox message">
      <span> Message</span>
      <textarea required="required" cols="30" rows="10"></textarea>
    </div>
    <div class="inputBox-bouton">
      <input type="submit" class="form-bouton" value="Envoyer"> <!-- Pas besoin de name ici -->
  </div>

  </form>
</div>

<div class="ligne"></div>

<div class="contact-information">

  <div class="conctact-telephone">
    <h class="h2-Contact">Par téléphone</h>
    <h3 class="h3-Contact">Appelex nous pour avoir une réponse direct lors des heures d'ouverture</h3>
      <div class="contact-information-icon">
        <span class="material-symbols-outlined" style="font-size: clamp(1.25rem, 1.184rem + 0.316vw, 1.563rem);">call</span> 
        <span class="span-texte">514-254-7131</span>
      </div>
  </div>

  <div class="conctact-adresse">
    <h class="h2-Contact">Adresse</h>
    <h3 class="h3-Contact">Venez visiter l'école en personne</h3>
      <div class="contact-information-icon">
        <span class="material-symbols-outlined" style="font-size: clamp(1.25rem, 1.184rem + 0.316vw, 1.563rem);">location_on</span>
        <span class="span-texte">3800 R. Sherbrooke E, Montréal, QC H1X 2A2</span>
      </div>
  </div>

  <div class="conctact-reseaux">
    <h class="h2-Contact">Nos réseaux</h>
    <h3 class="h3-Contact">Venez voir nos projets</h3>
      <div class="contact-information-icon">

        <a href="https://www.behance.net/departement_tim" target="_blank" rel="noopener noreferrer">
          <div class="icon-reseau">
            <svg class="icon-reseau-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M232 237.2c31.8-15.2 48.4-38.2 48.4-74 0-70.6-52.6-87.8-113.3-87.8H0v354.4h171.8c64.4 0 124.9-30.9 124.9-102.9 0-44.5-21.1-77.4-64.7-89.7zM77.9 135.9H151c28.1 0 53.4 7.9 53.4 40.5 0 30.1-19.7 42.2-47.5 42.2h-79v-82.7zm83.3 233.7H77.9V272h84.9c34.3 0 56 14.3 56 50.6 0 35.8-25.9 47-57.6 47zm358.5-240.7H376V94h143.7v34.9zM576 305.2c0-75.9-44.4-139.2-124.9-139.2-78.2 0-131.3 58.8-131.3 135.8 0 79.9 50.3 134.7 131.3 134.7 61.3 0 101-27.6 120.1-86.3H509c-6.7 21.9-34.3 33.5-55.7 33.5-41.3 0-63-24.2-63-65.3h185.1c.3-4.2 .6-8.7 .6-13.2zM390.4 274c2.3-33.7 24.7-54.8 58.5-54.8 35.4 0 53.2 20.8 56.2 54.8H390.4z"/></svg>
          </div>
        </a>

        <a href="https://youtube.com/@timaisonneuve?si=PbmyVEXGy_qCWzUB" target="_blank" rel="noopener noreferrer">
          <div class="icon-reseau">
            <svg class="icon-reseau-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"/></svg>
          </div>
        </a>

        <a href="https://www.cmaisonneuve.qc.ca/programme/integration-multimedia/" target="_blank" rel="noopener noreferrer">
          <div class="icon-reseau">
            <svg class="icon-reseau-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M352 256c0 22.2-1.2 43.6-3.3 64l-185.3 0c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64l185.3 0c2.2 20.4 3.3 41.8 3.3 64zm28.8-64l123.1 0c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64l-123.1 0c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32l-116.7 0c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0l-176.6 0c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 20.9 58.2 27 94.7zm-209 0L18.6 160C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192l123.1 0c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64L8.1 320C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6l176.6 0c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352l116.7 0zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6l116.7 0z"/>
            </svg>
          </div>
      </a>
        
        
        <a href="https://www.instagram.com/maisonneuvetim/" target="_blank" rel="noopener noreferrer">
          <div class="icon-reseau">
              <svg class="icon-reseau-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                  <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
              </svg>
          </div>
      </a>
     
      

      <a href="https://www.facebook.com/maisonneuvetim/" target="_blank" rel="noopener noreferrer">
        <div class="icon-reseau">
          <svg class="icon-reseau-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"/></svg>
        </div>
      </a>

      

      </div>
  </div>

</div>
</div>
</div>

<?php get_footer(); // Inclure le pied de page de votre site WordPress ?>