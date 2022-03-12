<!-- gere les connexions et deconnexions && en premier verifie si la requete est get ou post-->
<?php
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."users.models.php");

 /* var_dump($_REQUEST["action"]); */
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if (isset($_REQUEST["action"])) {
        /* // echo "Nous sommes dans le POST de connexion"; */
        if ($_REQUEST["action"]=="connexion") {
       /*  require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");  */
            $login=$_POST['login'];
            $password=$_POST['password'];
            // die("OLLLL");
            connexion($login,$password);
        }
        
    }
        if ($_REQUEST["action"]=="inscription") {
            $prenom=$_POST['prenom'];
            $nom=$_POST['nom'];
            $login=$_POST['login'];
            $password1=$_POST['password1'];
            $password2=$_POST['password2'];
            // $role=ROLE_JOUEUR;
            $score=0;
            // var_dump($_POST);
            inscription($prenom,$nom,$login, $password1,$password2);
            
            require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."inscription.html.php");

            // echo "<br>Nous sommes dans le POST de l'inscription";

        }
             
}
if ($_SERVER["REQUEST_METHOD"]=="GET") {
    // echo "<br>Nous sommes dans le GET ";

    if (isset($_GET["action"])) {
       
        if ($_GET["action"]=="connexion") {
        // echo "<br>Nous sommes dans l'action' de connexion";

        require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
            

            // echo "charger la page de connexion";
        }elseif ($_GET["action"]=="deconnexion") {
            logout (); //detruit la session et me redirige sur la page de connexion
        
        }elseif ($_GET["action"]=="inscription") {
            //  echo "<br>Nous sommes dans l'action de l'inscription";

            require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."inscription.html.php");
            
        }

    }else{ 
        // echo "charger la page de connexion";
         require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
    }
  
}
function connexion($login,$password)
{

    
   $errors=[];
   Champ_Obligatoire('login',$login,$errors,"login est obligatoire");
    if(count($errors)==0) {
        Valid_Email ('login',$login,$errors);
    }
   Champ_Obligatoire('password',$password,$errors,"Password est obligatoire");
   if(count($errors)==0) {
   
    // appel d'une function model
    $user=find_user__password($login,$password);
    
    if (count($user)!=0) {

        // utilisateur existe
        $_SESSION[KEY_USER_CONNECT]=$user;
        
        header("location:".WEB_ROOT."?controller=user&action=accueil");
        exit(); 
    }else{
        // utilisateur n'existe pas
        $errors['connexion']="login ou mot de pass incorrect";
        // $errors['password']="password est obligatoire";
        $_SESSION[KEY_ERRORS]=$errors;
        header("location:".WEB_ROOT."?controller=securite&action=connexion");
        exit();
    }
    
}else {

    
    $_SESSION[KEY_ERRORS]=$errors;
    header("location:".WEB_ROOT."?controller=securite&action=connexion");
    exit();
}
    
}

function logout(){
    session_destroy();
    unset($_SESSION[KEY_ERRORS]);
    header("location:".WEB_ROOT);
    exit();
    
}

function inscription($prenom,$nom,$login, $password1,$password2){
    $errors=[];
    Champ_Obligatoire('prenom',$prenom,$errors,"prenom est obligatoire");
    Champ_Obligatoire('nom',$nom,$errors,"nom est obligatoire");
    Champ_Obligatoire('login',$login,$errors,"login est obligatoire");
    Champ_Obligatoire('password1',$password1,$errors,"password1 est obligatoire");
    // var_dump($errors['prenom'],$errors['nom'],$errors['login'],$errors['password1'],$errors['password2']);die("ok");
    // var_dump($errors);die;
   Champ_Obligatoire('password2',$login,$errors,"password2 est obligatoire");
   Valid_Email ('login',$login,$errors);
   lengthPassword('password1',$password1,$errors);
   passwordMatch('password2',$password1,$password2,$errors);

   if(count($errors) == 0){
            // Valid_Email ('login',$login,$errors);
            // die("bien");

            if(addUsers($prenom,$nom,$login,$password1)){
                // die("nooooo");
                $msg = "Ajout avec succés";
                require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."inscription.html.php");
            }else{
                /* die("nooooofddg"); */
                $_SESSION['errors']=$errors;
                header('location:'.WEB_ROOT.'?controller=securite&action=inscription');
            }

            

            // if(isset($_errors['login'])){
            //     require_once(PATH_VIEWS."securite".DIRECTORY_EPARATOR."inscription.html.php");
            // }
            // if(isset($_errors['password1'])){
            //     require_once(PATH_VIEWS."securite".DIRECTORY_EPARATOR."inscription.html.php");
            // }
            
            // if(isset($_errors['password2'])){
            //     require_once(PATH_VIEWS."securite".DIRECTORY_EPARATOR."inscription.html.php");
            // }else{
            //     require_once(PATH_VIEWS."securite".DIRECTORY_EPARATOR."jeux.html.php");

            // }

}else{
    /* die("ok"); */
    $_SESSION['errors']=$errors;
        header('location:'.WEB_ROOT.'?controller=securite&action=inscription');
    exit();
}


}