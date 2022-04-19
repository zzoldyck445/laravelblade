<!DOCTYPE html>
<html lang="en" data-footer="true">
  <head>
    
    <title>@yield('title')</title>

    @include('layouts.head')

  </head>

  <body>

    <div id="root">

        @include('layouts.nav-bar')

      <main>

        @yield('content')

      </main>

        @include('layouts.footer')

    </div>

        @include('layouts.theme-setting-modal')
    

        @include('layouts.search-modal')

        @include('layouts.scripts')
   
  </body>
</html>