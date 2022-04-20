<div class="nav-bar">
    <div class="nav-bar-grid">
        <div class="logo"><a href="/"><img alt="img" src="{{ URL('../../images/icons/logo-01.png') }}"></a></div>
        <div></div>
        <div><p class="p-home {{ (request()->is('/')) ? 'active' : '' }}"><a href="/">Home</a></p></div>
        <div><p class="p-shop {{ (request()->is('shop')) ? 'active' : '' }}"><a href="/shop">Shop</a></p></div>
        <div><p class="p-features {{ (request()->is('features')) ? 'active' : '' }}"><a href="/features">Features</a></p></div>
        <div><p class="p-blog {{ (request()->is('blog')) ? 'active' : '' }}"><a href="/blog">Blog</a></p></div>
        <div><p class="p-about {{ (request()->is('about')) ? 'active' : '' }}"><a href="/about">About</a></p></div>
        <div><p class="p-contact {{ (request()->is('contact')) ? 'active' : '' }}"><a href="/contact">Contact</a></p></div>
        <div></div>
        <div class="search"><a href="#"><div class="s-img"></div></a></div>
        <div class="shopping-cart"><a href="#"><div class="s-c-img"></div></a></div>
        <div class="heart"><a href="#"><div class="h-img"></div></a></div>
    </div>
</div>
