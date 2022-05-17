<!DOCTYPE html>
<html lang="en">
  <head>
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
    <div class="container">
    @if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session()->get('message') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Add popular station</h4>
                <p class="card-description">
                    Add most popular charging stations in home page
                </p>
                <form class="forms-sample" action="{{url('upload_popular')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                    <label for="exampleInputGatve">Street</label>
                    <input style="color:black" type="text" class="form-control" id="exampleInputGatve" placeholder="Street" name="gatve" required>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputMiestas">City</label>
                    <input style="color:black" type="text" class="form-control" id="exampleInputMiestas" placeholder="City" name="miestas" required>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputImage">Image</label>
                    <input type="file" class="form-control" id="exampleInputImage" placeholder="file" name="file" required>
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
                </div>
            </div>


            
            </div>
        </div>

    </div>

        <!-- main-panel ends -->
    </div>
    @include('admin.script')
  </body>
</html>