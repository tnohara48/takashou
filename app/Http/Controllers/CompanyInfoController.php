<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class CompanyInfoController extends Controller
{
    public function show(){
        return view('top');
    }
}
