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
    <title>Hello, world!</title>
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
                        <div id="button2"><a href="tours.php" class="nav-link mr-sm-2" style="font-family: 'Lato', sans-serif;"><i class="fas fa-user-friends"></i> Tours</a>
                    </li>
                    <li class="nav-item">
                        <div id="button3"><a href="watch.php" class="nav-link mr-sm-2 active" style="font-family: 'Lato', sans-serif;"><i class="fab fa-youtube"></i> Watch</a></div>
                    </li>
                    <li class="nav-item">
                        <div id="button4"><a href="https://88nightmarket.com/" class="nav-link mr-sm-2" style="font-family: 'Lato', sans-serif;"><i class="fas fa-store"></i> Shop Merch</a></div>
                    </li>
                </div>
            </ul>
        </nav>
        <div class="container-fluid">
            <div class="row mt-sm-3" id="atas">
                <div class="col-sm-5 text-center">
                <div style="font-size:400%; color: white; font-family: 'Roboto', sans-serif;">HEAD IN THE CLOUDS II</div><br>
                <a href="https://www.youtube.com/channel/UCZW5lIUz93q_aZIkJPAC0IQ/videos" style="font-family: 'Roboto';"><button type="button" class="btn btn-light mr-5"><b>WATCH NOW</b></button></a>
                </div>
                <div class="col-sm-7 text-center">
                <div class="embed-responsive embed-responsive-21by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/KScHS3JNrRg?rel=0" allowfullscreen></iframe>
                </div>
                    <hr class="bg-light">
                    <!-- <p style="color: white; size: 14px;">UPCOMING TOURS</p> -->
                </div>
            </div>
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