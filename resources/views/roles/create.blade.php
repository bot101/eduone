@extends('master')

@section('title', trans('app.create_new_role'))

@section('content')
<header>
	<h1>{!! trans('app.create_new_role') !!}</h1>
</header>

{!! Form::open(['url' => 'roles']) !!}

	@include ('roles/_partials/form')

	<button class="btn btn-primary">{!! trans('app.save_changes') !!}</button>

{!! Form::close() !!}
@endsection