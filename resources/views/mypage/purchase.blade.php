@extends('mypage.common')
@section('mycontent')
<div class="mypage-content">
    <h5 class="pt-3 pb-3 pl-3 mb-0">購入した商品</h5>
    <div class="container">
        <div class="row text-center">
            <div class="border-top border-danger col-6 col-md-6 pt-2 pb-2 m-0">
                <h3><a href="{{route('purchase')}}">取引中</a></h3>
            </div>
            <div class="no-selected col-6 col-md-6 pt-2 pb-2">
                <h3><a href="{{route('purchased')}}">過去の取引</a></h3>
            </div>
        </div>
        <div class="my-item m-0">
            <ul class="m-0 p-0">
                <li class="mypage-item-not-found bold">取引中の商品がありません</li>
            </ul>
        </div>
    </div>
</div>

@endsection