<!DOCTYPE html>
<html>

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    
    <title>IOLancer - Selesaikan Pekerjaan Dengan Cepat</title>
    <link rel="stylesheet" type="text/css" href="../public/css/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="../lib/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="../lib/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="../public/css/app.css">

    <script src="../public/javascript/jquery.min.js"></script>
    <script src="../public/javascript/semantic.min.js"></script>
    <script type="text/javascript" src="../lib/slick/slick.min.js"></script>
    <script src="../public/javascript/following-menu.js"></script>
    <script src="../public/javascript/banner-carousel.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.0.0/firebase.js"></script>
    <script type="text/javascript" src="../js/header.js"></script>
    <script type="text/javascript" src="../js/footer.js"></script>

</head>

<body class="pushable">


<div class="ui large top fixed menu transition hidden">
  <div class="ui container">
    
    <a class="item" >Home</a>
    <a class="item">Profile</a>
  
    <div class="right menu">
      <!-- <img class="ui mini image" src="public/images/logoNyareh2.png"> -->
    </div>
  </div>
</div>
<div class="pusher">
  <div class="ui inverted vertical masthead center aligned segment">
    <div class="ui container">
      <div class="ui grid">
        <div class="two wide column">
          <a href ="../index.php">
            <img class="ui small image" src="../public/images/logoNyareh3.png" >
          </a>
        </div>
        <div class="eight wide column">
          <form class="form" method="post" action="">
            <div class="ui fluid icon input">
              <input type="text" placeholder="Search..." name="search">
              <i class="search icon" type="submit" value="Search"></i>
            </div>
          </form>  
        </div>
        
      </div>
      <div class="ui divider"></div>
      
    </div>
    <div class="ui text container">
      
    </div>
  </div>
  <div class="ui vertical stripe segment">
    <div class="ui container">
      <?php
          include('../config/db.php');
            
          if(isset($_POST["search"])){
            $key = $_POST['search'];
            $query = mysqli_query($connection,"select distinct judul, berita, url from text where keyword='".$key."' order by jumlah desc");
            if (mysqli_num_rows($query) > 0) {
                while ($data = mysqli_fetch_assoc($query)){
                    $string = strip_tags($data['berita']);
                    if (strlen($string) > 500) {
                        
                            // truncate string
                            $stringCut = substr($string, 0, 500);
                        
                            // make sure it ends in a word so assassinate doesn't become ass...
                            $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'... <a href="'.$data['url'].'">Read More</a>'; 
                        }

                    echo '<div class="ui card" style="width: 100%;">
                        <div class="content">
                        <a href = "'.$data['url'].'"class="header">'.$data['judul'].'</a>
                        <div class="meta"></div>
                        <div class="description">
                            <p>'.$string.'</p>
                        </div>
                        </div>
                    </div>';
                }
            }else{
                echo "<h4>Pencarian Keyword tidak ada</h4>";
            }
               
          }else{
            echo "<h4>Belum ada pencarian</h4>";
          }

          ?>
    </div>
  </div>

</div>

</body>

</html>