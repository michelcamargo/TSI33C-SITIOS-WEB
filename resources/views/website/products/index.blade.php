@extends('layouts.default')

@section('view-content')

    <h2>Produtos</h2>

    @foreach ($products as $product)
        <a href="{{route("www.produtos.view", ["id" => $product->id])}}"><p>{{$product->name}}</p></a>
    @endforeach

@endsection
