<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class ContactController extends Controller
{
    public function show()
    {
       return view('contactus.show');
    }
}
