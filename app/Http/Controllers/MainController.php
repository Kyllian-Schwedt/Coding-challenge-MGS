<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(): View
    {
        return view('index');
    }

    public function location(): View
    {
        return view('index');
    }



    public function activity() : View {
        return view('index');
    }
    public function galerie() : View {
        return view('index');
    }
    public function tourisme() : View {
        return view('index');
    }
    public function contact() : View {
        return view('index');
    }
}
