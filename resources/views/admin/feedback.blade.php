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

            <div class="container bootstrap snippets bootdey">
                <div class="row">
                    <form class="form-inline my-2 my-lg-0" type="get" action="{{url('/search')}}">
                    <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <div class="col-lg-12">
                        <div class="main-box no-header clearfix">
                            <div class="main-box-body clearfix">
                                <div class="table-responsive">
                                    <table class="table user-list">
                                        <thead>
                                            <tr>
                                                <th><span>First Name</span></th>
                                                <th><span>Last Name</span></th>
                                                {{-- <th class="text-center"><span>Status</span></th> --}}
                                                <th><span>Created At</span></th>
                                                <th><span>Email</span></th>
                                                <th><span>FeedbackCategory</span></th>
                                                <th><span>Number</span></th>
                                                <th><span>FeedbackText</span></th>
                                                <th>&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($feedback as $feedback)
                                            <tr>
                                                <td>
                                                    <a href="#" class="user-link">{{$feedback->FirstName}}</a>
                                                </td>
                                                <td>
                                                    <a href="#" class="user-link">{{$feedback->LastName}}</a>
                                                </td>
                                                <td>{{$feedback->created_at}}</td>
                                                <td>
                                                    <a href="#">{{$feedback->Email}}</a>
                                                </td>
                                                <td>
                                                    <a href="#">{{$feedback->FeedbackCategory}}</a>
                                                </td>
                                                <td>
                                                    <a href="#">{{$feedback->Number}}</a>
                                                </td>
                                                <td>
                                                    <a href="#">{{$feedback->FeedbackText}}</a>
                                                </td>
                                                <td style="width: 20%;">
                                                    <a class="table-link text-info">
                                                        <span class="fa-stack">
                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                            <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                                                        </span>
                                                    </a>
                                                    <a onclick="return confirm('Are you sure to delete this?')" href="{{url('delete_user', $feedback->id)}}" class="table-link danger">
                                                        <span class="fa-stack">
                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                            <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                        </span>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.script')
</body>
</html>
