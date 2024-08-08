<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view('index');
    }

    public function register() {
        return view('page.form');
    }

    public function dataTable() {
        return view('page.data-table');
    }

    public function table() {
        return view('page.table');
    }
}
