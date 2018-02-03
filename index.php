<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" media="screen" href="css/style.css">
    <title>Crypto</title>
  </head>
  <body>
    <div id="particles-js">    </div>
      <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3">
        <h5 class="my-0 mr-md-auto font-weight-normal">Crypto</h5>
        <nav class="my-2 my-md-0 mr-md-3">
        </nav>
        <a class="btn btn-outline-primary" href="#">Sign up</a>
      </div>
      <div class="container">
      <div class="container-fluid">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-5 cryptolist">
              <h1 class="valuta">Ethereum</h1>
              <h2 class="list">Ripple</h2>
              <h2 class="list">Bitcoin</h2>
              <h2 class="list">Garlicoin</h2>
              <h2 class="list">Bitcoin cash</h2>
              <input class="form-control" type="input" name="crypto" value="0">
            </div>
            <div class="col-md-2 rotatearrow">
              <h1 class="fa fa-arrow-circle-right arrow"></h1>
            </div>
            <div class="col-md-5 valutalist">
              <h1 class="valuta">Euro</h1>
              <h2 class="list">US dollar</h2>
              <h2 class="list">Pound</h2>
              <h2 class="list">CA dollar</h2>
              <h2 class="list">Bitcoin cash</h2>
              <input class="form-control" type="input" name="crypto" value="0">
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script
			  src="http://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous">
  </script>
  <script src="particles/particles.js"></script>
  <script src="js/app.js"></script>
  <script type="text/javascript">
    $(function() {
        $(".valuta").on('click', function() {
            $(this).parent().find('.list').slideToggle();
        });
    });
</script>
<script type="text/javascript">
$(".arrow").on("click", function () {
  $(this).toggleClass("rotate");
});
</script>

</html>
