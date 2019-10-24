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
                                    <img alt="{{$item->name}}" class="owl-item img-fluid w-75"
                                        src="{{$item->image}}" style="opacity: 1;">
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
            @include('item.button')
            <div class="mt-4 ml-5 w-75 text-left mx-auto">
                {!! nl2br(e($item->explanation)) !!}
            </div>
            <div class="text-left mx-auto w-75 mt-1">
                <button class="ml-1 mr-1 rounded-pill btn like-btn" id="like">
                    <i class="far fa-heart"></i>
                    <span>いいね!</span>
                    <span>{{$likes}}</span>
                </button>
            </div>
        </div>
    </div>
    @include('item.comment')
</div>
@endsection
@include('layoutes.footer')
@section('script')
<script>
    $(function(){
        $('#like').on('click', function() {
            console.log(this);
            $.ajax({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                url: "{{ route('like.create', ['item_id' => $item->id]) }}",
                type: 'POST',
                data: { 'item_id': {{ $item->id }} },
                dataType:"json",
            })
            .done(function(data) {
                alert(JSON.stringify(data));
            })
            .fail(function(data) {
                alert('失敗');
            });
        });
    });
</script>
@endsection