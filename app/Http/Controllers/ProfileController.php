<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Image;
use DB;
use Auth;
use Hash;

class ProfileController extends Controller
{
    public function index()
    {

    }

    public function edit($id)
    {
      $user = Auth::user();
      return view('profile', compact('user', $id));
    }

    public function update(Request $req, $id)
    {
      $user = Auth::user();
      // dd($req->all());

      if ($req->password == null) {
        $pass = $user->password;
      }else {
        $pass = Hash::make($req->password);
      }
      $data = [
        'username' => $req->username,
        'email' => $req->email,
        'password' => $pass
      ];
      // dd($data);
      User::find($id)->update($data);

      return redirect()->route('profile.page', $id);
    }

    public function update_avatar(Request $req, $id)
    {
      if($req->hasFile('avatar')){
        $avatar = $req->file('avatar');
        $filename = time() . '.' . $avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(200, 200)->save(public_path('/uploads/' . $filename));

        $user = Auth::user();
        $user->avatar = $filename;
        $user->save();
      }

      return redirect()->route('profile.page', $id);
    }

    public function del_avatar(Request $req)
    {
      $user = Auth::user();
      $user->avatar = 'default.jpg';
      $user->save();

      return view('profile', compact('user'));
    }
}
