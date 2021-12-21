@extends('layouts.default')

@section('view-content')

    <h2 class="c-productEdit__heading">Adicionar ao catálogo</h2>

    <form class="c-productCreate__form" method="post">
        @csrf
        <label class="c-productCreate__formItem c-productCreate__formItemName">
            <h6 class="c-productCreate__label c-productCreate__labelName">Filme</h6>
            <input class="c-productCreate__input c-productCreate__inputName" type="text" name="name" value="{{$product->name}}">
        </label>

        <label class="c-productCreate__formItem c-productCreate__formItemGenre">
            <h6 class="c-productCreate__label c-productCreate__labelGenre">Gênero</h6>
            <input class="c-productCreate__input c-productCreate__inputGenre" type="text" name="genre" value="{{$product->genre}}">
        </label>

        <label class="c-productCreate__formItem c-productCreate__formItemDirector">
            <h6 class="c-productCreate__label c-productCreate__labelDirector">Diretor</h6>
            <input class="c-productCreate__input c-productCreate__inputDirector" type="text" name="director" value="{{$product->director}}">
        </label>

        <label class="c-productCreate__formItem c-productCreate__formItemRelease">
            <h6 class="c-productCreate__label c-productCreate__labelRelease">Lançamento</h6>
            <input class="c-productCreate__input c-productCreate__inputRelease" type="text" name="year" value="{{$product->year}}">
        </label>

        <button class="btn btn-primary c-productCreate__submitButton" type="submit">Criar</button>
    </form>
@endsection
