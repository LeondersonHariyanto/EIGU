<?php

namespace App\Http\Controllers;

use App\Models\Notifikasi;
use App\Models\User;
use Illuminate\Http\Request;

class NetworkController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $user = User::where('id','!=',auth()->user()->id)->where('role','!=','Admin')->get();
=======
        $user = User::where('id','!=',auth()->user()->id)->get();
>>>>>>> f5be0bf79a4c23358ea4313deeb7c2c9de3c9651
        $notif = Notifikasi::where('user_id','=',auth()->user()->id)->latest()->get();
        return view('Network', compact('user','notif'));
    }

    public function detail($id)
    {
        $user = User::find($id);
        $notif = Notifikasi::where('user_id','=',auth()->user()->id)->latest()->get();
        return view('Detail_Profile', compact('user','notif'));
    }
}
