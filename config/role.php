<!-- Les autorisations acces -->
<?php
define("ROLE_ADMIN","Role_ADMIN");
define("ROlE_JOUEUR","Role_JOUEUR");

function is_connect():bool{
    return (isset($_SESSION[KEY_USER_CONNECT]));
}
function is_admin():bool{
    return is_connect () && $_SESSION[KEY_USER_CONNECT]['role']==ROLE_ADMIN;

}
function is_joueur ():bool{
    return is_connect () && $_SESSION[KEY_USER_CONNECT]['role']==ROlE_JOUEUR;
}
