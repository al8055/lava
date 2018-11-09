@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <div class="card">
            <div class="card-header">
                {{ $title }}
            </div>
            <div class="card-body">
                @if(count($services) > 0)
                    <ul class="list-group">
                        @foreach($services as $service)
                            <li class="list-group-item">
                                {{ $service }}
                            </li>
                        @endforeach    
                    </ul>
                @endif
            </div>
        </div>
    </div>
@endsection