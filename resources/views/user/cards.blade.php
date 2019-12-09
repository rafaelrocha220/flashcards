@extends('user.layout.index')

@section('titulo', 'Flashcards')

@section('contents')

    @if($userLevel == 1)
        @include('user.template.cards.card-translated')
    @elseif($userLevel == 2)
        @include('user.template.cards.card-response-context')
    @elseif($userLevel == 3)
        @include('user.template.cards.card-response-input')
    @endif

@endsection('contents')