<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class SportsmenController extends BaseController
{
    public function create()
    {
        return view('sportsmen.create');
    }
}
