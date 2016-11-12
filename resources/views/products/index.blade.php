@extends('layouts.app')



@section('content')

<div class="page-header clearfix">
    <h1>Products</h1>
    <a href="/admin/products/create" class ="btn btn-primary pull-right">Add</a>
    
  

</div>
    <table class='table'>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Categoria</th>
                 <th>Opção</th>
            </tr>
            
        </thead>
        @foreach($products as $product)
         <tbody>
            <tr>
                <td>{{$product->name}}</td>
                <td>{{implode(', ',$product->categoriesNames())}}</td>
                <td>
                    <div >
                        <a href="/admin/products/{{$product->id}}/edit" class="btn btn-default btn-sm">Edit</a>

                        {!! Form::Open(["url"=>"/admin/products/{$product->id}", "method"=>"DELETE", "class"=>"pull-left"]) !!}
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        {!! Form::Close() !!}
                    </div>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
@endsection