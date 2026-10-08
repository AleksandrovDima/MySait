<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PagesController extends Controller
{
    public function main(): View
    {
        return view('pages.main');
    }
}
