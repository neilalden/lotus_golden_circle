<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css"> 
        

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
</head>
<body>
    <style>
        html, body{
            font-family: AdobeJensonSmallCaps;
            font-style: normal;
            font-size: 20px;
            color: gold;
            background: #171a1c;
        }

        </style>
        @include('inc.navbar')
        @include('inc.messages')
        @yield('content')
        <footer class="d-flex justify-content-center mt-4" style=" background:#0b0d0e; height:4em; width:100%;">
                <a href="https://www.facebook.com/LotusGoldenCircle" target="_blank" class="my-3 mr-2"><i class="fab fa-facebook-square text-warning"></i></a><p class="my-3 mr-2 text-secondary">Lotus Golden Circle &copy; 2019</p>
        </footer>
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
        function readURL(input) {

if (input.files && input.files[0]) {
  var reader = new FileReader();

  reader.onload = function(e) {
    $('#blah').attr('src', e.target.result);
  }

  reader.readAsDataURL(input.files[0]);
}
}

$("#imgInp").change(function() {
readURL(this);
});</script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
</body>
</html>
