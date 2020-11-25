@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <a href="{{ route('admin.pages.create')}}">
                <button type="button" class="btn btn-success btn-lg">Add new page

                </button>
                <a href="{{url('admin/pages/defl')}}" style="margin-left:49%"><button type="submit" class="btn btn-outline-dark">                         Default </button></a>
                    <a href="{{url('admin/pages/sorted')}}"><button type="submit" class="btn btn-outline-dark">                         Sorted </button></a>
                    <a href="{{url('admin/pages/created')}}"><button type="submit" class="btn btn-outline-dark">                         Created </button></a>
                    <a href="{{url('admin/pages/updated')}}"><button type="submit" class="btn btn-outline-dark">                         Updated </button></a>
            </a>
            <div class="card">
                <div class="card-header">{{ __('Pages') }}</div>
                <div class="card-body">


                               <?php
                            $query = mysqli_query($connect, "SELECT * FROM pages ORDER BY id");
                            if(str_contains(url()->current(), "sorted")){
                               $query = mysqli_query($connect, "SELECT * FROM pages ORDER BY title");
                            }
                            if(str_contains(url()->current(), "defl")){
                                 $query = mysqli_query($connect, "SELECT * FROM pages ORDER BY id");
                            }
                            if(str_contains(url()->current(), "created")){
                                 $query = mysqli_query($connect, "SELECT * FROM pages ORDER BY created_at");
                            }
                            if(str_contains(url()->current(), "updated")){
                                 $query = mysqli_query($connect, "SELECT * FROM pages ORDER BY updated_at");
                            }
                        while($rowe = mysqli_fetch_assoc($query)) {
                        $page=App\Models\Page::find($rowe['id']);?>

                    <div class="card" style="width: 55rem;">
                      <div class="card-body">
                        <h5 class="card-title">{{$page->title}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Author: {{$page->author}}</h6>
                        <p class="card-text">{{$page->main_content}}</p>
                        <hr>
                        <p class="card-subtitle mb-2 text-muted">Cteated at: {{$page->created_at}}</p>
                        <p class="card-subtitle mb-2 text-muted">Updated at: {{$page->updated_at}}</p>
                        @can('edit-pages')
                                        <a href="{{ route('admin.pages.edit', $page->id) }}"><button type="button" class="btn btn-warning float-left">
                                            Edit page
                                        </button></a>
                                        @endcan
                        @can('delete-pages')
                                        <form action="{{ route('admin.pages.destroy' , $page) }}" method="POST" class="float-left">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger">
                                                Delete page
                                            </button>
                                        </form>
                                        @endcan
                                        <a href="{{ url("$page->path") }}"><button type="button" class="btn btn-info">
                                            View page
                                        </button></a>
                      </div>
                                    </div>
                                     <?php } ?>






            </div>
        </div>
    </div>
</div>
@endsection
