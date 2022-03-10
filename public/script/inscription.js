const formLeft=document.querySelector('.formLeft');
const prenom = document.getElementById('prenom');
const nom= document.getElementById('nom');
const login=document.getElementById('login');
const password1=document.getElementById('password');
const password2=document.getElementById('password');
var teste = false;
const lettre=/^[A-Za-z]+$/;
const number=/^[0-9]+$/;
const size=/^[?=.{6,}]+$/;



////////////////////////////functions///////////////////////////////////////////////////////////////
//tester si l'email est valide
function checkEmail(input) {//Tester si l'email est valide :  javascript : valid email
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (re.test(input.value.trim().toLowerCase())) {
        return true;
    } 

}

/* const isPasswordSecure(input) */






/////////////////////////////////Evenements/////////////////////////////////////////
login.onkeyup=function(){
    if(!checkEmail(login)){
        login.style.border="1px solid red";
        login.nextElementSibling.innerHTML="login invalide";
    }
    else{
        login.style.border="2px solid green";
        login.nextElementSibling.innerHTML="";
    }
     
}



prenom.onkeyup= function() {
    if(!lettre.test(prenom.value) || checkLength(prenom,2)){
        prenom.style.border= "2px solid red";
        teste = true;
    }else{
        prenom.style.border="2px solid green";
        teste = false;
    }
}

nom.onkeyup = function() {
    if(!lettre.test(nom.value) || checkLength(nom,2)){
        nom.style.border= "2px solid red";
        teste = true;
    }else{
        nom.style.border="2px solid green";
        teste = false;
    }
}


/* function checkLength(input, min){
    if (input.value=="" || input.value.length < min) {
        return true;
    }
};

password1.onkeyup=function(){
    if(lettre.test(password1.value) || number.test(password1.value) || size.test(password1.value)){
        password1.style.border="2px solid red";
        teste = true;
    }else{
        password1.style.border="2px solid green";
        teste = false;
    }
}

function checkPasswordMatch(pass1, pass2){
    if(pass1.value !== pass2.value){
        return true;
    }
}

password2.onkeyup = function(){
    if (checkPasswordMatch(password1,password2)) {
        password2.style.border="2px solid red";
        teste = true;
    }else{
        password2.style.border="2px solid green";
        teste = false;
    }
}

form.addEventListener("submit", function(event){
    if (teste) {
        alert("Revoir les données saisies !");
        event.preventDefault();
    }else{
    }
});

 */