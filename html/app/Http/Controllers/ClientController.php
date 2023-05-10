<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;


class ClientController extends Controller
{
  
  public function application(Request $r) {

 
   
    $username = htmlspecialchars($r->get('username'));
    $time = time();
    User::insert([
      'name' => $username,
      'date' => $time
    ]);
    return response()->json(['success' => 'true']);
  }
   
 }
