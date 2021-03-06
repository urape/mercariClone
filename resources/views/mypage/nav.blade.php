<div class="mt-5 pb-5">
    <nav>
        <ul class="list-group">
            <h3><a href="{{route('mypage')}}" class="my-link">マイページ</a></h3>
            <li class="list-group-item">
                <a href="{{route('like')}}" class="my-link">いいね！一覧</a>
            </li>
            <li class="list-group-item">
                <a href="{{route('sell')}}" class="my-link">出品する</a></li>
            <li class="list-group-item">
                <a href="{{route('exhibiting')}}" class="my-link">出品した商品 - 出品中</a></li>
            <li class="list-group-item">
                <a href="{{route('progress')}}" class="my-link">出品した商品 - 取引中</a>
            </li>
            <li class="list-group-item">
                <a href="{{route('completed')}}" class="my-link">出品した商品 - 売却済み</a>
            </li>
            <li class="list-group-item">
            <a href="{{route('purchase')}}" class="my-link">購入した商品 - 取引中</a>
            </li>
            <li class="list-group-item">
            <a href="{{route('purchased')}}" class="my-link">購入した商品 - 取引済み</a>
            </li>
        </ul>
        <ul class="list-group mt-3">
            <h3>設定</h3>
            <li class="list-group-item"><a href="" class="my-link">プロフィール</a></li>
            <li class="list-group-item"><a href="{{route('email_password')}}" class="my-link">メール/パスワード</a></li>
            <li class="list-group-item">
                <form method="post" name="logout2" action="{{ route('logout') }}" class="d-inline">
                    @csrf
                    <input type="hidden">
                    <a href="javascript:logout2.submit()" class="my-link">ログアウト</a>
                </form>
            </li>
        </ul>
    </nav>
</div>