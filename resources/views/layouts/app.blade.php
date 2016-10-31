<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SIMS</title>

    

    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Scripts -->
    <script>
        window.SIMS = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    
        <nav>
          <div class="container">
            <div class="nav-wrapper">
              <ul class="left hide-on-med-and-down">
                <li class="active"><a href="/beranda">Beranda</a></li>
                <li><a href="#">E-Learning</a></li>
                <li><a href="#">Pelajaran</a></li>
                <li><a href="#">Forum</a></li>
              </ul>
               <ul class="right hide-on-med-and-down">
                 <li ><a href="#" class="waves-effect waves-light btn">Forum</a></li>
              </ul>
            </div>
          </div>
        </nav>
    
        <!-- Page Content goes here -->
            @yield('content')
    
    @yield('footer')
    <!-- Scripts -->
     <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
     <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
