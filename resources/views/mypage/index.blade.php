@extends('mypage.common')
@section('mycontent')
<div>
    @if (Session::has('message'))
        <p class="alert alert-success" role="alert">{{ session('message') }}</p>
    @endif
    <h4 class="text-center">{{$user->name}}</h4>
</div>
@endsection