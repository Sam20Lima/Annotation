@extends('layouts.app')

@section('content')
    <section class="form_pg">
        <div class="form_left">
            <h1 class="title">Crie sua conta!</h1>
            <p class="subtitle">Criando sua conta você vai poder utilizar todos os nossos recursos da plataforma de forma totalmente gratuita</p>
        </div>
        <div class="form_right">
            <form method="POST" action="{{ route('insert-account') }}">
                @csrf
                <input type="text" name="name" placeholder="Seu nome">
                <input type="email" name="email" placeholder="Seu e-mail">
                <input type="password" name="password" placeholder="Sua senha">
                <span>Ja tem uma conta? <a href="{{ route('login') }}">Entrar</a></span>
                <x-button class='btn_full' linkto='insert-account'>Criar nova conta</x-button>
            </form>
        </div>
    </section>
@endsection