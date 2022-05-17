    <link rel="shortcut icon" href="../assets/img/favicon.ico">

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">
  
  <div id="chargers" class="page-section">
      <div class="container">
          <h1 class="text-center mb-5 wow fadeInUp">Most popular charging stations</h1>

          <div class="owl-carousel wow fadeInUp" id="CharingStations">
            
            @foreach($stations as $station)

              <div class="item">
                  <div class="card-CharingStations">
                      <div class="header">
                          <img height="300px" src="popularimages/{{$station->image}}" alt="">
                      </div>
                      <div class="body">
                          <p class="text-xl mb-0">{{$station->gatve}}</p>
                          <span class="text-sm text-grey">{{$station->miestas}}</span>
                      </div>
                  </div>
              </div>

            @endforeach

          </div>
      </div>
  </div>
