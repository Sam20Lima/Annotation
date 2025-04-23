<header>
            <div class="head_left">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/Logo_of.png') }}" alt="logo" title="logo">
                </a>            
            </div>
            <div class="head_right">
                @auth
                    <div class="menu_profile">
                        <div class="user_picture">{{ substr(auth()->user()->name, 0,1) }}</div>
                        <nav>
                            <div class="user_info">
                                <span>{{ auth()->user()->name }}</span>
                            </div>

                            <ul>
                                <li>
                                    <a href="#">Minhas Anotações</a>
                                </li>
                                <li>
                                    <a href="/sair">Sair</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                @endauth
                @guest
                    <x-button class='' linkto='create-account'>Criar Conta</x-button>
                    <x-button class='btn_login' linkto='login'>Login</x-button>
                @endguest
            </div>
        </header>