@extends('layoutes.common')
@section('content')
<div class="sub-color mx-auto">
    <div class="pl-5 pr-5 pt-3">
        <div class="pl-3 pr-3">
            <h4 class="text-center">{{$user->name}}</h4>
            <div class="mt-2">
                <nav>
                    <ul class="list-group">
                        <h3><a href="{{route('mypage')}}" class="my-link">マイページ</a></h3>
                        <li class="list-group-item">
                            <a href="{{route('mypage')}}" class="my-link">いいね！一覧</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{route('sell')}}" class="my-link">出品する</a></li>
                        <li class="list-group-item">
                            <a href="{{route('mypage')}}" class="my-link">出品した商品 - 出品中</a></li>
                        <li class="list-group-item">
                            <a href="{{route('mypage')}}" class="my-link">出品した商品 - 取引中</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{route('mypage')}}" class="my-link">出品した商品 - 売却済み</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{route('mypage')}}" class="my-link">出品した商品 - 取引中</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{route('mypage')}}" class="my-link">出品した商品 - 過去の取引</a>
                        </li>
                    </ul>
                    <ul class="list-group mt-3">
                        <h3>設定</h3>
                        <li class="list-group-item"><a href="" class="my-link">プロフィール</a></li>
                        <li class="list-group-item"><a href="" class="my-link">メール/パスワード</a></li>
                        <li class="list-group-item">
                            <form method="post" name="logout2" action="{{ route('logout') }}" class="d-inline">
                                @csrf
                                <input type="hidden">
                                <a href="javascript:logout2.submit()" class="my-link">ログアウト</a>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
@include('layoutes.footer')
@include('layoutes.sell_button')