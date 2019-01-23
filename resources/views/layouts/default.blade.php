<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title', 'Lara Weibo') - By Charlie</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <style media="screen">
    /* Make the image fully responsive */
    .carousel-inner img {
      width: 100%;
      height: 100%;
    }
  </style>
  </head>
  <body>
    @include('layouts._header')
    <div class="container">
        <div class="offset-md-1 col-md-10">
        @yield('content')


        <!-- footer -->
        @include('layouts._footer')
      </div>
    </div>
  </div>
  </body>
  <script type="text/javascript">

  </script>
</html>
