@extends('layouts.app')

@section('content')
    <div class="jumbodron">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    Edit Post
                </div>
                <div class="card-body">
                    <form action="{{action('PostsController@update', [$post->id])}}" method="POST" enctype="multipart/data-form">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input
                                name="title"
                                class="form-control"
                                placeholder="Title"
                                value="{{ $post->title }}"
                                />
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea
                                id="article-ckeditor"
                                name="body"
                                class="form-container"
                                placeholder="Body Text"
                                >
                                {{ $post->body }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="cover_image">Cover Img</label>
                            <input type="file" class="btn btn-primary" id="cover_image" name="cover_image" />
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection