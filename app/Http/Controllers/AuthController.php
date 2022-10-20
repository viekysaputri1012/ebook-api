<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'Nis' => 3103120227,
            'Name' => 'Vieky syahputrie',
            'Phone' => '08570078125907',
            'Class' => 'XII RPL7'
        ];
    }
}
