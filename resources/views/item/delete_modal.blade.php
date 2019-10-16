<div class="modal fade" id="deleteItemModal" tabindex="-1" role="dialog" aria-labelledby="deleteItemModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4>確認</h4>
                削除すると二度と復活できません。
                <br>
                削除する代わりに停止することもできます。
                <br>
                <br>
                本当に削除しますか？
            </div>
            <div class="modal-body text-center">
                <button type="button" class="btn btn-secondary w-25" data-dismiss="modal">閉じる</button>
                <form action="{{ route('item.delete') }}" method="post" class="d-inline">
                    @csrf
                    <input type="hidden" value="{{$item->id}}" name="item_id">
                    <button class="btn btn-danger w-25">削除</button>
                </form>
            </div>
        </div>
    </div>
</div>
