<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        
        <title>Προτιμήσεις Υποψήφιων ΑΝαπληρωτών Ειδικής Αγωγής</title>

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
                position: relative;
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
                /*position: relative;*/
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                width: 80%;
                margin:auto;

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
            a:link {
                font-family: "Times New Roman", Times, serif;
                /*color:blue;*/
                font-size:15px;
                text-decoration: none;
            }
                       
            .well{
                left:50;
                right:50;
            }
            .wellcolor{
                background-color: #ffcccc;
                /*margin-top:10;*/
                /*margin:100;*/
                margin-left: 100;
                left:100;
                width:auto;
                text-align: center;
                /*position:absolute;*/
               
            }
            .jumbotron{
                background-color: #ffeecc;
                padding:0;
            }
            .floating-box {
                float: left;
                width: 150px;
                height: 75px;
                margin: 10px;
                /*border: 3px solid #73AD21;  */
            }

            .footer{
                  position: relative;
                  /*right: 150;*/
                  /*top:10;*/
                  bottom: 0;
                  left: 150;
                  /*padding: 1rem; */
                  padding: auto;
                  text-align: center;
                  /*width: 200px;*/
                  /*width:50%;*/
                  
            }
           
        </style>
    </head>
    <body>
    
         
    <div class='content'>
            @if(session('success'))
                <div class='alert alert-success'>{{session('success')}}</div>
            @elseif(session('failure'))
                <div class='alert alert-danger w3-panel w3-red'>
                    {{session('failure')}}
                    <br>
                    {{session('failure2')}}
                </div>
            @elseif(session('editing'))
                     <div class='alert alert-warning'>{{session('editing')}}
                     <br><b>ΠΡΟΣΕΞΤΕ ΩΣΤΕ Η ΚΆΘΕ ΕΠΙΛΟΓΗ ΣΑΣ ΝΑ ΕΜΦΑΝΙΖΕΤΑΙ <u>ΜΟΝΟ 1 ΦΟΡΑ</u></b>
                     </div>
            @endif
        
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
        
    </div>
       @include('footer')
    </body>
     
    

<!-- Script section -->
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>  

</html>
