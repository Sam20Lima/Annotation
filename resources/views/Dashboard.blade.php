@extends('layouts.app')

@section('content')
    <section class="dash_pg">
        <div class="deash_header">
            <x-button class='btn_create' linkto='#' id="btn-create-annotation">
                CRIAR ANOTAÇÃO
                <x-fluentui-notepad-edit-16-o/>
            </x-button>
        </div>
        @foreach ($tasks as $task)
            <p>{{ $task->title }}</p>
        @endforeach
    </section>
    <x-modal>
        <div class="modal_header">
            <h1>Criar nova anotação</h1>
            <x-vaadin-close id="close-modal"/>
        </div>
        <div class="modal_content">
            <form method="POST" action="{{ route('store-task') }}">
                @csrf
                @error('title')
                    <p class="field_error">{{ $message }}</p>
                @enderror
                <input class ="full_width" type="text" name="title" placeholder="Titulo" value="{{ old('title') }}" class="@error('title') field_error @enderror">
               <x-button class='btn_fullwidth' linkto='store-task'>Criar nova anitação</x-button>
            </form>
        </div>
    </x-modal>
@endsection

@push('scripts')
    <script>
        const btnCreateAnnotation = document.getElementById('btn-create-annotation')
        const boxModal = document.getElementById('box-modal')
        const closeModal = document.getElementById('close-modal')

        btnCreateAnnotation.addEventListener('click',(event) => {
            event.preventDefault();
            boxModal.classList.add('opened');
        })
        closeModal.addEventListener('click',(event) => {
            event.preventDefault();
            boxModal.classList.remove('opened');
        })
    </script>
@endpush
