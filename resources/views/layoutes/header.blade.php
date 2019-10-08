<header class="container nav-color">
    <nav class="navbar row pb-0">
        <div class="ml-1 col-xs-2">
            <a href="/mercariClone/public/top">
                <img src="https://web-jp-assets.mercdn.net/_next/static/images/logo-acdd90ac4f472d5a6f7a330d33ab1225.svg"
                    alt="Mercari" class="logo">
            </a>
        </div>
        <form action="#" class="form-inline col-xs-10 mr-4">
            <div class="input-group">
                <input type="search" placeholder="何かお探しですか？" id="nav-search" class=" input-group-prepen form-control">
                <button class="input-group-text">
                    <svg width="16" height="16" viewbox="0 0 16 16">
                        <path fill="currentColor" fill-rule="nonzero"
                            d="M11.435 10.063h-.723l-.256-.247a5.92 5.92 0 0 0 1.437-3.87 5.946 5.946 0 1 0-5.947 5.947 5.92 5.92 0 0 0 3.87-1.437l.247.256v.723L14.637 16 16 14.637l-4.565-4.574zm-5.489 0A4.111 4.111 0 0 1 1.83 5.946 4.111 4.111 0 0 1 5.946 1.83a4.111 4.111 0 0 1 4.117 4.116 4.111 4.111 0 0 1-4.117 4.117z">
                        </path>
                    </svg>
                </button>
            </div>
        </form>
    </nav>
    <nav class="navbar pt-0">
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
            <div class="">
                <svg aria-hidden="true" width="23" height="16" viewBox="0 0 23 16" class="sc-csuQGl sc-caSCKo kspmux">
                    <path class="nav-icon" fill="currentColor" fill-rule="nonzero"
                        d="M6.315 0L4.473 1.806 2.833.019.73 1.977l1.69 1.84L1.198 5.02c-1.594 1.594-1.594 4.188-.01 5.772L6.3 16h13.272a3.08 3.08 0 0 0 3.077-3.077V3.076A3.08 3.08 0 0 0 19.57 0H6.315zm13.46 12.925a.211.211 0 0 1-.205.205H7.504L3.227 8.771a1.226 1.226 0 0 1-.01-1.71L4.38 5.92l1.28 1.371a2.68 2.68 0 1 0 2.13-1.93L6.433 3.907 7.49 2.87h12.082a.211.211 0 0 1 .206.205v9.848h-.002z">
                    </path>
                </svg>
                <div class="btn-group p-0">
                    <div class="dropdown drop-hover">
                        <span class="dropdown-toggle nav-font" id="nav-brand" data-toggle="dropdown">ブランドから探す</span>
                        <ul class="dropdown-menu">
                            <li class="dropright drop-hover">
                                <a href="#" class="dropdown-item dropdown-toggle dropdown-list"
                                    data-toggle=" dropdown">メニュー1</a>
                                <ul class="dropdown-menu">
                                    <li class="dropright"><a href="#" class="dropdown-item dropdown-list">aa</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex mr-3">
            <div class="mr-3">
                @if(Auth::check())
                <button id="logout" class="btn btn-outline-primary btn-sm">ログアウト</button>
                <form id="logout-form" class="m-0" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
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