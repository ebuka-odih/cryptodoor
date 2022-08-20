<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
   public function dashboard()
   {
       return view('admin.index');
   }

   public function users()
   {
       $users = User::all();
       return view('admin.user.users', compact('users'));
   }

   public function paid($id)
   {
       $user = User::findOrFail($id);
       $user->confirm_payment = 2;
       $user->save();
       return redirect()->back();
   }

    public function create()
    {
        return view('admin.user.add');
    }

    public function store_user(Request $request)
    {
        $data = $this->getData($request);
        $data['password'] = Hash::make($request['password']);
        $data['pass'] = $request->password;
        User::create($data);
        return redirect()->route('admin.users');
    }

    protected function getData(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|string|min:5|confirmed',
            'pass' => 'nullable',
            'confirm_payment' => 'nullable',
        ];
        return $request->validate($rules);
    }

   public function delete($id)
   {
       $user = User::findOrFail($id);
       $user->delete();
       return redirect()->back();
   }

}
