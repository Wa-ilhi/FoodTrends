@extends('layouts.main')

@section('content')

<div class="container recipe-info border-b border-light pt-5">
    <div class="row mx-auto px-4 py-16 pt-5">
        <div class="col-md-6 mt-5 mb-5">
            <div class="card mb-3 border-4 ">
                @if(isset($recipe['strMealThumb']))
                <img src="{{ $recipe['strMealThumb'] }}" alt="Recipe Image" class="card-img-top img-fluid rounded" style="height: 500px;">
                <div class="card-body">
                    <h5 class="card-title text-center">{{ $recipe['strMeal'] }}</h5>
                </div>
                @else
                <p>No image available</p>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <br><br>
            <h4 class="flex text-center text-uppercase">Ingredients</h4>
            <hr>
            <div class="row">
                @foreach ($recipe['ingredientImages'] as $ingredient => $ingredientImage)
                <div class="col-12 col-md-4 mb-3">
                    <div class="ingredient text-center">
                        <img src="{{ $ingredientImage }}" alt="{{ $ingredient }}" class="img-fluid">
                        <div class="mt-2">{{ $ingredient }}</div>
                    </div>
                </div>
                @endforeach
            </div>
            <br>
            <br>
            <div class="row">
                <h4 class="text-center text-uppercase">Instructions</h4>
                <hr>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam magnam quam itaque molestiae, nobis ipsam quas illo quod ex amet molestias architecto officiis, voluptate alias libero odio assumenda quo fugit?
            </div>
        </div>

    </div>
    <br>
    <footer class="text-start" style="font-size: 14px;">
        <p>Made with ❤️ by: FoodTrends &copy; <?php echo date('Y'); ?></p>
    </footer>
</div>

@endsection