<?php
function getRecipe(int $id, array $recipes): ?array
{
    // Je crée un nouveau tableau contenant uniquement les ID des produits
    // Je les isole :
    // [1, 2, 3, 4, 5, 6, ...]
    $recipesIds = array_column($recipes, 'id');

    // Une fois que j'ai mon tableau d'ID, je cherche $id dedans
    $recipeKey = array_search($id, $recipesIds);

    if ($recipeKey === false) {
        return null;
    }
    return $recipes[$recipeKey];
}
