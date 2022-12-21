<header>
    <h1 class="text-center text-uppercase mt-3">dc comics</h1>
    <nav class="nav justify-content-center text-uppercase ">
        <a class="m-3 {{Route::currentRouteName() === 'home' ? 'active' : ''}}" href="/" aria-currentRoute="page">home</a>
        <a class="m-3 {{Route::currentRouteName() === 'about' ? 'active' : ''}}" href="{{route('about')}}">about</a>
        <a class="m-3 {{Route::currentRouteName() === 'comics.index' ? 'active' : ''}}" href="{{route('comics.index')}}">comics</a>
    </nav>
</header>