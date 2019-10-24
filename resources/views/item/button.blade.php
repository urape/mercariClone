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
@elseif($item->buyer_id === Auth::id() and Auth::check())
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