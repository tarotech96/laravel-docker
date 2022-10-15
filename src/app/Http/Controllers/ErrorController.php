<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    /**
     * 
     * @return
     */
    public function accessDenied() 
    {
        return view('errors.access_denied');
    }

    /**
     * 
     * @return
     */
    public function pageNotFound()
    {
        return view('errors.page_not_found');
    }

}
