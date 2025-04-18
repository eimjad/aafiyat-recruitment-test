<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
  public function index()
  {
    $users = User::whereNull('deleted_at')->orderBy('id')->get();
    return view('data', compact('users'));
  }

  public function create()
  {
    return view('form', ['user' => null]);
  }

}
