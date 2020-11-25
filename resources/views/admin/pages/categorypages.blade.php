@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

                <a href="{{url("category/categor/$theme->id/defl")}}" style="margin-left:84%" ><button type="submit" class="btn btn-outline-dark">Default </button></a>
                    <a href="{{url("category/categor/$theme->id/sorted")}}"><button type="submit" class="btn btn-outline-dark">Sorted </button></a>

            <div class="card">
                <div class="card-header">{{$theme->title}}</div>
                <div class="card-body">

                               <?php
                                $query = mysqli_query($connect, "SELECT * FROM pages WHERE categorry_id=$theme->id ORDER BY id");
                            if(str_contains(url()->current(), "sorted")){
                               $query = mysqli_query($connect, "SELECT * FROM pages WHERE categorry_id=$theme->id ORDER BY title");
                            }
                            if(str_contains(url()->current(), "defl")){
                                 $query = mysqli_query($connect, "SELECT * FROM pages WHERE categorry_id=$theme->id ORDER BY id");
                            }
                        while($rowe = mysqli_fetch_assoc($query)) {
                        $people=App\Models\Page::find($rowe['id']);
                        if ($people->alias_of != NULL){
                        $newpeople=App\Models\Page::find($people->alias_of);
                        $people->title = $newpeople->title;
                        $people->main_content = $newpeople->main_content;
                        $people->author = $newpeople->author;
                        $people->created_at = $newpeople->created_at;
                        $people->updated_at = $newpeople->updated_at;  
                        }?>

                    <div class="card" style="width: 55rem;">
                      <div class="card-body">
                        <h5 class="card-title">{{$people->title}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Author: {{$people->author}}</h6>
                        <p class="card-text">{{$people->main_content}}</p>
                        <hr>
                        <p class="card-subtitle mb-2 text-muted">Cteated at: {{$people->created_at}}</p>
                        <p class="card-subtitle mb-2 text-muted">Updated at: {{$people->updated_at}}</p>

                                        <a href="{{ url("$people->path") }}"><button type="button" class="btn btn-info">
                                            Show in full
                                        </button></a>
                      </div>

                                    </div>
                                    <?php } ?>









            </div>
        </div>
    </div>
</div>
@endsection
