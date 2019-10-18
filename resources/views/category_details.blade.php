@extends('layoutes.common')
@section('content')
@include('layoutes.header_nav')
<div class="sub-color">
    <div class="ml-5 mr-5 w-75 mx-auto">
        <div>
            <div class="mb-3 pt-5">
                <h2 class="d-inline ml-3">
                    {{$category->name}}の商品一覧
                </h2>
            </div>
            <div class="container">
                <div class="row">
                    @foreach ($items as $item)
                    <div class="col-12 col-md-2 mb-3 item p-0 mr-2">
                        <div class="item-body">
                            <a href="{{route('item',['item_id' => $item->id])}}">
                                <figure class="">
                                    <div class="">
                                        <div class="pb-4">
                                            <img src="{{$item->image}}"
                                                alt="Thumbnail of &quot;{{$item->name}}&quot;" class="item-img mb-5">
                                        </div>
                                        <div class="item-box mt-4">
                                            <span>{{$item->name}}</span>
                                            <p><span aria-label="Price">¥{{$item->price}}</span></p>
                                        </div>
                                    </div>
                                </figure>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@include('layoutes.sell_button')
@include('layoutes.footer')