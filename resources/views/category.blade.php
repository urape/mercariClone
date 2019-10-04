@extends('layoutes.common')
@section('content')
<div class="pl-5 sub-color">
    <h2 class="mt-5">
        カテゴリー一覧
    </h2>
    <div class="container">
        <div class="row">
            @foreach($categories as $parent_category)
            <div class="col-4 mb-2">
                <button class="btn d-inline-block page-link text-dark">{{$parent_category['name']}}</button>
            </div>
            @endforeach
        </div>
    </div>
    @foreach($categories as $parent_category)
    <div class="mt-5 mb-5 mx-auto w-65">
        <div class="major-category pl-2">{{$parent_category['name']}}</div>
        <div class="sub-category pb-2">
            <div class="ml-3 pt-3 mb-3">
                <a href="#">すべて</a>
            </div>
            <div class="ml-3">
                <div>
                    @foreach($parent_category['child'] as $child_category)
                    <div class="mb-2">
                        <a href="#">{{$child_category['name']}}</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection