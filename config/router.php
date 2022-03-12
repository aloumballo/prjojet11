<!-- Qui permet de charger les controllers -->
<!--on verifie si la cle controller existe dans le request apres on test la clé si elle est egale a securite ... si elle est egale a user.. -->
<?php
if (isset($_REQUEST['controller'])) { 
    switch ($_REQUEST['controller']) {
        case "securite":
            require_once(PATH_SRC."controllers/securite.controllers.php");
            break;

        case "user" :
            require_once(PATH_SRC."controllers/users.controllers.php");
            break;
        default :
            echo "se controller n'existe pas";
            break;  
    }
}
else {
    require_once(PATH_SRC."controllers/securite.controllers.php");
    
    
}
