<?php

namespace App\Http\Controllers;

use App\Extracurricular;
use Illuminate\Http\Request;

class ExtracurricularsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $data = Extracurricular::all();
        return response()->json(['success' => true, 'status' => 200, 'message' => 'All Extracurricular', 'result' => $data], 200);
    }

    public function show($id)
    {
        $data = Extracurricular::where('id', $id)->get();
        return response()->json(['success' => true, 'status' => 200, 'message' => 'Extracurricular Detail', 'result' => $data], 200);
    }
    public function store(Request $request)
    {
        $data = new Extracurricular();
        $data->nama_extracurricular = $request->input('nama_extracurricular');
        $data->pelatih = $request->input('pelatih');
        $data->jadwal = $request->input('jadwal');
        $data->jam = $request->input('jam');
        $data->jml_anggota = $request->input('jml_anggota');
        $data->save();

        return response()->json(['success' => true, 'status' => 200, 'message' => 'Extracurricular was created successfully'], 200);
    }
    public function update(Request $request, $id)
    {
        $data = Extracurricular::where('id', $id)->first();
        $data->nama_extracurricular = $request->input('nama_extracurricular');
        $data->pelatih = $request->input('pelatih');
        $data->jadwal = $request->input('jadwal');
        $data->jam = $request->input('jam');
        $data->jml_anggota = $request->input('jml_anggota');
        $data->save();

        return response()->json(['success' => true, 'status' => 200, 'message' => 'Extracurricular was edited successfully'], 200);
    }

    public function destroy($id)
    {
        $data = Extracurricular::where('id', $id)->first();
        $data->delete();

        return response()->json(['success' => true, 'status' => 200, 'message' => 'Extracurricular was deleted successfully'], 200);
    }
}
