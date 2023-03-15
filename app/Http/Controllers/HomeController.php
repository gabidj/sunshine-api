<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Pennant\Feature;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        Feature::active('extended-function')
            ? view('home')
            : view('feature');
    }

    public function inexistent()
    {
        Feature::inactive('inexistent-feature')
            ? abort(501, 'This feature is note implemented')
            : view('feature');
    }

    public function demo(User $user)
    {
        // Values...
        $value = $user->features()->value('extended-function');
        $values = $user->features()->values(['extended-function', 'ecosystem']);

        $states = [];

        // States
        $states[] = $user->features()->active('extended-function'); // true
        $states[] = $user->features()->active('ecosystem'); // false
        $states[] = $user->features()->allAreActive(['extended-function', 'ecosystem']); // false
        $states[] = $user->features()->someAreActive(['extended-function', 'ecosystem']); // true

        // these will trigger inexisting features because they're unknown
        $states[] = $user->features()->inactive('extended-function'); // false
        $states[] = $user->features()->inactive('ecosystem'); //true
        $states[] = $user->features()->allAreInactive(['extended-function', 'ecosystem']); //false
        $states[] =  $user->features()->someAreInactive(['extended-function', 'ecosystem']); // true

        return [
            'extended-function' => $value,
            'extended-functions' => $values,
            'states' => $states
        ];
    }
}
