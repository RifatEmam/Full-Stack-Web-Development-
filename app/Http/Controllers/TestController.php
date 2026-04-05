<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        return "Testing the Route with Controller ✅";
    }
}