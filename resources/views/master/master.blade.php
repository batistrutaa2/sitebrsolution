<!doctype html>
<html lang="">
<head>
  @include('master.head')
</head>

<header id="header" class="header fixed-top">
  @include('master.header')
</header>

<main id="main">
  @yield('content')
</main>
@include('master.footer')
<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
  @include('master.scripts')
  <footer>

</html>
