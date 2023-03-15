<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Laravel\Pennant\Feature;

class FeatureController extends Controller
{
    public function index()
    {
        /** @var Company $com */
        return view('welcome');
    }
}
