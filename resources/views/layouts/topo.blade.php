<nav class="white" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="@if(auth()->check()){{"/adm"}} @else {{"/"}} @endif" class="brand-logo styleLogo" style="font-size: 50px;">Rockbuzz</a>
        <ul class="right hide-on-med-and-down ">
            @include('layouts.menuTopo')
        </ul>

        {{--MENU MOBILE--}}
        {{--<ul id="nav-mobile" class="sidenav">--}}
           {{--@include('app.layouts.menuUser')--}}
           {{--@include('app.layouts.painelLateral')--}}
            {{--<li class="nav-item col s12">--}}
            {{--<a class="nav-link" href="#">--}}
            {{--Menu Bimileeeeeee--}}
            {{--</a>--}}
            {{--</li>--}}
        {{--</ul>--}}

        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>


