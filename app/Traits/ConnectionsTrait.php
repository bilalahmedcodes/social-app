<?php
namespace App\Traits;

use App\Models\Connection;
use Illuminate\Support\Facades\Auth;

trait ConnectionsTrait{
    public function connections()
    {
        $connections =  Connection::with('connection')->where('user_id',Auth::user()->id)->get();
        $data = [
            'connections' => $connections
        ];
        return response()->json($data);
    }
}
