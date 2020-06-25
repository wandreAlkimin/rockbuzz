@guest
    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">Entrar</a>
    </li>
    @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Registre-se</a>
        </li>
    @endif
@else
    <div class="row" style="margin-bottom: 0px">
        <li class="nav-item col s8">
            <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>
        </li>


        <li class="nav-item  col s4" >
            <a class="nav-link" href="{{ route('logout') }}" style="padding: 0 30px 0 30px"
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
               Sair
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>

    </div>
@endguest


