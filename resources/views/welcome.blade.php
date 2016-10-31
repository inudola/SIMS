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
                 <!-- Import materialize.css -->
                <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
                 <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>
                 <!-- Let browser know website is optimized for mobile --> 
                 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                 <!-- Scripts -->        
        <script>
        window.SIMS = <?php echo json_encode([
        'csrfToken' => csrf_token(),
        ]); ?>
        </script>
        <style>
        *{
            margin: 0;
            padding: 0;
        }
            body{
                background-image: url(img/login-img.jpeg);
                -webkit-background-size: cover;
                background-size: cover;
            }
            section{

                position: absolute;
                margin: 0 auto;
                padding: 0 auto;
                background-color: rgba(000,000,255,.6);
                width: 100%;
                height: 100%;
                display: flex;
                flex-wrap: wrap;    
                align-items: center;
                justify-content: center;

            }
            #login-background{
                position: absolute;
                height: 80%;
                width: 80%;
                display: flex;
                flex-wrap: wrap;    
                align-items: center;
                justify-content: center;
                background-color: rgba(255,255,255,.9);
                /*
                position: absolute;
                margin: 0 ;
                 */
            }
            .login{
                margin: auto;
                top: -20px;
                text-align: center;
                
            }
            h2, p{
                color:#2196f3;
            }
            form{
                margin-top: 80px;
            }

        </style>
    </head>
    <body>
        
        <section class="center">
            <div id="login-background">
            <div class="col s6">
                <h2>Sign In</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo praesentium possimus odio, sunt ea </p>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                  <div class="input-field col s12">
                      <input id="email" type="email"  name="email" required>
                      <label for="email">password</label>
                    </div>
                  <div class="input-field col s12">
                      <input id="password" type="password"  name="password" required>
                      <label for="password">password</label>
                    </div>

                
                
                
                <div class="center_element">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
            </div>
            </div>
        </section>
        <!-- Scripts -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>