@extends('layouts.mainhouse')

@section('page-content')
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 193px;">
            <div class="col-md-12">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div>
                    <table class="table table-success">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Property Image</th>
                                <th scope="col">Property Name</th>
                                <th scope="col">Property Status</th>
                                <th scope="col">Property Price</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($properties as $property)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>
                                        <img src="{{ $property->image() }}" style="width: 100px;"
                                            alt="{{ $property->PropertyName }}">
                                    </td>
                                    <td>
                                        <a href="{{ route('property.show', $property->id) }}">
                                            {{ $property->PropertyName }}
                                        </a>
                                    </td>
                                    <td>{{ $property->status }}</td>
                                    <td>{{ $property->price }}</td>
                                    <td>
                                        <form action="{{ route('owner.destroy', $property->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
