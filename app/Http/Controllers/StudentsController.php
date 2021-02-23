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
        $data = Student::with('kelas')->get();
        return response()->json(['success' => true, 'status' => 200, 'message' => 'All Student', 'result' => $data], 200);
    }

    public function cetak_pdf()
    {
        $students = Student::all();

        // return $students;
        $pdf = PDF::loadview('student.pdftable', ['students' => $students]);
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
        $data->no_hp_siswa = $request->input('no_hp_siswa');
        $data->no_hp_ayah = $request->input('no_hp_ayah');
        $data->nama_ayah = $request->input('nama_ayah');
        $data->pekerjaan_ayah = $request->input('pekerjaan_ayah');
        $data->no_hp_ibu = $request->input('no_hp_ibu');
        $data->nama_ibu = $request->input('nama_ibu');
        $data->pekerjaan_ibu = $request->input('pekerjaan_ibu');
        $data->no_hp_wali = $request->input('no_hp_wali');
        $data->nama_wali = $request->input('nama_wali');
        $data->pekerjaan_wali = $request->input('pekerjaan_wali');
        $data->alamat_wali = $request->input('alamat_wali');
        if ($request->hasFile('foto_siswa')) {
            $original_filename = $request->file('foto_siswa')->getClientOriginalName();
            $original_filename_arr = explode('.', $original_filename);
            $file_ext = end($original_filename_arr);
            $destination_path = './upload/foto_siswa/';
            $image = 'U-' . time() . '.' . $file_ext;
            $request->file('foto_siswa')->move($destination_path, $image);
            $imageuser = 'http://localhost:8000/upload/foto_siswa/' . $image;
        }
        $data->foto_siswa = $imageuser;
        $data->save();

        return response()->json(['success' => true, 'status' => 200, 'message' => 'Student was created successfully'], 200);
    }

    public function show($id)
    {
        $data = Student::where('id', $id)->with('kelas')->first();
        return response()->json(['success' => true, 'status' => 200, 'message' => 'Student Detail', 'data' => $data], 200);
    }

    public function update(Request $request, $id)
    {
        $data = Student::find($id);

        // get image
        if ($request->hasFile('foto_siswa')) {
            $original_filename = $request->file('foto_siswa')->getClientOriginalName();
            $original_filename_arr = explode('.', $original_filename);
            $file_ext = end($original_filename_arr);
            $destination_path = './upload/foto_siswa/';
            $image = 'I-' . time() . '.' . $file_ext;
            $request->file('foto_siswa')->move($destination_path, $image);
            if (!substr($data->foto_siswa, 42)) {
                $imageapps = 'http://localhost:8000/upload/foto_siswa/' . $image;
            } else {
                $imageapps = 'http://localhost:8000/upload/foto_siswa/' . $image;
                unlink(base_path('public/upload/foto_siswa/' . substr($data->foto_siswa, 39)));
            }
        } else {
            $imageapps = $data->foto_siswa;
        }

        $data->update([
            'foto_siswa' => $imageapps,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'nisn' => $request->nisn,
            'ttl' => $request->ttl,
            'anak_ke' => $request->anak_ke,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'no_hp_siswa' => $request->no_hp_siswa,
            'no_hp_ayah' => $request->no_hp_ayah,
            'nama_ayah' => $request->nama_ayah,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'no_hp_ibu' => $request->no_hp_ibu,
            'nama_ibu' => $request->nama_ibu,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'no_hp_wali' => $request->no_hp_wali,
            'nama_wali' => $request->nama_wali,
            'pekerjaan_wali' => $request->pekerjaan_wali,
            'alamat_wali' => $request->alamat_wali,
            
        ]);

        return response()->json(['success' => true, 'status' => 200, 'message' => 'Student was edited successfully'], 200);
    }

    public function destroy($id)
    {
        $data = Student::where('id', $id)->first();
        $data->delete();

        return response()->json(['success' => true, 'status' => 200, 'message' => 'Student was deleted successfully'], 200);
    }
}
