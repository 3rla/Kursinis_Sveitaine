<!DOCTYPE html>
<html lang="en">
<head>

    <base href="/public" <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin panel</title>

    @include('admin.css')
</head>
<body>
    <div class="container-scroller">
        @include('admin.sidebar')
        @include('admin.navbar')

        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center" style="padding:100px">
                <form action="{{url('EditNewsInDB', $data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputTopLabelText">Label</label>
                        <input style="color:black" type="text" class="form-control" id="exampleInputTopLabelText" name="TopLabelText" value="{{$data->TopLabelText}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDescription">Description</label>
                        <input style="color:black" type="text" class="form-control" id="exampleInputDescription" name="Description" value="{{$data->Description}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputImage">Old Image</label>
                        <img src="upload_newws/{{$data->image}}" style="width:100px;height:100px;">
                    </div>

                    <div class="form-group">
                        <label>Changes Image</label>
                        <input class="form-control" type="file" id="exampleInputImage" name="file">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>

    </div>
    </div>
    </div>
    @include('admin.script')
</body>
</html>
