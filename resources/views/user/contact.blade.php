    <link rel="shortcut icon" href="../assets/img/favicon.ico">

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">

    <div id="contact" class="page-section">
        <div class="container">
            <h1 class="text-center wow fadeInUp">Contact</h1>

            <form class="main-form" action="{{url('upload_feedbackkkkk')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="row mt-5 ">
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <input type="text" class="form-control" placeholder="First Name" name="FirstName" id="FirstName">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                        <input type="text" class="form-control" placeholder="Last Name" name="LastName" id="LastName">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <input type="text" class="form-control" placeholder="Email address..." name="Email" id="Email">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                        <select name="FeedbackCategory" id="FeedbackCategory" class="custom-select">
                            <option value="Feedback">Feedback</option>
                            <option value="AboutChargers">About Chargers</option>
                            <option value="Contract">Contact</option>
                        </select>
                    </div>
                    <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                        <input type="text" class="form-control" placeholder="Number.." name="Number" id="Number">
                    </div>
                    <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                        <textarea name="FeedbackText" id="FeedbackText" class="form-control" rows="6" placeholder="Enter message.."></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Message</button>
            </form>
        </div>
    </div>
