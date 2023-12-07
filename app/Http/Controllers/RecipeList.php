<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\RecipeModel;


class RecipeList extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            // User is authenticated, show the full page
            $popularRecipe = Http::withToken(config('services.tmdb.token'))
                ->get('https://www.themealdb.com/api/json/v1/1/search.php?f=b')
                ->json()['meals'];

            $category = Http::withToken(config('services.tmdb.token'))
                ->get('https://www.themealdb.com/api/json/v1/1/categories.php')
                ->json()['categories'];

            $ingredients = Http::withToken(config('services.tmdb.token'))
                ->get('https://www.themealdb.com/api/json/v1/1/list.php?i=list')
                ->json()['meals'];

            return view('index', [
                'popularRecipe' => $popularRecipe,
                'category' => $category,
                'ingredients' => $ingredients,
            ]);
        }

        // User is a visitor, show the simplified hero page
        return view('hero');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $recipe = Http::withToken(config('services.tmdb.token'))
            ->get('https://www.themealdb.com/api/json/v1/1/lookup.php?i=' . $id)
            ->json();

        $recipeImage = isset($recipe['meals'][0]['strMealThumb']) ? $recipe['meals'][0]['strMealThumb'] : null;

        // Fetch ingredient images
        $ingredientImages = [];
        if (isset($recipe['meals'][0])) {
            for ($i = 1; $i <= 20; $i++) {
                $ingredient = $recipe['meals'][0]["strIngredient{$i}"];
                if (!empty($ingredient)) {
                    $ingredientImage = "https://www.themealdb.com/images/ingredients/{$ingredient}-Small.png";
                    $ingredientImages[$ingredient] = $ingredientImage;
                }
            }
        }

        return view(
            'show',
            [
                'recipe' => [
                    'strMealThumb' => $recipeImage,
                    'ingredientImages' => $ingredientImages,
                    'strMeal' => isset($recipe['meals'][0]['strMeal']) ? $recipe['meals'][0]['strMeal'] : null,
                ],
            ]
        );
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
