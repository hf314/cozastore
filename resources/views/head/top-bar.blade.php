<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" type="text/css">
    <title>Document</title>
</head>
<body>

<div class="top-bar">
    <div class="grid">
        <div class="grid-one">Free shipping for standard order over $100</div>
        <a href="#"><div>Help & FAQs</div></a>
        <a href="#"><div>My Account</div></a>
        <a href="#"><div>EN</div></a>
        <a href="#"><div>USD</div></a>
    </div>
</div>

@yield('main-content')

</body>
</html>
