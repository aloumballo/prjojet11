<!-- Toutes les fonctions de validation cote back -->
<?php
function Champ_Obligatoire(string $key,$data,array &$errors,string $message="ce champ est obligatoire")
{
    if (empty($data))
    {
        $errors[$key]=$message;
    }
}
function Valid_Email (string $key,$data,array &$errors,string $message="ce champ est obligatoire")
{ 
if (!filter_var($data,FILTER_VALIDATE_EMAIL)) {
    $errors[$key]=$message;
}
}
// function Valid_Password (string $key,$data,array $errors,string $message="ce champ est obligatoire"){ 
    
function passwordMatch(string $key,string $pass1,string $pass2,array &$errors,string $message="Les deux password is not match"){
    if(strcmp($pass1,$pass2) != 0){
        $errors[$key]=$message;
    }
}

function lengthPassword(string $key,string $pass1,array &$errors,string $message="La taille du mot de passe ne doit pas etre inferieure a 6"){
    if(strlen($pass1)<6){       //verifie la taille du mot de pass
        $errors[$key]=$message;
    }
}
