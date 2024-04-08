<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Inertia\Inertia;

class PageController extends Controller
{
 
    public function home ()
    {
        return Inertia::render('Home', [
            'canLogin' => Route::hasMacro('login'),
            'canRegister' => Route::hasMacro('register'),
        ]);
    }

    public function clientes()
    {
        return Inertia::render('Panel/Clientes');
    }
}
