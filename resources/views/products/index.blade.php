@extends('layouts.app')
@section('content')

    <table class="table table-hover">
        <thead>
            <th>Name</th>
            <th>Price</th>
            <th colspan=3 class="text-center">Action</th>
        </thead>
        <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>
                            <a href="/products/{{$product->id}}">Show</a>
                        </td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                @endforeach
        </tbody>
    
    </table>
       
@endsection