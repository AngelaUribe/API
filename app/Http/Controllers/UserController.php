<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('index', [
            'users'=> User::latest()->with('posts')->paginate()
        ] );
    }
    public function main()
    {
        return view('main', [
            'users'=> User::latest()->with('posts')->paginate()
        ] );
    }

    public function indexjson()
    {
        return view('indexjson', [
            'users'=> User::latest()->with('posts')->paginate()
        ] );
    }
}
