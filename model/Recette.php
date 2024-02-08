<?php

class Recette extends CRUD {

    protected $table = 'recettes';
    protected $primaryKey = 'id';

    protected $fillable = ['nom', 'description', 'ingredients', 'etapes_preparation', 'temps_preparation', 'temps_cuisson', 'categorie', 'created_at', 'updated_at'];
}

?>