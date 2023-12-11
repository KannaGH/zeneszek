<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZeneController extends Controller
{
    public function fooldalview(){
        return view('welcome');
    }

    public function zeneszekview(){
        return view('zeneszek');
    }

    public function zenerogzitesview(){
        return view('zenerogzites');
    }

    public function zenelistaview(){
        return view('zenelista');
    }
}
