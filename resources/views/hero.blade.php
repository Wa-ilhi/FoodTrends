@extends('layouts.hero')

@section('content')


<div class="container px-4 pt-16">
    <div class="popular-cuisines pt-5">
        <h4 class="text-4xl font-bold mb-4 text-center text-uppercase animate__animated animate__fadeIn animate__slow">
            Welcome to FoodTrends
        </h4>
        <hr>
        <br>
        <h4 class="text-orange text-lg text-uppercase" style="font-weight: bold;">
            Popular Cuisines
        </h4>
        <div class="container mt-8 pt-5">

            <div class="row row-cols-1 row-cols-md-4 lg-4">

                @foreach ($popularRecipe as $recipe)
                <x-recipe-card :recipe="$recipe" />
                @endforeach

                <div class="container pt-5">
                    <div class="text-center">
                        <a href="{{ route('recipe.index') }}" class="btn btn-success btn-lg" style="font-size: 18px;">
                            Explore More Recipes</a>
                    </div>
                </div>
            </div>
            <hr>

            <footer class="text-center" style="font-size: 14px;">
                <p>Made with ❤️ by: FoodTrends &copy; <?php echo date('Y'); ?></p>
            </footer>

        </div>
    </div>
</div>

@endsection