<nav class="mb-0 border-top">
    <div class="container">
        <ul class="list-inline">
            <li class="list-inline-item mr-0">
                <a href="{{route('top')}}" class="category-link">メルカリ</a>
                <span>></span>
            </li>
            @isset($category)
            <li class="list-inline-item">
                <a href="{{route('category',$category->id)}}" class="category-link">{{$category->name}}</a>
            </li>
            @endisset
        </ul>
    </div>
</nav>