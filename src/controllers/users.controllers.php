<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if (isset($_REQUEST["action"])) {
        if ($_REQUEST["action"]=="connexion") {
            echo "traiter le formulaire de conexion";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"]=="GET") {
    if (isset($_REQUEST["action"])) {

         if(!is_connect() && $_GET["action"]!="inscription.joueur") { 
            header("location:".WEB_ROOT);
            exit();
        }
 

        if ($_REQUEST["action"]=="accueil") {   
            if(is_admin()){
                listeJoueur();   //par defaut affiche la page liste joueur
            }elseif(is_joueur()){
                afficheJeux();
            }
        } 
/*             require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");
 */       
        if($_REQUEST["action"]=='liste.question'){
            listequestion();
        }
        if($_REQUEST["action"]=='creer.admin'){
            creeradmin();
        }
        if($_REQUEST["action"]=='liste.Joueur'){
            listeJoueur();
        }
        if($_REQUEST["action"]=='creer.Question'){
            creeQuestion();
        }
        if($_REQUEST["action"]=='inscription.joueur'){  
            require_once(PATH_VIEWS.'user'.DIRECTORY_SEPARATOR.'inscription.html.php');
        }
        
    }
}  


function   listequestion(){
      ob_start();
      require_once(PATH_VIEWS.'user'.DIRECTORY_SEPARATOR."liste.question.html.php");
      $affiche=ob_get_clean();
      require_once(PATH_VIEWS.'user'.DIRECTORY_SEPARATOR."accueil.html.php");

}

function creeradmin(){
    ob_start();
    require_once(PATH_VIEWS.'user'.DIRECTORY_SEPARATOR."creation.adm.html.php");
    $affiche=ob_get_clean();
    require_once(PATH_VIEWS.'user'.DIRECTORY_SEPARATOR."accueil.html.php");

}

/* function  listeJoueur(){
    ob_start();
    require_once(PATH_VIEWS.'user'.DIRECTORY_SEPARATOR."liste.joueur.html.php");
    $affiche=ob_get_clean();
    require_once(PATH_VIEWS.'user'.DIRECTORY_SEPARATOR."accueil.html.php");

} */
function  listeJoueur(){
    ob_start();  //role de tempo beuffor stock liste.joueur.html.php
    $joueurs = afficheRole('Role_JOUEUR');
    require_once(PATH_VIEWS.'user'.DIRECTORY_SEPARATOR."liste.joueur.html.php");
    $affiche=ob_get_clean();
    require_once(PATH_VIEWS.'user'.DIRECTORY_SEPARATOR."accueil.html.php");
}

function  creeQuestion (){
    ob_start();
    require_once(PATH_VIEWS.'user'.DIRECTORY_SEPARATOR."creation.question.html.php");
    $affiche=ob_get_clean();
    require_once(PATH_VIEWS.'user'.DIRECTORY_SEPARATOR."accueil.html.php");

}
//fonction pour affichier par defaut la page eux.html.php
function afficheJeux(){ 
    ob_start();
    require_once(PATH_VIEWS.'user'.DIRECTORY_SEPARATOR."jeux.html.php");
    $affiche=ob_get_clean();
    require_once(PATH_VIEWS.'user'.DIRECTORY_SEPARATOR."accueil.html.php");


}