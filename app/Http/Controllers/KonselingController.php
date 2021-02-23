<?php

namespace App\Http\Controllers;

use App\Konseling;
use Illuminate\Http\Request;

class KonselingController extends Controller
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
        $data = Konseling::all();
        return response()->json(['success' => true, 'status' => 200, 'message' => 'All Konseling', 'result' => $data], 200);
    }

    public function show($id)
    {
        $data =Konseling::where('id', $id)->get();
        return response()->json(['success' => true, 'status' => 200, 'message' => 'Konseling Detail', 'data' => $data], 200);
    }
    public function store(Request $request)
    {
        $data = new Konseling();
        $data->nama_guru = $request->input('nama_guru');
        $data->kelas = $request->input('kelas');
        $data->jadwal = $request->input('jadwal');
        $data->jadwal = $request->input('jam');
        $data->save();

        return response()->json(['success' => true, 'status' => 200, 'message' => 'Konseling was created successfully'], 200);
    }
    public function update(Request $request, $id)
    {
        $data = Konseling::where('id', $id)->first();
        $data->nama_guru = $request->input('nama_guru');
        $data->kelas = $request->input('kelas');
        $data->jadwal = $request->input('jadwal');
        $data->jadwal = $request->input('jam');
        $data->save();

        return response()->json(['success' => true, 'status' => 200, 'message' => 'Konseling was edited successfully'], 200);
    }

    public function destroy($id)
    {
        $data = Konseling::where('id', $id)->first();
        $data->delete();

        return response()->json(['success' => true, 'status' => 200, 'message' => 'Konseling was deleted successfully'], 200);
    }
}