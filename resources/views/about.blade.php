<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" type="text/css">
    <title>Coza Store - About</title>
</head>
<body>

{{--top-bar--}}
<div class="about-top-bar">
    @include('head.top-bar')
</div>

{{--head-bar--}}
<div class="about-nav-bar">
    @include('head.nav-bar')
</div>

{{--content--}}
    <div class="home">
        <h1>About</h1>
    </div>

{{--footer--}}
@include('footer.footer')
</body>
</html>
