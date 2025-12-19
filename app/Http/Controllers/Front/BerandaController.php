<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        return view('front.beranda.index', [
            'title' => 'Beranda',
            'slides' => Slide::orderBy('order', 'ASC')->get(),
        ]);
    }
}
