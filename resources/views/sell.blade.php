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
        <section class="w-75 mx-auto sell-back">
            <h2 class="text-center mb-2 pt-3">商品の情報を入力</h2>
            <form action="" class=" mt-2 pb-4">
                <div class="mb-4 border-top">
                    <div class="ml-5 mt-3">
                        <h3>
                            出品画像
                            <span class="form-require">必須</span>
                        </h3>
                        <p class="supplement">最大10枚までアップロードできます</p>
                        <div class="pr-5 w-100">
                            <div class="sell-upload-drop-file">
                                <input type="file" class="" multiple="" name="image1" style="display: none;">
                                <div class="pt-5 text-center">
                                    <p>ドラッグアンドドロップ</p>
                                    <p>またはクリックしてファイルをアップロード</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 border-top">
                    <div class="ml-5 mt-3">
                        <h3>
                            商品名
                            <span class="form-require">必須</span>
                        </h3>
                        <div class="mb-4 pr-5 w-100">
                            <div class="">
                                <input type="text" class="form-control w-100" placeholder=" 商品名(必須40文字まで)">
                            </div>
                        </div>
                        <h3>
                            商品の説明
                            <span class="form-require">必須</span>
                        </h3>
                        <div class="mt-3 pr-5 w-100">
                            <div class="">
                                <textarea rows="5" placeholder="商品の説明（必須 1,000文字以内）（色、素材、重さ、定価、注意点など）
                                    例）2010年頃に1万円で購入したジャケットです。ライトグレーで傷はありません。あわせやすいのでおすすめです。"
                                    class="form-control w-100">
                                </textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 mb-4 border-top container">
                    <div class="ml-5 mt-3 row">
                        <div class="col">商品の詳細</div>
                        <div class="col-8 pr-5 w-100 form-group d-inline">
                            <div class="">
                                <label>カテゴリー</label>
                                <span class="form-require">必須</span>
                                <div class="">
                                    <select class="form-control w-100"></select>
                                </div>
                                <label class="mt-4">商品の状態</label>
                                <span class="form-require">必須</span>
                                <div class="">
                                    <select class="form-control w-100"></select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 mb-4 border-top container">
                    <div class="ml-5 mt-3 row">
                        <div class="col">配送について</div>
                        <div class="col-8 pr-5 w-100 form-group d-inline">
                            <div class="">
                                <label>配送料の負担</label>
                                <span class="form-require">必須</span>
                                <div class="">
                                    <select class="form-control w-100"></select>
                                </div>
                                <label class="mt-4">発送元の地域</label>
                                <span class="form-require">必須</span>
                                <div class="">
                                    <select class="form-control w-100"></select>
                                </div>
                                <label class="mt-4">発送までの日数</label>
                                <span class="form-require">必須</span>
                                <div class="">
                                    <select class="form-control w-100"></select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 mb-4 border-top container">
                    <div class="ml-5 mt-3 row">
                        <div class="col">販売価格(300〜9,999,999)</div>
                        <div class="col-8 pr-5 w-100 form-group d-inline">
                            <div class="">
                                <label>価格</label>
                                <span class="form-require">必須</span>
                                <input type=" text" class="form-control d-inline float-right w-50" placeholder="例）300">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-top precaution">
                    <div class="mt-4 ml-4 mb-4">
                        <p class="m-0"><a href="#">禁止されている出品、行為</a>を必ずご確認ください。</p>
                        <p class="m-0">またブランド品でシリアルナンバー等がある場合はご記載ください。<a href="#">偽ブランドの販売</a>は犯罪であり処罰される可能性があります。</p>
                        <p class="m-0">また、出品をもちまして<a href="#">加盟店規約</a>に同意したことになります。</p>
                        <div class="text-center mt-4">
                            <button class="btn btn-danger w-75">出品する</button>
                            <a href="./top"><button class="btn btn-secondary mt-3 w-25">もどる</button></a>
                        </div>
                    </div>
                </div>
            </form>
        </section>
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

</html>