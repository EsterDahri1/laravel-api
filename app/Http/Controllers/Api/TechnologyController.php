<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Technology;

class TechnologyController extends Controller
{
    public function technologies()
    {
        return response()->json([
            'success' => true,
            'result' => Technology::all(),
        ]);
    }
}
