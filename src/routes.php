<?php

// list of accessible routes of your application, add every new route here
// key : route to match
// values : 1. controller name
//          2. method name
//          3. (optional) array of query string keys to send as parameter to the method
// e.g route '/item/edit?id=1' will execute $itemController->edit(1)

return [
    '' => ['HomeController', 'index',],
    'profile' => ['UserController', 'details',['id']],
    'recipes' => ['RecipeController', 'show'],
    'recipes/fav' => ['RecipeController', 'addFav'],
    'recipes/nofav' => ['RecipeController', 'remove'],
    'recipes/show' => ['RecipeController', 'showOneRecipe',['id']],
    'recipes/favories' => ['RecipeController', 'showFav'],
    'timer' => ['TimerController', 'show', ['id']],
    'deezer' => ['UserController', 'show', ['id']],
];
