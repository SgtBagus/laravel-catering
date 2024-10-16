<?php

namespace App\Http\Controllers;

use DB;

use App\Models\Tag;

use Illuminate\View\View;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index(): View {
        $params = [
            "titlePages"    => 'Tag List',
            "datas"         => DB::table('tags')->get(),
        ];

        return view('dashboard.tags', $params);
    }

    public function store(Request $request) {
        Tag::create([
            'title'         => $request->title,
            'desc'          => $request->desc,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);

        return redirect()->back();
    }
    
    public function update(Request $request, $id) {
        $users = Tag::findOrFail($id);

        $users->update([
            'title'         => $request->title,
            'desc'          => $request->desc,
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);

        return redirect()->back();
    }

    public function destroy(Request $request) {
        Tag::find($request->id)->delete();
    
        return response()->json(array('success' => true));
    }
}
