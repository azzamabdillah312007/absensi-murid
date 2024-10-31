<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
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

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {}

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
