<!DOCTYPE html>
<html>

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    
    <title>IOLancer - Selesaikan Pekerjaan Dengan Cepat</title>
    <link rel="stylesheet" type="text/css" href="public/css/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="lib/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="public/css/app.css">

    <script src="public/javascript/jquery.min.js"></script>
    <script src="public/javascript/semantic.min.js"></script>
    <script type="text/javascript" src="lib/slick/slick.min.js"></script>
    <script src="public/javascript/following-menu.js"></script>
    <script src="public/javascript/banner-carousel.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.0.0/firebase.js"></script>
    <script type="text/javascript" src="js/header.js"></script>
    <script type="text/javascript" src="js/footer.js"></script>

</head>

<body class="pushable">


<div class="ui large top fixed menu transition hidden">
  <div class="ui container">
    <a class="item" href="index.php">Home</a>
    <a class="item">Profile</a>
  
    <div class="right menu">
      <!-- <img class="ui mini image" src="public/images/logoNyareh2.png"> -->
    </div>
  </div>
</div>
<div class="pusher">
  <div class="ui inverted vertical masthead center aligned segment">
    <div class="ui container">
      <div class="ui secondary pointing  menu">
        <a class="item">Home</a>
        <a class="item" href="view/profile.php">Profile</a>
        <div class="right menu">
          <!-- <img class="ui image" src="public/images/logoNyareh.png"> -->
        </div>
      </div>
    </div>
    <div class="ui text container">
      <!-- <h1 class="ui inverted header">
        Jancok
      </h1>
      <h2>carilah sesuka kalian</h2> -->
      <br><br><br><br><br>
      <img class="ui centered medium image" src="public/images/logoNyareh3.png">
      <br>
      <!-- <div class="ui huge primary button">
        "get started"
        <i class="right arrow icon"></i>
      </div> -->
      <form class="ui form" method="post" action="view/search.php">
      <div class="ui fluid icon input">
          <input type="text" placeholder="Search..." name="search">
          <i class="search icon" type="submit" value="Search"></i>
      </div>
      </form>
      <br><br><br>
    </div>
  </div>
  <div class="ui vertical stripe segment">
    <div class="ui container">
      <div class="ui five column centered grid">
        <div class="column centered">
          <h4 class="ui header">
            <i class="teal thumbs up icon"></i>
            <div class="content">
              Mudah
              <div class="sub header">
                Mudah digunakan
              </div>
            </div>
        </div>
        <div class="column centered">
          <h4 class="ui header">
            <i class="teal css3 icon"></i>
            <div class="content">
              Cepat
              <div class="sub header">
                Pencarian yang cepat
              </div>
            </div>
        </div>
        <div class="column centered">
          <h4 class="ui header">
            <i class="teal star icon"></i>
            <div class="content">
              Akurat
              <div class="sub header">
                Akurat menampilkan berita
              </div>
            </div>
        </div>

      </div>
    </div>


  </div>

</body>

</html>