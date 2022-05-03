  {{-- ek page se dusare page me bhejane ke liye estamal karate h
    jaise ki ab master page se call karege ok
    --}}
@extends('master')
@section('content')
    <!DOCTYPE html>
       <html>
         <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
             <style>
                body {font-family: Arial, Helvetica, sans-serif;}
                form {border: 3px solid #f1f1f1;}
                input[type=text], input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
                }

                button {
                background-color: #04AA6D;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
                }

                button:hover {
                opacity: 0.8;
                }

                .cancelbtn {
                width: auto;
                padding: 10px 18px;
                background-color: #f44336;
                }

                .imgcontainer {
                text-align: center;
                margin: 24px 0 12px 0;
                }

                /* img.avatar {
                width: 40%;
                border-radius: 50%;
                } */

                .container {
                padding: 16px;
                }

                span.psw {
                /* float:left; */
                margin-left:60px;
                padding-top:5px;
                }
                /* Change styles for span and cancel button on extra small screens */
     @media screen and (max-width: 300px) {
                   span.psw {
                    display: block;
                    float: none;
                }
                .cancelbtn {
                    width: 100%;
                }
                }
          </style>
     </head>
<body>
<h2 style="text-align:center">Login Page</h2>
<form action="login" method="POST">
  {{-- <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div> --}}
  <div class="container custom-login">
     <div class="row">
       <div class="col-sm-4 col-sm-offset-4">
       <form action="login" method="POST">
        @csrf
         <div class="form-outline mb-4">
            <input type="email" id="form3Example3" name="email" class="form-control form-control-lg"
              placeholder="Enter a valid email address" />
            <label class="form-label" for="form3Example3">Email address</label>
        </div>
        <div class="form-outline mb-3">
            <input type="password" id="form3Example4" name="password"class="form-control form-control-lg"
              placeholder="Enter password" />
            <label class="form-label" for="form3Example4">Password</label>
          </div>
            <button type="submit">Login</button>
            {{-- <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
            <div class="container" style="">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
            --}}
        </form>
       </div>
     </div>
  </div>
 </body>
</html>


{{-- <button class="btn btn-primary">Click Me</button> --}}
@endsection






