<?php

namespace App\Modules\RideApp\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RideAppController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        return view("RideApp::welcome");
    }
}
