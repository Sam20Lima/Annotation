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
                <input type="email" name="email" placeholder="Seu e-mail">
                <input type="password" name="password" placeholder="Sua senha">
                <span><a href="{{ route('forgot-password') }}">Esqueceu sua senha?</a></span>
                <x-button class='btn_full' linkto='auth'>
                    Entrar
                    <x-simpleline-login />
                </x-button>
            </form>
        </div>
    </section>
@endsection