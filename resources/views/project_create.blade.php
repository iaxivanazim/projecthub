<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add project</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.min.css') }}">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="projectstore" method="post">
                @csrf
                    <h1>ADD NEW PROJECT</h1>
                    <h6>Fields marked with '<span style="color:red">*</span>' are required.</h6>
                    <div class="form-group">
                        <label for="">College Name</label><span style="color:red">*</span>
                        <input type="text" class="form-control" name="collegename" placeholder="College Name" value="{{ old('collegename') }}">
                        <span style="color:red">@error('collegename'){{ $message }}@enderror</span>
                        
                    </div>

                    <div class="form-group">
                        <label for="">Project Id</label><span style="color:red">*</span>
                        <input type="text" class="form-control" name="projid" placeholder="Project Id/Serial no." value="{{ old('projid') }}">
                        <span style="color:red">@error('projid'){{ $message }}@enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="">Project Title</label><span style="color:red">*</span>
                        <input type="text" class="form-control" name="projtitle" placeholder="Project Title" value="{{ old('projtitle') }}">
                        <span style="color:red">@error('projtitle'){{ $message }}@enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="">Project Description</label><span style="color:red">*</span>
                        <textarea class="form-control" name="projdesc" placeholder="Describe Your Project" value="{{ old('projdesc') }}">{{ old('projdesc') }}</textarea>
                        <span style="color:red">@error('projdesc'){{ $message }}@enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="">Project Images</label><span style="color:red">*</span>
                        <input type="file" class="form-control" name="projimg" placeholder="Images Related to project" value="{{ old('projimg') }}">
                        <span style="color:red">@error('projimg'){{ $message }}@enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="">Project Videos</label>
                        <input type="file" class="form-control" name="projvid" placeholder="Videos related to Project" value="{{ old('projvid') }}"> 
                    </div>

                    <div class="form-group">
                        <label for="">Project Team Name</label><span style="color:red">*</span>
                        <input type="text" class="form-control" name="teamname" placeholder="Team Name" value="{{ old('teamname') }}">
                        <span style="color:red">@error('teamname'){{ $message }}@enderror</span>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>