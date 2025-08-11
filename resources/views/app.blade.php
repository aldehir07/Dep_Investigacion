<!DOCTYPE html>
<html lang="en">
<head>
  @include('plantilla.head')
</head>
<body>

    @include('plantilla.sidebar')

    <div class="pc-header">
        @include('plantilla.header')
    </div>

    <div class="pc-container">
        <div class="pc-content">
            @yield('content')
        </div>
    </div>

    @include('plantilla.footer')
    @include('plantilla.scripts')

</body>
</html>