<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function get()
    {
        return Kategori::all();
    }

    public function show(Kategori $kategori)
    {
        return Kategori::whare('id', $kategori)->first();
    }

    public function post()
    {
        request()->validate([
            "nama_kategori" => "required"
        ]);

        return Kategori::create([
            "nama_kategori" => request('nama_kategori')
        ]);
    }

    public function put(Kategori $kategori)
    {
        request()->validate([
            'nama_kategori' => 'required'
        ]);

        $success = $kategori->update([
            'nama_kategori' => request('nama_kategori')
        ]);

        return [
            'success' => $success,
            'status' => 200
        ];
    }

    public function delete(Kategori $kategori)
    {
        $success = $kategori->delete();

        if ($success) $success = true;
        return [
            'success' => $success,
            'status' => 200
        ];
    }
}
