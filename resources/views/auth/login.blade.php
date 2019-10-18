@include('layoutes.head')

<body class="sub-color">
    @include('layoutes.header_sub')
    <main>
        <div class="ml-5 mr-5 pt-3 pb-1 w-75 mx-auto">
            <div class="content-color pb-5">
                <div class="text-center mt-4 mb-4 pt-5">
                    <p class="supplement m-0">アカウントをお持ちでない方はこちら</p>
                    <button class="btn btn-primary w-50" onclick="location.href='{{route('register')}}'">
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
                                <input type="password" value="" name="password" placeholder="7文字以上" class="form-control"
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
                    <a href="#">パスワードをお忘れの方</a>
                </div>
            </div>
        </div>
    </main>
    @include('layoutes.footer_sub')
</body>
@include('layoutes.script')