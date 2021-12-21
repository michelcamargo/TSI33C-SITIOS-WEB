@extends('layouts.default')

@section('view-content')

    <h2 class="catalog__heading">Catálogo</h2>

    <a class="btn btn-primary catalog__newProductButton" href="{{route("www.produtos.createView")}}">NOVO +</a>

    <table class="catalog__productTable">
        <thead class="catalog__productTableHead">
            <tr class="catalog__productTableHeader">
                <th class="catalog__productTableHeading">Filme</th>
                <th class="catalog__productTableHeading">Diretor</th>
                <th class="catalog__productTableHeading">Gênero</th>
                <th class="catalog__productTableHeading">Lançamento</th>
                <th class="catalog__productTableHeading">Ações</th>
            </tr>
        </thead>

        <tbody class="catalog__productTableBody">
            @foreach ($products as $product)
                <tr id="product-{{$product->id}}" class="catalog__productTableItem">
                    <td class="catalog__productTableValue catalog__productName">{{$product->name}}</td>
                    <td class="catalog__productTableValue catalog__productDirector">{{$product->director}}</td>
                    <td class="catalog__productTableValue catalog__productGenre">{{$product->genre}}</td>
                    <td class="catalog__productTableValue catalog__productYear">{{$product->year}}</td>
                    <td class="catalog__productTableValue catalog__productActions">
                        <a class="catalog__productTableAction catalog__productView" href="{{route("www.produtos.view", ["id" => $product->id])}}">view</a>
                        <a class="catalog__productTableAction catalog__productEdit" href="{{route("www.produtos.editView", ["id" => $product->id])}}">edit</a>
                        <a class="catalog__productTableAction catalog__productRemove" href="{{route("www.produtos.remove", ["id" => $product->id])}}">delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>

@endsection
