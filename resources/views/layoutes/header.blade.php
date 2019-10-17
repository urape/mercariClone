<header class="container nav-color">
    <nav class="navbar row pb-0">
        <div class="ml-1 col-xs-2">
        <a href="{{route('top')}}">
                <img src="https://web-jp-assets.mercdn.net/_next/static/images/logo-acdd90ac4f472d5a6f7a330d33ab1225.svg"
                    alt="Mercari" class="logo">
            </a>
        </div>
        <div class="d-inline form-group">
            <form action="{{route('search')}}" class="form-inline col-xs-10 mr-4" method="get">
                <div class="input-group">
                    <input type="search" placeholder="何かお探しですか？" id="nav-search" class="input-group-prepen form-control"
                        name="keyword" value="@isset($keyword) {{$keyword}} @endisset">
                    <button class="input-group-text">
                        <svg width="16" height="16" viewbox="0 0 16 16">
                            <path fill="currentColor" fill-rule="nonzero"
                                d="M11.435 10.063h-.723l-.256-.247a5.92 5.92 0 0 0 1.437-3.87 5.946 5.946 0 1 0-5.947 5.947 5.92 5.92 0 0 0 3.87-1.437l.247.256v.723L14.637 16 16 14.637l-4.565-4.574zm-5.489 0A4.111 4.111 0 0 1 1.83 5.946 4.111 4.111 0 0 1 5.946 1.83a4.111 4.111 0 0 1 4.117 4.116 4.111 4.111 0 0 1-4.117 4.117z">
                            </path>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </nav>
    <nav class="navbar row pt-0">
        <div class="d-flex flex-row ml-1">
            <div class="mr-3">
                <svg aria-hidden="true" width="20" height="16" viewBox="0 0 20 16">
                    <path class="nav-icon" fill="currentColor" fill-rule="nonzero" d="M18.799 15.25h-11.5a1.25 1.25 0 1 1
                                        0-2.5h11.5a1.25 1.25 0 0 1 0 2.5zm0-6h-11.5a1.25 1.25 0 1 1 0-2.5h11.5a1.25 1.25
                                        0 0 1 0 2.5zm0-6h-11.5a1.25 1.25 0 1 1 0-2.5h11.5a1.25 1.25 0 0 1 0 2.5zM2 16a2
                                        2 0 1 0 0-4 2 2 0 0 0 0 4zm0-6a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0-6a2 2 0 1 0 0-4 2
                                        2 0 0 0 0 4z">
                    </path>
                </svg>
                <div class="btn-group p-0">
                    <div class="dropdown drop-hover">
                        <span class="dropdown-toggle nav-font" id="nav-category" data-toggle="dropdown">カテゴリーから探す</span>
                        <ul class="dropdown-menu">
                            @foreach($categories as $parent_category)
                            <li class="mb-1">
                                <a href="/mercariClone/public/category/{{$parent_category["id"]}}"
                                    class="dropdown-item dropdown-list">{{$parent_category['name']}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex mr-3">
            <div class="mr-3">
                @if(Auth::check())
                <a href="{{ route('mypage') }}" class="my-link">マイページ</a>
                @else
                <button class="btn btn-danger btn-sm"
                    onclick="location.href='/mercariClone/public/register'">新規会員登録</button>
                <button class="btn btn-outline-primary btn-sm"
                    onclick="location.href='/mercariClone/public/login'">ログイン</button>
                @endif
            </div>
        </div>
    </nav>
</header>