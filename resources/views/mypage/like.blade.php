@extends('mypage.common')
@section('mycontent')
<div class="mypage-content">
    <h5 class="border-bottom pt-3 pb-3 pl-3 mb-1">いいね!一覧</h5>
    <div class="container">
        <div class="my-item m-0">
            <ul class="m-0 p-0">
                @if($likes->count() === 0)
                <li class="mypage-item-not-found bold">いいね!した商品がありません</li>
                @else
                    @foreach ($likes as $like)
                    <li class="my-item-list">
                        <a href="{{route('item',$like->item->id)}}" class="b-link">
                            <figure class="my-item-list">
                                <img src="{{asset($like->item->image)}}" alt="" class="my-item-img">
                                {{$like->item->name}}
                            </figure>
                        </a>
                    </li>
                    @endforeach
                @endif
            </ul>
        </div>
        {{$likes->links()}}
    </div>
</div>

@endsection