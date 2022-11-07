<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    /**
     * Method: index
     * Desc: Get all of users
     * @params:
     * Return: Collection
     */
    function index() {
        $users = DB::table("users") ->get();
        //dd($users);
        return view('users.list', ['users' => $users]);
    }

    function detail($id) {
        //dd($id);
        $user = DB::table("users") ->where('user_id', $id)->first();
        return view('users.details', compact('user'));
        
    }
    function delete($id) {

        return redirect() -> route('users.index');
    }
}
