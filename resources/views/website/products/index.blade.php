@extends('layouts.default')

@section('view-content')

    <h2>Catálogo</h2>

    <a class="btn btn-primary catalog-new-product-btn" href="{{route("www.produtos.createView")}}">NOVO +</a>

    <table class="product-list">
        <thead>
            <tr class="product-list-heading">
                <th>Filme</th>
                <th>Diretor</th>
                <th>Gênero</th>
                <th>Lançamento</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($products as $product)
                <tr id="product-{{$product->id}}" class="product-row">
                    <td class="product-name">{{$product->name}}</td>
                    <td class="product-director">{{$product->director}}</td>
                    <td class="product-genre">{{$product->genre}}</td>
                    <td class="product-year">{{$product->year}}</td>
                    <td class="product-actions">
                        <a href="{{route("www.produtos.view", ["id" => $product->id])}}">view</a>
                        <a href="{{route("www.produtos.editView", ["id" => $product->id])}}">edit</a>
                        <a href="{{route("www.produtos.remove", ["id" => $product->id])}}">delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>

@endsection
