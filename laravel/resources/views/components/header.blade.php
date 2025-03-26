<header>
            <div class="head_left">
                <img src="{{ asset('images/logo.png') }}" alt="logo" title="logo">
            </div>
            <div class="head_right">
            @include('components.button',[
                    'text' => 'Criar Conta',
                    'class' => ''
                    ])
                @include('components.button',[
                    'text' => 'Login',
                    'class' => 'btn_login'
                    ])
            </div>
        </header>