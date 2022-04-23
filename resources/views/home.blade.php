<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" type="text/css">
    <link type="image/x-icon" rel="shortcut icon" href="{{asset('images/icons/favicon.png')}}">
    <title>Coza Store - Home</title>
</head>
<body>

{{--top-bar--}}
<div class="home-top-bar">
    @include('head.top-bar')
</div>

{{--nav-bar--}}
<div class="home-nav-bar">
    @include('head.nav-bar')
</div>

{{--content--}}
<div class="container">

{{--categories--}}
    <div class="home-c">
        <a href="#">
            <div class="home-c-women">
                <div class="bg"></div>
                <div class="home-c-content">
                    <h1>Women</h1>
                    <p>Spring 2018</p>
                    <h2>SHOP NOW</h2>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="home-c-men">
                <div class="bg"></div>
                <div class="home-c-content">
                    <h1>Men</h1>
                    <p>Spring 2018</p>
                    <h2>SHOP NOW</h2>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="home-c-accessories">
                <div class="bg"></div>
                <div class="home-c-content">
                    <h1>Accessories</h1>
                    <p>New Trend</p>
                    <h2>SHOP NOW</h2>
                </div>
            </div>
        </a>
    </div>
</div>

{{--footer--}}
@include('footer.footer')
</body>
</html>
