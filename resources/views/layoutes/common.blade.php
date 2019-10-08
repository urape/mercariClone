<!DOCTYPE html>
<html lang="jp">
@include('layoutes.head')

<body class="">
    @include('layoutes.header')
    <main>
        @yield('content')
    </main>
    @yield('footer')
    @include('layoutes.script')
</body>

</html>