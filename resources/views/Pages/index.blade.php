@extends('layouts.app')

@section('title', 'Sinalizar')

@section('content')

    {{-- Seções separadas --}}
    @include('components.Hero')
    @include('components.sobre-nos')
    @include('components.Servico')
    @include('components.videos')
    @include('components.contato')

@endsection
