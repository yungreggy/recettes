{{ include('header.php', {title: 'Ajouter une recette'}) }}

    <div class="container">
        <form action="{{path}}recette/store" method="post">
            <span class="text-danger">{{ errors | raw }}</span>
            <input type="hidden" name="id" value="{{ recettes.id}}">
            <label>Nom
                <input type="text" name="nom" value="{{recettes.nom}}">
            </label>
            <label>Description
                <input type="text" name="description" value="{{recettes.description}}">
            </label>
            <label>Ingredients
                <input type="text" name="ingredients" value="{{recettes.ingredients}}">
            </label>
            <label>Etapes Preparation
                <input type="text" name="etapes_preparation" value="{{recettes.etapes_preparation}}">
            </label>
            <label>Temps Preparation
                <input type="number" name="temps_preparation" value="{{recettes.temps_preparation}}">
            </label>
            <label>Temps Cuisson 
                <input type="number" name="temps_cuisson" value="{{recettes.temps_cuisson}}">
            </label>
            <label>Categorie
                <input type="text" name="categorie" value="{{recettes.categorie}}">
            </label>
            <input type="submit" value="save" class="btn">
        </form>
    </div>
</body>
</html>