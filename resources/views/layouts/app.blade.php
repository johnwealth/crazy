<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <link rel="icon"  href="{{url('images/icon.png')}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Screenbook | @yield('title')</title>

    <!-- Styles -->
  
    @include('partials.style')
</head>
<body data-spy="scroll" data-offset="25">
    <div id="app">
        
        @include('partials.nav')

           @yield('content')

        @include('partials.footer')
    </div>

    <!-- Scripts -->
    @include('partials.script')
   
</body>
</html>
