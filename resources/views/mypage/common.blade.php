@extends('layoutes.common')
@section('content')
<div class="sub-color mx-auto">
    <div class="pl-5 pr-5 pt-3 mx-auto w-75">
        <div class="pl-3 pr-3">
            @yield('mycontent')
        </div>
        @include('mypage.nav')
    </div>
</div>
@endsection
@include('layoutes.footer')
@include('layoutes.sell_button')