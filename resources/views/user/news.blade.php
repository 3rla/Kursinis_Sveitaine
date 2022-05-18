    <link rel="shortcut icon" href="../assets/img/favicon.ico">

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">
    
    <div id="news" class="page-section bg-light">
        <div class="container">
            <h1 class="text-center wow fadeInUp">Latest News</h1>
            <div class="row mt-5">
                @foreach($data as $news)
                <div class="col-lg-4 py-2 wow zoomIn" >
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-category">
                                <a href="#news">{{$news->TopLabelText}}</a>
                            </div>
                            <a href="#news" class="post-thumb">
                                <img src="upload_newws/{{$news->image}}" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="#news">{{$news->Description}}</a></h5>
                            <div class="site-info">
                                <span class="mai-time"></span> {{$news->created_at}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-12 text-center mt-4 wow zoomIn">
                    <a href="#news" class="btn btn-primary">Read More</a>
                </div>

            </div>
        </div>
    </div>
