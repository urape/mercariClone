@extends('mypage.common')
@section('mycontent')
<div class="mypage-content">
    <h5 class="pt-3 pb-3 pl-3 mb-0">出品した商品</h5>
    <div class="container">
        <div class="row text-center">
            <div class="no-selected col-4 col-md-4 pt-2 pb-2">
                <h3><a href="{{route('exhibiting')}}"class="b-link">出品中</a></h3>
            </div>
            <div class="border-top border-danger col-4 col-md-4 pt-2 pb-2 m-0">
                <h3><a href="{{route('progress')}}" class="b-link">取引中</a></h3>
            </div>
            <div class="no-selected col-4 col-md-4 pt-2 pb-2">
                <h3><a href="{{route('completed')}}" class="b-link">売却済み</a></h3>
            </div>
        </div>
        <div class="my-item m-0">
            <ul id="mypage-tab-transaction-now" class="mypage-item-list tab-pane active">
                <li class="mypage-item-not-found bold">取引中の商品がありません</li>
            </ul>
        </div>
    </div>
</div>

@endsection