<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>
    @include('layouts.header')
    <div class="container">
        @yield('content')
    </div>
    @include('layouts.footer')  
</body>
</html>