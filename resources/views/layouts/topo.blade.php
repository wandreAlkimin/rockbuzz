<nav class="white" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="@if(auth()->check()){{"/adm/posts"}} @else {{"/"}} @endif" class="brand-logo styleLogo" style="font-size: 50px;">Rockbuzz</a>
        <ul class="right hide-on-med-and-down ">
            @include('layouts.menuTopo')
        </ul>

        {{--MENU MOBILE--}}
        <ul id="nav-mobile" class="sidenav">
           @include('layouts.menuTopo')
           @include('layouts.painelLateral')
        </ul>

        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>


