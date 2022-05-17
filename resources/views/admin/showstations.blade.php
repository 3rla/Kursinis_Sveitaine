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
                    <th style="padding:10px; padding-right:150px">Station Street</th>
                    <th style="padding:10px; padding-right:100px">Station City</th>
                    <th style="padding:10px; padding-right:30px">Station Image</th>
                    <th style="padding:10px; padding-right:20px">Delete</th>
                    <th style="padding:10px">Update</th>
                </tr>

                @foreach($data as $stations)
                <tr>
                    <td style="padding:10px">{{$stations->gatve}}</td>
                    <td style="padding:10px">{{$stations->miestas}}</td>
                    <td style="padding:10px"><img src="popularimages/{{$stations->image}}" style="width:100px;height:100px;"></td>
                    <td><a onclick="return confirm('Are you sure to delete this?')"  class="btn btn-danger" href="{{url('deletestation', $stations->id)}}">Delete</a></td>
                    <td><a class="btn btn-primary" href="{{url('updatestation', $stations->id)}}">Update</a></td>


                </tr>
                @endforeach

            </table>
        </div>

      </div>
    </div>
    @include('admin.script')
  </body>
</html>