<!DOCTYPE html>
<html lang="jp">
@include('layoutes.head')

<body class="">
    <div id="wrapper">
        @include('layoutes.header')
        <main>
            @yield('content')
        </main>
        @yield('footer')
        @include('layoutes.script')
    </div>
</body>

</html>