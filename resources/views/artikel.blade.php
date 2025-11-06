@extends('layouts.main')
@section('title','Artikel')

@section('content')

@php
  // data dummy UI-only (boleh ubah judul/gambar sesuai aset lo)
  $posts = collect([
    (object)[
      'title' => 'Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa',
      'slug'  => 'cara-mudah-kuliah-luar-negeri',
      'thumbnail_url' => asset('assets/images/artikel1.jpg'),
      'published_at'  => now(),
    ],
    (object)[
      'title' => 'Tips Sukses Belajar di Kampus Internasional',
      'slug'  => 'tips-sukses-belajar',
      'thumbnail_url' => asset('assets/images/artikel2.jpg'),
      'published_at'  => now()->subDays(2),
    ],
    (object)[
      'title' => 'Cara Memilih Jurusan yang Tepat untuk Karier Global',
      'slug'  => 'memilih-jurusan-tepat',
      'thumbnail_url' => asset('assets/images/artikel3.jpg'),
      'published_at'  => now()->subDays(5),
    ],
  ]);
@endphp

{{-- HERO BESAR --}}
<section class="post-hero" style="background-image:url('{{ asset('assets/images/article.jpg') }}')">
  <div class="post-hero__overlay">
    <div class="post-hero__inner">
      <div class="post-hero__tag">TIPS</div>
      <h1 class="post-hero__title">
        Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa
      </h1>
    </div>
  </div>
</section>

{{-- DUA ARTIKEL FEATURED DI BAWAH HERO --}}
<section class="container articles-featured">
  <article class="featured-card">
    <a href="#" class="featured-thumb">
      <img src="{{ asset('assets/images/tupai.png') }}" alt="Featured 1">
    </a>
    <h3 class="featured-title">
      Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa
    </h3>
  </article>

  <article class="featured-card">
    <a href="#" class="featured-thumb">
      <img src="{{ asset('assets/images/becak.png') }}" alt="Featured 2">
    </a>
    <h3 class="featured-title">
      Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa
    </h3>
  </article>
</section>


<section class="articles-wrap">
  <h2 style="margin:10px 0 18px; font-weight:800; color:#2c2c2c;">ARTIKEL TERBARU</h2>

  @foreach($posts as $post)
    <article class="post-item">
      <a href="#" class="post-thumb">
        <img src="{{ $post->thumbnail_url }}" alt="{{ $post->title }}">
      </a>
      <div>
        <a href="#" class="post-title">{{ $post->title }}</a>
        <div class="post-meta">
          {{ \Carbon\Carbon::parse($post->published_at)->translatedFormat('l, d M Y H:i') }} WIB
        </div>
      </div>
    </article>
  @endforeach

  {{-- pagination UI palsu (statik) --}}
  <nav class="pager">
    <span class="arrow">←</span>
    <span class="is-active">1</span>
    <a href="#">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <a href="#">5</a>
    <a class="arrow" href="#">→</a>
  </nav>
</section>
@endsection


