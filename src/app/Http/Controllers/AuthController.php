<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthorRequest;

class AuthController extends Controller
{
    public function login()
{
  return view('login');
}
}
