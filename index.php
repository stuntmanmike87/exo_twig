<?php
    
    include "inc.twig.php";

    /* $template = $twig->load('index.tpl');

    echo $template->render(
        [
            'ma_date' => '01-01-1970',
            'nom_moteur' => 'TWIG'
        ]
    ); */
    
    //~ URL appelée nous retournant des données au format JSON
    $data_url = 'http://api.randomuser.me/?results=3';

    //~ On appelle l'URL et on stocke le contenu retourné dans une variable
    $data_contenu = file_get_contents($data_url);

    //~ Les données étant au format JSON, on les décode pour les stocker sous la forme d'un tableau associatif
    $data_array = json_decode($data_contenu, true);

    //~ On pointe directement sur les données du/des utilisateur(s) retourné(s)
    $utilisateurs = $data_array['results'];


    $utilisateurs = $twig->load('utilisateurs.tpl');

    echo $template->render(
        [
            'utilisateurs' => $utilisateurs
        ]
    );
    
    /* echo $template_users->render(
        [
            'picture' => 'medium',
            'name' => 'first',
            'name' => 'last',
            'location' => 'city',
            'login' => 'password',
        ]
    ); */
?>

