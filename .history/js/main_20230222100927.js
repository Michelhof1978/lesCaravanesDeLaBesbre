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
      phone.focus(); 
      return false; 
    }

    if (!isValidFirstName(firstNameInput.value)) {
        alert("Le prénom doit comporter au moins 3 caractères.");
        phone.focus(); 
        return false; 
      }

      if (!isValidPhoneNumber(phoneNumberInput.value)) {
        alert("Le numéro de téléphone doit comporter au moins 10 chiffres");
        phoneNumb.focus(); 
        return false; 
      }
    
    if (!isValidEmail(emailInput.value)) {
      alert("L'email n'est pas valide.");
      email.focus(); 
      return false; 
    }
    
    if (!isValidMessage(messageInput.value)) {
      alert("Le message doit comporter au moins 10 caractères.");
      message.focus(); 
      return false; 
    }
    
    // Envoyer le formulaire si tout est valide
    form.submit();
  });
 

  function isValidLastName(lastName) {
    return lastName.length >= 3;
  }

  function isValidFirstName(firstName) {
    return firstName.length >= 3;
  }

  function isValidPhoneNumber(phoneNumber) {
    return phoneNumber.length >= 10;
  }
  
  function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }
  
  function isValidMessage(message) {
    return message.length >= 10;
  }
//FIN Restrictions du formulaire de contact 

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
//Création événement click sur bouton en jquery
//FIN Formulaire de contact



