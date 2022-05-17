<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public"

    <meta charset="utf-8">
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
            {{-- @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session()->get('message') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
             @endif --}}
                <form action="{{url('editstation', $data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="exampleInputStreet">Station Street</label>
                        <input style="color:black" type="text" class="form-control" id="exampleInputStreet" name="gatve" value="{{$data->gatve}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCity">Station City</label>
                        <input style="color:black" type="text" class="form-control" id="exampleInputCity" name="miestas" value="{{$data->miestas}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputImage">Old Image</label>
                        <img src="popularimages/{{$data->image}}" style="width:100px;height:100px;">
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