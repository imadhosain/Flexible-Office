<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IbramController extends Controller
{
    public function homepage() {
        return view('welcome');
    }
    public function actcont() {
        return view('active-contracts');
    }
}
