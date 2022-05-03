<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled  -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>E-Commrece</title>
</head>
   <style>
    .custom-login{
        height:400px;
        padding-top:150px;
    }
   </style>
        <body>
         <!-- ek page ko dusare page me bhejane ke liye laravel me use kiya jata h  ok raiper kahate hai  -->
             {{View::make('header')}}
              @yield('content')
              {{View::make('footer')}}
        </body>
            {{-- <script>
               $(Document).ready(function()
               {
                   $("button").click(function(){
                     alert("all set")
                   });
               });
             </script> --}}
  </html>






