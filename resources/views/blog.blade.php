<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" type="text/css">
    <title>Coza Store - Blog</title>
</head>
<body>

{{--top-bar--}}
<div class="blog-top-bar">
    @include('head.top-bar')
</div>

{{--nav-bar--}}
<div class="blog-nav-bar">
    @include('head.nav-bar')
</div>

{{--content--}}
    <div class="home">
        <h1>Blog</h1>
    </div>

{{--footer--}}
@include('footer.footer')
</body>
</html>
