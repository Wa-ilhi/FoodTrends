@extends('layouts.main')

@section('content')

<div class="container px-4 pt-5">

    <div class="popular-cuisines pt-5">
        <br>
        <br>
        <h4 class="text-orange text-lg text-uppercase" style="font-weight: bold;">
            Popular Cuisines
        </h4>
        <div class="container mt-8 pt-5">

            <div class="row row-cols-1 row-cols-md-4 lg-4">

                @foreach ($popularRecipe as $recipe)
                <x-recipe-card :recipe="$recipe" />
                @endforeach


            </div>
        </div>
    </div>
    <hr>

    <footer class="text-center" style="font-size: 14px;">
        <p>Made with ❤️ by: FoodTrends &copy; <?php echo date('Y'); ?></p>
    </footer>
</div>

@endsection