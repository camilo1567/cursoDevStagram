@extends('layouts.app')

@section('tittle')
    Pagina Principal
@endsection

@section('content')
    
    {{-- <x-listar-post>

        <x-slot:titulo>
            contenido dentro de un slot que se llama titulo creandolo con las llaves {}
        </x-slot:titulo>

        Contenido dentro de la variable $slot en el componente
        
    </x-listar-post>  --}}

    <x-listar-post :posts="$posts" />
        



@endsection