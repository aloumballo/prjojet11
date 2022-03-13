
<?php
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."users.models.php");

?>



<style>
   span{
      color:red;
      font-size:12px
   }
</style>



<div class="mainn">


     <div class="mainnn">
        <div class="formConnexion">
         
            <!-- pour me rediriger dans le front_controller si je click sur crée compte ce qui rst sur l'url la dééff fi  -->
        <form class="formLeft" action="<?=WEB_ROOT?>" method="POST">
        <input type="hidden" name="controller" value="securite"id="">
        <input type="hidden" name="action" value="inscription"id="">

        <div class="tete"><h1>S'INSCRIRE</h1>
        <h5>Pour tester votre  niveau de culture general</h5>
        
        </div>
      <div class="container-Inscription">
         <small><?= isset($msg)? $msg: "" ?></small>
        <div class="un">
            <label for="">Prenom</label>  
            <input type="text" id="prenom"placeholder="Aaaa" name="prenom">
            <small></small>
            <?php if(isset($errors['prenom'])) :?>   <!-- recupere le msg d'erreur de prenom dans le tb d'erreurs   -->
            <span><?=$errors['prenom']; ?></span>
            <?php endif?>
         </div>
         <div class="deux">
            <label for="">Nom</label>  
            <input type="text" id="nom"placeholder="BBB" name="nom">
            <small></small>
            <?php if(isset($errors['nom'])) :?>   <!-- recupere le msg d'erreur de nom dans le tb d'erreurs   -->
            <span><?=$errors['nom']; ?></span>
            <?php endif?>
         </div>

     <div class="trois">
        <label for="">Login</label>  
        <input type="text" id="login" placeholder="aabbaabb" name="login">
        <small></small>
        <?php if(isset($errors['login'])) :?>  
            <span><?=$errors['login']; ?></span>
            <?php endif?>
     </div>

     <div class="quatre">
        <label for="">password</label>  
        <input type="password" id="password1" placeholder="......."  name="password1">
        <small></small>
        <?php if(isset($errors['password1'])) :?>  
            <span><?=$errors['password1']; ?></span>
            <?php endif?>
     </div>

     <div class="cinq">
            <label for="">Confirmer password</label>  
            <input type="password" id="password2" placeholder="......." name="password2">
            <small></small>
            <?php if(isset($errors['password2'])) :?>  
            <span><?=$errors['password2']; ?></span>
            <?php endif?>
            
     </div>
     <div class="creeCompte">
     <h10>Avatar du joueur</h10>

         <div class="button1">

         <input type="submit" name="inscription" value="Créer compte">
        
         
        </div>  
        <!-- <div class="button2">

        <button id="button1">Choisir un fichier</button>

          
        </div>  -->
         

         </div>
 </form> 

         </div>



        </div>


   
           <div class="right1">
      
           <div class="entet">
              <!-- creation du upload -->
         
         
         <label for="icon">  <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."téléchargement.jpg" ?>" id="icone" alt=""class="img"> 
         <input id="icon" type="file" hidden onchange="upload(this)"> 
      </label>
   
           <h6>Avatar du joueur</h6>
           
           </div>
       




    </div>


</div> 
<?php
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php");

?>

  

 <!-- avec ba si la session de cle de connexion est KEY_USER_CONNECT ajouter un joueur ou alors un admin -->
        