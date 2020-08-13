<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        $biodata = [
            'nama' => 'Alfara Nafi Dinara',
            'kelas' => 'XII RPL 1',
            'Absen' => '08',
            'Kelamin' => 'Laki-laki',
            'NIS' => '3103118009',
            'phone' => '098648802782'
        ];

        return response()->json($biodata,200);
    }
}
