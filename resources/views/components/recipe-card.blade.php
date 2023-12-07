<div class="col">
    <div class="card text-center mb-4">
        <a href="{{ route('recipe.show', $recipe['idMeal']) }}">
            <img src="{{ $recipe['strMealThumb'] }}" alt="cuisine" class="card-img-top img-fluid" style="height: 200px;">
        </a>

        <div class="mt-2">
            <span style="font-weight: bold;">{{ $recipe['strMeal'] }}</span>
        </div>
    </div>
</div>