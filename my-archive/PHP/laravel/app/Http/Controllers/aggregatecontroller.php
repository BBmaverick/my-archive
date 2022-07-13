<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
class aggregatecontroller extends Controller
{
    function getuser(){
return Client::all()->count();
    }
}
