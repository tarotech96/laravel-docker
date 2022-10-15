<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * 
     * @return ユーザーリスト
     */
    public function index()
    {

        $users = User::latest()->paginate(10);
        return view('admin.users.index', compact('users'))
                    ->with('i', (request()->input('page',1) - 1) * 10);
    }

    /**
     * 
     * @return
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * 
     * @return
     */
    public function save(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        User::create($request->all());
        return redirect()->route('users')
                    ->with('success','User created successfully.');

    }

    /**
     * 
     * @return
     */
    public function edit(User $user)
    {
        return view('admin.users.edit',compact('user'));
    }

    /**
     * 
     * @return
     */
    public function update(Request $request, User $user)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $user->update($request->all());
        return redirect()->route('users')
                    ->with('success','User updated successfully');
    }

    /**
     * 
     * @return
     */
    public function delete(User $user)
    {
        $user->delete();
        return redirect()->route('users')
                        ->with('success','User deleted successfully');
    }

    /**
     * 
     * @return ユーザー情報
     */
    public function profile()
    {
        $user = Auth::user();
        return view('admin.users.profile', compact('user'));
    }
}
