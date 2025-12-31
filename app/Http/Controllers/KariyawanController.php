<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KariyawanController extends Controller
{
    // halaman index
    public function index()
    {
        $kariyawan = DB::table('kariyawan')->get();
        return view('kariyawan.index', ['kariyawan' => $kariyawan]);
    }

    // halaman tambah
    public function tambah()
    {
        return view('kariyawan.tambah');
    }

    // simpan data kariyawan
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'    => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'umur'    => 'required|integer',
            'alamat'  => 'required|string',
        ]);

        DB::table('kariyawan')->insert([
            'nama'    => $validated['nama'],
            'jabatan' => $validated['jabatan'],
            'umur'    => $validated['umur'],
            'alamat'  => $validated['alamat'],
        ]);

        return redirect('/kariyawan');
    }
}
