{{ include('header.php', {title: 'Fiche de la recette'}) }}


<div class="container">
    <h1>{{ recette.nom }}</h1>
    <p><strong>Description :</strong> {{ recette.description }}</p>
    <p><strong>Ingrédients :</strong> {{ recette.ingredients }}</p>
    <p><strong>Étapes de préparation :</strong> {{ recette.etapes_preparation }}</p>
    <p><strong>Temps de préparation :</strong> {{ recette.temps_preparation }} minutes</p>
    <p><strong>Temps de cuisson :</strong> {{ recette.temps_cuisson }} minutes</p>
    <p><strong>Catégorie :</strong> {{ recette.categorie }}</p>

    <a href="/recette/edit/{{ recette.id }}" class="btn btn-primary">Modifier</a>
    

    <form action="/recette/destroy/{{ recette.id }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette recette ?');">
        <button type="submit" class="btn btn-danger">Supprimer</button>
    </form>
</div>

</body>
</html>
