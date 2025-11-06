<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        // Simulasi data (sementara, nanti bisa ganti dari DB)
        $posts = collect([
            (object)[
                'title' => 'Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa',
                'slug' => 'cara-mudah-kuliah-luar-negeri',
                'thumbnail_url' => asset('assets/images/artikel1.jpg'),
                'published_at' => now(),
            ],
            (object)[
                'title' => 'Tips Sukses Belajar di Kampus Internasional',
                'slug' => 'tips-sukses-belajar',
                'thumbnail_url' => asset('assets/images/artikel2.jpg'),
                'published_at' => now()->subDays(2),
            ],
        ]);

        // Kirim data ke view
        return view('artikel', compact('posts'));
    }
}
