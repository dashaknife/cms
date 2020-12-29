@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">
           <nav class="navbar navbar-dark bg-dark">
                <?php
                    $query = mysqli_query($connect, "SELECT * FROM `pages` WHERE `value_teg` LIKE '$value' ORDER BY `id` ASC");
                    while($rowe = mysqli_fetch_assoc($query)) {
                        $page=App\Models\Page::find($rowe['id']);
                    if($page->alias_of != NULL) continue;?>
                    <div class="card" style="width: 70rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$page->title}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Author: {{$page->author}}</h6>
                            <hr>
                            <p class="card-subtitle mb-2 text-muted">Created at: {{$page->created_at}}</p>
                            <p class="card-subtitle mb-2 text-muted">Updated at: {{$page->updated_at}}</p>
                            <a href="{{ url("$page->path") }}"><button type="button" class="btn btn-info">View page</button></a>
                        </div>
                    </div>
                <?php } ?>
            </nav>
        </div>
    </div>
</div>
@endsection