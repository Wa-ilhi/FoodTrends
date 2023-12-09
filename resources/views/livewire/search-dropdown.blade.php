<div class="relative flex mt-5 items-end">
    <div class="flex items-center bg-transparent text-dark border-none rounded me-2 mt-5">
        <input wire:model="search" type="text" class="bg-light text-sm h-8 w-90 px-2 py-1 rounded focus:outline-none focus:shadow-outline" placeholder="Search for meals..">
    </div>
    <div class="position-absolute bg-secondary rounded mt-1">
        @if(count($searchResults) > 0)
        <ul class="list-unstyled">
            @foreach($searchResults as $result)
            <li>
                <a href="{{ route('recipe.show', $result['idMeal']) }}">{{ $search }}</a>
            </li>
            @endforeach
        </ul>
        @else
        <p>No results found</p>
        @endif

    </div>

</div>