<!doctype html>
<html lang="en">
<head>
   @include('layouts.partials.head')
</head>
<body>
<!-- Main Container-->
<div class="container">
    @include('layouts.partials.nav')

    @yield('content')

    @include('layouts.partials.footer')
</div>

@include('layouts.partials.scripts')
@yield('scripts')
</body>
</html>