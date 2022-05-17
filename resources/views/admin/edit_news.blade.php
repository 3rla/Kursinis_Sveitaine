<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin panel</title>

    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->

      @include('admin.sidebar')

      <!-- partial -->

      @include('admin.navbar')
    
      <div class="container-fluid page-body-wrapper">

        <div align="center" style="padding-top:100px;">

            <table>

                <tr style="background-color: black;">
                    <th class="col-md-5" style="padding:10px; padding-right:150px">Label</th>
                    <th class="col-md-5" style="padding:10px; padding-right:100px">Description</th>
                    <th class="col-md-5" style="padding:10px; padding-right:30px">Image</th>
                    <th class="col-md-5" style="padding:10px; padding-right:20px">Delete</th>
                    <th class="col-md-5" style="padding:10px">Update</th>
                </tr>

                @foreach($data as $news)
                <tr >
                    <td style="padding:10px">{{$news->TopLabelText}}</td>
                    <td style="padding:10px">{{$news->Description}}</td>
                    <td style="padding:10px"><img src="upload_newws/{{$news->image}}" style="width:100px;height:100px;"></td>
                    <td><a onclick="return confirm('Are you sure to delete this?')"  class="btn btn-danger" href="{{url('delete_news', $news->id)}}">Delete</a></td>
                    <td><a class="btn btn-primary" href="{{url('update_news', $news->id)}}">Update</a></td>
                </tr>
                @endforeach

            </table>
        </div>

      </div>
    </div>
    @include('admin.script')
  </body>
</html>