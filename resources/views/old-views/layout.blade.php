<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            th{
                text-align:center;
            }
            .form-control{
                width:40%;
            }
            .footer{
                 position: absolute;
                  right: 50;
                  bottom: 0;
                  left: 50;
                  padding: 1rem;
                  background-color: #e6fff9; /*#efefef*/
                  text-align: center;
            }
            .well{
                left:50;
                right:50;

            }
            
        </style>
    </head>
    <body>
         <div class='content'>
            @if(session('success'))
                <div class='alert alert-success'>{{session('success')}}</div>
            @elseif(session('failure'))
                <div class='alert alert-danger'>
                    {{session('failure')}}
                    <br>
                    {{session('failure2')}}
                </div>
            @elseif(session('editing'))
                     <div class='alert alert-warning'>{{session('editing')}}
                     <br><b>ΠΡΟΣΕΞΤΕ ΩΣΤΕ Η ΚΆΘΕ ΕΠΙΛΟΓΗ ΣΑΣ ΝΑ ΕΜΦΑΝΙΖΕΤΑΙ <u>ΜΟΝΟ 1 ΦΟΡΑ</u></b>
                     </div>
            @endif
            </div>
        <div class="flex-center position-ref ">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
           <div>
            @yield('content')
            </div>
        </div>
    </body>
<!-- <footer class='footer'> -->
    <div class=' footer panel-footer' >ΠΔΕ ΑΤΤΙΚΗΣ </div>
<!-- </footer>     -->
</html>
