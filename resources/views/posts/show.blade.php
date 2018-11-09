@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <a href="/posts"  class="btn btn-default">
                Go Back
            </a>
            <p class="lead">
                {{ $post->title }}
            </p>
            <img style="width:25%" src="/storage/cover_images/{{ $post->cover_image }}"/>
            <p>
                {!! $post->body !!} <!-- save plain text for editor -->
            </p>
            <hr class="my-4" />
            <small>
                Written on {{ $post->created_at }} by <b>{{ $post->user->name }}</b>
            </small>
            <hr class="my-4" />
            @if(!Auth::guest())
                @if(Auth::user()->id == $post->user_id)
                    <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary"> &nbsp; Edit &nbsp; </a>
                    <form action="{{ action('PostsController@destroy', [$post->id]) }}" method="POST" class="float-right">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                @endif
            @endif    
            {{--
            @if(!Auth::guest())
                @if(Auth::user()->id == $post->user_id)
                    <a href="/posts/{{ $post->id }}/edit" class="btn btn-default">
                        Edit
                    </a>
                    {!!Form::open(['action'=>['PostsController@destroy', $post->id],'method'=>'POST','class'=>'pull-rigth'])!!}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {!! Form::close() !!}
                @endif
            @endif
            --}}
        </div>
    </div>
@endsection