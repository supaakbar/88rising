<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/e069917fb0.js"></script>
    <link rel="stylesheet" href="page.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>88RISING</title>
  </head>
  <body>
  <div class="bgtours">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
        <a class="navbar-brand" href="index.php" style="font-family: 'Lato';"><b>88↑ RISING</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <div id="button1"><a href="index.php" class="nav-link mr-sm-2" style="font-family: 'Lato', sans-serif;"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <div id="button2"><a href="tours.php" class="nav-link mr-sm-2 active" style="font-family: 'Lato', sans-serif;"><i class="fas fa-user-friends"></i> Tours</a>
                    </li>
                    <li class="nav-item">
                        <div id="button3"><a href="watch.php" class="nav-link mr-sm-2" style="font-family: 'Lato', sans-serif;"><i class="fab fa-youtube"></i> Watch</a></div>
                    </li>
                    <li class="nav-item">
                        <div id="button4"><a href="https://88nightmarket.com/" class="nav-link mr-sm-2" style="font-family: 'Lato', sans-serif;"><i class="fas fa-store"></i> Shop Merch</a></div>
                    </li>
                </div>
            </ul>
        </nav>
        <div class="container-fluid">
            <div class="row mt-sm-3" id="atas">
                <div class="col-sm-12 text-center">
                    <h2 style="color: white;">UPCOMING TOURS 2020</h2>
                    <br>
                    <!-- <hr class="bg-light"> -->
                    <!-- <center>
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="images/88-rising-headline.jpg" class="d-block w-50" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                      </div>
                    </div>
                    </div>
                    </center> -->
                        <center>
                          <div class="card" style="width: 35rem;">
                            <img class="card-img-top" src="images/db474ae3-9ab5-4a2f-9a98-dc04685dc2b8-1574904737606-2a4700c17145ba373c25ce4c634b9a4a.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Head in the Clouds II</h5>
                                <p class="card-text">Head in the Clouds II is the second album by musical collective 88rising. 7 March 2020.</p>
                                <a href="https://www.tiket.com/event/konser-head-in-the-clouds-2020" class="btn btn-primary">Buy Ticket</a>
                            </div>
                          </div>
                        </center>
                    <!-- <p style="color: white; size: 14px;">UPCOMING TOURS</p> -->
                </div>
            </div>
            <!-- <div class="row mt-sm-3" id="home">
                <div class="col-sm-12"><center>
                <div class="card" style="width: 35rem;">
                <img class="card-img-top" src="images/db474ae3-9ab5-4a2f-9a98-dc04685dc2b8-1574904737606-2a4700c17145ba373c25ce4c634b9a4a.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Head in the Clouds II</h5>
                    <p class="card-text">Head in the Clouds II is the second album by musical collective 88rising. 7 March 2020.</p>
                    <a href="https://www.tiket.com/event/konser-head-in-the-clouds-2020" class="btn btn-primary">Buy Ticket</a>
                </div>
                </div></center>
                </div>
                </div>
            </div> -->
            
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script type="text/javascript"> 
    $(document).ready(function () {
  $('#button3').click(function() {
  $('html, body').animate({
    scrollTop: $("#porto").offset().top
  }, 1000)
}), 
  $('#button2').click(function (){
    $('html, body').animate({
      scrollTop: $("#tentang").offset().top
    }, 1000)
  }),
  $('#button1').click(function (){
    $('html, body').animate({
      scrollTop: $("#home").offset().top
    }, 1000)
  })
});
</script>
  </body>
</html>