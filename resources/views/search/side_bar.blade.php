<div class="col-12 col-md-3">
    <form action="{{route('search')}}" method="get">
        <select class="form-control w-100 mb-4" name="sort">
            <option value="">並び替え</option>
            <option value="price_asc"@if($request->sort == 'price_asc') selected @endif>価格の安い順</option>
            <option value="price_desc" @if($request->sort == 'price_desc') selected @endif>価格の高い順</option>
            <option value="created_asc" @if($request->sort == 'created_asc') selected @endif>出品の古い順</option>
            <option value="created_desc" @if($request->sort == 'created_desc') selected @endif>出品の新しい順</option>
        </select>
        <div class="side-bar">
            <div class="side-bar-category pt-2 pl-2 pr-2">
                <h3 class="mb-4">詳細検索</h3>
                <div class="mb-4">
                    <label for="">キーワード</label>
                    <input type="text" value="{{$keyword}}" name="keyword" class="form-control w-100">
                </div>
                <div class="mb-4">
                    <label for="">カテゴリーを選択する</label>
                    <select class="form-control w-100" name="category">
                        <option value="">すべて</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}" @if($category->id == $request->category) selected @endif>
                            {{$category->name}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="">価格</label>
                    <select class="form-control w-100" name="price">
                        <option value="">選択してください</option>
                        <option value="300-1000"@if($request->price == '300-1000') selected @endif>300 ~ 1000</option>
                        <option value="1000-5000"@if($request->price == '1000-5000') selected @endif>1000 ~ 5000</option>
                        <option value="5000-10000"@if($request->price == '5000-10000') selected @endif> 5000 ~ 10000</option>
                        <option value="10000-30000"@if($request->price == '10000-30000') selected @endif> 10000 ~ 30000</option>
                        <option value="30000-50000"@if($request->price == '30000-50000') selected @endif> 30000 ~ 50000</option>
                        <option value="50000"@if($request->price == '50000') selected @endif> 50000 ~</option>
                    </select>
                </div>
                <div class="text-center pb-4">
                    <button class="btn btn-secondary w-40 mt-3">クリア</button>
                    <button class="btn btn-danger w-40 mt-3">完了</button>
                </div>
            </div>
        </div>
    </form>
</div>