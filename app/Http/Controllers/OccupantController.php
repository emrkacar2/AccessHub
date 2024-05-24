<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Occupant;

class OccupantController extends Controller
{
    public function signup(Request $request)
    {
        dd($request->all());
        $data = $request->only(['email', 'password', 'password_repeat']);
        $occupant = Occupant::create($data);

        return response('Kayıt başarıyla oluşturuldu', 201);
    }
}

