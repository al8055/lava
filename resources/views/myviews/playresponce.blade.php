@extends('myviews.mainapp')

@section('content')
    <div class="container">
        <div class="row">
            @if($errors->any())
                @foreach($errors->all() as $err)
                    <div clas="alert alert-danger">
                        {{ $loop->index }} : {{ $err }}
                    </div>
                @endforeach
            @endif
            <div class="col-6 offset-3">
                <div class="card">
                    <div class="card-header">
                        RESPONSE DATA
                    </div>
                    <div class="card-body">
                       <ul>
                            @foreach($data as $item)
                                <li>
                                    {{ $loop->iteration }} {{ $item }}
                                </li>
                            @endforeach
                        </ul>
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 offset-3">
                <div class="card">
                    <div class="card-header">
                        FILE
                    </div>
                    <div class="card-body">
                        <img src="blog/public/storage/test_upload.png"></img>    
                    </div>
                </div>
            </div>    
        </div>
    </div>
@endsection