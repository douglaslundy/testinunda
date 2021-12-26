@extends('template')

@section('title', 'Test InundaWeb')

@section('content')

    <h2>Client registration <a href="{{ url('/new') }}" class="btn btn-primary">New Client</a></h2>

    <p />

    @if (session('msg'))
        <div class="alert alert-success">
            {{ session('msg') }}
        </div>
    @endif

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <th scope="row">{{ $client->id }}</th>
                    <td>{{ $client->firstName }}</td>
                    <td>{{ $client->lastName }}</td>
                    <td>
                        <a href="{{ url('/edit/'.$client->id) }}" class="btn btn-primary col-3">Edit</a>
                        <a href="{{ url('/delete/'.$client->id) }}" class="btn btn-danger col-3">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>



@endsection
