<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    {{-- Buat dinamis pakai @yield() --}}
    <title>@yield('title')</title>

    {{-- Style CSS --}}
    {{-- Pakai stack agar file css bisa dipakai dimanapun --}}
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')

  </head>

  <body>

    {{-- Page Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('includes.footer')
    
    {{-- Script JS--}}
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')

  </body>
</html>
