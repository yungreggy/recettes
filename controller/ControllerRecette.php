<?php

RequirePage::model('CRUD');
RequirePage::model('Recette');
RequirePage::library('Validation');


class ControllerRecette extends controller {
    public function index(){

        $recettes = new Recette;
        $selectRecettes = $recettes-> select();
        return Twig::render('recettes-index.php', ['recettes'=> $selectRecettes]);

    }

    public function create(){

        return Twig::render('recette-create.php');

    }

    public function store(){

    //    $validation = new Validation;
    //    extract($_POST);
    //    $validation->name('nom')->value($nom)->max(45)->min(3);
    //    $validation->name('adresse')->value($adresse)->max(45);
    //    $validation->name('phone')->value($phone)->max(20);
    //    $validation->name('ville')->value($ville_id)->pattern('int');
    //    $validation->name('code postal')->value($code_postal)->max(10);
    //    $validation->name('courriel')->value($courriel)->max(45)->pattern('email');


    //    if(!$validation->isSuccess()){
    //        $ville = new Ville;
    //        $selectVilles = $ville->select('ville');
    //        $errors =  $validation->displayErrors();
    //     return Twig::render('client-create.php', ['villes'=>$selectVilles,'errors' =>$errors, 'client' => $_POST]);
    //     exit();
    //    }

        $_POST['created_at'] = date("Y-m-d H:i:s");
        $_POST['updated_at'] = date("Y-m-d H:i:s");
        $recette = new Recette;
        $insert = $recette->insert($_POST);
        RequirePage::url('recette/index');
    }

    public function edit($id){

        $recette = new Recette;
        $selectId = $recette->selectId($id);
        return Twig::render('recette-edit.php', ['recette'=>$selectId]);
        
    }

    public function update(){
  
    //    $validation = new Validation;
    //    extract($_POST);
    //    $validation->name('nom')->value($nom)->max(45)->min(3);
    //    $validation->name('adresse')->value($adresse)->max(45);
    //    $validation->name('phone')->value($phone)->max(20);
    //    $validation->name('ville')->value($ville_id)->pattern('int');
    //    $validation->name('code postal')->value($code_postal)->max(10);
    //    $validation->name('courriel')->value($courriel)->max(45)->pattern('email');


    //    if(!$validation->isSuccess()){
    //        $ville = new Ville;
    //        $selectVilles = $ville->select('ville');
    //        $errors =  $validation->displayErrors();
    //     return Twig::render('client-edit.php', ['villes'=>$selectVilles,'errors' =>$errors, 'client' => $_POST]);
    //     exit();
    //    }
        $_POST['updated_at'] = date("Y-m-d H:i:s");
        $recette = new Recette;
        $update = $recette->update($_POST);
        RequirePage::url('recette/index');

    }

    // public function destroy(){
    //     CheckSession::sessionAuth();
    //     if($_SESSION['privilege'] == 1){
    //         //print_r($_POST);
    //         $client = new Client;
    //         $update = $client->delete($_POST['id']);
    //         RequirePage::url('client/index');
    //     }else{
    //         RequirePage::url('login');
    //     }
        
    // }
}

?>