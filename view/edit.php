{{ include('header.php', {title: 'Modifier une recette'}) }}

    <div class="container">
        <form action="{{path}}recette/update" method="post">
        <span class="text-danger">{{ errors | raw }}</span>
        <input type="hidden" name="id" value="{{ recette.id}}">
            <label>Nom
                <input type="text" name="nom" value="{{recette.nom}}">
            </label>
            <label>Description
                <input type="text" name="description" value="{{recette.description}}">
            </label>
            <label>Ingredients
                <input type="text" name="ingredients" value="{{recette.ingredients}}">
            </label>
            <label>Etapes Preparation
                <input type="text" name="etapes_preparation" value="{{recette.etapes_preparation}}">
            </label>
            <label>Temps Preparation
                <input type="number" name="temps_preparation" value="{{recette.temps_preparation}}">
            </label>
            <label>Temps Cuisson 
                <input type="number" name="temps_cuisson" value="{{recette.temps_cuisson}}">
            </label>
            <label>Categorie
                <input type="text" name="categorie" value="{{recette.categorie}}">
            </label>
            <input type="submit" value="save" class="btn">
        </form>
    </div>
</body>
</html>