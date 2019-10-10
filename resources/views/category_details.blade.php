@extends('layoutes.common')
@section('content')
<div class="sub-color">
    <div class="ml-5 mr-5 w-75 mx-auto">
        <div>
            <div class="mt-4 mb-5 pt-5">
                <h2 class="d-inline ml-3">
                    {{$category_name['name']}}の商品一覧
                </h2>
            </div>
            <div class="container">
                <div class="row">
                    @foreach ($items as $item)
                    <div class="col-3">
                        <a href="/mercariClone/public/item/{{$item['id']}}">
                            <figure class="">
                                <div class=""><img src="{{asset("/storage/images/items/$item[image]")}}"
                                        alt="Thumbnail of &quot;{{$item['name']}}&quot;" class="img-fluid">
                                </div>
                                <figcaption><span>{{$item['name']}}</span></figcaption>
                                <span aria-label="Price">¥{{$item['price']}}</span>
                            </figure>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endsection
    @include('layoutes.sell_button')