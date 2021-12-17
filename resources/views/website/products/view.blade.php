@extends('layouts.default')

@section('view-content')

    <div class="product-view-content">
        <div class="product-view-heading">
            <h2 class="product-view-title">{{$product->name}}</h2>
            <a class="btn btn-primary product-view-edit-btn" href="{{route("www.produtos.editView", ["id" => $product->id])}}">Editar</a>
        </div>

        <h5>Diretor</h5>
        <p>{{$product->director}}</p>

        <h5>Gênero</h5>
        <p>{{$product->genre}}</p>

        <h5>Lançamento</h5>
        <p>{{$product->year}}</p>
    </div>

    <div>
        <a class="btn btn-secondary btn-back-to-list" href="{{route("www.produtos")}}">Voltar à lista</a>
    </div>
@endsection
