@extends('layouts.default')

@section('view-content')

    <h2 class="c-productEdit__heading">{{$product->name}}</h2>

    <form class="c-productEdit__form" method="post">
        @csrf
        <label class="c-productEdit__formItem c-productEdit__formItemName">
            <h6 class="c-productEdit__label c-productEdit__labelName">Filme</h6>
            <input class="c-productEdit__input c-productEdit__inputName" type="text" name="name" value="{{$product->name}}">
        </label>

        <label class="c-productEdit__formItem c-productEdit__formItemGenre">
            <h6 class="c-productEdit__label c-productEdit__labelGenre">Gênero</h6>
            <input class="c-productEdit__input c-productEdit__inputGenre" type="text" name="genre" value="{{$product->genre}}">
        </label>

        <label class="c-productEdit__formItem c-productEdit__formItemDirector">
            <h6 class="c-productEdit__label c-productEdit__labelDirector">Diretor</h6>
            <input class="c-productEdit__input c-productEdit__inputDirector" type="text" name="director" value="{{$product->director}}">
        </label>

        <label class="c-productEdit__formItem c-productEdit__formItemRelease">
            <h6 class="c-productEdit__label c-productEdit__labelRelease">Lançamento</h6>
            <input class="c-productEdit__input c-productEdit__inputRelease" type="text" name="year" value="{{$product->year}}">
        </label>

        <button class="btn btn-primary c-productEdit__submitButton" type="submit">Criar</button>
    </form>
@endsection
