<?php

namespace App\Http\Controllers;

use App\Attendance;
use Illuminate\Http\Request;

class AttendancesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Attendance::with('siswa','kehadiran')->get();
        return response()->json(['success' => true, 'status' => 200, 'message' => 'All Attendance', 'result' => $data], 200);
    }

    public function cetak_pdf()
    {
        $Attendances = Attendance::all();
        
        // return $Attendances;
    	$pdf = PDF::loadview('Attendance.pdftable',['Attendances'=>$Attendances]);
    	return $pdf->download('laporan.pdf');
    }

    public function store(Request $request)
    {
        $data = new Attendance();
        $data->nama_siswa = $request->input('nama_siswa');
        $data->kelas = $request->input('kelas');
        $data->keterangan = $request->input('keterangan');
        $data->tanggal = $request->input('tanggal');
        $data->save();

        return response()->json(['success' => true, 'status' => 200, 'message' => 'Attendance was created successfully'], 200);
    }

    public function show($id)
    {
        $data = Attendance::where('id', $id)->first();
        return response()->json(['success' => true, 'status' => 200, 'message' => 'Attendance Detail', 'data' => $data], 200);
    }

    public function update(Request $request, $id)
    {
        $data = Attendance::where('id', $id)->first();
        $data->nama_siswa = $request->input('nama_siswa');
        $data->kelas = $request->input('kelas');
        $data->keterangan = $request->input('keterangan');
        $data->tanggal = $request->input('tanggal');
        $data->save();

        return response()->json(['success' => true, 'status' => 200, 'message' => 'Attendance was edited successfully'], 200);
    }

    public function destroy($id)
    {
        $data = Attendance::where('id', $id)->first();
        $data->delete();

        return response()->json(['success' => true, 'status' => 200, 'message' => 'Attendance was deleted successfully'], 200);
    }
}
