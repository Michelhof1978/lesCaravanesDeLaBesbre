//Formulaire de contact

//Restrictions du formulaire de contact
const form = document.getElementById("formulaire");
const firstNameInput = document.getElementById("firstName");
const lastNameInput = document.getElementById("lastName");
const phoneNumberInput = document.getElementById("phoneNumber");
const emailInput = document.getElementById("email");
const messageInput = document.getElementById("message");

form.addEventListener("submit", (e) => {
    e.preventDefault();
    
    if (!isValidLastName(lastNameInput.value)) {
      alert("Le nom doit comporter au moins 3 caractères.");
      return;
    }

    if (!isValidFirstName(firstNameInput.value)) {
        alert("Le prénom doit comporter au moins 3 caractères.");
        return;
      }

      if (!isValidPhoneNumber(phoneNumberInput.value)) {
        alert("Le numéro");
        return;
      }
    
    if (!isValidEmail(emailInput.value)) {
      alert("L'email n'est pas valide.");
      return;
    }
    
    if (!isValidMessage(messageInput.value)) {
      alert("Le message doit comporter au moins 10 caractères.");
      return;
    }
    
    // Envoyer le formulaire si tout est valide
    form.submit();
  });
  
  function isValidName(name) {
    return name.length >= 3;
  }
  
  function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }
  
  function isValidMessage(message) {
    return message.length >= 10;
  }
//Création événement click sur bouton en jquery
$(() => {
    $('#formulaire').submit(function (e){//Création évenement
        e.preventDefault();

    });

$('#send-data').click(function (){//Affichage message quand clic sur bouton
    $('#formulaire').prepend('<p class = confirmation>Votre message est envoyé !</p>');
    
    $(document).ready(() => {//Style pour le message de confirmation
        $('.confirmation').css({'color':'#72EA8B',
                                'text-align':'center',
                                'margin-bottom':'30px', 
                                'font-family': 'Times New Roman, Times, serif',
                                'font-weight': 'bold',
                                'font-size': '20px',
    });//Dans ce code, les propriétés CSS sont passées sous forme d'objet avec des clés correspondant aux noms de propriétés CSS et des valeurs correspondant aux valeurs que vous souhaitez leur attribuer.
    });
});

$('#formulaire').on('click', '.confirmation', function(){
   
    
    console.log('')
    $(this).remove();//Supprime le message de confirmation en faisant un clic dessus
});

});
//FIN Formulaire de contact



//     <div class="container d-flex flex-column min-vh-100 justify-content-center align-items-center">

//     <form class="row g-3 needs-validation" id="lessonForm" novalidate>
//         <div class="col-md-6">
//             <label for="firstname" class="form-label">Prénom</label>
//             <input type="text" class="form-control" name="firstName" id="firstName">
//             <div class="invalid-feedback">
//                 Veuillez saisir votre prénom.
//             </div>
//         </div>
//         <div class="col-md-6">
//             <label for="lastname" class="form-label">Nom</label>
//             <input type="text" class="form-control" name="lastName" id="lastName">
//             <div class="invalid-feedback">
//                 Veuillez saisir votre nom.
//             </div>
//         </div>
//         <div class="col-md-6">
//             <label for="email" class="form-label">E-mail</label>
//             <input type="email" class="form-control" name="email" id="email">
//             <div class="invalid-feedback">
//                 Veuillez saisir votre e-mail.
//             </div>
//         </div>
//         <div class="col-md-6">
//             <label for="phoneNumber" class="form-label">Téléphone</label>
//             <input type="tel" class="form-control" name="phoneNumber" id="phoneNumber">
//             <div class="invalid-feedback">
//                 Veuillez saisir votre numéro de téléphone.
//             </div>
//         </div>
//         <div class="col-md-6">
//             <label for="address" class="form-label">Adresse</label>
//             <input type="text" class="form-control" name="address" id="address">
//             <div class="invalid-feedback">
//                 Veuillez saisir votre adresse.
//             </div>
//         </div>
//         <div class="col-md-6">
//             <label for="city" class="form-label">Ville</label>
//             <select class="form-select" name="city" id="city">
//                 <option selected disabled value="">Choose a city ...</option>
//                 <option>Paris</option>
//                 <option>Lyon</option>
//                 <option>Marseille</option>
//                 <option>Lille</option>
//             </select>
//             <div class="invalid-feedback">
//                 Veuillez choisir une ville.
//             </div>
//         </div>
//         <div class="col-md-6">
//             <label for="postcode" class="form-label">Code postal</label>
//             <input type="text" class="form-control" name="postCode" id="postCode">
//             <div class="invalid-feedback">
//                 Veuillez saisir votre code postal.
//             </div>
//         </div>
//         <div class="col-12">
//             <div class="mb-3 form-check">
//                 <label class="form-check-label" for="conditions">J'accepte les conditions</label>
//                 <input type="checkbox" class="form-check-input" id="conditions" name="conditions">
//                 <div class="invalid-feedback">
//                     Merci de lire les conditions avant de valider le formulaire.
//                 </div>
//             </div>
//         </div>
//         <button type="submit" class="btn btn-primary w-25">Valider</button>
//     </form>
// </div>
    
    //=============== START - DECLARATION DU FORMULAIRE DE CONTACT ===============//    
