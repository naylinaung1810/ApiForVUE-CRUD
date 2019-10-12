<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function updateUser(Request $request)
    {
        $id=$request['id'];
        $name=$request['name'];
        $email=$request['email'];

        $user=User::whereId($id)->first();
        $user->name=$name;
        $user->email=$email;
        $user->update();
        $newUser=User::whereId($user->id)->first();
        return response()->json(['user'=>$newUser,'message'=>"The selected item has been updated."]);
    }
    public function getRemoveItem($id)
    {
        $user=User::whereId($id)->first();
        $user->delete();

        return response()->json(['message'=>"The selected item has been deleted."]);
    }

    public function getPosts()
    {
        $users=User::OrderBy('id','desc')->paginate('10');
        return response()->json(['users'=>$users]);
    }

    public function newUser(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email|unique:users'
        ]);
        $user=new User();
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->password=$request['password'];
        $user->save();

        return response()->json(['user'=>$user,'message'=>"OK"]);
    }
}
