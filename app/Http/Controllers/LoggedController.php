<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Location;
use Illuminate\Http\Request;

class LoggedController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function delete($id) {

        $emp = Employee::findOrFail($id);
        $emp -> delete();
        return redirect() -> route('emp-home');

    }
}
