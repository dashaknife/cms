@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">
           <nav class="navbar navbar-dark bg-dark">
               <?php foreach($pages as $page){ 
                if($page->alias_of != NULL) continue;?>
                    <div class="card" style="width: 70rem;">
                      <div class="card-body">
                        <h5 class="card-title">{{$page->title}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Author: {{$page->author}}</h6>
                        <hr>
                        <p class="card-subtitle mb-2 text-muted">Cteated at: {{$page->created_at}}</p>
                        <p class="card-subtitle mb-2 text-muted">Updated at: {{$page->updated_at}}</p>
                        @if($page->key_teg == "author")
                        <a href="{{url("admin/pages/search/$page->value_teg")}}"><button type="button" class="btn btn-warning float-left">#{{$page->value_teg}}</button></a>
                        @elseif($page->key_teg == "category")
                        <a href="{{url("admin/pages/search/$page->value_teg")}}"><button type="button" class="btn btn-info">#{{$page->value_teg}}</button></a>
                        @endif

                        <a href="{{ url("$page->path") }}"><button type="button" class="btn btn-info">                              View page
                                        </button></a>
                      </div>
                                    </div>
                <?php } ?>
            </nav>

</div>
@endsection
