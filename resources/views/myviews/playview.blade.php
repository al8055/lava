
@extends('myviews.mainapp')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <div class="card">
                <div class="card-header">
                    Play
                </div>
                <div class="card-body">
                    <form method="post" action="/resp">
                        @csrf
                        <div class="form-group">
                            <label for="fname">Firs Name</label>
                            <input type="text" name="fname" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="lname">Last Name</label>
                            <input type="text" name="lname" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="position">Position</label>
                            <input type="text" name="position" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="text" name="age" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="salary">Salary</label>
                            <input type="text" name="salary" class="form-control"/>
                        </div>
                        <button type="submit" class="btn btn-primary">OK</button>
                    </form>
                </div>
            </div>
        </div>    
    </div>
    <div class="row">
        <div class="col-6 offset-3">
            <div class="card">
                <div class="card-header">
                    FileUpload
                </div>
                <div class="card-body">
                    <form method="post" action="/fupload" enctype="multipart/form-data">
                        @csrf
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="filename" id="filename"/>
                            <label class="custom-file-label" for="filename">Choose file</label>
                        </div>
                        <button type="submit" class="btn btn-info">Upload</button>
                    </form>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
