<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\credit;

class CreditController extends Controller
{
    public function mostrar(){
        $credits = credit::with('clients')->get();
        return view('credits.index', compact('credits'));
    }
}
