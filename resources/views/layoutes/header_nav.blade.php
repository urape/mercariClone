<nav class="mb-0 border-top">
    <ul class="list-inline ml-5">
        <li class="list-inline-item mr-0">
            <a href="{{route('top')}}" class="category-link">メルカリ</a>
            <span>></span>
        </li>
        @isset($category)
        <li class="list-inline-item">
            <span>></span>
            <a href="{{route('category',$category->id)}}" class="category-link">{{$category->name}}</a>
        </li>
        @endisset
    </ul>
</nav>