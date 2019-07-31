
    <nav class="navbar navbar-expand-sm bg-light header-navbar">
        <ul class="navbar-nav">



            {{--@guest--}}
                {{--@if (Route::has('register'))--}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/register')}}">ثبت نام</a>
                    </li>
                {{--@endif--}}
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/login')}}">ورود</a>
                </li>
            {{--@else--}}
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/cpanel')}}">کنترل پنل</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            {{--@endguest--}}
        </ul>
    </nav>

