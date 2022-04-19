<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocGenController extends Controller
{
    public function docs()
    {
        $openapi = \OpenApi\Generator::scan([app_path(''), base_path('routes')]);
        $json = $openapi->toJson();
        return response()->json($openapi)/*->header('Content-Type', 'application/text-json')*/;
    }
}
