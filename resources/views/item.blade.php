@extends('layoutes.common')
@section('content')
<div class="sub-color">
    <div class="ml-5 mr-5 pt-3 pb-1 w-75 mx-auto">
        <div class="text-center content-color pb-5">
            <div class="mt-4 mb-5 pt-5">
                <h2 class="d-inline ml-3">
                    {{$item['name']}}
                </h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col6 w-50 item-image">
                        AAAAAA
                    </div>
                    <div class="col6 w-50 pr-5">
                        <table class="table table-bordered item-detail-table ">
                            <tr>
                                <th class="text-left">出品者</th>
                                <td class="text-left ">{{$item['user_id']}}</td>
                            </tr>
                            <tr>
                                <th class="text-left">カテゴリー</th>
                                <td class="text-left">{{$item['category_id']}}</td>
                            </tr>
                            <tr>
                                <th class="text-left">商品の状態</th>
                                <td class="text-left">{{$item['status_id']}}</td>
                            </tr>
                            <tr>
                                <th class="text-left">配送料の負担</th>
                                <td class="text-left">{{$item['status_id']}}</td>
                            </tr>
                            <tr>
                                <th class="text-left">配送の方法</th>
                                <td class="text-left">{{$item['status_id']}}</td>
                            </tr>
                            <tr>
                                <th class="text-left">配送元地域</th>
                                <td class="text-left">{{$item['status_id']}}</td>
                            </tr>
                            <tr>
                                <th class="text-left">発送日の目安</th>
                                <td class="text-left">{{$item['status_id']}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div>
                <span class="item-price">¥{{$item['price']}}</span>
                <span class="item-tax ml-2"> (税込)</span>
                <span class="item-shipping-fee">送料込み</span>
            </div>
            <button type="button" class="btn btn-secondary w-75">売り切れました</button>
            <div class="mt-4">
                <p>{{$item['explanation']}}</p>
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
                    <button type="submit" class="btn btn-secondary w-75">
                        <span>コメントする</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection