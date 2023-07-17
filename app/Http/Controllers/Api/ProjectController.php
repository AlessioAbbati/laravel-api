<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    
    public function index()
    {
        $project = Project::with('type', 'technologies')->paginate(3);

        return response()->json($project);
    }

    
    public function show($slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();
        return response()-json()
    }

    
}
