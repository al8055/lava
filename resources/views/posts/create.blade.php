@extends('layouts.app')

@section('content')
    <div class="jumbodron">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    Create Post
                </div>
                <div class="card-body">
                    <form action="{{ action('PostsController@store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input 
                                type="text"name="title" class="form-control" placeholder="Title"/>
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea id="article-ckeditor" name="body" class="form-control" placeholder="Body Text"/>
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="cover_image">Upload Cover</label>
                            <input class="btn btn-primary" type="file" id="cover_image" name="cover_image"/>    
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