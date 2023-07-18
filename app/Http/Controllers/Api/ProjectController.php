<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    
    public function index(Request $request)
    {

        // gestione parametro q
        $searchString = $request->query('q', '');

        $project = Project::with('type', 'technologies')->where('title', 'LIKE', "%{$searchString}%")->paginate(3);

        return response()->json([
            'success' => true,
            'results'    => $project,
        ]);
    }

    
    public function show($slug)
    {
        $project = Project::where('slug', $slug)->first();
        return response()->json([
            'success' => $project ? true : false,
            'results'    => $project,
        ]);
    }

    
}
