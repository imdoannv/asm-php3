
@extends('layout')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('products.update', $model)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3 mt-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control"
                   id="name" value="{{$model ->name}}"
                   placeholder="Enter name"
                   name="name">
        </div>

        <div class="mb-3 mt-3">
            <label for="describe">Describe:</label>
            <textarea class="form-control" rows="5"
                      id="describe" name="describe">{{$model->describe}}</textarea>
        </div>
        <div class="mb-3 mt-3">
            <label for="price" class="form-label">Price:</label>
            <input type="number" class="form-control"
                   id="price" value="{{$model ->price}}"
                   placeholder="Enter price"
                   name="price">
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
