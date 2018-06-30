<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Banding kampus</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav style="background: #45598c" role="navigation">
    <div class="nav-wrapper">
      <a id="logo-container" href="#" class="brand-logo" style="margin-left: 20px;"><i class="material-icons">school</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="users/login.php">Login</a></li>
      </ul>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center" style="color: #45598c"><u>BandingKampus</u></h1>
      <div class="row center">
      <div class="row">
    <form class="col s12" action="users/bandingHasil.php" method="post">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">looks_one</i>
          <input id="icon_prefix" type="text" name="kampus1" class="validate" placeholder="kampus pertama...">
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">looks_two</i>
          <input id="icon_prefix" type="text" name="kampus2" class="validate" placeholder="kampus kedua...">
        </div>
      </div>
      <div class="row center">
        <button type="submit" value="BANDINGKAN" class="btn-large waves-effect waves-light" style="background: #45598c">BANDINGKAN</button>
      </div>
    </form>
  </div>
      </div>
      <br><br>
    </div>
  </div>

  <footer class="page-footer" style="background: #45598c">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Cara Penggunaan</h5>
          <p class="grey-text text-lighten-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Partnership</h5>
          <ul>
            
            <li><a class="white-text" href="#!">Donatur 1</a></li>
            <li><a class="white-text" href="#!">Donatur 2</a></li>
            <li><a class="white-text" href="#!">Donatur 3</a></li>

          </ul>
        </div>
        <div class="col l3 s12 row center">
          <h5 class="white-text">Download</h5>
          <ul class="white-text">
            <hr/>
            <li><h5>BandingKampus Apps</h5></li>
            <br/>
            
            <li><a class="orange-text text-lighten-3" href="#!"><i class="material-icons large">android</i></a>
              or <a class="orange-text text-lighten-3" href="#!"><i class="material-icons large">phone_iphone</i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      &copy; 2018 <a class="orange-text text-lighten-3" href="#">General Public Licence</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="assets/js/materialize.js"></script>
  <script src="assets/js/init.js"></script>

  </body>
</html>
