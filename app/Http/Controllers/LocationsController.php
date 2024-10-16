<?php

namespace App\Http\Controllers;

use DB;

use App\Models\Location;

use Illuminate\View\View;
use Illuminate\Http\Request;

class LocationsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index(): View {
        $params = [
            "titlePages"    => 'Location List',
            "datas"         => DB::table('locations')->get(),
        ];

        return view('dashboard.locations', $params);
    }

    public function store(Request $request) {
        Location::create([
            'title'         => $request->title,
            'desc'          => $request->desc,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);

        return redirect()->back();
    }
    
    public function update(Request $request, $id) {
        $users = Location::findOrFail($id);

        $users->update([
            'title'         => $request->title,
            'desc'          => $request->desc,
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);

        return redirect()->back();
    }

    public function destroy(Request $request) {
        Location::find($request->id)->delete();
    
        return response()->json(array('success' => true));
    }
}
