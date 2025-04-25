@extends('layouts.app')

@section('content')
    <section class="dash_pg">
        <div class="deash_header">
            <x-button class='btn_create' linkto='create-account'>
                CRIAR ANOTAÇÃO
                <x-fluentui-notepad-edit-16-o />
            </x-button>
        </div>
    </section>
    <x-modal>
        <div class="modal_header">
            <h1>Criar nova anotação</h1>
            <x-vaadin-close />
        </div>
        <div class="modal_content">
            <form method="POST" action="{{ route('insert-account') }}">
                @csrf
                @error('title')
                    <p class="field_error">{{ $message }}</p>
                @enderror
                <input class ="full_width" type="text" name="title" placeholder="Titulo" value="{{ old('title') }}" class="@error('title') field_error @enderror">
               <x-button class='btn_full' linkto='insert-account'>Criar nova anitação</x-button>
            </form>
        </div>
    </x-modal>
@endsection