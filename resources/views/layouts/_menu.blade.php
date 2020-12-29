@if(str_contains(url()->current(), "home"))
  @foreach($categories as $category)
    @if ($category->children->count())
      <li class="nav-item dropdown" style="margin-left:65px">
      <div>{{$category->title ?? ''}}</div>
      <div>
            @isset($category->children)
             @include('layouts._menu', [
             'categories' => $category->children,
             'is_child' => ""
         ])
     @endisset

        @else
          @isset($is_child)

              <a class="nav-link dropdown-item" style="margin-left:5px" href="{{ url("category/categor/$category->id") }}">-{{$category->title ?? ''}}</a>
              @foreach($pages as $people)
                @if($people->categorry_id == $category->id)
                    <a class="nav-link dropdown-item" style="margin-left:32px" href="{{ url("$people->path") }}">{{$people->title}}</a>
                
                @if($people->alias_of != NULL)
                <?php 
                  $newpage=App\Models\Page::find($people->alias_of);
                  ?>
                  <a class="nav-link dropdown-item" style="margin-left:32px" href="{{ url("$people->path") }}">
                  {{$newpage->title}}
                  </a>
                @endif
                @endif
              @endforeach
              <p>
              @continue

          @endisset

          </div>
      </li>

    @endif

@endforeach
@endif


