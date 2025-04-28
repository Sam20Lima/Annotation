@extends('layouts.app')

@section('content')
    <section class="form_pg">
        <div class="form_left">
            <h1 class="title">Fazer Login!</h1>
            <p class="subtitle">Acesse nossa platarforma para gerenciar sua rotina semanal</p>
        </div>
        <div class="form_right">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="text" name="email" placeholder="Seu e-mail" value="{{ old('email') }}">
                <input type="password" name="password" placeholder="Sua senha">
                <span><a href="{{ route('forgot-password') }}">Esqueceu sua senha?</a></span>
                <x-button class='btn_fullwidth' linkto='auth'>
                    Entrar
                    <x-simpleline-login />
                </x-button>
                @if (session('status'))
                    <span class="txt_error">{{ session('status') }}</span>
                @endif
            </form>
        </div>
    </section>
@endsection