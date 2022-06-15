<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ListController extends Controller
{
    function show() {
      $response = Http::get('https://firstwap.herokuapp.com/api/codes');
      $data['apiData'] = $response->json();
      return view('list',$data);
    }
}
