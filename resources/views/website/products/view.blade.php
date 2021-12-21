@extends('layouts.default')

@section('view-content')

    <div class="c-product__contentContainer">
        <div class="c-product__headingContainer">
            <h2 class="c-product__propertyName">{{$product->name}}</h2>
            <a class="btn btn-primary c-product__editButton" href="{{route("www.produtos.editView", ["id" => $product->id])}}">Editar</a>
        </div>

        <h5 class="c-product__propertyName">Diretor</h5>
        <p class="c-product__propertyValue">{{$product->director}}</p>

        <h5 class="c-product__propertyName">Gênero</h5>
        <p class="c-product__propertyValue">{{$product->genre}}</p>

        <h5 class="c-product__propertyName">Lançamento</h5>
        <p class="c-product__propertyValue">{{$product->year}}</p>
    </div>

    <div>
        <a class="btn btn-secondary c-product__backButton" href="{{route("www.produtos")}}">Voltar à lista</a>
    </div>
@endsection
