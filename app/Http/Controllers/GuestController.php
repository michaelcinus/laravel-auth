<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Location;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        return view('home');
    }

}
