@include('layoutes.head')

<body class="sub-color">
    @include('layoutes.header_sub')
    <main>
        <div class="ml-5 mr-5 pt-3 pb-1 w-75 mx-auto">
            <div class="content-color pb-5">
                <div class="text-center mt-4 mb-4 pt-5">
                    <h2 class="d-inline ml-3">
                        会員情報入力
                    </h2>
                </div>
                <div class="border-top">
                    <form action="{{route('register')}}" method="POST">
                        @csrf
                        <div class="mx-auto w-50 mt-4">
                            <div class="form-group"">
                                <label>ニックネーム</label>
                                <span class=" form-require">必須</span>
                                <input type="text" value="" name="name" placeholder="例) メルカリ太郎" class="form-control"
                                    id="name">
                                @if($errors->get('name'))
                                <div class="err-msg">
                                    @foreach($errors->get('name') as $message)
                                    <p>{{ $message }}</p>
                                    @endforeach
                                </div>
                                @endif
                            </div>
                            <div class="form-group"">
                                <label>メールアドレス</label>
                                <span class=" form-require">必須</span>
                                <input type="text" value="" name="email" placeholder="PC・携帯どちらでも可" class="form-control"
                                    id="email">
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
                            <div class="form-group"">
                                <label>パスワード (確認)</label>
                                <span class=" form-require">必須</span>
                                <input type="password" value="" name="password_confirmation" placeholder="7文字以上"
                                    class="form-control" id="password_confirm">
                            </div>
                        </div>
                        <div class="text-center mt-5">
                            <button type="submit" class="btn btn-danger w-50">登録する</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    @include('layoutes.footer_sub')
</body>
@include('layoutes.script')