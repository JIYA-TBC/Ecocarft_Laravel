<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ManageUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(5);
        return response()->view('superadmin.users', compact('users'));
    }

    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();  
        return redirect()->route('superadmin.users')
        ->with('success','User Deleted successfully.');
    }
    
    public function update(Request $request, $id)
{
    $request->validate([ 
        'utype' => 'required',
    ]);

    $user = User::find($id);
    $user->utype = $request->utype;    
    $user->save();

    return redirect()->route('superadmin.users')->with('success', 'User updated successfully.');
}

}