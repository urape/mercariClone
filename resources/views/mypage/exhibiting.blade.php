@extends('mypage.common')
@section('mycontent')
<div class="mypage-content">
    <h5 class="border-bottom pt-3 pb-3 pl-3 mb-0">出品した作品</h5>
    <div class="container">
        <div class="row text-center">
            <div class="col-4 col-md-4 pt-2 pb-2">
                <h3><a href="{{route('exhibiting')}}">出品中</a></h3>
            </div>
            <div class="no-selected col-4 col-md-4 pt-2 pb-2 m-0">
                <h3><a href="{{route('progress')}}">取引中</a></h3>
            </div>
            <div class="no-selected col-4 col-md-4 pt-2 pb-2">
                <h3><a href="{{route('completed')}}">売却済み</a></h3>
            </div>
        </div>
        <div class="my-item m-0">
            <ul class="m-0 p-0">
                @if($items->count() === 0)
                <li class="mypage-item-not-found bold">出品中の商品がありません</li>
                @else
                @foreach ($items as $item)
                <li class="my-item-list">
                    <a href="{{route('item',$item->id)}}">
                        <figure class="my-item-list">
                            <img src="{{asset("/storage/images/items/$item->image")}}" alt="" class="my-item-img">
                        {{$item->name}}
                        </figure>
                    </a>
                </li>
                @endforeach
                @endif
            </ul>
        </div>
    </div>
</div>

@endsection