{{ include('header.php', {title: 'Recettes List'}) }}
<body>
    {% for recette in recettes %}
    <ul>
        <li>Nom : {{ recette.nom }} - <a href="{{path}}recette/edit/{{ recette.id }}">Modifier</a></li>
        <li>Description : {{ recette.description }}</li>
        <li>Ingredients : {{ recette.ingredients }}</li>
        <li>Etapes Preparation : {{ recette.etapes_preparation }}</li>
        <li>Temps Preparation : {{ recette.temps_preparation }}</li>
        <li>Temps Cuisson : {{ recette.temps_cuisson }}</li>
        <li>Categorie : {{ recette.categorie }}</li>
        <li>Created at : {{ recette.created_at }}</li>
        <li>Updated at : {{ recette.updated_at }}</li>
    </ul>
    {% endfor %}   
    <a href="{{path}}recette/create" class="btn">Ajouter</a>
</body>
</html>