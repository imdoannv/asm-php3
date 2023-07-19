@extends('layout')

@section('content')
    <h1 class="mt-5"> <a href="{{route('products.create')}}" class="btn btn-primary mt-5">Thêm mới danh mục</a></h1>
    <table id="list" class="table table-striped" style="width:100%">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Describe</th>
            <th>Price</th>
            <th>Create date</th>
            <th>End date</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($data as $item)
            <tr>
                <td>{{$item ->id}}</td>
                <td>{{$item ->name}}</td>
                <td>{{$item ->describe}}</td>
                <td>{{$item ->price}}</td>
                <td>{{$item ->created_at}}</td>
                <td>{{$item ->update_at}}</td>
                <td>
                    <a href="{{route('products.edit', $item)}}" class="btn btn-primary">Update</a>
                    <button class="btn btn-danger"
                            onclick="document.getElementById('item-{{$item -> id}}').submit()">Delete</button>
                    <form action="{{route('products.destroy', $item)}}"
                          id="item-{{$item -> id}}"
                          method="post"
                    >
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
