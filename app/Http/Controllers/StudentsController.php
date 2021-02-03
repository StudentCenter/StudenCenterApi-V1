<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Student::all();
        return response()->json(['success' => true, 'status' => 200, 'message' => 'All Student', 'result' => $data], 200);
    }

    public function cetak_pdf()
    {
        $students = Student::all();
        
        // return $students;
    	$pdf = PDF::loadview('student.pdftable',['students'=>$students]);
    	return $pdf->download('laporan.pdf');
    }

    public function store(Request $request)
    {
        $data = new Student();
        $data->nama = $request->input('nama');
        $data->kelas = $request->input('kelas');
        $data->nisn = $request->input('nisn');
        $data->ttl = $request->input('ttl');
        $data->anak_ke = $request->input('anak_ke');
        $data->agama = $request->input('agama');
        $data->alamat = $request->input('alamat');
        $data->no_hp = $request->input('no_hp');
        $data->nama_ayah = $request->input('nama_ayah');
        $data->pekerjaan_ayah = $request->input('pekerjaan_ayah');
        $data->no_hp_ibu = $request->input('no_hp_ibu');
        $data->nama_ibu = $request->input('nama_ibu');
        $data->pekerjaan_ibu = $request->input('pekerjaan_ibu');
        $data->no_hp_wali = $request->input('no_hp_wali');
        $data->nama_wali = $request->input('nama_wali');
        $data->pekerjaan_wali = $request->input('pekerjaan_wali');
        $data->alamat_wali = $request->input('alamat_wali');
        $data->save();

        return response()->json(['success' => true, 'status' => 200, 'message' => 'Student was created successfully'], 200);
    }

    public function show($id)
    {
        $data = Student::where('id', $id)->first();
        return response()->json(['success' => true, 'status' => 200, 'message' => 'Student Detail', 'data' => $data], 200);
    }

    public function update(Request $request, $id)
    {
        $data = Student::where('id', $id)->first();
        $data->nama = $request->input('nama');
        $data->kelas = $request->input('kelas');
        $data->nisn = $request->input('nisn');
        $data->ttl = $request->input('ttl');
        $data->anak_ke = $request->input('anak_ke');
        $data->agama = $request->input('agama');
        $data->alamat = $request->input('alamat');
        $data->no_hp = $request->input('no_hp');
        $data->nama_ayah = $request->input('nama_ayah');
        $data->pekerjaan_ayah = $request->input('pekerjaan_ayah');
        $data->no_hp_ibu = $request->input('no_hp_ibu');
        $data->nama_ibu = $request->input('nama_ibu');
        $data->pekerjaan_ibu = $request->input('pekerjaan_ibu');
        $data->no_hp_wali = $request->input('no_hp_wali');
        $data->nama_wali = $request->input('nama_wali');
        $data->pekerjaan_wali = $request->input('pekerjaan_wali');
        $data->alamat_wali = $request->input('alamat_wali');
        $data->save();

        return response()->json(['success' => true, 'status' => 200, 'message' => 'Student was edited successfully'], 200);
    }

    public function destroy($id)
    {
        $data = Student::where('id', $id)->first();
        $data->delete();

        return response()->json(['success' => true, 'status' => 200, 'message' => 'Student was deleted successfully'], 200);
    }

}
