@extends('layouts.app')

@section('content')

<div class="page-header">
	<h1>Criar Produto</h1>
	<a href="/admin/products" class="btn btn-default">Voltar</a>
</div>

{!! Form::model($product,["url" => "/admin/products/{$product->id}","method"=>"PUT"]) !!}
   
	@include('products/_formFields')

{!! Form::close() !!}


@endsection