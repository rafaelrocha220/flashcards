@extends('user.layout.index')

@section('titulo', 'Flashcards')

@section('contents')

    @if($userLevel == 1)
        @include('user.template.cards.card-response-text')
    @elseif($userLevel == 2)
        @include('user.template.cards.card-examples')
    @elseif($userLevel == 3)
        @include('user.template.cards.card-response-input')
    @endif

@endsection('contents')