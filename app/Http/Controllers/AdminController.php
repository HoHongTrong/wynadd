<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function getList() {
    $user = User::all();
    return view('admin.quantri.list', ['user' => $user]);
  }
}
