

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> -->


<div class="style">
    <h2>la liste des joueurs</h2>
    <table>
        <tr>
            <td> <strong>Nom</strong> </td>
            <td> <strong>Prenom</strong> </td>
            <td> <strong>Score</strong> </td>
        </tr>

        <?php
         foreach ($joueurs as $j) { ?> 
             <tr>
                 <td><?= $j['Nom'] ?></td>
                 <td><?= $j['Prenom'] ?></td>
                 <td><?= $j['score'] ?></td>
             </tr>
            
        <?php }
         
         ?> 
       
      
    </table>
</div>
