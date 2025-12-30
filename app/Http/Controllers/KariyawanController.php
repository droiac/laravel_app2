<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //penggunaan query builder

class KariyawanController extends Controller
{
    //halaman index di view
    public function index()
    {
        $kariyawan = DB::table('toko_sederhana.kariyawan')->get();
        return view('index', ['kariyawan'=>$kariyawan]);
    }
}
