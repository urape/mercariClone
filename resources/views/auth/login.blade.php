@include('layoutes.head')

<body class="sub-color">
    <header class="mx-auto mb-3">
        <h1 class="mt-5 w-50">
            <a href="./top" class="">
                <img src="//www-mercari-jp.akamaized.net/assets/img/common/common/logo.svg?3761641567" alt="mercari"
                    class="sell-header-img">
            </a>
        </h1>
    </header>
    <main>
        <div class="ml-5 mr-5 pt-3 pb-1 w-75 mx-auto">
            <div class="content-color pb-5">
                <div class="text-center mt-4 mb-4 pt-5">
                    <p class="supplement m-0">アカウントをお持ちでない方はこちら</p>
                    <button class="btn btn-primary w-50" onclick="location.href='/mercariClone/public/register'">
                        新規会員登録
                    </button>
                </div>
                <div class="border-top">
                    <form action="{{route('login')}}" method="POST">
                        @csrf
                        <div class="mx-auto w-50 mt-4">
                            <div class="form-group"">
                                <label>メールアドレス</label>
                                <span class=" form-require">必須</span>
                                <input type="text" value="" name="email" placeholder="PC・携帯どちらでも可" class="form-control">
                                @if($errors->get('email'))
                                <div class="err-msg">
                                    @foreach($errors->get('email') as $message)
                                    <p>{{ $message }}</p>
                                    @endforeach
                                </div>
                                @endif
                            </div>
                            <div class="form-group"">
                                <label>パスワード</label>
                                <span class=" form-require">必須</span>
                                <input type="text" value="" name="password" placeholder="7文字以上" class="form-control"
                                    id="password">
                                @if($errors->get('password'))
                                <div class="err-msg">
                                    @foreach($errors->get('password') as $message)
                                    <p>{{ $message }}</p>
                                    @endforeach
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="text-center mt-5">
                            <button type="submit" class="btn btn-danger w-50">ログイン</button>
                        </div>
                    </form>
                </div>
                <div class="text-center mt-5">
                    <a href=" {{ route('password.request') }}">パスワードをお忘れの方</a>
                </div>
            </div>
        </div>
    </main>
    <footer class="mt-5 mb-5 mx-auto">
        <nav>
            <ul class="list-inline sell-footer">
                <li class="list-inline-item"><a href="">プライバシーポリシー</a></li>
                <li class="list-inline-item"><a href="">メルカリ利用規約</a></li>
                <li class="list-inline-item"><a href="">特定商取引に関する表記</a></li>
            </ul>
        </nav>
        <div class="text-center">
            <a href="./top" class="">
                <img src="//www-mercari-jp.akamaized.net/assets/img/common/common/logo-gray.svg?3761641567"
                    alt="mercari" width="80" height="65">
            </a>
            <p class="sell-footer mt-1">© 2019 Mercari</p>
        </div>
    </footer>
</body>
@include('layoutes.script')