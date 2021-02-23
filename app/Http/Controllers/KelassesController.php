<?php

namespace App\Http\Controllers;

use App\Kelas;
use App\Student;
use Illuminate\Http\Request;

class KelassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kelas::with('siswaData')->get();
        return response()->json(['success' => true, 'status' => 200, 'message' => 'All Kelas', 'result' => $data], 200);
    }

    public function cetak_pdf()
    {
        $Kelass = Kelas::all();
        
        // return $Kelass;
    	$pdf = PDF::loadview('Kelas.pdftable',['Kelass'=>$Kelass]);
    	return $pdf->download('laporan.pdf');
    }

    public function store(Request $request)
    {
        $data = new Kelas();
        $data->kelas = $request->input('kelas');
        $data->save();

        return response()->json(['success' => true, 'status' => 200, 'message' => 'Kelas was created successfully'], 200);
    }

    public function show($id)
    {
        $data = Kelas::where('id', $id)->first();
        return response()->json(['success' => true, 'status' => 200, 'message' => 'Kelas Detail', 'data' => $data], 200);
    }

    public function update(Request $request, $id)
    {
        $data = Kelas::where('id', $id)->first();
        $data->kelas = $request->input('kelas');
        $data->save();

        return response()->json(['success' => true, 'status' => 200, 'message' => 'Kelas was edited successfully'], 200);
    }

    public function destroy($id)
    {
        $data = Kelas::where('id', $id)->first();
        $data->delete();

        return response()->json(['success' => true, 'status' => 200, 'message' => 'Kelas was deleted successfully'], 200);
    }

    // custom function
    public function getDataSiswaKelas($idkelas)
    {
        $data = Student::where('kelas', $idkelas)->with('kelas')->get();
        return response()->json(['success' => true, 'status' => 200, 'message' => 'All Siswa', 'result' => $data], 200);
    }

}
