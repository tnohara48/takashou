<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyInfo extends Controller
{
    public function show(){
        return view('top');
    }
}
