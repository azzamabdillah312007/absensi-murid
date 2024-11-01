<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Student;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function addAttendance(Request $request, $class_id)
    {
        $request->validate([
            'tanggal' => 'required|date'
        ], [
            'tanggal.required' => 'Wajib di isi'
        ]);

        Attendance::create([
            'tanggal' => $request->tanggal,
            'class_id' => $class_id
        ]);

        return redirect()->route('kelas.detail-kelas' , ['class_id' => $class_id]);
    }

    public function index($class_id , $absensi_id)
    {
        $student = Student::where('classes_id', $class_id)->get();
        $attandance = Attendance::where('id', $absensi_id)->first();
        return view('kelas.absensi.index' , ['murid' => $student , 'absensi' => $attandance]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request) {}


    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
