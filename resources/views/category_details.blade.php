@extends('layoutes.common')
@section('content')
@include('layoutes.header_nav')
<div class="sub-color">
    <div class="ml-5 mr-5 w-75 mx-auto">
        <div>
            <div class="mb-5 pt-5">
                <h2 class="d-inline ml-3">
                    {{$category->name}}の商品一覧
                </h2>
            </div>
            <div class="container">
                <div class="row row-height">
                    @foreach ($items as $item)
                    <div class="col-2 mb-3 item mr-3">
                        <div class="item-body">
                            <a href="/mercariClone/public/item/{{$item->id}}">
                                <figure class="">
                                    <div class="hoo">
                                        <div class="h-75">
                                            <img src="{{asset("/storage/images/items/$item->image")}}"
                                                alt="Thumbnail of &quot;{{$item->name}}&quot;"
                                                class="img-fluid item-img mb-5">
                                        </div>
                                        <div class="item-box mt-4">
                                            <figcaption><span>{{$item->name}}</span></figcaption>
                                            <span aria-label="Price">¥{{$item->price}}</span>
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
    @endsection
    @include('layoutes.sell_button')