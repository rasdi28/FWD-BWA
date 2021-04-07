<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
    @stack('prepend-style')
    @include('includes.fronted.styles')
    @stack('addon-style')
  </head>
  <body>
   
   
    @include('includes.fronted.navbar')
  
   @yield ('content')

    {{-- Footer --}}

    @include('includes.fronted.footer')

    {{-- end Footer --}}

    @stack('prepend-script')
    @include('includes.fronted.script')
    @stack('addon-script')
  </body>
</html>
