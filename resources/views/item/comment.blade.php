<div class="ml-5 mr-5 pb-5 w-75 mx-auto">
    <div class="content-color pb-5">
        <div class="w-75 mx-auto pt-2">
            <ul class="m-0 p-0">
                @foreach ($comments as $comment)
                <li>{{$comment->user->name}}: {{$comment->comment}}</li>
                @endforeach
            </ul>
            <div class="pt-3">
                @if(Auth::check())
                <form action="{{route('comment.create', ['item_id' => $item->id])}}" method="POST" class="">
                    @csrf
                    <input type="hidden" name="item_id" value="{{$item->id}}">
                    <textarea type="text" name="comment" value="" class="w-100">{{old('comment')}}</textarea>
                    <div class="">
                        @if($errors->any())
                        <div class="err-msg">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-secondary btn-lg w-100">
                        <span>コメントする</span>
                    </button>
                </form>
                @endif
            </div>
        </div>
    </div>
</div>