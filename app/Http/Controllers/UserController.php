<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

Class UserController extends Controller {
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function getUsers(){
        $users = User::all();
        return response()->json($users,200);
    }
    public function index(){
        $users = User::all();
        return response()->json($users,200);
    }
    public function add(Request $request){
        $rules = [
            'username' => 'required|string|unique:users,username',
            'password' => 'required|string|min:6|max:20',
        ];

        $this->validate($request,$rules);
        $user = User::create($request->all());
        return response()->json($user,201);
    }
}
