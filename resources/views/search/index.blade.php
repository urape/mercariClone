@extends('layoutes.common')
@section('content')
<div class="sub-color">
    <div class="container-fluid m-0 pt-4">
        <div class="row">
            @include('search.side_bar')
            <div class="col-12 col-md-9">
                <div class="">
                    <h5 class="d-inline ml-3">
                        @if(isset($keyword))
                        {{$keyword}}
                        @else
                        すべて
                        @endif
                    </h5>の検索結果
                </div>
                <div class="container">
                    <div class="row">
                        @if ($items->count() === 0)
                        <p>該当する商品が見つかりません。検索条件を変えて、再度お試しください。</p>
                        @else
                            @foreach ($items as $item)
                            <div class="col-12 col-md-2 mb-3 item p-0 mr-2">
                                <div class="item-body">
                                    <a href="{{route('item',['item_id' => $item->id])}}">
                                        <figure class="">
                                            <div class="">
                                                <div class="pb-4">
                                                    <img src="{{asset("/storage/images/items/$item->image")}}"
                                                        alt="Thumbnail of &quot;{{$item->name}}&quot;"
                                                        class="item-img mb-5">
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
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@include('layoutes.sell_button')
@include('layoutes.footer')