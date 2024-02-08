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


    public function edit($id){

        $recette = new Recette;
        $selectId = $recette->selectId($id);
        return Twig::render('recette-edit.php', ['recette'=>$selectId]);
        
    }



    public function destroy($id){
        // Création d'une instance de la classe Recette
        $recette = new Recette;
    
        // Appel de la méthode delete en passant l'id de la recette à supprimer
        $delete = $recette->delete($id);
    
        // Redirection vers la liste des recettes après la suppression
        RequirePage::url('recette/index');
    }
    
}

?>