@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card-title"> 
                        <a href="/posts/create" class="btn btn-info">Create Post</a>
                    </div>
                    <div class="card-text">
                        <h3>
                            My Blog Posts
                        </h3>
                        @if(count($posts) > 0)
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>
                                            Title
                                        </th>
                                        <th></th>
                                        <th ></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($posts as $post)
                                        <tr>
                                            <td>
                                                {{ $post->title }}
                                            </td>
                                            <td>
                                                <a href="/posts/{{ $post->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
                                            </td>
                                            <td>
                                                <form action="{{ action('PostsController@destroy', [$post->id]) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-secondary">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <h3>
                                No posts from current user
                            </h3>
                        @endif
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
