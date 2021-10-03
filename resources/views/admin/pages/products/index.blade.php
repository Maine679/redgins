@extends('layouts.app')

@section('content')
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <tn scope="col">ID</tn>
                <tn scope="col">name</tn>
                <tn scope="col">price</tn>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $item)
            <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['name']}}</td>
                <td>{{$item['price']}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
