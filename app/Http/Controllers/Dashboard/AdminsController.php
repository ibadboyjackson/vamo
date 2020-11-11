<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminsController extends Controller
{
    public function __construct()
    {
        $this->middleware('isAdmin');
        $this->middleware('auth');
    }

    public function index() {
        return view('dashboard.admin.pages.index');
    }
}
