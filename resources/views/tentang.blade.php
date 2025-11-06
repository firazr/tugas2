@extends('layouts.main')
@section('title','Tentang Kami')
@section('content')

  {{-- HERO FOTO + OVERLAY GRADASI --}}
  <section class="about-hero" style="background-image:url('{{ asset('assets/images/tentang.png') }}')">
    <div class="about-hero__overlay">
      <h1>TENTANG KAMI</h1>
    </div>
  </section>

  {{-- CONTAINER UTAMA --}}
  <section class="about-container">

    {{-- PROFIL --}}
    <h2 class="about-title">PROFIL</h2>
    <p class="about-lead">
      Didirikan pada tahun 2018, INAKLUG merupakan konsultan pendidikan internasional
      yang berpengalaman, terpercaya, dan memiliki jam terbang tinggi untuk melayani
      para anak-anak muda Indonesia menuntut ilmu di berbagai negara maju di dunia.
    </p>

    {{-- GRID GAMBAR 2 KOLOM --}}
    <div class="about-images">
      <img src="{{ asset('assets/images/visi.png') }}" alt="Visi">
      <img src="{{ asset('assets/images/misi.png') }}" alt="Misi">
    </div>

    {{-- VISI / MISI (2 kolom) --}}
    <div class="about-twocol">
      <div>
        <h3 class="about-subtitle">VISI</h3>
        <p>
          Membangun Sumber Daya Indonesia yang mempunyai daya saing tinggi dan tangguh
          secara internasional, serta membangun karakter pemimpin masa depan yang mandiri
          dan profesional.
        </p>
      </div>
      <div>
        <h3 class="about-subtitle">MISI</h3>
        <p>
          Memfasilitasi siswa Indonesia untuk mengenyam pendidikan di berbagai perguruan
          tinggi di lebih dari 25 negara maju di dunia dengan layanan yang profesional.
          Memberikan konsultasi menyeluruh dari aspek sosial, budaya, dan pendidikan.
        </p>
      </div>
    </div>

    {{-- CTA --}}
    <div class="about-cta">
      <a href="{{ url('/layanan-kami') }}" class="btn-outline-gradient">LAYANAN KAMI</a>
    </div>

  </section>
@endsection


