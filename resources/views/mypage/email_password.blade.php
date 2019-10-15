@extends('mypage.common')
@section('mycontent')
<div class="mypage-content">
    <h4 class="text-center border-bottom pt-3 pb-3">メール/パスワード</h4>
    <form action="" method="POST" class="pt-4 pb-5">
        <div class="w-50 mx-auto">
            <div class="form-group">
                <label for="exampleInputEmail1">メールアドレス</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="mail">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">現在のパスワード</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">新しいパスワード</label>
                <input type="password" class="form-control" name="password_confirmation" id="password-confirm"
                    placeholder="7文字以上">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">新しいパスワード確認</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="7文字以上">
            </div>
            <button type="submit" class="btn btn-danger mt-3 w-100">変更する</button>
        </div>
    </form>
</div>
@endsection