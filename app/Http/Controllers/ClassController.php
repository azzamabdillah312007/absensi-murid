<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Classroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        $teacher_id = Auth::id();

        // Menggunakan operator `=` dengan benar pada metode where
        $classes = Classroom::where('teacher_id', $teacher_id)->get();
        $teacher = User::where('id', $teacher_id)->first();

        return view('kelas.index', ['teacher' => $teacher, 'classes' => $classes]);
    }


    public function showAddClass()
    {
        return view('kelas.tambah-kelas');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            'nama_kelas' => 'string',
            'tingkatan' => 'string',
            'mapel' => 'string',
            'deskripsi' => 'string',
            'kode_kelas' => 'numeric',
            'ruangan' => 'string'
        ], [
            'nama_kelas.required' => 'nama kelas wajib di isi',
            'tingkatan.required' => 'nama kelas wajib di isi',
            'mapel.required' => 'nama kelas wajib di isi',
            'deskripsi.required' => 'nama kelas wajib di isi',
            'kode_kelas.required' => 'nama kelas wajib di isi',
            'ruangan.required' => 'nama kelas wajib di isi',
        ]);

        $teacher_id = Auth::id();

        Classroom::create([
            'nama_kelas' => $request->nama_kelas,
            'tingkatan' => $request->tingkatan,
            'mapel' => $request->mapel,
            'teacher_id' => $teacher_id,
            'deskripsi' => $request->deskripsi,
            'kode_kelas' => $request->kode_kelas,
            'ruangan' => $request->ruangan,
        ]);


        return redirect()->route('kelas.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
