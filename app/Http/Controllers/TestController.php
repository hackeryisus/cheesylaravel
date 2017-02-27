<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Generation;

class TestController extends Controller
{
    public function view ($id){
      $generation = Generation::find($id);

      return view('test.index', [ 'generation' => $generation]);
    }
}
