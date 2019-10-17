@extends('layoutes.common')
@section('content')
<div class="sub-color">
    <div class="ml-5 mr-5 pt-3 pb-1 w-75 mx-auto">
        <div class="text-center content-color pb-5">
            <div class="mt-4 mb-5 pt-5">
                @if (Session::has('message'))
                <p class="alert alert-success" role="alert">{{ session('message') }}</p>
                @endif
                <h2 class="d-inline ml-3">
                    {{$item->name}}
                </h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 item-image">
                        <div class="">
                            <div class="" style="">
                                <div class="">
                                    <img alt="{{$item->name}}" class="img-fluid w-75"
                                        src="{{asset("/storage/images/items/$item->image")}}" style="opacity: 1;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 w-50 mt-1">
                        <table class="table table-bordered item-detail-table">
                            <tr>
                                <th class="text-left">出品者</th>
                                <td class="text-left">
                                    <a href="" class="detail-link">{{$item->user->name}}</a>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-left">カテゴリー</th>
                                <td class="text-left">
                                    <a href="/mercariClone/public/category/{{$item->category->id}}" class="detail-link">
                                        {{$item->category->name}}
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-left">商品の状態</th>
                                <td class="text-left">{{$item->status->name}}</td>
                            </tr>
                            <tr>
                                <th class="text-left">配送料の負担</th>
                                <td class="text-left">{{$item->delivery->name}}</td>
                            </tr>
                            <tr>
                                <th class="text-left">配送の方法</th>
                                <td class="text-left">未定</td>
                            </tr>
                            <tr>
                                <th class="text-left">配送元地域</th>
                                <td class="text-left">{{$item->area->name}}</td>
                            </tr>
                            <tr>
                                <th class="text-left">発送日の目安</th>
                                <td class="text-left">{{$item->duration->name}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div>
                <span class="item-price">¥{{number_format($item->price)}}</span>
                <span class="item-tax ml-2"> (税込)</span>
                <span class="item-shipping-fee">送料込み</span>
            </div>
            @if($item->user_id === Auth::id())
            <button type="button" class="btn btn-danger btn-lg w-75" 
                onclick="location.href='{{ route('sell.edit', ['item_id' => $item->id]) }}'">
                商品の編集
            </button>
            <p>or</p>
            <button type="button" class="btn btn-secondary btn-lg w-75" data-toggle="modal" data-target="#deleteItemModal">
                この商品を削除する
            </button>
            @include('item.delete_modal')
            @elseif($item->buyer_id === Auth::id())
            <button type="button" class="btn btn-secondary btn-lg disabled w-50">
                購入済み
            </button>
            @elseif($item->buyer_id)
            <button type="button" class="btn btn-secondary btn-lg disabled w-50">
                売り切れました
            </button>
            @else
            <button type="button" class="btn btn-danger btn-lg w-75"
                onclick="location.href='{{ route('buy', ['item_id' => $item->id]) }}'">
                購入画面に進む
            </button>
            @endif
            <div class="mt-4 ml-5 w-75 text-left mx-auto">
                {!! nl2br(e($item->explanation))!!}
            </div>
        </div>
    </div>
    <div class="ml-5 mr-5 pb-5 w-75 mx-auto">
        <div class="content-color text-center pb-5">
            <div class="pt-3">
                <form action="#" method="POST" class="">
                    <input type="hidden" name="" value="">
                    <input type="hidden" name="item_id" value="#">
                    <input type="hidden" name="redirect_url_key" value="#">
                    <textarea type="text" name="body" value="" class="w-75"></textarea>
                    <div></div>
                    <button type="submit" class="btn btn-secondary btn-lg w-75">
                        <span>コメントする</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@include('layoutes.footer')