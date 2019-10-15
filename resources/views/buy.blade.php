@include('layoutes.head')

<body class="sub-color">
    @include('layoutes.header_sub')
    <main>
        <section class="w-75 mx-auto sell-back pb-2">
            <h2 class="text-center mb-2 pt-3">購入内容の確認</h2>
            <div class="mb-4 border-top buy-content text-center">
                <div class="ml-5 mt-3">
                    <div class="mb-2">
                        <img alt="{{$item->name}}" class="buy-item w-25"
                            src="{{asset("/storage/images/items/$item->image")}}" style="opacity: 1;">
                    </div>
                    <h5>{{$item->name}}</h5>
                    <div class="buy-price-cell d-inline">支払い金額</div>
                    <span class="buy-price-cell">¥{{number_format($item->price)}}</span>
                </div>
                <form action="{{ route('buy.update',['id' => $item->id]) }}" method="post" class="mt-2">
                    @csrf
                    <input type="hidden" value="{{$item->id}}" name="id">
                    <div class="precaution">
                        <div class="mt-4 ml-4 mb-4">
                            <div class="text-center mt-4">
                                <button class="btn btn-danger btn-lg w-50">購入する</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
    @include('layoutes.footer_sub')
</body>
@include('layoutes.script')