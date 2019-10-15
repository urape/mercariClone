@extends('layoutes.common')
@section('content')
@include('layoutes.header_nav')
<div class="pl-5 sub-color">
    <div class="container">
        <h2 class="mt-3 pt-4">
            カテゴリー一覧
        </h2>
        <div class="row">
            @foreach($categories as $category)
            <div class="col-4 mb-2">
                <button class="btn d-inline-block page-link text-dark"
                    onclick="location.href='/mercariClone/public/category/{{$category->id}}'">
                    {{$category->name}}
                </button>
            </div>
            @endforeach
        </div>
    </div>
    @foreach($categories as $category)
    <div class="mt-5 mb-5 pb-2 mx-auto w-65">
        <div class="major-category pl-2">{{$category->name}}</div>
        <div class="sub-category pb-2">
            <div class="ml-3 pt-3 mb-3">
                <a href="/mercariClone/public/category/{{$category->id}}">すべて</a>
            </div>
            <div class="ml-3">
                <div>
                    @foreach($category->sub_categories as $sub_category)
                    <div class="mb-2">
                        <a href="/mercariClone/public/category/{{$sub_category->id}}">
                            {{$sub_category->name}}
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
@include('layoutes.sell_button')
@include('layoutes.footer')