<?php
namespace App\Http\Controllers;

use App\File; // Import model File
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\modelUpload;
use App\Http\Controllers\Auth;
use App\Models\User;
use App\Http\Controllers\Session;

class UploadController extends Controller
{
    public function index(){
        return view('upload');
    }
        // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // app/Http/Controllers/FileController.php

    public function upload(Request $request)
    {
        $file = $request->file;
        $filenameWithExt = $request->file->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file->getClientOriginalExtension();
        $filenameSimpan = (int) $filename.'.'.$extension;
        $destinationPath = 'images';
        $file->move($destinationPath,(int)$file->getClientOriginalName());

        
        $upld = modelUpload::create([
            'NRP' => $request->nrp,
            'name' => $request->name,
            'berkas' => $request->file,
            'deskripsi' => $request->ket,
        ]);

        $pesan = 'File berhasil diupload!';
        // // ['data_mhs' => $data_mhs]
        // Session::flash('message', 'This is a message!'); 
        // Session::flash('alert-class', 'alert-danger'); 
        return redirect('/upload')->with('sukses','Data Berhasil Di Simpan');
        // with('success', 'File berhasil diupload!');
        // // Ambil file yang diupload dari form
        // $file = $request->file('file');

        // // Simpan file ke dalam direktori public/files
        // $path = $file->store('public/files');

        // // Simpan informasi file ke database
        // $file = new File;
        // $file->filename = $request->file('file')->getClientOriginalName();
        // $file->filepath = $path;
        // $file->save();

        // // Tampilkan pesan sukses
        // return redirect()->back()->with('success', 'File berhasil diupload!');
    }
}
