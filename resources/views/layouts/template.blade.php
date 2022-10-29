<?php isset($data) ? extract($data) : '' ?>
@include('layouts.head')
@include('layouts.menu')
@yield('content')
@include('layouts.footer')
