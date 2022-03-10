const form = document.getElementById('form');
const email = document.getElementById('email');
const password = document.getElementById('password');


//Functions-------------------------------------------------------------

function showError(input, message) {//Afficher les messages d'erreur
    const formControl = input.parentElement;
    formControl.className = 'form-control error';
    const small = formControl.querySelector('small');
    small.innerText = message;
}

//
function showSuccess(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control success'; 
}

//

function checkEmail(input) {//Tester si l'email est valide :  javascript : valid email
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (re.test(input.value.trim().toLowerCase())) {
        showSuccess(input);
        return true;

    } else {
        showError(input,`Email is not valid!`);
        return false;
    }
}

//
function checkRequired(inputArray) {// Tester si les champs ne sont pas vides
    inputArray.forEach(input => {
        if (input.value.trim() === '') {
            showError(input,`${getFieldName(input)} is required`);
        }else{
            showSuccess(input);
        }
    });
}
function champObligatoire(input){
     if(input.value==''){
        showError(input,`champ obligatoire`);
        return false;
     }else{                             
        showSuccess(input);
        return true;
    } 
}


function getFieldName(input) {//Retour le nom de chaque input en se basant sur son id
    return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}




//Even listeners--------------------------------------------------------
form.addEventListener('submit',function(e){ 
  /*   e.preventDefault(); *///Bloquer la soumission du formulaire
    
   /*  alert('ok'); */
    checkRequired([ email, password]);
    checkLength(password, 6, 25);
    checkEmail(email);
}); 
          
form.addEventListener('submit',function(e){
    if(!champObligatoire(email)){
        e.preventDefault();
    }else{
        if(!checkEmail(email)){
            e.preventDefault();
        }
    }
  
    return true;
   
})

