<?php

use Illuminate\Foundation\Auth\AuthenticatesUsers;
namespace App\Http\Controllers\Auth;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use AuthenticatesUsers;


class LoginController extends Controller
{
    protected $redirectTo = '/dashboard';

}
