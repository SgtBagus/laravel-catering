<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CustomerController extends Controller {
    
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index(): View {
        $params = [
            "titlePages"        => 'Customer Dashboard',
        ];

        return view('dashboard', $params);
    }
}
