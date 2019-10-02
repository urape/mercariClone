<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mercari Clone</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header class="container">
        <nav class="navbar row">
            <div class="ml-1 col-xs-2">
                <a href="#">
                    <img src="https://web-jp-assets.mercdn.net/_next/static/images/logo-acdd90ac4f472d5a6f7a330d33ab1225.svg"
                        alt="Mercari" class="logo">
                </a>
            </div>
            <form action="#" class="form-inline col-xs-10 mr-4">
                <div class="input-group">
                    <input type="search" placeholder="何かお探しですか？" id="nav-search"
                        class=" input-group-prepen form-control">
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
        <nav class="navbar">
            <div class="d-flex flex-row ml-1">
                <div class="mr-3">
                    <a class="" href="#">
                        <svg aria-hidden="true" width="20" height="16" viewBox="0 0 20 16">
                            <path class="nav-icon" fill="currentColor" fill-rule="nonzero" d="M18.799 15.25h-11.5a1.25 1.25 0 1 1
                                        0-2.5h11.5a1.25 1.25 0 0 1 0 2.5zm0-6h-11.5a1.25 1.25 0 1 1 0-2.5h11.5a1.25 1.25
                                        0 0 1 0 2.5zm0-6h-11.5a1.25 1.25 0 1 1 0-2.5h11.5a1.25 1.25 0 0 1 0 2.5zM2 16a2
                                        2 0 1 0 0-4 2 2 0 0 0 0 4zm0-6a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0-6a2 2 0 1 0 0-4 2
                                        2 0 0 0 0 4z">
                            </path>
                        </svg>
                        <span class="nav-font">カテゴリーから探す</span>
                    </a>
                </div>
                <div class="">
                    <a href="#">
                        <svg aria-hidden="true" width="23" height="16" viewBox="0 0 23 16"
                            class="sc-csuQGl sc-caSCKo kspmux">
                            <path class="nav-icon" fill="currentColor" fill-rule="nonzero"
                                d="M6.315 0L4.473 1.806 2.833.019.73 1.977l1.69 1.84L1.198 5.02c-1.594 1.594-1.594 4.188-.01 5.772L6.3 16h13.272a3.08 3.08 0 0 0 3.077-3.077V3.076A3.08 3.08 0 0 0 19.57 0H6.315zm13.46 12.925a.211.211 0 0 1-.205.205H7.504L3.227 8.771a1.226 1.226 0 0 1-.01-1.71L4.38 5.92l1.28 1.371a2.68 2.68 0 1 0 2.13-1.93L6.433 3.907 7.49 2.87h12.082a.211.211 0 0 1 .206.205v9.848h-.002z">
                            </path>
                        </svg>
                        <span class="nav-font">ブランドから探す</span>
                    </a>
                </div>
            </div>
            <div class="d-flex mr-3">
                <div class="mr-3">
                    <button class="btn btn-danger btn-sm">新規会員登録</button>
                    <button class="btn btn-outline-primary btn-sm">ログイン</button>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="../public/images/top1.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../public/images/top2.png" alt="Second slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="">
            <h2 class="text-center mt-5">
                人気のカテゴリー
            </h2>
            <nav class="nav">
                <button class="ml-1 mr-1"><a class="" href="#">レディース</a></button>
                <button class="ml-1 mr-1"><a class="" href="#">メンズ</a></button>
                <button class="ml-1 mr-1"><a class="" href="#">家電・スマホ・カメラ</a></button>
                <button class="ml-1 mr-1"><a class="" disabled" href="#">おもちゃ・ホビー・グッズ</a></button>
            </nav>
        </div>
    </main>
    <footer>
        <div>
            <img src="../public/images/top3.png" alt="" class="w-100">
        </div>
        <div class="container">
            <div class="row mt-4">
                <div class="col">
                    <h3>メルカリについて</h3>
                    <ul class="footer-cont">
                        <li><a href="#">会社概要（運営会社）</a></li>
                        <li><a href="#">採用情報</a></li>
                        <li><a href="#">プレスリリース</a></li>
                        <li><a href="#">公式ブログ</a></li>
                        <li class="mb-3"><a href="#">メルカリロゴ利用ガイドライン</a></li>
                        <a href="https://twitter.com/mercari_jp" target="_blank" class="mr-4 sns-logo"><svg
                                aria-hidden="true" width="21" height="16" viewBox="0 0 21 16"
                                class="sc-bRBYWo sc-kkbgRg YJyBI">
                                <path fill="currentColor"
                                    d="M6.343 15.969c7.61 0 11.773-6.134 11.773-11.444 0-.172 0-.345-.008-.517a8.303 8.303 0 0 0 2.066-2.086 8.576 8.576 0 0 1-2.38.635A4.07 4.07 0 0 0 19.616.329a8.377 8.377 0 0 1-2.63.973 4.186 4.186 0 0 0-3.019-1.27c-2.283 0-4.14 1.803-4.14 4.023 0 .314.041.62.106.918A11.866 11.866 0 0 1 1.404.769a3.936 3.936 0 0 0-.557 2.023c0 1.396.735 2.628 1.84 3.35a4.278 4.278 0 0 1-1.872-.503v.055c0 1.945 1.428 3.577 3.317 3.945-.347.094-.71.141-1.09.141-.266 0-.524-.023-.774-.07.524 1.6 2.057 2.76 3.865 2.792a8.452 8.452 0 0 1-5.14 1.725 8.19 8.19 0 0 1-.985-.054 12.02 12.02 0 0 0 6.335 1.796"
                                    fill-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="https://www.facebook.com/mercarijp" target="_blank" class="sns-logo"><svg
                                aria-hidden="true" width="16" height="16" viewBox="0 0 16 16"
                                class="sc-kEYyzF sc-ESoVU irnUQm">
                                <path fill="currentColor"
                                    d="M15.111 0H.89A.889.889 0 0 0 0 .889V15.11c0 .491.398.889.889.889h7.658V9.813H6.469V7.391h2.078V5.613c0-2.066 1.262-3.193 3.11-3.193.623-.002 1.244.03 1.863.096v2.15h-1.276c-1.002 0-1.197.478-1.197 1.178v1.543h2.397l-.31 2.422h-2.087V16h4.064c.491 0 .889-.398.889-.889V.89A.889.889 0 0 0 15.111 0z"
                                    fill-rule="evenodd"></path>
                            </svg>
                        </a>
                    </ul>
                </div>
                <div class="col">
                    <h3>ヘルプ&ガイド</h3>
                    <ul class="footer-cont">
                        <li><a href=" #">メルカリガイド</a></li>
                        <li><a href="#">らくらくメルカリ便</a></li>
                        <li><a href="#">ゆうゆうメルカリ便</a></li>
                        <li><a href="#">大型メルカリ便</a></li>
                        <li><a href="#">車体取引ガイド</a></li>
                        <li><a href="#">メルカリあんしん・あんぜん宣言！</a></li>
                        <li><a href="#">偽ブランド品撲滅への取り組み</a></li>
                        <li><a href="#">メルカリボックス</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h3>プライバシーと利用規約</h3>
                    <ul class="footer-cont">
                        <li><a href="#">プライバシーポリシー</a></li>
                        <li><a href="#">メルカリ利用規約</a></li>
                        <li><a href="#">あんしんスマホサポート制度に関する利用特約</a></li>
                        <li><a href="#">コンプライアンスポリシー</a></li>
                        <li><a href="#">個人データの安全管理に係る基本方針</a></li>
                        <li><a href="#">特定商取引に関する表記</a></li>
                        <li><a href="#">資金決済法に基づく表示</a></li>
                        <li><a href="#">法令順守と犯罪抑止のために</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h3>国</h3>
                    <ul class="footer-cont">
                        <li><a href="#">日本</a></li>
                        <li><a href="#">United States</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-logo ml-5 mb-5">
            <img src="https://web-jp-assets.mercdn.net/_next/static/images/logo-white-1a0696cf557ee1ed6f3c3444661d21ad.svg"
                alt="Mercari" class="">
            <div class=" w-100 ml-5 c-mark text-center">© 2019 Mercari</div>
        </div>
    </footer>
    <script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>