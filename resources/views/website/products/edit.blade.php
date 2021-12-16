@extends('layouts.default')

@section('view-content')

    <h2 class="product-edit-title">{{$product->name}}</h2>

    <form class="product-edit-form" method="post">
        @csrf
        <label>
            <h6 class="product-input-label">Filme</h6>
            <input class="product-input product-name-input" type="text" name="name" value="{{$product->name}}">
        </label>

        <label>
            <h6 class="product-input-label">Gênero</h6>
            <input class="product-input  product-genre-input" type="text" name="genre" value="{{$product->genre}}">
        </label>

        <label>
            <h6 class="product-input-label">Diretor</h6>
            <input class="product-input  product-director-input" type="text" name="director" value="{{$product->director}}">
        </label>

        <label>
            <h6 class="product-input-label">Lançamento</h6>
            <input class="product-input  product-year-input" type="text" name="year" value="{{$product->year}}">
        </label>

        <button type="submit">Atualizar</button>
    </form>
@endsection
