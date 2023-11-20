<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Type;
use App\Models\Technology;

class ProjectController extends Controller
{
    public function projects()
    {


        return response()->json([
            'success' => true,
            'result' => Project::all()
        ]);
    }

    public function type()
    {
        return response()->json([
            'success' => true,
            'result' => Type::all(),
        ]);
    }

    public function technologies()
    {
        return response()->json([
            'success' => true,
            'result' => Technology::all(),
        ]);
    }
}
