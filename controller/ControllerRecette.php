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
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)) {
            $recette = new Recette();
    
        
            $insertId = $recette->insert($_POST);
    
            RequirePage::url('recette/index');
        } else {
         
            return Twig::render('recette-create.php', ['error' => 'Méthode de requête invalide ou données manquantes.']);
        }
    }

    public function show($id){
 
        $recette = new Recette();
    
        $selectRecette = $recette->selectId($id);
    
 
        if ($selectRecette) {
          
            return Twig::render('recette-show.php', ['recette' => $selectRecette]);
        } else {
           
            return Twig::render('error.php', ['error' => 'Recette non trouvée.']);
        }
    }
    
    

    public function edit($id){

        $recette = new Recette;
        $selectId = $recette->selectId($id);
        return Twig::render('recette-edit.php', ['recette'=>$selectId]);
        
    }



    public function destroy($id){

        $recette = new Recette;
        $delete = $recette->delete($id);
        RequirePage::url('recette/index');
    }
    
}

?>