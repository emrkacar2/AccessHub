<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Occupant;

class OccupantController extends Controller
{
    public function signup(Request $request)
    {
        $data = $request->only(['email', 'password']);
        $occupant = Occupant::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        return response()->json('Kayıt başarıyla oluşturuldu', 201);
    }
}
