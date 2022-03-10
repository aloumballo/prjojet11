
<?php
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");
?>



<!--  -->



<div class="mainn">


     <div class="mainnn">
        <div class="formConnexion">
            <!-- pour me rediriger dans le front_controller si je click sur crée compte ce qui rst sur l'url la dééff fi  -->
        <form class="formLeft" action="<?=WEB_ROOT?>" method="POST">
        <input type="hidden" name="controller" value="securite"id="">
        <input type="hidden" name="action" value="connexion"id="">
        <div class="tete"><h1>S'INSCRIRE</h1>
        <h5>Pour tester votre  niveau de culture general</h5>
        </div>



      <div class="container-Inscription">

        <div class="un">
            <label for="">Prenom</label>  
            <input type="text" id="prenom"placeholder="Aaaa">
            <small></small>
         </div>

         <div class="deux">
            <label for="">Nom</label>  
            <input type="text" id="nom"placeholder="BBB">
            <small></small>
         </div>

     <div class="trois">
        <label for="">Login</label>  
        <input type="text" id="login" placeholder="aabbaabb">
        <small></small>
     </div>

     <div class="quatre">
        <label for="">password</label>  
        <input type="password" id="password1" placeholder="......." >
        <small></small>
     </div>

     <div class="cinq">
            <label for="">Confirmer password</label>  
            <input type="password" id="password2" placeholder=".......">
            <small></small>
     </div>
     <div class="creeCompte">
     <h10>Avatar du joueur</h10>

         <div class="button1">

         <button id="button">Créer compte</button> 
        
         
        </div>  
        <div class="button2">

        <button id="button1">Choisir un fichier</button>

          
        </div> 
         

         </div>
 </form> 
         </div>



        </div>



           <div class="right1">
      
           <div class="entet">
         
       
           <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."téléchargement.jpg" ?>" alt=""class="img"> 
   
           <h6>Avatar du joueur</h6>
           
           </div>
       




    </div>


</div> 

<?php
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php");

?>

