@extends('mypage.common')
@section('mycontent')
<div class="mypage-content">
    <h5 class="pt-3 pb-3 pl-3 mb-0">購入した商品</h5>
    <div class="container">
        <div class="row text-center">
            <div class="no-selected col-6 col-md-6 pt-2 pb-2 m-0">
                <h3><a href="{{route('purchase')}}">取引中</a></h3>
            </div>
            <div class="border-top border-danger col-6 col-md-6 pt-2 pb-2">
                <h3><a href="{{route('purchased')}}">過去の取引</a></h3>
            </div>
        </div>
        <div class="my-item m-0">
            <ul class="m-0 p-0">
                @if($items->count() === 0)
                <li class="mypage-item-not-found bold">過去に取引した商品がありません</li>
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
        {{$items->links()}}
    </div>
</div>

@endsection