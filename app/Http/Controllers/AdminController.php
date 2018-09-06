<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function dashboard()
  {
    die('ini halaman dashboard');
  }

  public function profile(Request $request)
  {
    dd('hard');
  }

  public function key(Request $request)
  {
    return $request->input('key');
  }
}
