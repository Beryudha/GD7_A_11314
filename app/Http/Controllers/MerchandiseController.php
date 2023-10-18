<?php

namespace App\Http\Controllers;

use App\Models\Merchandise;
use Illuminate\Http\Request;

class MerchandiseController extends Controller
{
    public function index()
    {
        $merchandise = Merchandise::get();
        $barang = [
            ['gambar' => 'images/3-o.jpg'],
            ['gambar' => 'images/16.png'],
            ['gambar' => 'images/20.png'],
            ['gambar' => 'images/38-o.jpg'],
            ['gambar' => 'images/46-o.jpg'],
            ['gambar' => 'images/cat.jpg'],
            ['gambar' => 'images/Sup-cuh1.jpg']
        ];

        return view('merchandise', compact('merchandise', 'barang'));
    }
}
