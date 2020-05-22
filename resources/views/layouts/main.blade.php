<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>@yield('title')</title>
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href= "{{asset('/boots/css/bootstrap.min.css')}}">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="{{asset('/boots/css/mdb.min.css')}}">
  <!-- Your custom styles (optional) -->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('/boots/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('/css/main.css')}}">
  <link rel="stylesheet" href="{{asset('/css/carousel.css')}}">

</head>
<body>
@include('inc.header')

@yield('code')



@include('inc.footer')
  <!-- jQuery -->
  <script type="text/javascript" src="{{asset('/boots/js/jquery.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('/boots/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('/boots/js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{asset('/boots/js/mdb.min.js')}}"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript" src="{{asset('/js/main.js')}}"></script>

<script>
var countDownDate = new Date("September 4, 2020 15:37:25").getTime();
var countDownDate2 = new Date("September 17, 2020 15:37:25").getTime();
var countDownDate3 = new Date("July 31, 2020 15:37:25").getTime();

var x = setInterval(function() {

  var now = new Date().getTime();
  var distance = countDownDate - now;
  var distance2 = countDownDate2 - now;
  var distance3 = countDownDate3 - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  var days2 = Math.floor(distance2 / (1000 * 60 * 60 * 24));
  var hours2 = Math.floor((distance2 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes2 = Math.floor((distance2 % (1000 * 60 * 60)) / (1000 * 60));
  var seconds2 = Math.floor((distance2 % (1000 * 60)) / 1000);

  var days3 = Math.floor(distance3 / (1000 * 60 * 60 * 24));
  var hours3 = Math.floor((distance3 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes3 = Math.floor((distance3 % (1000 * 60 * 60)) / (1000 * 60));
  var seconds3 = Math.floor((distance3 % (1000 * 60)) / 1000);

  document.getElementById("time").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  document.getElementById("time2").innerHTML = days2 + "d " + hours2 + "h "
  + minutes2 + "m " + seconds2 + "s ";

  document.getElementById("time3").innerHTML = days3 + "d " + hours3 + "h "
  + minutes3 + "m " + seconds3 + "s ";

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("time").innerHTML = "EXPIRED";
  }

  if (distance2 < 0) {
    clearInterval(x);
    document.getElementById("time2").innerHTML = "EXPIRED";
  }

  if (distance3 < 0) {
    clearInterval(x);
    document.getElementById("time3").innerHTML = "EXPIRED";
  }
}, 1000);

</script>

<script>
var NumberOfWords = 28

var words = new BuildArray(NumberOfWords)

words[1] = "ICE AGE, 2004"
words[2] = "50 FIRST DATES, 2004"
words[3] = "The Notebook, 2004"
words[4] = "With Love Rose, 2014"
words[5] = "TITANIC, 1998"
words[6] = "THE 1+1, 2011"
words[7] = "The Gentlemen, 2020"
words[8] = "Bad Boys For Life, 2020"
words[9] = "Onward, 2019"
words[10] = "The Martian, 2015"
words[11] = "The Lion King, 1994"
words[12] = "The Incredibles, 2004"
words[13] = "Jumanji, 2017"
words[14] = "ICE AGE:Collision course, 2016"
words[15] = "Aviator, 2004"
words[16] = "Fury, 2014"
words[17] = "Joker, 2019"
words[18] = "Fight club, 1997"
words[19] = "JOHN WICK 2, 2017"
words[20] = "Assassin's creed, 2018"
words[21] = "Star Wars: Rogue one, 2019"
words[22] = "Blade runner 2049, 2017"
words[23] = "Midway, 2019"
words[24] = "Matrix, 2000"
words[25] = "Avatar, 2009"
words[26] = "Baby driver, 2017"
words[27] = "How I met your mother?, 2003"
words[28] = "Sonic, 2020"

function BuildArray(size){
this.length = size
for (var i = 1; i <= size; i++){
this[i] = null}
return this
}

function PickRandomWord(frm) {
// Generate a random number between 1 and NumberOfWords
var rnd = Math.ceil(Math.random() * NumberOfWords)

// Display the word inside the text box
frm.WordBox.value = words[rnd]
}
</script>

</body>
</html>
