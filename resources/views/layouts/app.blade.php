<!DOCTYPE html>
<html>
@include('partials.header')

<body>
   @include('partials.nav')
   <div class="container">
    @yield('content')

   </div>
@include('partials.footer')

@include('partials.script')
</body>

</html>