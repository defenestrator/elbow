<?php

namespace Elbow\Http\Controllers;

use Illuminate\Http\Request;

class SeedShopController extends Controller
{
    public function index()
    {
        return view('shop.seeds.index');
    }
}
