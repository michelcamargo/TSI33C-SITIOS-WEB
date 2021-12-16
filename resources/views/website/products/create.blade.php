@extends('layouts.default')

@section('view-content')

    <h2 class="product-create-title">Adicionar ao catálogo</h2>

    <form class="product-create-form" method="post">
        @csrf
        <label>
            <h6 class="product-input-label">Filme</h6>
            <input class="product-input product-name-input" type="text" name="name" value="filme">
        </label>

        <label>
            <h6 class="product-input-label">Gênero</h6>
            <input class="product-input  product-genre-input" type="text" name="genre" value="gênero">
        </label>

        <label>
            <h6 class="product-input-label">Diretor</h6>
            <input class="product-input  product-director-input" type="text" name="director" value="diretor">
        </label>

        <label>
            <h6 class="product-input-label">Lançamento</h6>
            <input class="product-input  product-year-input" type="text" name="year" value="ano">
        </label>

        <button type="submit">Criar</button>
    </form>
@endsection
