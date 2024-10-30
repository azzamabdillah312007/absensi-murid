<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Cast\String_;

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
            'tingkatan.required' => 'tingkatan kelas wajib di isi',
            'mapel.required' => 'mapel kelas wajib di isi',
            'deskripsi.required' => 'deskripsi kelas wajib di isi',
            'kode_kelas.required' => 'kode kelas kelas wajib di isi',
            'ruangan.required' => 'ruangan kelas wajib di isi',
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

    public function showDetailClass($classID)
    {
        $teacher_id = Auth::id();

        $dataDetailClass = Classroom::where('id', $teacher_id)->first();
        $student = Student::where('classes_id', $classID)->get();

        return view('kelas.detail-kelas', ['murid' => $student , 'detailKelas' => $dataDetailClass]);

    }

    public function showAddStudent($class_id)
    {
        return view('kelas.tambah-murid' ,  ['class_id' => $class_id]);
    }

    public function addStudent(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'nis' => 'required|numeric',
            'tanggal_lahir' => 'required|date', // Perbaikan tipe date
            'alamat' => 'required|string',
            'no_hp' => 'required|string', // Perubahan tipe data ke string
            'email' => 'required|email', // Menggunakan email untuk validasi
            'jenis_kelamin' => 'required|string',
            'orang_tua' => 'required|string'
        ], [
            'nama.required' => 'nama wajib diisi',
            'nis.required' => 'nis wajib diisi dan harus berupa nomor',
            'tanggal_lahir.required' => 'tanggal lahir wajib diisi',
            'alamat.required' => 'alamat wajib diisi',
            'no_hp.required' => 'nomor hp wajib diisi',
            'email.required' => 'email wajib diisi dan harus memakai tanda @',
            'jenis_kelamin.required' => 'jenis kelamin wajib dipilih',
            'orang_tua.required' => 'nama orang tua wajib diisi',
        ]);

        Student::create([
            'nama' => $request->nama,
            'nis' => $request->nis,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'jenis_kelamin' => $request->jenis_kelamin,
            'classes_id' => $request->classes_id,
            'orang_tua' => $request->orang_tua,
        ]);

        return redirect()->route('kelas.detail-kelas', ['class_id' => $request->classes_id]);
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
