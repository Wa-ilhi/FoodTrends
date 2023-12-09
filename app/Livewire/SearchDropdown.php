<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $search = '';

    public function render()
    {
        $searchResults = [];

        if (strlen($this->search) >= 2) {
            $response = Http::get('https://www.themealdb.com/api/json/v1/1/search.php?s=' . $this->search);

            if ($response->successful()) {
                $searchResults = $response->json()['meals'] ?? [];
            } else {
                // Handle error if the request was not successful
                // You can log the error or provide a default response
                $searchResults = [];
            }
        }

        return view('livewire.search-dropdown', [
            'searchResults' => collect($searchResults)->take(1),
        ]);
    }
}
