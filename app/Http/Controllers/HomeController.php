<?php

namespace App\Http\Controllers;

use DB;

use App\Models\User;
use App\Models\SubmissionList;

use Illuminate\Http\Request;

class HomeController extends Controller {
    public function index() {
        $params = [
            "titlePages"    => 'Home',
        ];

        return view('index', $params);
    }

    public function destroy(Request $request) {
        User::find($request->id)->delete();
        return response()->json(array('success' => true));
    }
}
