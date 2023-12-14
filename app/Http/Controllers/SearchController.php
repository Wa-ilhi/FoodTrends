<?php

// app/Http/Controllers/Api/SearchController.php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        // Perform the search logic based on $request->query('query')
        // Return search results as JSON

        $query = $request->query('query');
        $response = Http::get("https://www.themealdb.com/api/json/v1/1/search.php?s=$query");

        if ($response->successful()) {
            $results = $response->json()['meals'];
        } else {
            $results = [];
        }

        return response()->json($results);
    }
}
