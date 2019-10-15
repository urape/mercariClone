@extends('layoutes.common')
@section('content')
@include('layoutes.calousel')
<div class="">
    <h2 class="text-center mt-5 mb-3">
        人気のカテゴリー
    </h2>
    <div class="text-center">
        @foreach ($pop_categories as $category)
        <button class="ml-1 mr-1 rounded-pill btn pop-btn">
            <a class="" href="{{route('category',$category->category_id)}}">{{$category->category->name}}</a>
        </button>
        @endforeach
    </div>
</div>
<div class="sub-color">
    <div class="ml-5 mr-5">
        @foreach ($pop_categories as $category)
        <div>
            <div class="mt-4 mb-5 pt-5">
                <h2 class="d-inline">
                    {{$category->category->name}}新着アイテム
                </h2>
                <a href="#" class="float-right">もっと見る ></a>
            </div>
            <div class="container">
                <div class="row">
                    @foreach ($category->items as $item)
                    <div class="col-3 content-color mr-1">
                        <a href="#">
                            <figure class="">
                                <div class="">
                                    <img src="{{asset("/storage/images/items/$item->image")}}"
                                        alt="Thumbnail of &quot;{{$item->name}}&quot;" class="img-fluid">
                                </div>
                                <figcaption><span>{{$item->name}}</span></figcaption>
                                <span aria-label="Price">¥{{$item->price}}</span>
                            </figure>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
@include('layoutes.sell_button')
@include('layoutes.footer')