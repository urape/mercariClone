@extends('layoutes.common')
@section('content')
@include('/layoutes/calousel')
<div class="">
    <h2 class="text-center mt-5 mb-3">
        人気のカテゴリー
    </h2>
    <div class="text-center">
        <button class="ml-1 mr-1 rounded-pill btn pop-btn"><a class="" href=" #">レディース</a></button>
        <button class="ml-1 mr-1 rounded-pill btn pop-btn"><a class="" href="#">メンズ</a></button>
        <button class="ml-1 mr-1 rounded-pill btn pop-btn"><a class="" href="#">家電・スマホ・カメラ</a></button>
        <button class="ml-1 mr-1 rounded-pill btn pop-btn"><a class="" disabled" href="#">おもちゃ・ホビー・グッズ</a></button>
    </div>
</div>
<div class="sub-color">
    <div>
        <h2 class="mt-4 ml-5 mb-5 pt-5">
            レディース新着アイテム
        </h2>
    </div>
    <div>
        <h2 class="mt-5 ml-5 mb-5">
            メンズ新着アイテム
        </h2>
    </div>
    <div>
        <h2 class="mt-5 ml-5 mb-5">
            家電・スマホ・カメラ新着アイテム
        </h2>
    </div>
    <div>
        <h2 class="mt-5 ml-5 mb-5 pb-5">
            おもちゃ・ホビー・グッズ新着アイテム
        </h2>
    </div>
</div>

<div class="">
    <h2 class="text-center mt-5 mb-3">
        人気のブランド
    </h2>
    <div class="text-center">
        <button class="ml-1 mr-1 rounded-pill btn pop-btn""><a class="" href=" #">シャネル</a></button>
        <button class="ml-1 mr-1 rounded-pill btn pop-btn""><a class="" href=" #">ルイヴィトン</a></button>
        <button class="ml-1 mr-1 rounded-pill btn pop-btn""><a class="" href=" #">シュプリーム</a></button>
        <button class="ml-1 mr-1 rounded-pill btn pop-btn""><a class="" disabled" href="#">ナイキ</a></button>
    </div>
</div>
<div class="sub-color">
    <div>
        <h2 class="mt-4 ml-5 mb-5 pt-5">
            シャネル新着アイテム
        </h2>
    </div>
    <div>
        <h2 class="mt-5 ml-5 mb-5">
            ルイヴィトン新着アイテム
        </h2>
    </div>
    <div>
        <h2 class="mt-5 ml-5 mb-5">
            シュプリーム新着アイテム
        </h2>
    </div>
    <div>
        <h2 class="mt-5 ml-5 mb-5 pb-5">
            ナイキ新着アイテム
        </h2>
    </div>
</div>
@endsection