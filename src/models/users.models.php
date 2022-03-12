<!-- c'est lui qui vas utiliser l'orm -->


<?php
function find_user__password($login,$password)
{
    $users=json_to_array("users");
    foreach ($users as $user) {
        if ($user['login']==$login && $user['password']==$password) {
            return $user;
        }
    }
    return [];
}

function addUsers($prenom,$nom,$login,$password1){

    if(is_connect()){
        $role = ROLE_ADMIN;
    }else {
        $role = ROlE_JOUEUR;
    }

    $user = array(
        "nom"=>$nom,
        "prenom"=>$prenom,
        "login"=>$login,
        "password"=>$password1,
        "role"=>$role,
        "score"=>0
    );

    $json=file_get_contents(PATH_DB);
    $data=json_decode($json,true);
    $data["users"][] = $user;
    $jsonFinal = json_encode($data,JSON_PRETTY_PRINT);
    return file_put_contents(PATH_DB,$jsonFinal); 
    
}
