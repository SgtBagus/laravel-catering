<?php

namespace App\Http\Controllers;

use DB;
use Auth;

use App\Models\User;
use App\Models\History;

use Illuminate\View\View;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller {
    public function index(): View {
        $params = [
            "titlePages"    => 'User List',
            "datas"         => DB::table('users')->get(),
        ];

        return view('dashboard.users', $params);
    }
    
    public function update(Request $request, $id) {
        $users = User::findOrFail($id);

        $users->update([
            'name'          => $request->name,
            'company_name'  => $request->company_name,
            'address'       => $request->address,
            'contact'       => $request->contact,
            'role'          => $request->role,
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);

        return redirect()->back();
    }

    public function destroy(Request $request) {
        User::find($request->id)->delete();
    
        return response()->json(array('success' => true));
    }
}
