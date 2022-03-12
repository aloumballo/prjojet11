const formLeft=document.querySelector('.formLeft');
console.log(formLeft);
const prenom = document.getElementById('prenom');
const nom= document.getElementById('nom');
const login=document.getElementById('login');
const password1=document.getElementById('password1');
const password2=document.getElementById('password2');
var teste = false;
const lettre=/[a-zA-Z]/;
const Number= /[0-9]/;
const size=/^[?=.{6,}]+$/;
/* console.log(letterNumber); */



////////////////////////////functions///////////////////////////////////////////////////////////////
//tester si l'email est valide      
function checkEmail(input) {//Tester si l'email est valide :  javascript : valid email
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (re.test(input.value.trim().toLowerCase())) {
        return true;
    } 

}

/* function checkLength(input, min){
    if (input.value=="" || input.value.length < min) {
        return true;
    }
};

password1.onkeyup=function(){

    if(letterNumber.test(password1.value)){
        password1.style.border="2px solid green";
        teste = false;
    }else{
        password1.style.border="2px solid red";
        teste = true;
    }
} */
 
/* password2.onkeyup=function(){

    if(letterNumber.test(password2.value)){
        password1.style.border="2px solid green";
        teste = false;
    }else{
        password1.style.border="2px solid red";
        teste = true;
    }
}

function verificationPASSWORD(password1,password2){
    if(password1.value!==password2.value){
        return true;
    }
    return false;
} */
/* var matchPassword= verificationPASSWORD(password1,password2)
 

password2.onkeyup=function(){
    if(!matchPassword){
        password2.style.border="2px solid red";
    password2.nextElementSibling.innerHTML="password invalide"; 

    }
    
else{
    matchPassword.style.border="2px solid green";
    matchPassword.nextElementSibling.innerHTML="password valide"; 

}
} */
/* const isPasswordSecure(input) */



/////////////////////////////////Evenements/////////////////////////////////////////
/* login.onkeyup=function(){
    if(!checkEmail(login)){
        login.style.border="1px solid red";
        login.nextElementSibling.innerHTML="login invalide";
    }
    else{
        login.style.border="2px solid green";
        login.nextElementSibling.innerHTML="";
    }
     
}
 */


/* prenom.onkeyup= function() {
    if(!lettre.test(prenom.value) && (prenom.value == '')){
        prenom.style.border= "2px solid red"; 
        teste = true;
    }else{
         prenom.style.border="2px solid green"; 
        teste = false;
    }
}
nom.onkeyup= function() {
    if(!lettre.test(nom.value) && (nom.value == '')){
        nom.style.border= "2px solid red"; 
        teste = true;
    }else{
         nom.style.border="2px solid green"; 
        teste = false;
    }
}
 */

// form.addEventListener("submit", function(event){
//     if (teste) {
//         alert("Revoir les données saisies !");
//         event.preventDefault();
//     }else{
//     }
// });

function verificationChampsvide(input) {
    if(input.value==''){
        return input.name + ' OBLIGATOIRE';
    }
    else{
        if(input.name=='login'){
            const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if(input.value.match(re) )
            return '';
            
            return 'email invalide';
        } 
            
        
    
    if(input.name=='password1'){
        if(input.value.length<6){
            return'password doit avoir au moins 6 chiffres';
        }
         else{
            if(!lettre.test(input.value) || !Number.test(input.value) ){
                return 'le mot de passe doir contenir au moins un chiffre ou une lettre ';
              
            }return '';
                
            
        }  
    } return '';

 }return '';
}


function verificationPassword(password1,password2){
    if(password1.value!==password2.value){
        return 'les deux password sont different';
    }
    return '';

}

////////////////////////////

formLeft.addEventListener('submit',function(e){
    var stockPrenom=verificationChampsvide(prenom);
    if(stockPrenom!==''){
        e.preventDefault();
        prenom.id='error';
        const small=prenom.parentElement.getElementsByTagName('small')[0];
        console.log(small);
        small.innerText=stockPrenom;
        small.style.visibility='visible';
        small.style.color='red';
        
    }


    var stockNom=verificationChampsvide(nom);
    if(stockNom!==''){
        e.preventDefault();
        nom.id='error';
        const small=nom.parentElement.getElementsByTagName('small')[0];
        console.log(small);
        small.innerText=stockNom;
        small.style.visibility='visible';
        small.style.color='red';
        
    }




    var stockLogin=verificationChampsvide(login);
    if(stockLogin!==''){
        e.preventDefault();
        login.id='error';
        const small=login.parentElement.getElementsByTagName('small')[0];
        console.log(small);
        small.innerText=stockLogin;
        small.style.visibility='visible';
        small.style.color='red';
        
    }

    var stockPassword1=verificationChampsvide(password1);
    if(stockPassword1!==''){
        e.preventDefault();
        password1.id='error';
        const small=password1.parentElement.getElementsByTagName('small')[0];
        console.log(small);
        small.innerText=stockPassword1;
        small.style.visibility='visible';
        small.style.color='red';
        
    }

    var stockPassword2=verificationChampsvide(password2);
    if(stockPassword2!==''){
        e.preventDefault();
        password1.id='error';
        const small=password2.parentElement.getElementsByTagName('small')[0];
        console.log(small);
        small.innerText=stockPassword2;
        small.style.visibility='visible';
        small.style.color='red';
        
    }



var passwords=verificationPassword(password1,password2);
if(passwords!==''){
    e.preventDefault();
    password1.id='error';
    password2.id='error';
    const small=password2.parentElement.getElementsByTagName('small')[0];
    small.innerText=passwords;
    small.style.visibility='visible';
    small.style.color='red';
        

}
})