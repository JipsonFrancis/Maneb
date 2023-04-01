<!doctype html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
        <!-- <link rel="stylesheet" href="/css/nav-main.css"> -->

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">

        <!-- <link rel="stylesheet" href="https://classless.de/classless.css"> -->

        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <!-- Main CSS -->
        @section('addCss')

        @show
        <title>App | @yield('title', 'Home Page')</title>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
        </head>


    @yield('content')
    
    

    @section('footerScripts')
      
      <!-- <script src="{{asset('boot/js/crud.js')}}"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    @show
</html>