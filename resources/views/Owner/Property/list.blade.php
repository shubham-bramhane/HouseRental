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
                                <th scope="col">Property Name</th>
                                <th scope="col">Tenant Name</th>
                                <th scope="col">Property Price</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lists as $list)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>
                                        {{ $list->property->PropertyName }}
                                    </td>
                                    <td>
                                        {{ $list->user->name }}
                                    </td>
                                    <td>{{ $list->property->price }}/-</td>
                                    <td>
                                        {{-- <form action="{{ route('owner.destroy', $property->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger">Delete</button>
                                        </form> --}}
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
