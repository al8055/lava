@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Posts</h1>
            @if(count($posts) > 0)
                @foreach($posts as $post)
                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-md-2 col-sm-2">
                                <img 
                                    style="width:100%"
                                    class="img-fluid"
                                    src="/storage/cover_images/{{ $post->cover_image }}"/>
                            </div>
                            <div class="col">
                                <div class="card-block px-2">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <a href="/posts/{{ $post->id }}">
                                                {{ $post->title }}
                                            </a>
                                        </div>
                                        <div class="card-text">
                                            <small>
                                                Post written on {{ $post->created_at }} by <b>{{ $post->user->name }} </b>
                                            </small>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!--pagination-->
                {{ $posts->links() }}
            @else
                <p>
                    No posts published yet {{'(('}}
                </p>
            @endif
        </div>    
    </div>    
@endsection