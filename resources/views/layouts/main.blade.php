<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title','Inaklug')</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <!-- Google Font (biar font sama kayak prototype) -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- File CSS utama -->
  <link rel="stylesheet" href="{{ asset('assets/css/landing.css') }}"/>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" referrerpolicy="no-referrer" />


  <!-- Reset semua elemen ke Poppins -->
  <style>
    * {
      font-family: 'Poppins', sans-serif !important;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
  </style>
</head>
<body>
  @include('partials.navbar')
  @yield('content')
  @include('partials.footer')
</body>
</html>
