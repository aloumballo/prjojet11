
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> -->
<!-- <div class="conteneurs">
        <form action="" id="" >
                  <input type="hidden" name="" action="" value="">
                  <input type="hidden" name="" action="" value="">
                         
                <div class="quest">

                   <label for="">  Questions </label>
                   <input class="quest"type="text" name="classquest" id="quest">
                </div> 
                <div class="nbrP">
                   <label for="">Nbre de Points</label>
                   <input type="number">

                </div>
                <div class="typerep">
                  <label for="">Nbre de Points</label>       
                  <select name="" id="">
                      <option value="" value="disabled selected">Donnez le type de reponse</option>
                      <option value="" value="opt1">Reponse Simple</option>
                      <option value="" value="opt2">Reponse Multiple</option>
                      <option value="" value="opt3">Reponse Text</option>
                  </select>        
                  <button type="button" id="idChoix"></button> 
                  <a href="" class="hh1"> <h1> + </h1> </a>
                
                </div>
                <div class="rep1" id="">
                   <div class="multi">
                     <label for="labin">Reponse Multiple</label>
                     <input type="text" name="labin" class="repo" id="box">
                     <input type="checkbox" name="labin" class="chek" id="box">
                     <a href="#"><img src="" alt="" class="img"></a>

                </div> -->
               <!--  <div class="simple">
                     <label for="resi">Reponse Simple</label>
                     <input type="text"name="resi"  class="repo" id="type">
                     <input type="radio"name="resi" class="chek" id="type">

                    <a href="#"><img src="img/ic-supprimer.png" alt="" class="img"></a>
                 </div> -->
                 <!-- <div class="simple">
                   <label for="tex">Reponse Texte</label>
                   <input type="text" name="tex"class="repo" id="rete">
                   <a href="#"><img src="img/ic-supprimer.png" alt="" class="img"></a>
                </div> -->
               <!--  </div>
                <div class="Enregistrer">
                    <button type="submit">Enregistrer</button>
                 
                </div>
            
        </form>
    
    </div> -->
    
<!--  </body>
</html> -->


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> -->

<div class="conteneurs">
    <div class="divheadFormQuest">
        <span>PARAMETRER VOTRE QUESTION</span>
    </div>
    <form action="" name="" id="">
           <input type="hidden" name="" action="" value="">
           <input type="hidden" name="" action="" value="">
        <div class="inputs">
           <div class="quest">

              <label for="">  Questions </label>
              <input class="quest"type="text" name="classquest" id="quest">
            </div> 
            <div class="quest">
               <label for="">Nbre de Points</label>
               <input type="number" class="number" id="number">

            </div>
            <div class="quest">   
                  <label for="">Type de Reponse</label>       
                  <select name="typeRep" id="typeRep" class="typeRep">
                      <option value="O" value="disabled selected">Donnez le type de reponse</option>
                      <option value="opt1">Reponse Simple</option>
                      <option value="opt2">Reponse Multiple</option>
                      <option value="opt3">Reponse Text</option>
                  </select>    
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill iconForm" viewBox="0 0 16 16" id="btnPlus">
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise iconForm" viewBox="0 0 16 16" id="load">
                        <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                        <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                  </svg>        
            </div>

        </div>
        <div class="divButtonSave">
          <input type="submit" name="saveQuestion"  value="Enregistrer">
        </div>

    </form>
</div>





<div style="visibility:hidden;" class="divInputQuest choixQ" id="choixdiv">
                                        
                                        
     </div>
    
        <div style="visibility:hidden;" class="choixLeft" id="choixLeft">
              <label for="nbChoix" id="lbNbChoix">Nbre choix</label>
              <input type="number" name="nbChoix" class="nbPoint" id="nbChoix">
              <a href="#" id="btnNbChoix">Ok</a>
    
        </div>
    
        <div style="visibility:hidden;" class="choixRight" id="choixRight">
    
              <label for="">Choix</label>
              <input type="text" name="" class="nbPoint choix" id="idChoix">
              <a href="#" id="addChoix">ok</a>
                                                
         </div>