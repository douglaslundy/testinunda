@extends('template')

@section('title', 'Test InundaWeb')

@section('content')

<h1>{{isset($client) ? 'Update current Client' : 'ADD New Client'}}</h1>

    @if($errors->any())
	<div>
		@foreach($errors->all() as $error)
			<div class="alert alert-warning">{{$error}}</div>
		@endforeach
	</div>
    @endif

    <form method="POST" action="{{isset($client) ? '/update/'.$client->id : '/new'}}">
        @csrf
        <div class="mb-3">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" name="firstName" class="form-control" id="firstName" value="{{isset($client) ? $client->firstName : old('firstName')}}">
        </div>

        <div class="mb-3">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" name="lastName" class="form-control" id="lastName" value="{{isset($client) ? $client->lastName : old('lastName')}}">
        </div>

        <button type="submit" class="btn btn-primary  btn-lg col-3">Save</button>  <a href="{{ url('/') }}" class="btn btn-success  btn-lg col-3" style="float: right">Voltar</a>
    </form>


@endsection
