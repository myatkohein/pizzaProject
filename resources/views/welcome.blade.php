<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pizza</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>
        <div class="flex-center">
            @if (Route::has('login'))
                <div class="top-right">
                    <!-- @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else -->
                        <!-- <a href="{{ route('login') }}">Login</a> -->

                        @if (Route::has('register'))
                            <a href="{{ route('register.admin') }}">Admin Register</a><br>
                            <a href="{{ route('register.customer') }}">Customer Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div> 
            
                <!-- <div class="container">
                        <div class="row">
                            <div class= "col">
                            <!-- @auth
                            @if(Route::has('register'))
                            
                            <a href="{{ route('register.admin') }}">Admin Register</a>
                        
                            <a href="{{ route('register.customer') }}">Customer Register</a>
                            @endif
                            @endauth -->
                
            
                               <!-- <a href="/admin" ><img src="images/admin.jpg"  style = "width:200px; height:180px; float:right;"></a>
                            </div>
                        
                        
                            <div class = "col">
                                 <a href="/customer"><img src = "images/customer.png" style = "width:200px; height:180px;"></a>
                            </div>
                        </div>
                </div> --> 
            <section class = "section-1">
                <div class="move-admin">
                <a href="/admin" ><img class = "rounded" src="images/black_admin.png" style = "width:200px; height:200px;"></a>
                </div>
            </section>
            <section class= "section-2">
                <div class = "move-customer">
                <a href="/customer" ><img class = "rounded" src="images/customer_confirm.png" style="width:200px; height:200px;"></a>
                </div>
            </section>
                

               

    </body>
</html>
