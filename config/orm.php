<!-- Change les formats de donnees && vas prendre le contenue du fichier path_db car file_get_conte signifie vas me recuperer le contenu qu'on ma passer-->
<?php
$json=file_get_contents(PATH_DB);
//json_deconde lui decode le contenu recuperer par file_get_content c a d il le transforme ici en tb
$arr=json_decode($json,true);
// var_dump($arr);die;

function json_to_array(string $key):array{
    $json=file_get_contents(PATH_DB);
    $arr=json_decode($json,true);
    return $arr[$key];

}
// Enregistrement et mise a jour des donnees du fichier
function array_to_json(string $key,array $arr):array
{
    return [];
}
function afficheRole($key ){

    $role = []; //decalaration du tableau pour contenier tous les utilisateurs selon le role 
    $users= json_to_array("users");//recuperer tous les utilisateurs du fichier

    foreach ($users as $user) {
        if ($user['role'] == $key) {
            $role[] = $user;//jouter sur le tableau
        }
    }
    return $role;//retourner le tab
}