//     (function() {
//         'use strict'
//         let form = document.getElementById('formulaire');
//         form.addEventListener('submit', function(event) {
            
//             Array.from(form.elements).forEach((input) => {
//                 if (input.type !== "submit") {
//                     if (!validateFields(input)) {
//                         alert('1');
//                         event.preventDefault();
//                         event.stopPropagation();
                        
//                         input.classList.remove("is-valid");
//                         input.classList.add("is-invalid");
//                         input.nextElementSibling.style.display = 'block';
//                     } 
//                     else {
//                       	alert('3')
//                         input.nextElementSibling.style.display = 'none';
//                         input.classList.remove("is-invalid");
//                         input.classList.add("is-valid");
//                     }
//                 }
//             });
//         }, false)
//     })()
//     //=============== END- DECLARATION DU FORMULAIRE DE CONTACT ===============//    
// //------------------------------------------------------------------------------------//
//             //=============== START -  FONCTIONS DE VALIDATION DES CHAMPS DU FORMULAIRE ===============//

// // Validation d'un champ REQUIRED
//     function validateRequired(input) {
//         return !(input.value == null || input.value == "");
//     }

// // Validation du nombre de caractères: MIN MAX
//     function validateLength(input, minLength, maxLength){
//         return !(input.value.length < minLength || input.value.Length > maxLength);
//     }
//     //Validation des caractères: LATIN ET LETTRES
//     function validateText(input){
//         return input.value.match("^[A-Za-z]+$");
//     }

//     function validateEmail(input){
//         let EMAIL = input.value;
//         let POSAT = EMAIL.indexOf("@");
//         let POSDOT = EMAIL.lastIndexOf(".");

//         return !(POSAT < 1 || (POSDOT - POSAT < 2));
//     }

//     // Validation du Numéro de téléphone

// function validatePhoneNumber(input) {

//     return input.value.match(/^(?:(?:\+|00)33|0)\s*[1-9](?:[\s.-]*\d{2}){4}$/);

// }
// // ==============VALIDATION DES CHAMPS DU FORMULAIRE==============//

//     function validateFields(input) {
//     let fieldName = input.name;

//     // Validaton de l'input PRENOM
//     if (fieldName == "firstName") {
//         if (!validateRequired(input)) {
//             return false;
//         }

//         if (!validateLength(input, 2, 20)) {
//             return false;
//         }

//         if (!validateText(input)){
//             return false;
//         }
//         return (true);
//         }

//         // Validaton de l'input NOM
//         if (fieldName == "lastName") {
//             if (!validateRequired(input)) {
//                 return false;
//             }
//             if (!validateLength(input, 2, 20)) {
//                 return false;
//             }
//             if (!validateText(input)) {
//                 return false;
//             }
//             return (true);
//         }

//          // Validaton de l'input EMAIL
//         if (fieldName == "email"){
//             if(!validateRequired(input)){
//                 return false;
//             }
//             if(!validateEmail(input)){
//                 return false;
//             }
//             return(true)
//         }

//          // Validaton de l'input NUMERO DE TELEPHONE
//          if (fieldName == "phoneNumber") {
//             if (!validateRequired(input)) {
//                 return false;
//             }
//             if (!validatePhoneNumber(input)) {
//                 return false;
//             }
//             return (true);
//         }

// }

//     //=============== END - VALIDATION DU FORMULAIRE ===============//

    
