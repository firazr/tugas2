@extends('layouts.main')
@section('title','Hubungi Kami')

@section('content')

{{-- ===== HERO ===== --}}
<section class="contact-hero contact-hero--top" style="background-image:url('{{ asset('assets/images/hubungi.jpg') }}')">
  <div class="contact-hero__overlay"></div>
  <div class="contact-hero__inner">
    <h1>HUBUNGI KAMI</h1>
  </div>

</section>
{{-- ===== FORM WRAP ===== --}}
<section class="section section--narrow contact-wrap">
  <h2 class="contact-title">KIRIM PESAN</h2>

  <form class="contact-form" action="#" method="post" onsubmit="return false;">
    {{-- ROW 1 --}}
    <div class="contact-grid">
      <label class="inp">
        <span class="inp__label">Nama*</span>
        <input type="text" class="inp__control" placeholder="Nama lengkap Anda">
      </label>

      <label class="inp">
        <span class="inp__label">E-Mail*</span>
        <input type="email" class="inp__control" placeholder="Alamat E-mail Anda">
      </label>
    </div>

    {{-- ROW 2 --}}
    <div class="contact-grid">
      <label class="inp">
        <span class="inp__label">Perusahaan / Organisasi</span>
        <input type="text" class="inp__control" placeholder="Nama Perusahaan / organisasi">
      </label>

      <label class="inp">
        <span class="inp__label">Telepon</span>
        <input type="text" class="inp__control" placeholder="Nomor telepon Anda">
      </label>
    </div>

    {{-- ROW 3 --}}
    <label class="inp inp--full">
      <span class="inp__label">Isi Pesan*</span>
      <textarea class="inp__control inp__control--textarea" rows="6" placeholder="Isi pesan Anda …"></textarea>
    </label>

    {{-- reCAPTCHA --}}
    <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


      <button type="submit" class="btn-outline-pill btn-outline-pill--gradient contact-send">
        KIRIM PESAN
      </button>
    </div>
  </form>
</section>

@endsection
